<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <form action="actionformpt7.php" method="POST">

    <div>
        <label for="typeSale">TypeSale</label>
        <input type="radio" name="typeSale" value="ropa">Ropa
        <input type="radio" name="typeSale" value="mascotas">Mascotas


        <label for="totalSale">TotalSale</label>
        <input type="number" name="totalSale">


        <button type="submit">Enviar</button>
    </div>

    </form>
    
</body>
</html>