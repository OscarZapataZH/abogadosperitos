<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>    
</head>
<body>
    <p><br></p>
    <div class="container">
        <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>nombre</th>
                <th>email</th>
                <th>telefono</th>
                <th>archivo</th>
                <th>accion</th>
            </tr>        
        </thead>
        <tbody>
        <?php 
        require_once 'config.php';
        $stmt= $db ->prepare("select * from candidatos");
        $stmt->execute();
        while($row = $stmt->fetch()){
            ?>
            <tr>
             <td><?php echo $row['id_candidato']?></td>
             <td><?php echo $row['nombre']?></td>
             <td><?php echo $row['email']?></td>
             <td><?php echo $row['telefono']?></td>
             <td><?php echo $row['curriculum']?></td>
             <td><a href="archivos/<?php echo $row['curriculum'];?>" download="<?php echo $row['curriculum'];?>">descargar</a></td>                        
            </tr>
        
                    
        <?php
        }
        ?>
        </tbody>
        
        </table>
    
    </div>
</body>
</html>