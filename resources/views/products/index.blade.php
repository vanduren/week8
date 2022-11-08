Maak nieuw melkproduct:
<form action="{{ route('product.create') }}" method="GET">
    <input type="submit" value="maak product">
</form>

@foreach ($products as $product)
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
@endforeach
