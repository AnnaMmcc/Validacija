<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create Product</title>
</head>
<body>
<form method="post" action="/create-product">
    @if($errors->any())
        <p>Greska: {{ $errors->first() }}</p>
    @endif
    {{ csrf_field() }}
    <input type="text" name="name" id="name" placeholder="Unesite ime proizvoda">
    <input type="text" name="description" id="description" placeholder="Unesite opis proizvoda">
    <input type="number" name="amount" id="amount" placeholder="Unesite kolicinu proizvoda">
    <input type="number" name="price" id="price" placeholder="Unesite cenu proizvoda">
    <input type="text" name="image" id="image" placeholder="unesite sliku proizvoda">
    <button>Kreiraj proizvod</button>
</form>
</body>
</html>



