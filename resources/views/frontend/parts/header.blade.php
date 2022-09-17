<!DOCTYPE html>
<html dir="ltr"
      lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible"
        content="IE=edge">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport"
        content="width=device-width, initial-scale=1">
  <meta name="keywords"
        content="">
  <meta name="description"
        content="">
  <meta name="robots"
        content="noindex,nofollow">
  <title>Flexy Admin Lite Template by WrapPixel</title>
  <link rel="canonical"
        href="https://www.wrappixel.com/templates/Flexy-admin-lite/" />
  <!-- Favicon icon -->
  <link rel="icon"
        type="image/png"
        sizes="16x16"
        href="../assets/images/favicon.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">

  <!-- Custom CSS -->
  <link href="{{asset('assets/css/style.css')}}"  rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body>

<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper"
     data-layout="vertical"
     data-navbarbg="skin5"
     data-sidebartype="full"
     data-sidebar-position="absolute"
     data-header-position="absolute"
     data-boxed-layout="full">

  @include('frontend.parts.sidebar')
  <!-- Page wrapper  -->
  <!-- ============================================================== -->
  <div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->