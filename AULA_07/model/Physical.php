<?php
class AccountPhysical extends  Bank
{
public $CNPJ;
public $INS;


function __construct($holder, $accountNumber, $agencyNumber, $dateOpened, $balance,$CNPJ,$INS){
  parent::__construct($holder, $accountNumber, $agencyNumber, $dateOpened, $balance);
  $this->$CNPJ = $CNPJ;
  $this->$INS = $INS;

  echo "<pre>CNPJ: ".$CNPJ."INS : ".$INS."</pre>";
}}