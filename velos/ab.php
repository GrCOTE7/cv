<?php

/**
 * Created by PhpStorm.
 * User: cote
 * Date: 13/02/17
 * Time: 04:47
 */
class A {
  protected $val = 2;

  /**
   * A constructor.
   * @param int $val
   */
  public function __construct($val = null) {
    $this->val = $val;
  }

  /**
   * @return int|null
   */
  public function getVal() {
    return $this->val;
  }

  /**
   * @param int|null $val
   */
  public function setVal($val) {
    $this->val = $val;
  }

  function aff($ok) {
    echo $ok . ' Oki ' . $this->val;
  }
}

class B {
  var $val = 3;
}

$maVar = new A(5);
$maVar->aff(7);
echo '<hr>';
echo $maVar->getVal();