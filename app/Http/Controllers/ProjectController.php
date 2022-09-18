<?php

namespace App\Http\Controllers;

use App\Models\PersonalDetails;
use App\Models\Projects;
use App\Models\Services;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
    $data['today_date'] = $request->today_date;
    $data['start_date'] = $request->start_date;
    $data['rate'] = $request->rate;
    $data['rate_seo'] = $request->rate_seo;
    $data['rate_hosting'] = $request->rate_hosting;
    $data['rate_hosting_ecommerce'] = $request->rate_hosting_ecommerce;
    $data['due'] = $request->due;
    $data['company_name'] = $request->company_name;
    $data['first_name'] = $request->first_name;
    $data['last_name'] = $request->last_name;
    $data['address'] = $request->address;
    $data['city'] = $request->city;
    $data['state'] = $request->state;
    $data['zip'] = $request->zip;
    $data['phone'] = $request->phone;
    $data['fax'] = $request->fax;
    $data['email'] = $request->email;
    $data['website'] = $request->website;
    if ($request->scope_int_inc != null) {
      $data['scope_intro'] = $request->scope_intro;
    }
    if ($request->scope_meth_inc != null) {
      $data['scope_methodology'] = $request->scope_methodology;
    }
    if ($request->resource_include != null) {
      $data['resources_intro'] = $request->resources_intro;
    }
    if ($request->gett_int_inc != null) {
      $data['getting_intro'] = $request->getting_intro;
    }
    if ($request->get_sig_inc != null) {
      $data['getting_signature'] = $request->getting_signature;
    }
    if ($request->agree_int_inc != null) {
      $data['agreement_intro'] = $request->agreement_intro;
    }
    if ($request->agree_con_inc != null) {
      $data['agreement_contact'] = $request->agreement_contact;
    }
    if ($request->agree_gen_inc != null) {
      $data['agreement_general'] = $request->agreement_general;
    }
    if ($request->agree_other_inc != null) {
      $data['agreement_other'] = $request->agreement_other;
    }

    if (Projects::create($data)) {
      $allData = Projects::orderBy('id', 'DESC')->first();
      $personalData = PersonalDetails::orderBy('id', 'DESC')->first();
      return view('view', compact('allData', 'personalData'));
//      $pdf = Pdf::loadView('view',compact('allData','personalData'));
//      return $pdf->download('invoice.pdf');

    } else {
      $notification = array(
        'message' => 'Something is wrong',
        'alert-type' => 'danger'
      );
      return Redirect::back()->withInput(Input::all());

    }
  }


}
