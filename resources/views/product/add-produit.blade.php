@extends('layouts.app')
@section('content')
    <div class="container">
    @if($errors->all())
    <div class="alert alert-danger">
    @foreach($errors->all() as $error)
  <li>{{$error}}</li>
    @endforeach
    </div>
    @endif

      <form method="post" action="{{url('products')}}" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Name">Name:</label>
            <input type="text" class="form-control" name="title">
          </div>
        </div>
        
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Number">Price:</label>
              <input type="text" class="form-control" name="price">
            </div>
          </div>
          <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Email">Quantity:</label>
              <input type="text" class="form-control" name="quantity">
            </div>
          </div>
       
        
        
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:60px">
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
      </form>
    </div>
    
  
@endsection