<?php

namespace App\Http\Controllers\Manage;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Client\StoreRequest;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataClient = Client::paginate(5);
        return view('manage.client.index', ['data' => $dataClient]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('manage.client.create');
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
             Client::create([
                 'name'     => $input['name'],
                 'url'      => $input['url'],
                 'uplink'   => Auth::user()->name,
             ]);

             DB::commit();

             return redirect()->route('client.manage.index')->with('success', 'Successfully add client');
        } catch (\Throwable $th) {
            DB::rollback();

            return redirect()->back()->with('failed', 'Failed add client because '.$th->getMessage().'');
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
            $client = Client::where('id', $id)->first();
            $client->delete();

            DB::commit();

            return redirect()->back()->with('success', 'Successfully deleted client');
        } catch (\Throwable $th) {
            DB::rollback();

            return redirect()->back()->with('failed', 'Failed delete client because '.$th->getMessage().'');
        }
    }
}
