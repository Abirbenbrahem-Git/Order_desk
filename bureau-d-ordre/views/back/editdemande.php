<?php
include_once '../../Controller/demandeC.php';
include_once '../../Model/demande.php';
$demandeC = new demandeC();

if (isset($_GET['reference'])){
    $demandeEdit = $demandeC->getdemandebyreference($_GET['reference']);
}

if(isset($_POST['reference']) &&
    isset($_POST['objet']) &&
    isset($_POST['type']) &&
    isset($_POST['expediteur']) &&
    isset($_POST['destinateur']) &&
    isset($_POST['details']) &&
    isset($_POST['document']) &&
    isset($_POST['traitement']) 
) {
    $demande = new demande($_POST['reference'],$_POST['objet'],$_POST['expediteur'],$_POST['type'],$_POST['destinateur'],$_POST['details'],$_POST['document'],$_POST['traitement']);
    $demandeC->modifier_demande($demande,$_POST['reference']);
    header('Location: showdemande.php');
}



?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Simple Responsive Admin</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>



<div id="wrapper">
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="adjust-nav">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <img src="assets/img/logo.png" />
                </a>
            </div>

            <span class="logout-spn" >
                  <a href="#" style="color:#fff;">LOGOUT</a>

                </span>
        </div>
    </div>
    <!-- /. NAV TOP  -->
    <nav class="navbar-default navbar-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="main-menu">


                <li >
                    <a href="" ><i class="fa fa-desktop "></i>Dashboard <span class="badge">Included</span></a>
                </li>


               
                <li class="active-link">
                    <a href="showagent.php"><i class="fa fa-edit "></i>Gestion Des Agents</a>
                </li>



                <li>
                    <a href="addagent.php"><i class="fa fa-qrcode "></i>Ajouter Agent</a>
                </li>
                <li>
                    <a href="showdemande.php"><i class="fa fa-bar-chart-o"></i>Gestion Des Demandes</a>
                </li>

                <li>
                    <a href="#"><i class="fa fa-edit "></i>My Link Three </a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-table "></i>My Link Four</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-edit "></i>My Link Five </a>
                </li>
            </ul>
        </div>

    </nav>
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper" >
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h2>modifier demande </h2>
                </div>
            </div>
            <form method="post" action="">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>reference</label>
                            <input class="form-control" name="reference" value="<?php echo $demandeEdit['reference'] ?>" readonly />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>objet</label>
                            <input class="form-control" name="objet" value="<?php echo $demandeEdit['objet'] ?>" readonly />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>expediteur</label>
                            <input class="form-control" name="expediteur" value="<?php echo $demandeEdit['expediteur'];?>"readonly/>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>type</label>
                            <input class="form-control" name="type" value="<?php echo $demandeEdit['type'];?>"readonly/>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>destinateur</label>
                            <input class="form-control" name="destinateur"  value="<?php echo $demandeEdit['destinateur'];?>"/>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>details</label>
                            <input class="form-control" name="Détails" value="<?php echo $demandeEdit['details'];?>"/>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>reference</label>
                            <input class="form-control" name="reference" value="<?php echo $demandeEdit['document'] ?>" readonly />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>traitement</label>
                            <select id="traitement" name="traitement" class="field">
						<option> Non Traité</option>
						<option> Traité</option>
					</select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">modifier</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <!-- /. ROW  -->
        <hr />

        <!-- /. ROW  -->
    </div>
    <!-- /. PAGE INNER  -->
</div>
<!-- /. PAGE WRAPPER  -->
</div>
<div class="footer">


    <div class="row">
        <div class="col-lg-12" >
            &copy;  2014 yourdomain.com | Design by: <a href="http://binarytheme.com" style="color:#fff;"  target="_blank">www.binarytheme.com</a>
        </div>
    </div>
</div>


<!-- /. WRAPPER  -->
<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
<!-- JQUERY SCRIPTS -->
<script src="assets/js/jquery-1.10.2.js"></script>
<!-- BOOTSTRAP SCRIPTS -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- CUSTOM SCRIPTS -->
<script src="assets/js/custom.js"></script>


</body>
</html>

