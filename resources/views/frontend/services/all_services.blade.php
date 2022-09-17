@extends('frontend.app')

@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="card-body card">

        <div class="row mb-3">
          <div class="col-md-2">
            <a href="{{route('service.add')}}">
              <button type="button" class="btn  btn-rounded btn-warning">Add New Service</button>
            </a>
          </div>
          <div class="col-md-10"></div>
        </div>
        <table class="table customize-table mb-0 v-middle text-nowrap" id="serviceTable">
          <thead class="table-light">
          <tr>
            <th class="border-bottom border-top">#</th>
            <th class="border-bottom border-top">Service Name</th>
            <th class="border-bottom border-top">Action</th>

          </tr>
          </thead>
          <tbody>
          @foreach($services as $key=>$row)
            <tr>
              <td>{{$key+1}}</td>
              <td>{{$row->name}}</td>
              <td><a href="{{route('service.data', $row->id)}}" class="btn btn-light rounded editBtn"><i class="fa-regular fa-pen-to-square"></i></a> |
                <form action="{{route('service.delete', $row->id)}}" method="post"  style="display: inline-block">@csrf
                  <button type="submit"  class="btn btn-light rounded text-danger deleteBtn"><i class="fa-solid fa-xmark"></i>
                  </button>
                </form>
              </td>
            </tr>

          @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>

@endsection

@section('footer_script')
  <script>
      jQuery(document).ready(function ($) {
          $('#serviceTable').DataTable();
      });
  </script>
@endsection