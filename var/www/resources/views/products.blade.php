@extends('layout')
@section('title', 'Products')
@section('content')

<div class="container products">
  <a href="{{ route('create') }}" class="btn btn-primary">create</a>
 <div class="row">
   @foreach($products as $product)
   <div class="col-xs-18 col-sm-6 col-md-3">
     <div class="thumbnail">
       <img src="{{ $product->photo }}" width="500" height="300">
       <div class="caption">
         <h4>{{ $product->name }}</h4>
         <p>{{ $product->description }}</p>
         <p><strong>Price: </strong> {{ $product->price }}$</p>
         <form action="{{ route('destroy', ['id' => $product->id]) }}" method="POST">
          @method('delete')
          @csrf
          <button type="submit" class="btn btn-sm btn-danger">delete</button>
        </form>
       </div>
     </div>
   </div>
   @endforeach
 </div>
</div>

@endsection
