<?php

namespace App\Http\Controllers\Manage;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\About\StoreRequest;
use App\Http\Requests\About\UpdateRequest;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataAbout = About::paginate(5);
        return view('manage.about.index', ['data' => $dataAbout]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('manage.about.create');
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
                $images = Storage::putFile('public/about', $request->file('image'));
                $image = str_replace('public/', 'storage/', $images);
            } else {
                $image = null;
            }

            About::create([
                'content'       => $input['content'],
                'uplink'        => Auth::user()->name,
                'image'         => $image,
            ]);

            DB::commit();

            return redirect()->route('about.manage.index')->with('success', 'Successfully add content');
        } catch (\Throwable $th) {
            DB::rollback();

            return redirect()->back()->with('failed', 'Failed add content because '.$th->getMessage().'');
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
        $about = About::where('id', $id)->first();
        return view('manage.about.update', ['data' => $about]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, $id)
    {
        $input = $request->validated();

        DB::beginTransaction();
        try {
            if($request->file('image')) {
                $about      = About::where('id', $id)->first();
                $about->content = $input['content'];
                $images = Storage::putFile('public/about', $request->file('image'));
                $image = str_replace('public/', '', $images);
                $about->image = $image;
                $about->save();
            } else {
                $about      = About::where('id', $id)->first();
                $about->content = $input['content'];
                $about->save();
            }
            DB::commit();

            return redirect()->route('about.manage.index')->with('success', 'Successfully update content');
        } catch (\Throwable $th) {
            DB::rollback();

            return redirect()->back()->with('failed', 'Failed update content because '.$th->getMessage().'');
        }
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
            $about = About::where('id', $id)->first();
            $about->delete();

            DB::commit();

            return redirect()->back()->with('success', 'Successfully deleted content');
        } catch (\Throwable $th) {
            DB::rollback();

            return redirect()->back()->with('failed', 'Failed delete content because '.$th->getMessage().'');
        }
    }
}
