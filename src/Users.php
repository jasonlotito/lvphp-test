<?php

class Users
{
  public static function getUsers( )
  {
    return array(1,0,0,0,1,1,0,1,1,1);
  }

  public static function getSubscribed()
  {
      $ret = array();
      $users = self::getUsers();
      foreach ($users as $user) {
          if ( $user === 1 ){
              $ret[] = $user;
          }
      }

      return $ret;
  }

  public static function chargeUser($user)
  {
    return true;
  }
}
