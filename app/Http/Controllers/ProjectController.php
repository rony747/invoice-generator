<?php

namespace App\Http\Controllers;

use App\Models\Projects;
use App\Models\Services;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
  public function projectIndex()
  {
    $data['services'] = Services::all();
    return view('home', $data);

    }

  public function projectStore(Request $request)
  {
    $data['project_name'] = $request->project_name;
    $data['services'] = json_encode($request->services);
    Projects::create($data);
    }


}
