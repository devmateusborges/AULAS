<?php 
include ("./model/Bank.php");
include ("./model/Legal.php");
include ("./model/Physical.php");

$holder ="Mateus";
$numberAccount ="895623147";
$numberAgency ="235";
$dateOpen ="27/05/2003";
$balance = 15;


$accountPhysical = new  AccountPhysical($holder, $numberAccount,$numberAgency, $dateOpen, $balance,"428.508.584.08","452136987");
$accountLegal = new  AccountPhysical($holder, $numberAccount,$numberAgency, $dateOpen, $balance,"4524564525","25145245");
    