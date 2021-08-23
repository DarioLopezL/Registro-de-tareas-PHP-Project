<?php
    require "conexion.php";
    $data = $conexion->query("SELECT *FROM tasks");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">    
</head>
<body>
<div class="container">
    <form method="POST" action="inserta.php" class="form-inline">

    <div class="form-group mx-sm-3 mb-2">
        <label for="inputPassword2" class="sr-only"> crear</label>
        <input name="mytask" type="text" class="form-control" id="inputPassword2" placeholder="enter task">
    </div>
    <button type="submit" class="btn btn-primary mb-2">crear</button>
    </form>
    <table class="table"> 
        <thead> 
            <tr>
                <th>#</th>
                <th>nombre de la tarea</th>
                <th>Accion</th>
            </tr>
        </thead>
        <tbody>
            <?php while($rows = $data->fetch(PDO::FETCH_OBJ)):
            ?>            
            <tr> 

                <td><?php echo $rows->id; ?> </td>
                <td><?php echo $rows->name; ?></td>
                <td> <a href="delete.php?del_id= <?php echo $rows->id; ?>" class="btn btn-danger" >eliminar</a>  </td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>    
</div>        

<script src="https://strackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="" crossorigin="anonymous" >
</script>

<script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>


</body>
</html>