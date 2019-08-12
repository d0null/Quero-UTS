<?php

namespace App\Http\Controllers;

use App\Mentor;
use Illuminate\Http\Request;

class MentorController extends Controller
{


    /*public function tags($tag)
    {
        $Mentors = Mentor::withAllTags([$tag])->get();

        return view('tags', compact('Mentors'));
    }*/

    /**
*
*
*
*
*
    */

    /**
     * Display a listing of the resource.
     *
     * @param  Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {


        $mentors = Mentor::when($request->input('q'), function($q) use ($request){
            $q->where('name', 'LIKE', "%{$request->q}%")
                ->orWhere('email', 'LIKE', "%{$request->q}%");
        })->get();
        return view('mentors', compact('mentors'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  Mentor  $mentor
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mentor = Mentor::findOrFail($id);
        return view('singlementor', compact('mentor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mentor  $mentor
     * @return \Illuminate\Http\Response
     */
    public function edit(Mentor $mentor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mentor  $mentor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mentor $mentor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mentor  $mentor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mentor $mentor)
    {
        //
    }
}
