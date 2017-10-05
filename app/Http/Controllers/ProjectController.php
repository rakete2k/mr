<?php

namespace App\Http\Controllers;

use App\Project;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();
        return view('public.projects', ['projects' => $projects]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $project = new Project;
        $project->title = $request->title;
        $project->village = $request->village;
        $project->living_space = $request->living_space;
        $project->realization_year = $request->realization_year;
        $project->description = $request->description;
        $project->activate = $request->activate;

        $realnames = explode(';', $request->upload);
        $hashnames = explode(';', $request->uploadfiles);
        $files = array();
        for ($i = 0; $i < count($realnames); $i++) {
            $files[$i] = array(
                'realname' => $realnames[$i],
                'hashname' => $hashnames[$i]
            );
        }
        $project->save();

        $this->saveFilesToProject($files, $project);

        return $request->all();
    }

    /**
     * Test Dropzone
     *
     *
     */
    public function dropzone() {

    }

    /**
     * Upload Method for Dropzone
     *
     *
     */
    public function saveFilesToProject($files, $project) {

        var_dump($files);
        var_dump($project);
    }

    public function delete() {
        $uploaddir = 'storage/temp/upload/';
        $file = $uploaddir.$_POST['id'];
        unlink($file);
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
    public function edit(Request $request)
    {
        $project = Project::find($request->id);
        $project->title = $request->title;
        $project->village = $request->village;
        $project->living_space = $request->living_space;
        $project->realization_year = $request->realization_year;
        $project->description = $request->description;
        $project->activate = $request->activate;
        $project->save();
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
    /*
    public function destroy(Request $request)
    {
        $project = Project::where('id', $request->id)->first();
        $project->delete();
        return $request->all();
    }
    */

    public function destroy(Request $request ) {
        $project = Project::findOrFail( $request->id );

        if ( $request->ajax() ) {
            $project->delete( $request->all() );

            return response(['msg' => 'Projekt gelöscht', 'status' => 'success']);
        }
        return response(['msg' => 'Projekt konnte nicht gelöscht werden', 'status' => 'failed']);
    }
}
