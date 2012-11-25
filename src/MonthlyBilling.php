<?php

class MonthlyBilling
{
  public function billUsers()
  {
    $cnt = 0;
    foreach( Users::getSubscribed() as $userStatus ) {
      Users::chargeUser($userStatus) ? $cnt++ : false;
    }

    return array('billed' => $cnt, 'notBilled' => count(Users::getUsers()) - $cnt);
  }
}
