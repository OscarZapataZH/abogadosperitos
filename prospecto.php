<?php
     
    require 'database.php';
 
    if ( !empty($_POST)) {
        // keep track validation errors
        $nombreError = null;
        $telefonoError = null;
        $emailError = null;
        $curriculumError = null;        
         

        // keep track post values
        $nombre = $_POST['nombre'];
        $telefono = $_POST['telefono'];
        $email = $_POST['email'];
        $curriculum = $_POST['curriculum'];        
         
        // validate input
        $valid = true;
        if (empty($nombre)) {
            $nombreError = 'Por favor ingresa un nombre';
            $valid = false;
        }
         
        if (empty($telefono)) {
            $telefonoError = 'Por favor ingresa el telefono';
            $valid = false;
        } 
         
        if (empty($email)) {
            $emailError = 'Por favor ingresa email';
            $valid = false;
        }

         if (empty($curriculum)) {
            $curriculumError = 'Por favor ingresa archivo';
            $valid = false;
        } 
         
        // insert data
        if ($valid) {
            $pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO candidatos (nombre,telefono,email,curriculum) values(?, ?, ?, ?)";
            $q = $pdo->prepare($sql);
            $q->execute(array($nombre,$telefono,$email, $curriculum));
            Database::disconnect();
            header("Location: prospecto.php");
        }
    }
?>

<!DOCTYPE html>
<!-- 
Template Name: Griffin - Responsive Bootstrap 4 Admin Dashboard Template
Author: Hencework
Support: support@hencework.com

License: You must have a valid license purchased only from templatemonster to legally use the template for your project.
-->
<html lang="en">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<body class="page-parent template-slider color-blue layout-full-width header-fixed subheader-transparent sticky-header sticky-white subheader-title-left">
<body>
    <!-- Preloader -->
    <div class="preloader-it">
        <div class="loader-pendulums"></div>
    </div>
    <!-- /Preloader -->
   
	<!-- HK Wrapper -->
	<div class="hk-wrapper hk-alt-nav">

        <!-- Top Navbar -->
        
        <!-- /Top Navbar -->

        <!-- Main Content -->
        <div class="hk-pg-wrapper">
            <br>
            <br>

            <!-- Container -->
            <div class="container-fluid">

                <!-- Title -->
                <div class="hk-pg-header">
                    <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="database"></i></span></span>Prospecto</h4>
                </div>
                <!-- /Title -->

                <!-- Row -->
                <div class="row">
                    <div class="col-xl-12">
                    <section class="hk-sec-wrapper">
                            <h5 class="hk-sec-title">Datos del usuario</h5>
                            <div class="row">
                                <div class="col-sm">
                                <form class="form-horizontal" action="prospecto.php" method="post">


                                        <div class="form-group row <?php echo !empty($nombreError)?'error':'';?> " >
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Nombre del plan</label>
                                            <div class="col-sm-10">                                            
                                            <input name="nombre" class="form-control" type="text"  placeholder="Nombre" value="<?php echo !empty($nombre)?$nombre:'';?>">
                                            <?php if (!empty($nombreError)): ?>
                                                <span class="help-inline"><?php echo $nombreError;?></span>
                                            <?php endif; ?>
                                            </div>
                                        </div>                         
                                        
                                        <div class="form-group row <?php echo !empty($telefonoError)?'error':'';?>">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Telefono</label>
                                            <div class="col-sm-10">
                                            <input name="telefono" class="form-control" type="text" placeholder="Telefono" value="<?php echo !empty($telefono)?$telefono:'';?>">
                                            <?php if (!empty($telefonoError)): ?>
                                                <span class="help-inline"><?php echo $telefonoError;?></span>
                                            <?php endif;?>
                                            </div>
                                        </div>                      

                                        <div class="form-group row <?php echo !empty($emailError)?'error':'';?>">
                                            <label for="inputPassword3" class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10">
                                            <input name="email" class="form-control" type="text"  placeholder="Email" value="<?php echo !empty($email)?$email:'';?>">
                                            <?php if (!empty($emailError)): ?>
                                                <span class="help-inline"><?php echo $emailError;?></span>
                                            <?php endif;?>
                                            </div>
                                        </div>
                                                            
                                        <div class="form-group row  <?php echo !empty($curriculumError)?'error':'';?>">
                                            <label for="inputPassword3" class="col-sm-2 col-form-label">Curriculum</label>
                                            <div class="col-sm-10">                                                
                                                <input name="curriculum" class="form-control" type="file"  placeholder="Curriculum" value="<?php echo !empty($curriculum)?$curriculum:'';?>">
                                                <?php if (!empty($curriculumError)): ?>
                                                    <span class="help-inline"><?php echo $curriculumError;?></span>
                                                <?php endif;?>
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
            
            <!-- /Footer -->

        </div>
        <!-- /Main Content -->

    </div>
    <!-- /HK Wrapper -->

    
    
</body>

</html>