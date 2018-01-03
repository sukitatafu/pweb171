.<?php
/**
*
*/
class member
{
  private $nama;
  private $warna;

  private $data = [
    '51015004' => ['nama' => 'Billy Tanyawan','warna'=>'ddeeff'],
    '51015001' => ['nama' => 'Ahmad Eril','warna'=>'ddffee'],
    '51015002' => ['nama' => 'Agung Ashari','warna'=>'eeffdd'],
  ];
  function member ($nim){
    $this->nama = $this->data[$nim]['nama'];
    $this->warna = $this->data[$nim]['warna'];
  }
  function getnama(){
    return $this->nama;
  }
  function getwarna(){
    return $this->warna;
  }
}

?>
