{{ $product->name }}<br>
{{ $product->price/100 }}<br>

<a href="{{ route('product.edit', $product) }}">werk bij</a>
