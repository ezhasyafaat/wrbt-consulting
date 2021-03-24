<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\Controller;
use App\Http\Requests\Ahli\StoreRequest;
use App\Models\Ahli;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class AhliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataAhli = Ahli::paginate(5);
        return view('manage.ahli.index', ['data' => $dataAhli]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('manage.ahli.create');
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
            if($request->file('image')) {
                $images = Storage::putFile('public/ahli', $request->file('image'));
                $image  = str_replace('public/', 'storage/', $images);
            } else {
                $image = null;
            }

            Ahli::create([
                'name'          => $input['name'],
                'position'      => $input['position'],
                'about'         => $input['about'],
                'short_desc'    => $input['short_desc'],
                'uplink'        => Auth::user()->name,
                'image'         => $image
            ]);

            DB::commit();

            return redirect()->route('ahli.manage.index')->with('success', 'Successfully add tenaga ahli');
        } catch (\Throwable $th) {
            DB::rollback();

            return redirect()->back()->with('failed', 'Failed add tenaga ahli because'. $th->getMessage(). '');
        }
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function edit(cr $cr)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cr $cr)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::beginTransaction();
        try {
            $ahli = Ahli::where('id', $id)->first();
            $ahli->delete();

            DB::commit();

            return redirect()->back()->with('success', 'Successfully deleted ahli');
        } catch (\Throwable $th) {
            DB::rollback();

            return redirect()->back()->with('failed', 'Failed delete ahli because '.$th->getMessage().'');
        }
    }
}
