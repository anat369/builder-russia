<?php

namespace App\Http\Controllers\Admin;

use App\Project;
use App\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
{
    public function index()
    {
        return view('admin.projects.index',[
            'projects' => Project::all(),
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.projects.create', [
            'services' => Service::pluck('title', 'id'),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required|max:1000',
            'image' => 'nullable|image',
            'service_id' => 'required',
        ]);

        $project = Project::add($request->all());
        $project->uploadImage($request->file('image'));
        $project->setService($request->get('service_id'));

        return redirect()->route('admin.project.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        return view('admin.projects.edit', [
            'project' => Project::find($id),
            'services' => Service::pluck('title', 'id')->all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required|max:1000',
            'image' =>  'nullable|image',
            'service_id' => 'required',
        ]);

        $project = Project::find($id);
        $project->edit($request->all());
        $project->uploadImage($request->file('image'));
        $project->setService($request->get('service_id'));

        return redirect()->route('admin.project.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( int $id)
    {
        Project::find($id)->remove();
        return redirect()->route('admin.project.index');
    }
}
