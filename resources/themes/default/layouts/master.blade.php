<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
  <head>
    <meta charset="UTF-8">
    <title>{{ config('app.short_name') }} | {{ $page_title or "Page Title" }}</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Set a meta reference to the CSRF token for use in AJAX request -->
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- Google fonts -->
    <link href="http://fonts.googleapis.com/css?family=Bitter" rel="stylesheet" type="text/css" />
    <!-- Bootstrap 3.3.4 -->
    <link href="{{ asset("/bower_components/admin-lte/bootstrap/css/bootstrap.min.css") }}" rel="stylesheet" type="text/css" />
    <!--<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">-->
    <!-- Font Awesome Icons 4.4.0 -->
    <link href="{{ asset("/bower_components/admin-lte/font-awesome/css/font-awesome.min.css") }}" rel="stylesheet" type="text/css" />
    <!-- Ionicons 2.0.1 -->
    <link href="{{ asset("/bower_components/admin-lte/ionicons/css/ionicons.min.css") }}" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="{{ asset("/bower_components/admin-lte/dist/css/AdminLTE.min.css") }}" rel="stylesheet" type="text/css" />

    <!-- Application CSS-->
    <link href="{{ asset(elixir('css/all.css')) }}" rel="stylesheet" type="text/css" />


    <!-- Head -->
    @include('partials._head')

    <!-- Rapid Styles CSS-->
    {!! Rapyd::styles() !!}
    
    <style>
      .table>thead>tr>th, .table>tbody>tr>th, .table>tfoot>tr>th, .table>thead>tr>td, .table>tbody>tr>td, .table>tfoot>tr>td
      {
        border-top: 1px solid #000000;
        border-bottom: 1px solid #000000;
      }
      .rpd-dataform, .rpd-datagrid {
        padding: 5px 0;
      }      
    </style>
      <!-- REQUIRED JS SCRIPTS -->

      <!-- jQuery 2.1.4 -->
      <script src="{{ asset ("/bower_components/admin-lte/plugins/jQuery/jQuery-2.1.4.min.js") }}"></script>
      <!-- Bootstrap 3.3.2 JS -->
      <script src="{{ asset ("/bower_components/admin-lte/bootstrap/js/bootstrap.min.js") }}" type="text/javascript"></script>
      <!--<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">-->
      <!-- AdminLTE App -->
      <script src="{{ asset ("/bower_components/admin-lte/dist/js/app.min.js") }}" type="text/javascript"></script>

      <!-- Optionally, you can add Slimscroll and FastClick plugins.
            Both of these plugins are recommended to enhance the
            user experience. Slimscroll is required when using the
            fixed layout. -->

      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->

      <!-- Application JS-->
      <script src="{{ asset(elixir('js/all.js')) }}"></script>

      <!-- Optional header section  -->
      @yield('head_extra')

  </head>

  <!-- Body -->
  @include('partials._body')
{!! Rapyd::scripts() !!}
</html>
