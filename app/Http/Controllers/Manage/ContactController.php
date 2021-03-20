<?php

namespace App\Http\Controllers\Manage;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Contact\StoreRequest;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataContact = Contact::paginate(5);
        return view('manage.contact.index', ['data' => $dataContact]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('manage.contact.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $input = $request->validated();

        DB::beginTransaction();
        try {
            Contact::create([
                'office_address'  => $input['office_address'],
                'office_phone'   => $input['office_phone'],
                'office_email'   => $input['office_email'],
                'uplink'         => Auth::user()->name,
            ]);

            DB::commit();

            return redirect()->route('contact.manage.index')->with('success', 'Successfully add contact');
        } catch (\Throwable $th) {
            DB::rollback();

            return redirect()->back()->with('failed', 'Failed add contact because '.$th->getMessage().'');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::beginTransaction();
        try {
            $contact = Contact::where('id', $id)->first();
            $contact->delete();

            DB::commit();

            return redirect()->back()->with('success', 'Successfully deleted contact');
        } catch (\Throwable $th) {
            DB::rollback();

            return redirect()->back()->with('failed', 'Failed delete contact because '.$th->getMessage().'');
        }
    }
}
