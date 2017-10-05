<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PublicController extends Controller
{
    /**
     * Getter for view login.
     *
     * @return object view
     */
    public function login() {
        return view('admin.login');
    }

    /**
     * Getter for view index.
     *
     * @return object view
     */
    public function index() {
        return view('public.index');
    }

    /**
     * Getter for view services.
     *
     * @return object view
     */
    public function services() {
        return view('public.services');
    }

    /**
     * Getter for view projects.
     *
     * @return object view
     */
    /*
    public function projects() {
        $projects = DB::table('projects')->get();
        return view('public.projects', ['projects' => $projects]);
    }*/

    /**
     * Getter for view references.
     *
     * @return object view
     */
    public function references() {
        return view('public.references');
    }

    /**
     * Getter for view contact.
     *
     * @return object view
     */
    public function contact() {
        return view('public.contact');
    }

    /**
     * Getter for view disclaimer.
     *
     * @return object view
     */
    public function disclaimer() {
        return view('public.disclaimer');
    }
}