<?php include("templates/cabecera.php"); ?>
<div class="container-fluid bg-warning text-center">
    <h2>Libros registrados</h2>
</div>
<table class="table table-hover">
    <thead>
        <tr class="text-center">
        <th scope="col">ISBN</th>
        <th scope="col">Titulo</th>
        <th scope="col">Genero</th>
        <th scope="col">Editorial</th>
        <th scope="col">Edicion</th>
        <th scope="col">Año de publicacion</th>
        <th scope="col">Cantidad</th>
        <th scope="col">Nombre autor</th>
        <th scope="col">Ap. autor</th>
        <th scope="col">Am. autor</th>
        <th scope="col">Modificar</th>
        <th scope="col">Eliminar</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <th scope="row">1</th>
        <td>**</td>
        <td>***</td>
        <td>**</td>
        <td>***</td>
        <td>***</td>
        <td>***</td>
        <td>***</td>
        <td>**</td>
        <td>**</td>
        <td class="text-center"><a href=""><img src="img/editar.png" alt=""></a></td>
        <td class="text-center"><a href=""><img src="img/eliminar.png" alt=""></a></td>
        </tr>
    </tbody>
</table>
<?php include("templates/pie.php"); ?>