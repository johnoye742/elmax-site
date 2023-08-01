<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Products</title>
</head>
<body>
    <form method="POST">
        @csrf
        <input type="text" name="name" placeholder="Product name">
        <input type="text" name="link" placeholder="Product link">
        <input type="text" name="cover" placeholder="Product image">
        <textarea name="description" placeholder="Product description"></textarea>
        <input type="submit" value="Submit">
    </form>
</body>
</html>