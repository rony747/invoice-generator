@include('frontend.parts.header')

<div class="page-breadcrumb">
  <div class="row align-items-center">
    <div class="col-6">
    </div>
    <div class="col-6">
    </div>
  </div>
</div><!-- page-breadcrumb -->

<div class="container-fluid">

  @yield('content')

</div><!-- container-fluid -->

@include('frontend.parts.footer')