<?php 
/* 
require_once 'database.php';
 
if($_POST) {
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $curriculum = $_POST['curriculum'];
 
    $sql = "INSERT INTO candidatos (nombre, email, telefono, curriculum) VALUES ('$nombre', '$email', '$telefono', '$curriculum')";    
    if($connect->query($sql) === TRUE) {
        echo "<p>New Record Successfully Created</p>";
        echo "<a href='prospecto.php'><button type='button'>Back</button></a>";
        echo "<a href='index.php'><button type='button'>Home</button></a>";
    } else {
        echo "Error " . $sql . ' ' . $connect->connect_error;
    }
 
    $connect->close();
}
 */
?>
<?php
                                 require_once 'database.php';
                                 $sql=new mysqli(host,user,pass,db);
                                 if($_POST) {
                                    $nombre = $_POST['nombre'];
                                    $telefono = $_POST['telefono'];
                                    $email = $_POST['email'];
                                    $curriculum = $_POST['curriculum'];

                                    if($sql->connect_errno){
                                        die("Error de conexión: " . $objetoMysqli->mysqli_connect_errno() . ", " . $objetoMysqli->connect_error());
                                    }else{                                        
                                        $consulta="INSERT INTO candidatos (nombre, email, telefono, curriculum) VALUES ('$nombre', '$email', '$telefono', '$curriculum')";
                                        $resultado=$sql->query($consulta); 
                                        }
                                    }
                                                                               ?>



<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7 "> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]><html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<body class="page-parent template-slider color-blue layout-full-width header-fixed subheader-transparent sticky-header sticky-white subheader-title-left">

    <!-- Main Theme Wrapper -->
    <div id="Wrapper">
        <!-- Header Wrapper -->
        <div id="Header_wrapper">            
        </header>
    </div>
    <br>
    <!-- Preloader -->
    <div class="preloader-it">
        <div class="loader-pendulums"></div>
    </div>
    <!-- /Preloader -->
   
	<!-- HK Wrapper -->
	<div class="hk-wrapper hk-alt-nav">


        <!-- Main Content -->
        <div class="hk-pg-wrapper">            
            

            <!-- Container -->
            <div class="container-fluid">
<br>
<br>
<br>
                <!-- Title -->
                <div class="hk-pg-header">
                    <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="database"></i></span></span>Registrarse</h4>
                </div>
                <!-- /Title -->

                <!-- Row -->
                <div class="row">
                    <div class="col-xl-12">
                    <section class="hk-sec-wrapper">
                            <h5 class="hk-sec-title">Datos generales</h5>
                            <div class="row">
                                <div class="col-sm">
                                <form class="form-horizontal" action="prospecto.php" method="post">


                                        <div class="form-group row " >
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Nombre completo</label>
                                            <div class="col-sm-10">                                            
                                            <input name="nombre" class="form-control" type="text"  placeholder="Nombre completo" required>                                            
                                                <span class="help-inline"></span>                                            
                                            </div>
                                        </div>                         
                                        
                                        <div class="form-group row">
                                            <label for="inputPassword3" class="col-sm-2 col-form-label">Teléfono</label>
                                            <div class="col-sm-10">                                                
                                                <input name="telefono" type="text"  class="form-control" placeholder="Teléfono" required>                                                
                                                    <span class="help-inline"></span>                                                
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10">
                                            <input name="email" class="form-control" type="text" placeholder="Email" required >                                            
                                                <span class="help-inline"></span>                                            
                                            </div>
                                        </div>      


                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Currículum</label>
                                            <div class="col-sm-10">
                                            <input name="curriculum" class="form-control" type="file" placeholder="curriculum" required>                                            
                                            </div>
                                        </div>                                                        
                                                                                                                                    
                                                                            
                                        <div class="form-group row mb-0">
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary">Guardar</button>                                                
                                            </div>                
                                                                    
                                        </div>                                                                                                
                                    </form>                                    
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                <!-- /Row -->

            </div>
            <!-- /Container -->            
            <!-- Footer -->            
            <br>
            <!-- /Footer -->

        </div>
        <!-- /Main Content -->

    </div>
    <!-- /HK Wrapper -->


</body>

</html>