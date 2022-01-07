<?php
namespace booosta\crypter;
use \booosta\Framework as b;
b::init_module('crypter');

abstract class Crypter extends \booosta\base\Module
{
  use moduletrait_crypter;

  public function encrypt($plaintext) { return $plaintext; }
  public function decrypt($ciphertext) { return $ciphertext; }
}
