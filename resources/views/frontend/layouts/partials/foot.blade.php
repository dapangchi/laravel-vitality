<script>
base_url = '{{ url("/") }}/';
current_url = '{{ current_url() }}'; 
</script>      

{!! Html::script('vendor/bower_components/jquery/dist/jquery.min.js') !!}
{!! Html::script('vendor/bower_components/bootstrap/dist/js/bootstrap.min.js') !!}
{!! Html::script('vendor/bower_components/moment/min/moment.min.js') !!}
{!! Html::script('vendor/bower_components/Waves/dist/waves.min.js') !!}
{!! Html::script('vendor/bower_components/bootstrap-growl/bootstrap-growl.min.js') !!}
{!! Html::script('vendor/bower_components/alertify-js/alertify.js') !!}
{!! Html::script('vendor/bower_components/bootstrap-sweetalert/lib/sweet-alert.min.js') !!}
{!! Html::script('vendor/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js') !!}
{!! Html::script('vendor/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js') !!}

@yield('plugin_scripts')
<!-- Placeholder for IE9 -->
<!--[if IE 9 ]>
    {!! Html::script('vendor/bower_components/jquery-placeholder/jquery.placeholder.min.js') !!}
<![endif]-->

{!! Html::script('assets/frontend/js/functions.js') !!} 

@yield('scripts')