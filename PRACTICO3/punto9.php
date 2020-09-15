<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <form action="actionpunto9.php" method="POST">

    <div>
        <label for="name">Name</label><hr/>
        <input type="text" id="name" name="name">
    </div>
    <div>
        <label for="age">Age</label><hr/>
        <input type="number" id="age" name="age">
    </div>
    <div>
        <label for="sex">Sex</label><hr/>
        
        <fieldset>
            Masculino<input type="radio" name="sex" id="sex" value="Masculino">
            Femenino <input type="radio" name="sex" id="sex" value="Femenino">
        </fieldset>
    </div>
    
    <div>
        <button type="submit">Enviar</button>
    </div>
    </form>
</body>
</html>