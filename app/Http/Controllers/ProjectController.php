<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use App\Http\Requests\CreateProjectRequest;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

       return view('projects.index', [
        'projects' =>  Project::latest()->paginate()
    ]);
    }

    public function show(Project $project)
    {
        //return $id;
      //$project Project::find($id); //Guardar resultado en na variable $project para pasar a vista
      return view('projects.show', [
            'project' => $project
      ]);
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store(CreateProjectRequest $request){

       // $fields = request()->validate([
            //'title' => 'required',
            //'url' => 'required',
            //'description' => 'required',
       // ]);

//retornamos el REQUEST o peticion del usuario para inspecionarla.
        Project::create($request->validated() );
//Utilizando el metodo validate, solo devolera los campos que se le asigno a la validacion en el Request de validaciones

         //Para redireccionar a la vista index
        return redirect()->route('projects.index');

   }
}
