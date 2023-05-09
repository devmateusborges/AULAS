<?php 
include ("./model/accountBank.php");

$holder ="Mateus";
$numberAccount ="895623147";
$numberAgency ="235";
$dateOpen ="27/05/2003";
$balance = 15;

$account = new Bank($holder, $numberAccount,$numberAgency, $dateOpen, $balance);

echo $account->deposit(150);

echo $account->withdraw(10);