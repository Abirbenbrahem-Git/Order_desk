
<?php
include_once '../../Controller/agentC.php';
$agentC = new agentC();
$liste = $agentC->afficher_agent(); // appel ftio affichage

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
                  <a href="../../pfa/Page d'acceuil/accueil.html" style="color:#fff;">LOGOUT</a>

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

               
            </ul>
        </div>

    </nav>
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper" >
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h2>Affichage des Agents </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h5>Voici la liste des agents:</h5>
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>cin</th>
                            <th>nom</th>
                            <th>prenom</th>
                            <th>mail</th>
                            <th>motdepasse</th>
                            <th>role</th>
                         
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach ($liste as $agent){
                        ?>
                        <tr>
                            <td><?php echo $agent['cin']; ?></td>
                            <td><?php echo $agent['nom']; ?></td>
                            <td><?php echo $agent['prenom']; ?></td>
                            <td><?php echo $agent['mail']; ?></td>
                            <td><?php echo $agent['motdepasse']; ?></td>
                            <td><?php echo $agent['role']; ?></td>
                   
                            <td>
                                <a href="deleteagent.php?cin=<?php echo $agent['cin']; ?>" class="btn btn-danger">supprimer</a>
                                <a href="editagent.php?cin=<?php echo $agent['cin']; ?>" class="btn btn-warning">modifier</a>
                            </td>
                        </tr>
                        <?php
                        }
                        ?>

                        </tbody>
                    </table>

                </div>

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
            &copy;  2023 | LABORATOIRE MÉDIS <a href="" style="color:#fff;"  target="_blank"></a>
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
