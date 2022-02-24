<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Calculadora de CUM</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.rtl.min.css"/>
</head>
<body>
    <?php
       // session_start();
    ?>
<div class="container">
    <h1 class="page-header text-center">Calculadora de CUM</h1>
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <a href="#addnew" class="btn btn-primary" data-toggle="modal" data-bs-target="#addnew"><span class="glyphicon glyphicon-plus"></span> Agregar materia</a>
            
            <table class="table table-bordered table-striped" style="margin-top:20px;">
                <thead>
                    <th>Codigo</th>
                    <th>Nombre</th>
                    <th>Uv</th>
                    <th>Notas</th>
                    <th>Acciones</th>
                </thead>
                <tbody>
                    <?php

                        $materias = simplexml_load_file('materias.xml');
                        $numerador = 0;
                        $denominador = 0;
                        $i = 0;
                        $index = 0;
                        //$_SESSION['codigo'] = array();


                        foreach ($materias->materia as $row) {
                            $denominador += $row->uvs;
                            $numerador += $row->uvs * $row->nota;
                            //$_SESSION['codigo'][$i] = (string)$row;
                            //$i++;
                    ?>
                    
                    <?php include('editar_modal.php'); ?>
                    <tr>
                        <td><?=$row->codigo?></td>
                        <td><?=$row->nombre?></td>
                        <td><?=$row->uvs?></td>
                        <td><?=$row->nota?></td>
                        <td>
                            <a data-target="#update_<?php echo $row->codigo; ?>" data-toggle="modal" class="btn btn-success">Editar</a>
                            <a data-target="#delete_<?php echo $row->codigo; ?>" data-toggle="modal" class="btn btn-danger">Borrar</a>
                        </td>
                    </tr>
                    
                    <?php include('borrar_modal.php'); ?>
                    <?php
                    
                        $index++;
                        }

                        if($denominador != 0) {
                            $cum = round($numerador / $denominador, 1);
                        }
                    ?>
                </tbody>
            </table>
            <?php
                if(isset($cum)) {
                    echo "<h2>CUM: $cum</h2>";
                }
            ?>
        </div>
    </div>
</div>
<?php include('nueva_modal.php'); ?>
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<?php
    if (isset($_GET['exito'])) {
        
?>
<script>
    alertify.success('Cambios realizados!!');
</script>

<?php
    }
?>
</body>
</html>