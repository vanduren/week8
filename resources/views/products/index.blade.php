@extends('layouts.app')

@section('content')
<div>
    Maak nieuw melkproduct:
    <form action="{{ route('product.create') }}" method="GET">
        <div>
        <input type="submit" value="maak product" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        </div>
    </form>
</div>
    @foreach ($products as $product)
        <div class="bg-blue-100 hover:bg-blue-700">
        <a href="{{ route('product.show', $product) }}">
            {{ $product->name }}
        </a>
        {{ $product->price/100 }}
        <form action="{{ route('product.destroy', $product) }}" method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" value="verwijder">
        </form>
        <br>
        </div>
    @endforeach
@endsection
