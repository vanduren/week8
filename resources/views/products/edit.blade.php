<form action="{{ route('product.update', $product) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="name" value={{ $product->name }}><br>
    <input type="text" name="price" value={{ $product->price }}><br>
    <input type="submit" value="werk bij">
</form>
