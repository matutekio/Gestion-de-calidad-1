<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>{{ config('app.name', 'Laravel') }}</title>
<!-- Tell the browser to be responsive to screen width -->
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<!-- Boostrap3 -->
{!! Html::style('/boostrap-3.3.7/css/bootstrap.min.css') !!}
<!-- Font Awesome -->
{!! Html::style('/adminLTE-2.4.3/bower_components/font-awesome/css/font-awesome.min.css') !!}
<!-- Ionicons -->
{!! Html::style('/adminLTE-2.4.3/bower_components/Ionicons/css/ionicons.min.css') !!}
<!-- DataTables -->
{!! Html::style('/adminLTE-2.4.3/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') !!}
<!-- Theme style -->
{!! Html::style('/adminLTE-2.4.3/dist/css/AdminLTE.min.css') !!}
<!-- AdminLTE Skins. We have chosen the skin-blue for this starter
      page. However, you can choose any other skin. Make sure you
      apply the skin class to the body tag so the changes take effect. -->
{!! Html::style('/adminLTE-2.4.3/dist/css/skins/skin-blue.min.css') !!}

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<!-- JQuery -->
{!! Html::script('plugins/jquery/jquery-3.3.1.min.js') !!}