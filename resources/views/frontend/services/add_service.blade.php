@extends('frontend.app')

@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="card-body card">
        <h2 class="mb-3 pb-3 border-bottom">Add New Service</h2>
        <form action="{{route('service.store')}}" method="post">
          @csrf
          <div>
            <lable> Service Title </lable>
            <input type="text" name="name" id="name" class="form-control border border-warning rounded-3 mt-2">
          </div>
          <button type="submit" class="btn waves-effect waves-light btn-rounded btn-warning mt-3">Add New Service</button>


        </form>
      </div>
    </div>
  </div>
@endsection