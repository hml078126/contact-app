@extends('layouts.main')
@section('title', 'Detail')
@section('content')
<div class="container">




<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
    <a href="{{route('countries.index')}}">Back</a>
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Country Name</th>
      <th scope="col">{{$countries->countryName}}</th>
     
    </tr>
    <tr>
      <th scope="col">Zipcode</th>
      <th scope="col">{{$countries->zipcode}}</th>
     
    </tr>
    <tr>
      <th scope="col">Created At</th>
      <th scope="col">{{$countries->created_at}}</th>
     
    </tr>
    <tr>
      <th scope="col">Updated At</th>
      <th scope="col">{{$countries->updated_at}}</th>
     
    </tr>
  </thead>
 
</table>
</div>
</div>

</div>
@endsection