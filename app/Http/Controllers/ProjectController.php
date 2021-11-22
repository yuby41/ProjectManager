<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectController extends Controller
{
    public function getAllProjects()
    {
        $projects = Project::all();
        return $projects;
    }

    public function updateProject() 
    {
        $project = Project::find(2);
        $project->name = 'Proyecto de Tecnologia';
        $project->save();

        return 'Actualizado';
    }

    public function reName()
    {
        $project = Project::where('is_active', 1)
                    ->update( ['name'=>'Proyecto de Ingieneria']);

        return 'Renombrados';            
    }

    public function deleteProject()
    {
        $project = Project::where('project_id', '=', 4)->delete();

        return 'Borrado';
    }
}
