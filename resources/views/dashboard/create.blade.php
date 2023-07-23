@extends('layouts.layout')

@section('title' , 'Create Link')

@section ('breadcrumb')
@parent
<li class="breadcrumb-item active">Create</li>
@endSection

@section('content')

<form class="ms-2" action="{{route('dashboard.store')}}" method="post" enctype="multipart/form-data">
  @csrf
  <div class="row justify-content-md-center">
    <div class="col-8 ">
      <div class="form-group">
        <label for="basic_url">
          <h5>Destination</h5>
        </label>
        <input name="basic_url" type="text" class="form-control  @error('basic_url') is-invalid @enderror" id="basic_url" placeholder="https://www.exampleLink.com">
        <label style="font-size:14px" class="mt-2">You can create 50 more links this month.</label>
        @error('basic_url')
        <p class="invalid-feedback">{{$message}}</p>
        @endError
      </div>

      <div class="form-group">
        <label for="title">
          <h5>Title </h5>
        </label>
        <input name="title" type="text" class="form-control  @error('title') is-invalid @enderror" id="title" placeholder="title">
        @error('title')
        <p class="invalid-feedback">{{$message}}</p>
        @endError
      </div>
    </div>
  </div>
  <div class="row justify-content-md-center">
    <div class="col-8 ">
      <div class="form-group">
        <button type="submit" class="btn btn-primary mt-3 border-0" style="background-color: #0056b3;">Create</button>
      </div>
    </div>
  </div>
</form>


@endSection