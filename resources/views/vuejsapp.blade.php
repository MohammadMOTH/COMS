<!doctype html>
<html lang="{{ app()->getLocale() }}" dir="rtl">
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{env("APP_NAME")}}</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

        <link href="{{mix('css/app.css')}}" rel="stylesheet" type="text/css">


      </head>
      <body class="hold-transition skin-blue sidebar-mini">

        <div id="app">
            <router-view></router-view>
        </div>


        <script src="{{mix('js/app.js')}}"></script>
        <script src="{{mix('js/manifest.js')}}"></script>
        <script src="{{mix('js/vendor.js')}}"></script>
        <script>
            window.csrfToken = "{{csrf_token()}}";
            window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
                     ]); ?>

           </script>
    </body>
</html>
