@extends('layouts.app')

@section('content')

    <div class="container">
    <br />
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>title</th>
        <th>Price</th>
        <th>Quantity</th>
        
      </tr>
    </thead>
    <tbody>
      
      @foreach($products as $product)
     
      <tr>
        <td>{{$product['id']}}</td>
        <td>{{$product['title']}}</td>
        
        <td>{{$product['price']}}</td>
        <td>{{$product['quantity']}}</td>
        <td><a href="{{action('ProductController@edit', $product['id'])}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('ProductController@destroy', $product['id'])}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
       
        
       
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>

@endsection