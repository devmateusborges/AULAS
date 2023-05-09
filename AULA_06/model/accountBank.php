<?php
class Bank
{
public $holder;
public $accountNumber;
public $agencyNumber;
public $dateOpened;
public int $balance = 0;

function __construct($holder, $accountNumber, $agencyNumber, $dateOpened, $balance){
  $this->holder = $holder;
  $this->accountNumber = $accountNumber;
  $this->agencyNumber = $agencyNumber;
  $this->dateOpened = $dateOpened;
  $this->balance = $balance;

  echo "<pre><br/>".$this->holder.", Parabens pela nova conta Data de criação ".$this->dateOpened."</pre>";
}


function getAccount()
{
  return $this->holder . "<pre><br/>Parabens pela nova conta Data de criação</pre>" . $this->dateOpened;
}

function deposit($value)
{
  $newValue = $this->balance += $value;
  $oldValue = $this->balance - $value;
  
  return "<pre><br/>Valor antigo R$".$oldValue.",00 </br>valor depositado R$". $value. ",00 </br>Total em conta R$".$newValue.",00 </pre>";
}

function withdraw($value)
{
  $newValue =  $this->balance -= $value;
  $oldValue =  $value;

  return "<pre><br/>Saque de R$". $oldValue . ",00"." Valor atual da conta R$".$newValue.",00 </pre>";
}
}