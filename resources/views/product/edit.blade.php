@extends('layouts.app')

@section('content')

<div class="container">
  @if(session()->has('message'))
  <div class="alert alert-success">
  <li>{{session()->get('message')}}<li>
  </div>
  @endif
      <form method="post" action="{{action('ProductController@update', $product['id'])}}">
      @csrf
      <input name="_method" type="hidden" value="PATCH">
      <div class="row">
        <div class="col-md-4"></div>
        <div class="form-group col-md-4">
          <label for="name">Name:</label>
          <input type="text" class="form-control" name="title" value="{{$product->title}}">
        </div>
      </div>
      <div class="row">
        <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="email">Price</label>
            <input type="number" class="form-control" name="price" value="{{$product->price}}">
          </div>
        </div>
      <div class="row">
        <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="number">Quantity</label>
            <input type="text" class="form-control" name="quantity" value="{{$product->quantity}}">
          </div>
        </div>
      
      <div class="row">
        <div class="col-md-4"></div>
        <div class="form-group col-md-4" style="margin-top:60px">
          <button type="submit" class="btn btn-success" style="margin-left:38px">Update</button>
        </div>
      </div>
    </form>
  </div>
@endsection