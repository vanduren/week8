<form action="{{ route('product.store') }}" method="POST">
    @csrf
    <input type="text" name="name"><br>
    <input type="text" name="price"><br>
    <input type="submit" value="bewaar">
</form>
