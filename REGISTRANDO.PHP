<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="START.CSS">
<title>Inicio Metaclub</title>

<form name="form" action="START.PHP" method="POST">
    <section class="form-register">
        <input class="controls" type="text" id="nombre_jugador" placeholder="Ingrese su Nombre" name="nombre_jugador" required>
        <a href="STARTXD.PHP"> Aún no se ha registrado </a>
        <input class="botons" type="submit" value="OK" name="holo">
    </section>
</form>

<div class="contenedor">

<!-- <button class="btn-1">Boton1</button>
<button class="btn-2">Boton2</button> -->

<a href="#" class="btn-1">Salir<span class="button__icon1"></span><ion-icon name="close-outline"></ion-icon></a>
<a href="#" class="btn-2">Resumen<span class="button__icon2"></span><ion-icon name="search-outline"></ion-icon></a>
<a href="HUB.HTML" class="btn-3">Jugar<span class="button__icon3"></span><ion-icon name="checkmark-outline"></ion-icon></a>
</div>

<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>
</html>