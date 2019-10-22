<?php
require_once 'database.php';
?>
<div class="container">
<?php
if(isset($_POST['addnew'])){
    if( empty($_POST['nombre']) || empty($_POST['telefono'])
        || empty($_POST['email']) || empty($_POST['curriculum']) )
    {
        echo "Please fillout all required fields";
    }else{
        $nombre = $_POST['nombre'];
        $telefono = $_POST['telefono'];
        $email = $_POST['email'];
        $curriculum = $_POST['curriculum'];
        $sql = "INSERT INTO candidatos (nombre,telefono,email,curriculum)
        VALUES('$nombre','$telefono','$email','$curriculum')";

        if( $connect->query($sql) === TRUE){
            echo "<div class='alert alert-success'>Successfully added new user</div>";
        }else{
            echo "<div class='alert alert-danger'>Error: There was an error while adding new user</div>";
        }
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
                                            <input type="submit" name="addnew" class="btn btn-success" value="Add New">
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