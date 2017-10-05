<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function projects()
    {
        $projects = DB::table('projects')->get();
        //dd($projects);
        return view('admin.project', ['projects' => $projects]);
    }

    /**
     * Show the project create page.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function createProject()
    {
        return view('admin.project.create');
    }


    /**
     * Show the project create page.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function dropzone()
    {
        return view('admin.project.dropzone');
    }


    /**
     * Show the project edit page.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function editProject($id)
    {
        $project = DB::table('projects')->find($id);
        return view('admin.project.edit', ['project' => $project]);
        //return view('admin.project.edit');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function reference()
    {
        return view('admin.reference');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dashboard');
    }
}