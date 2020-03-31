
  @if (Route::has('password.request'))
  <a href="#" class="btn btn-link btn-danger">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
</div>
</div>
</div>
</div>
<div class="footer register-footer text-center">
<h6>©
<script>
document.write(new Date().getFullYear())
</script>, made with <i class="fa fa-heart heart"></i> by Creative Tim</h6>
</div>
</div>
<!--   Core JS Files   -->
<script src="{{ url('website/assets/js/core/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ url('website/assets/js/core/popper.min.js') }}" type="text/javascript"></script>
<script src="{{ url('website/assets/js/core/bootstrap.min.js') }}" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="{{ url('website/assets/js/plugins/bootstrap-switch.js') }}"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="{{ url('website/assets/js/plugins/nouislider.min.js') }}" type="text/javascript"></script>
<!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
<script src="{{ url('website/assets/js/plugins/moment.min.js') }}"></script>
<script src="{{ url('website/assets/js/plugins/bootstrap-datepicker.js') }}" type="text/javascript"></script>
<!-- Control Center for Paper Kit: parallax effects, scripts for the example pages etc -->
<script src="{{ url('website/assets/js/paper-kit.js?v=2.2.0') }}" type="text/javascript"></script>

</body>
</html>
