<!-- footer -->
<!-- ============================================================== -->
<footer class="footer text-center">
  All Rights Reserved by Flexy Admin. Designed and Developed by <a href="https://www.wrappixel.com">WrapPixel</a>.
</footer>
</div><!-- page-wrapper -->
</div><!-- main-wrapper -->

<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.2.0/tinymce.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="{{asset('assets/js/custom.js')}}"></script>
<script>
  @if(Session::has('message'))
  var type = "{{ Session::get('alert-type','info') }}"
  switch(type){
      case 'info':
          toastr.info(" {{ Session::get('message') }} ");
          break;

      case 'success':
          toastr.success(" {{ Session::get('message') }} ");
          break;

      case 'warning':
          toastr.warning(" {{ Session::get('message') }} ");
          break;

      case 'error':
          toastr.error(" {{ Session::get('message') }} ");
          break;
  }
  @endif
</script>
@yield('footer_script')

</body>

</html>