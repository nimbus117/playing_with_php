#!/usr/bin/php
<?php

/**
 * Class TrueFalse
 * @author nimbus117
 */
class TrueFalse
{
  private $value;

  public function __construct($value = 0)
  {
    $this->value = $value;
  }

  public function getValue()
  {
      return $this->value;
  }
  
  public function setValue($value)
  {
      $this->value = $value;
  }

  public function testValue()
  {
    if ($this->value) {
      return "the value is true\n";
    } else {
      return "the value is false\n";
    }
  }
}

$trueFalse = new TrueFalse();
echo $trueFalse->getValue(), "\n", $trueFalse->testValue();
$trueFalse->setValue("some string");
echo $trueFalse->getValue(), "\n", $trueFalse->testValue();

var_dump($argv);
/* command line args are treated as stirngs, use FILTER_VALIDATE_BOOLEAN */
$bool = count($argv) >=2 ? filter_var($argv[1], FILTER_VALIDATE_BOOLEAN) : null;
$trueFalse->setValue($bool);
echo $trueFalse->testValue();
