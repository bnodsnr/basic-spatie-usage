@extends('layouts.master')
@section('content')

@if ($message = Session::get('access'))
  <div class="row">
    <div class="col-12">
      <div class="alert alert-fill-danger" role="alert">
        <i class="fa fa-warning"></i>{{ $message }}
      </div>
    </div>
  </div>
@endif

<div class="row">
  @if(!empty($datas))
  @foreach($datas as $shakha)
  <div class="col-md-6 col-lg-6 col-xl-3 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-center">
          <div class="icon-wrap">
            <img src="{{ asset('storage/'.$shakha['icon'])}}">
          </div>
          <div class="flex-right-height">
            <p class="font-weight-bold mb-1"><a href="{{ route('shakha-detail', $shakha['id']) }}">{{ $shakha['name'] }}</a></p>
            <p class="badge badge-pill badge-danger ml-2">{{ !empty($shakha['total'])?convertedNum($shakha['total']):convertedNum(0) }}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endforeach
  @endif
</div>
<!-- content-wrapper ends -->
@endsection