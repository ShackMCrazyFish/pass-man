<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    public function index () {
        $projects = DB::table('projects')->get();
        return view('projects.index', ['projects' => $projects]);
    }

    public function create() {
        DB::table('projects')->insert()
        return view('projects.create');
    }

    public function store() {
        return view('projects.store');
    }

    public function show() {
        return view('projects.show');
    }

    public function edit() {
        return view('projects.edit');
    }

    public function delete() {
        return view('projects.delete');
    }

}
