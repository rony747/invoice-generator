<?php

namespace App\Http\Controllers;

use App\Models\PersonalDetails;
use Illuminate\Http\Request;

class DetailsController extends Controller
{
  public function personalIndex()
  {
    $data = PersonalDetails::first();
    return view('frontend.details.add_details', compact('data'));
  }

  public function personalSave(Request $request)
  {
    $data['company_name'] = $request->company_name;
    $data['address'] = $request->address;
    $data['city'] = $request->city;
    $data['state'] = $request->state;
    $data['zip'] = $request->zip;
    $data['phone'] = $request->phone;
    $data['fax'] = $request->fax;
    $data['email'] = $request->email;
    $data['website'] = $request->website;

    if (count(PersonalDetails::all()) == 0) {
      PersonalDetails::insert($data);

      $notification = array(
        'message' => 'Details added Successfully',
        'alert-type' => 'success'
      );

      return redirect()->route('all.details')->with($notification);
    } else {
      $details = PersonalDetails::first();
      PersonalDetails::where('id', $details->id)->update($data);
      $notification = array(
        'message' => 'Details Updated Successfully',
        'alert-type' => 'success'
      );

      return redirect()->route('all.details')->with($notification);
    }

  }
}
