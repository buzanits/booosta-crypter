<?php
namespace booosta\crypter;

\booosta\Framework::add_module_trait('webapp', 'crypter\webapp');

trait webapp
{
  protected function encrypt($plaintext)
  {
    $crypterclass = $this->config('crypter_class') ?: 'aes256';

    $crypter = $this->makeInstance($crypterclass);
    return $crypter->encrypt($plaintext);
  }

  protected function decrypt($ciphertext)
  {
    $crypterclass = $this->config('crypter_class') ?: 'aes256';

    $crypter = $this->makeInstance($crypterclass);
    return $crypter->decrypt($ciphertext);
  }
}
