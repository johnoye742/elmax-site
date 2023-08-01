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
        <input type="text" name="name" placeholder="Product name"><br/>
        <input type="text" name="price" placeholder="Product price"><br/>
        <input type="text" name="category" placeholder="Category"><br/>
        <input type="text" name="cover" placeholder="Product image"><br/>
        <input type="text" name="owner" placeholder="Product owner"><br/>
        <input type="text" name="link" placeholder="Product link (optional)"><br/>
        <textarea name="description" placeholder="description"></textarea>
        <select name="type" default="ser">
            <option>Affiliate</option>
            <option>Dropshipping</option>
        </select><br/>
        <input type="submit" value="Submit">
    </form>
</body>
</html>