<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Project extends Model
{
    public function getProjects() {
        $projects = DB::table('projects')->get();
        return $projects;
    }
}
