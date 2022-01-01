<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Project;

class ProjectController extends Controller
{
    /**
     * Отображает список ресурсов
     *
     * @return \Illuminate\Http\Response
     */
    public function index () {
        $projects = DB::table('projects')->get();
        return view('projects.index', ['projects' => $projects]);
    }

    /**
     * Выводит форму для создания нового ресурса
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('projects.create');
    }

    /**
     * Помещает созданный ресурс в хранилище
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $request->validate([
            'projectName' => 'required',
        ]);

        Project::create($request->all());
        return redirect()->route('projects')->with('success', 'Проект успешно создан.');
    }

    /**
     * Отображает указанный ресурс.
     *
     * @param  \App\Models\Project $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project) {
        return view('projects.show', compact('project'));
    }

    /**
     * Выводит форму для редактирования указанного ресурса
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project) {
        return view('projects.edit', compact('project'));
    }

    /**
     * Обновляет указанный ресурс в хранилище
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        $request->validate([
            'projectName' => 'required',
        ]);

        $project->update($request->all());

        return redirect()->route('projects')->with('success', 'Проект успешно изменен.');
    }

    /**
     * Удаляет указанный ресурс из хранилища
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project) {
        $project->delete();

        return redirect()->route('projects')
            ->with('success', 'Проект успешно удален.');
    }

}
