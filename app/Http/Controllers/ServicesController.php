<?php

namespace App\Http\Controllers;

use App\Models\Services;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
  public function serviceIndex()
  {
    $services = Services::all();
    return view('frontend.services.all_services', compact('services'));
  }

  public function serviceAdd()
  {
    return view('frontend.services.add_service');
  }

  public function serviceStore(Request $request)
  {
    $name = $request->name;
    Services::create(['name' => $name]);
    $notification = array(
      'message' => 'Service Added Successfully',
      'alert-type' => 'success'
    );

    return redirect()->route('all.services')->with($notification);
  }

  public function serviceGetData($id)
  {
    $data = Services::where('id', $id)->get();
    return view('frontend.services.edit_service', compact('data'));
  }

  public function serviceSave(Request $request, $id)
  {
    $data = Services::find($id);
    $data->name = $request->name;
    $data->save();
    $notification = array(
      'message' => 'Service Updated Successfully',
      'alert-type' => 'success'
    );

    return redirect()->route('all.services')->with($notification);
  }

  public function serviceDelete(Request $request, $id)
  {
    $data = Services::find($id)->delete();
    $notification = array(
      'message' => 'Service Deleted Successfully',
      'alert-type' => 'success'
    );

    return redirect()->route('all.services')->with($notification);
  }
}
