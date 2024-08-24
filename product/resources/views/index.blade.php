<!-- index.blade.php for products -->
@extends('layouts.app')

@section('content')
   <h1>Products List</h1>
   <a href="{{ route('products.create') }}">Create Product</a>
   <ul>
       @foreach($products as $product)
           <li>{{ $product->product_name }} - <a href="{{ route('products.edit', $product->id) }}">Edit</a> - <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
               @csrf
               @method('DELETE')
               <button type="submit">Delete</button>
           </form></li>
       @endforeach
   </ul>
@endsection
