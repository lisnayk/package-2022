<?php
namespace Package\Web2022;

class Calculator
{
  /**
   * @param int $a
   * @param int $b
   * @return int
   */
  public function add(int $a, int $b):int
  {
    return $a + $b;
  }

  /**
   * @param int $a
   * @param int $b
   * @return int
   */
  public function mul(int $a, int $b):int
  {
    return $a *$b;
  }

  public function __construct()
  {

  }



}
