<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Link Management</title>

  <link rel="stylesheet" href="{{asset('./css/index.css')}}">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


</head>

<body class="hold-transition sidebar-mini layout-fixed">

  <div class="row">
    <div class="col-2 " style="border-right: 1px solid #d9dadf;">
      <aside class="main-sidebar elevation-1" style="position:fixed">
        <div class="d-flex flex-column flex-shrink-0 p-3 border-end " style="width: 250px; ">
          <div class="">
            <a href="#" class="d-flex align-items-center link-dark text-decoration-none" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="{{asset('./bitly-logo.png')}}" alt="" width="60" height="60" class="">
            </a>
          </div>

          <a class="text-decoration-none" href="{{route('dashboard.create')}}"> <button type="new" class="btn btn-primary m-3 pt-2" style="background-color: #0056b3; border:none; width:70%">
              <h6>Create New </h6>
            </button></a>
          <div class="p-1"></div>
          <ul class="nav nav-pills flex-column mb-auto">
            <li>
              <a href="#" class="nav-link link-dark ">
                <i class="fas fa-tachometer-alt p-2"></i>
                <h6 class="d-inline">Dashboard</h6>

              </a>
            </li>
            <li>
              <a href="#" class="nav-link link-dark">
                <i class="fas fa-link p-2"></i>
                <h6 class="d-inline">Links</h6>
              </a>
            </li>
            <li>
              <a href="#" class="nav-link link-dark">
                <i class="fas fa-qrcode p-2"></i>
                <h6 class="d-inline">QR Codes</h6>
              </a>
            </li>
            <li>
              <a href="#" class="nav-link link-dark">
                <i class="fas fa-file-alt p-2"></i>
                <h6 class="d-inline">Link-in-bio</h6>
              </a>
            </li>
            <li>
              <a href="#" class="nav-link link-dark">
                <i class="fas fa-folder p-2"></i>
                <h6 class="d-inline">Campaigns</h6>
              </a>
            </li>
            <li>
              <a href="#" class="nav-link link-dark ">
                <i class="fas fa-paperclip p-2"></i>
                <h6 class="d-inline">Custom Link</h6>
              </a>
            </li>
            <li>
              <a href="#" class="nav-link link-dark">
                <i class="fas fa-cog p-2"></i>
                <h6 class="d-inline">Setting</h6>
              </a>
            </li>
          </ul>
        </div>
      </aside>
    </div>

    <div class="col-10">
      <nav class="navbar" style="border-bottom: 1px solid #d9dadf; height:80px;">
        <div class="container-fluid d-flex justify-content-end">
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn"> <i class="fas fa-search"></i></button>
          </form>
          <div class="">
            <a href="#" class="d-flex align-items-center link-dark text-decoration-none ml-3 dropdown " aria-expanded="false">
              <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle  me-2">
              <strong class="p-2">Fatma Jaber</strong>
            </a>
          </div>
        </div>
      </nav>

      <div class="container-fluid">
        <div class="container-fluid d-flex justify-content-between">

          <h2 class="ps-4 mt-3">@yield('title','Default Title')</h2>
          <ol class="breadcrumb float-sm-right mb-2 mt-3">
            @section('breadcrumb')
            <li class="breadcrumb-item"><a href="{{route('dashboard.index')}}">Home</a></li>
            @show
          </ol>
        </div>

        @yield('content')
      </div>
    </div>
  </div>




  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</body>

</html>