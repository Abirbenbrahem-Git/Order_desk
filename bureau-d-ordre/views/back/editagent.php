<?php
include_once '../../Controller/agentC.php';
include_once '../../Model/agent.php';
$agentC = new agentC();

if (isset($_GET['cin'])){
    $agentEdit = $agentC->getagentbycin($_GET['cin']);
}

if(isset($_POST['cin']) &&
    isset($_POST['nom']) &&
    isset($_POST['prenom']) &&
    isset($_POST['mail']) &&
    isset($_POST['motdepasse']) &&
    isset($_POST['role']) 
) {
    $agent = new agent($_POST['cin'],$_POST['nom'],$_POST['mail'],$_POST['prenom'],$_POST['motdepasse'],$_POST['role']);
    $agentC->modifier_agent($agent,$_POST['cin']);
    header('Location: showagent.php');
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
                    <a href="#"><i class="fa fa-bar-chart-o"></i>Gestion Des Demandes</a>
                </li>

            
            </ul>
        </div>

    </nav>
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper" >
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h2>modifier agent </h2>
                </div>
            </div>
            <form method="post" action="">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>cin</label>
                            <input class="form-control" name="cin" value="<?php echo $agentEdit['cin'] ?>" readonly />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>nom</label>
                            <input class="form-control" name="nom" value="<?php echo $agentEdit['nom'];?>" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>mail</label>
                            <input class="form-control" name="mail"  value="<?php echo $agentEdit['mail'];?>"/>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>prenom</label>
                            <input class="form-control" name="prenom" value="<?php echo $agentEdit['prenom'];?>"/>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>motdepasse</label>
                            <input class="form-control" name="motdepasse"  value="<?php echo $agentEdit['motdepasse'];?>"/>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>role</label>
                            
                            <select id="role" name="role" class="field">
						<option> Agent</option>
						<option> Admin</option>
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

