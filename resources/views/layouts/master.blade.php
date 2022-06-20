<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>BMS NEPAL</title>
  <link rel="stylesheet" href="{{asset('assets/css/materials_icons.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="{{asset('assets/css/vertical-layout-light/style.css') }}">
  
  <link rel="shortcut icon" href="{{asset('assets/images/fav.png') }}" />
  <script src="{{ asset('assets/vendors/js/vendor.bundle.base.js') }}"></script>
  <script src="{{ asset('assets/vendors/js/vendor.bundle.addons.js') }}"></script>
</head>

<body class="sidebar-fixed">
  <!-- <div id="loader" class="lds-dual-ring overlay"></div> -->
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper">
      @include('layouts.header')
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-6 col-lg-6 col-xl-3">
              <img src="{{ asset('assets/images/new_logo.png') }}" style="width:119px; height:100px;">
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 text-center">
              <h3 class="text-center" style="margin-left:85px;"></h3>
              <h6 style="margin-left: 80px; margin-top:10px;"></h6>
              <p style="margin-left: 90px; margin-top:10px;"> </p>
              <p style="margin-left: 90px; margin-top:10px;color:red"> <b>चालु आर्थिक वर्ष </b> </p>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
             
              <img src="" style="margin-left: 400px;width:119px; height:100px;">
           
            </div>
            
          </div>
          <hr>
          @yield('content')
        </div>
        
      </div>
    </div>
  </div>


<div class="modal fade" id="frmadd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    </div>
  </div>
</div>

<div class="modal fade" id="frmedit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    </div>
  </div>
</div>
 

</body>
<script src="{{ asset('assets/js/modal.js') }}"></script>
</html>