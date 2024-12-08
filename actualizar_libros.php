<?php include ("templates/cabecera.php"); ?>
<?php

if (!empty($_GET['actualiza_libros'])) {
    include("conectar.php");
    $conexion= new OperacionesBd;
    $editar=$_GET['actualiza_libros'];
    $sql= "SELECT*FROM tabla libros Where id_libros='$editar';";
    $resultado=$conexion->mostrardatos($sql);
    foreach ($resultado as $row) {   

?>


<div class=" border border-start-0 shadow p-3 mb-5 bg-body-tertiary rounded">
<div class="container-fluid bg-warning text-center">
    <h2>Registro de libros</h2>
</div>

<form action="registro_libros.php" method="POST" class="row g-3 needs-validation pt-3" novalidate>
    <div class="col-md-4">
        <label for="validationCustom01" class="form-label">ISBN</label>
        <input type="text" class="form-control" id="isbn" value="<?php echo $row['isbn'] ?>" name="isbn" required>
    </div>
    <div class="col-md-4">
        <label for="validationCustom01" class="form-label">ID LOCAL</label>
        <input type="text" class="form-control" id="id_local" value="<?php echo $row['id_local'] ?>" name="id_local" required>
    </div>
    <div class="col-md-4">
        <label for="validationCustom02" class="form-label">TITULO</label>
        <input type="text" class="form-control" id="titulo" value="<?php echo $row['titulo'] ?>" name="titulo" required>
    </div>
    <div class="col-md-4">
        <label for="validationCustom03" class="form-label">GENERO</label>
        <input type="text" class="form-control" id="genero" value="<?php echo $row['genero'] ?>" name="genero" required>
    </div>
    <div class="col-md-4">
        <label for="validationCustom04" class="form-label">EDITORIAL</label>
        <input type="text" class="form-control" id="editorial" value="<?php echo $row['editorial'] ?>" name="editorial" required>
    </div>
    <div class="col-md-4">
        <label for="validationCustom05" class="form-label">EDICION</label>
        <input type="text" class="form-control" id="edicion" value="<?php echo $row['edicion'] ?>" name="edicion" required>
    </div>
    
    <div class="col-md-2">
        <label for="validationCustom06" class="form-label">AÑO DE PUBLICACION</label>
        <?php $cont = date('Y'); ?>
        <select class="form-control" id="ano_publ" name="ano_publ" value="<?php echo $row['ano_publ'] ?>" required>
        <?php while ($cont >= 1850) { ?>
            <option value="<?php echo($cont); ?>"><?php echo($cont); ?></option>
        <?php $cont = ($cont-1); } ?>
        </select>
    </div>
    <div class="col-md-4">
        <label for="validationCustom08" class="form-label">NOMBRE DEL AUTOR</label>
        <input type="text" class="form-control" id="nom_autor" value="<?php echo $row['nom_autor'] ?>" name="nom_autor" required>
    </div>
    <div class="col-md-4">
        <label for="validationCustom09" class="form-label">AP. DEL AUTOR</label>
        <input type="text" class="form-control" id="ap_autor" value="<?php echo $row['ap_autor'] ?>" name="ap_autor" required>
    </div>
    <div class="col-md-4">
        <label for="validationCustom10" class="form-label">AM. DEL AUTOR</label>
        <input type="text" class="form-control" id="am_autor" value="<?php echo $row['am_autor'] ?>" name="am_autor" required>
    </div>
    <div class="col-12 text-center">
        <button class="btn btn-primary" type="submit" value="Guardar">Guardar</button>
        <button class="btn btn-primary" type="submit">Cancelar</button>
    </div>
</form>
</div>
<?php
}} 
?>
<?php include("templates/pie.php"); ?>


<?php
if ($_SERVER['REQUEST_METHOD']=='POST') {

    include 'conectar.php';

    $obj = new OperacionesBd;

    $id_libros= $_POST['id_libros'];
    $isbn= $_POST['isbn'];
    $id_local= $_POST['id_local'];
    $titulo = $_POST['titulo'];
    $genero = $_POST['genero'];
    $editorial = $_POST['editorial'];
    $edicion = $_POST['edicion'];
    $ano_publ = $_POST['ano_publ'];
    $nom_autor = $_POST['nom_autor'];
    $ap_autor = $_POST['ap_autor'];
    $am_autor = $_POST['am_autor'];

    $sql ="INSERT INTO tabla libros(isbn,id_local, titulo, genero, editorial, edicion, ano_publ,cantidad,nom_autor, ap_autor, am_autor) 
    VALUES ('$isbn','id_local,''$titulo','$genero','$editorial','$edicion','$ano_publ','$cantidad','$nom_autor','$ap_autor','$am_autor');";
    $obj->guardardatos($sql);
    
}
?>