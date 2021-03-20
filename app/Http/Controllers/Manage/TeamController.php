<?php

namespace App\Http\Controllers\Manage;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Team\StoreRequest;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataTeam = Team::paginate(5);
        return view('manage.team.index', ['data' => $dataTeam]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('manage.team.create');
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
                $images = Storage::putFile('public/team', $request->file('image'));
                $image = str_replace('public/', '', $images);
            } else {
                $image = null;
            }

            if($request->facebook_url) {
                $facebook = $input['facebook_url'];
            } else {
                $facebook = null;
            }

            if($request->twitter_url) {
                $twitter =  $input['twitter_url'];
            } else {
                $twitter = null;
            }

            if($request->instagram_url) {
                $instagram = $input['instagram_url'];
            } else {
                $instagram = null;
            }

            if($request->linkedin_url) {
                $linkedin = $input['linkedin_url'];
            } else {
                $linkedin = null;
            }

            Team::create([
                'name'          => $input['name'],
                'position'      => $input['position'],
                'about'         => $input['about'],
                'short_desc'    => $input['short_desc'],       
                'facebook_url'  => $facebook,
                'twitter_url'   => $twitter,
                'instagram_url' => $instagram,
                'linkedin'      => $linkedin,
                'uplink'        => Auth::user()->name,
                'image'         => $image,
            ]);

            DB::commit();

            return redirect()->route('team.manage.index')->with('success', 'Successfully add Team');
        } catch (\Throwable $th) {
            DB::rollback();

            return redirect()->back()->with('failed', 'Failed add team because '.$th->getMessage().'');
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
            $team = Team::where('id', $id)->first();
            $team->delete();

            DB::commit();

            return redirect()->back()->with('success', 'Successfully deleted team');
        } catch (\Throwable $th) {
            DB::rollback();

            return redirect()->back()->with('failed', 'Failed delete team because '.$th->getMessage().'');
        }
    }
}
