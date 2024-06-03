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
        <!-- <label>Primer valor:</label>
        <input type="checkbox" name="list1" value="valor 1">
        <label>Segundo valor:</label>
        <input type="checkbox" name="list2" value="valor 2">
        <label>Tercer valor:</label>
        <input type="checkbox" name="list3" value="valor 3"> -->

        <!-- Radios -->

        <!-- <label for="mexico">Mexico</label>
        <input type="radio" name="pais" id="mexico" value="Mexico">
        <label for="colombia">Colombia</label>
        <input type="radio" name="pais" id="colombia" value="Colombia">
        <label for="peru">Peru</label>
        <input type="radio" name="pais" id="peru" value="Peru"> -->

        <!-- Multiples archivos -->

        <label for="galeria">Carga tus imagenes</label>
        <input type="file" multiple name="galeria[]" id="galeria" >

        <button type="submit">Mandar formulario</button>
    </form>
</body>
</html>