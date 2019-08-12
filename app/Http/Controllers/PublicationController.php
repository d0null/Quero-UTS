<?php

namespace App\Http\Controllers;

use App\Publication;
use Illuminate\Http\Request;

class PublicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $publications = Publication::when($request->input('q'), function($q) use ($request){
            $q->where('title', 'LIKE', "%{$request->q}%")
                ->orWhere('resume', 'LIKE', "%{$request->q}%")
                ->orWhere('mention', 'LIKE', "%{$request->q}%")
                ->orWhere('author', 'LIKE', "%{$request->q}%")
                ->orWhere('publish_year', 'LIKE', "%{$request->q}%");
        })->get();

        return view('publications', compact('publications'));
    }

    public function tags($tag)
    {
        $publications = Publication::withAllTags([$tag])->get();

        return view('tags', compact('publications'));
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
     * @param  \App\Publication  $publication
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $publication = Publication::findOrFail($id);

        return view('singlepublication', compact('publication'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Publication  $publication
     * @return \Illuminate\Http\Response
     */
    public function edit(Publication $publication)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Publication  $publication
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Publication $publication)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Publication  $publication
     * @return \Illuminate\Http\Response
     */
    public function destroy(Publication $publication)
    {
        //
    }
}
