<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos de inputs</title>
</head>
<body>
    
    <form action="server.php" method="post" enctype="multipart/form-data">

        <!-- Input simple -->
        <!-- <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre"> -->
        
        <!-- Arreglos -->
        <!-- <label>Personas:</label>
        <input type="text" name="personas[]">
        <input type="text" name="personas[]">
        <input type="text" name="personas[]"> -->

        <!-- Arreglos asociativos-->
        <!-- <label>Persona nombre:</label>
        <input type="text" name="persona[nombre]">
        <label>Email:</label>
        <input type="email" name="persona[email]">
        <label>Edad:</label>
        <input type="number" name="persona[edad]"> -->

        <!-- Checkbox -->
        <label>Primer valor:</label>
        <input type="checkbox" name="list1" value="valor 1">
        <label>Segundo valor:</label>
        <input type="checkbox" name="list2" value="valor 2">
        <label>Tercer valor:</label>
        <input type="checkbox" name="list3" value="valor 3">

        <button type="submit">Mandar formulario</button>
    </form>
</body>
</html>