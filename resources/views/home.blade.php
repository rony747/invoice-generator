@extends('frontend.app')

@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="card-body card">
        <h2 class="mb-3 pb-3 border-bottom">NewSunSEO Proposal System</h2>
        <form method="post" action="{{route('project.store')}}" class="" data-bitwarden-watching="1">
          @csrf
          <div class="mb-2 card mb-3 p-3 bg-light">
            <h3>Project Name </h3>
            <input type="text" class="form-control border" id="project_name" name="project_name">
          </div>
          @include('frontend.form_part.general')
          @include('frontend.form_part.price_info')
          @include('frontend.form_part.scope')
          @include('frontend.form_part.resources')
          @include('frontend.form_part.getting_started')
          @include('frontend.form_part.agreement')



          @include('frontend.form_part.form_footer')

        </form>
      </div>
    </div>
  </div>
@endsection
