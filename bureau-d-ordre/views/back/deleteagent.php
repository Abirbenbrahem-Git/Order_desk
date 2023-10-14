<?php

include_once '../../Controller/agentC.php';
$agentC = new agentC();
if (isset($_GET['cin'])){
    $agentC->supprimer_agent($_GET['cin']);
    header('Location: showagent.php');
}
header('Location: showagent.php');