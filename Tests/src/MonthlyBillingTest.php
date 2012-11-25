<?php
include __DIR__ . '/../../src/Users.php';
include __DIR__ . '/../../src/MonthlyBilling.php';

class MonthlyBillingTest extends PHPUnit_Framework_TestCase
{
  /**
   * @var MonthlyBilling
   */
  protected $billing;

  public function setUp()
  {

      parent::setUp();
      $this->billing = new MonthlyBilling();
  }

  public function testWillBillUsersWhoAreSubscribed()
  {
    $res = $this->billing->billUsers();
    $this->assertEquals(6, $res['billed']);
  }

  public function testWillNotBillUsersWhoAreNotSubscribed()
  {
    $res = $this->billing->billUsers();
    $this->assertEquals(4, $res['notBilled']);
  }
}
