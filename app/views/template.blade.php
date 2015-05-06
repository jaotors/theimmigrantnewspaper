<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>{{ isset($pagetitle) ? $pagetitle : 'The Immigrant' }}</title>
    
    <meta http-equiv="Content-Language" content="en-us">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <meta name="robots" content="index,no follow">
    

    {{HTML::style('resources/components/foundation-5.0.2/css/foundation.css');}}
    {{HTML::style('resources/components/foundation-5.0.2/css/normalize.css');}}
    {{HTML::style('resources/components/fontawesome/css/font-awesome.min.css');}}
    {{HTML::style('resources/components/responsiveslider/responsiveslides.css');}}
    {{HTML::style('resources/components/fancybox/jquery.fancybox.css?v=2.1.5', array('media' => 'screen'));}}
    {{HTML::style('resources/components/uitotop/css/ui.totop.css');}}
    {{HTML::style('resources/css/jquery.jgrowl.min.css');}}
    {{HTML::style('resources/css/uni.style.css');}}
    {{HTML::style('resources/css/common.css');}}
    {{HTML::style('resources/css/mediaqueries.css');}}

    {{HTML::script('resources/js/jquery-1.10.2.min.js')}}
    <!--{{HTML::script('resources/js/underscore-min.js')}} -->

</head>
<body>
  <section class="bodywrap">
    <div class="content-wrap">
      <header>
        <?php echo View::make('partial.navigation',array('activenav'=>$activenav)) ?>
      </header>
      <section class="content-hold">
        @yield('content')
      </section>
    </div>
    <footer class="footer-hold">
        <?php echo View::make('partial.footer') ?>
    </footer>
  </section>
  <i class="data-publisher"></i>
  
  
  {{HTML::script('resources/components/ajax/ajax.js')}}
  {{HTML::script('resources/js/modernizr.custom.27839.js')}}
  {{HTML::script('resources/js/enquire.min.js')}}
  {{HTML::script('resources/js/jquery.uniform.min.js')}}
  {{HTML::script('resources/components/jquery.confirm/jquery.confirm.js')}}
  <!--{{HTML::script('resources/js/jquery.jgrowl.min.js')}}-->
  {{HTML::script('resources/js/amplify.min.js')}}
  {{HTML::script('resources/js/smartupdater.4.0.js')}}
  {{HTML::script('resources/components/uitotop/js/easing.js')}}
  {{HTML::script('resources/components/uitotop/js/jquery.ui.totop.js')}}
  {{HTML::script('resources/components/responsenav/responsenav.js')}}
  {{HTML::script('resources/components/fancybox/jquery.fancybox.js?v=2.1.5')}}
  {{HTML::script('resources/components/responsiveslider/responsiveslides.js')}}
  {{HTML::script('resources/components/isotope/isotope.pkgd.min.js')}}
  {{HTML::script('resources/components/foundation-5.0.2/js/foundation/foundation.js')}}
  {{HTML::script('resources/components/foundation-5.0.2/js/foundation/foundation.reveal.js')}}
  {{HTML::script('resources/js/uni.script.js')}}
  
  <script>
    $(document).foundation();
  </script>
{{FlashdataHelper::flash()}}
</body>
</html>
