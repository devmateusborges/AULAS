<?php
class AccountLegal  extends  Bank
{
public $CPF;
public $RG;


function __construct($holder, $accountNumber, $agencyNumber, $dateOpened, $balance,$CPF,$RG ){
    parent::__construct($holder, $accountNumber, $agencyNumber, $dateOpened, $balance);
  $this->$CPF = $CPF;
  $this->$RG = $RG;

  echo "<pre> CPF : ".$CPF."RG : ".$RG."</pre>";
}}