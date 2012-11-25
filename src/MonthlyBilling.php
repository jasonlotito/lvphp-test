<?php

class MonthlyBilling
{
  public function billUsers()
  {
    $cnt = 0;

    // I don't like Users in Monthly Billing
    // Let's remove that
    foreach( Users::getSubscribed() as $userStatus ) {
      Users::chargeUser($userStatus) ? $cnt++ : false;
    }

    return array('billed' => $cnt, 'notBilled' => count(Users::getUsers()) - $cnt);
  }
}
