@extends('frontend.app')

@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="card-body card">
        <h3 class="text-orange bg-light p-3 ">NewSunSEO Inc. Contact Details:</h3>
        <hr class="border-bottom  border-orange">
        <form action="{{route('save.details')}}" method="post">
          @csrf
          <table class="table mb-0">
            <tbody>
            <tr>
              <td width="20%">Company Name:</td>
              <td>
                <input type="text" name="company_name" id="company_name" class="form-control border border-warning"
                       value="@if(!empty($data) ) {{$data->company_name}} @endif">
              </td>
            </tr>
            <tr>
              <td width="20%"> Address:</td>
              <td>
                <input type="text" name="address" id="address" class="form-control border border-warning"
                       value="@if(!empty($data) ) {{$data->address}} @endif">
              </td>
            </tr>
            <tr>
              <td width="20%">City:</td>
              <td>
                <input type="text" name="city" id="city" class="form-control border border-warning"
                       value="@if(!empty($data) ) {{$data->city}} @endif">
              </td>
            </tr>
            <tr>
              <td width="20%">State:</td>
              <td>
                <input type="text" name="state" id="state" class="form-control border border-warning"
                       value="@if(!empty($data) ) {{$data->state}} @endif">
              </td>
            </tr>
            <tr>
              <td width="20%">Zip:</td>
              <td>
                <input type="text" name="zip" id="zip" class="form-control border border-warning"
                       value="@if(!empty($data) ) {{$data->zip}} @endif">
              </td>
            </tr>
            <tr>
              <td width="20%">Phone:</td>
              <td>
                <input type="text" name="phone" id="phone" class="form-control border border-warning"
                       value="@if(!empty($data) ) {{$data->phone}} @endif">
              </td>
            </tr>
            <tr>
              <td width="20%">Fax:</td>
              <td>
                <input type="text" name="fax" id="fax" class="form-control border border-warning"
                       value="@if(!empty($data) ) {{$data->fax}} @endif">
              </td>
            </tr>
            <tr>
              <td width="20%">Email:</td>
              <td>
                <input type="text" name="email" id="email" class="form-control border border-warning"
                       value="@if(!empty($data) ) {{$data->email}} @endif">
              </td>
            </tr>
            <tr>
              <td width="20%">Web Site:</td>
              <td>
                <input type="text" name="website" id="website" class="form-control border border-warning"
                       value="@if(!empty($data) ) {{$data->website}} @endif">
              </td>
            </tr>
            <tr>
              <td width="20%">
                <button class="btn btn-default" type="submit">Save</button>
              </td>
              <td></td>
            </tr>
            </tbody>
          </table>
        </form>
      </div>
    </div>
  </div>

@endsection