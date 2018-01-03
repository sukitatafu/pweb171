<?php
/**
 *
 */
class member
{
  private $nama;
  private $email;
  private $sex;
  private $warna;

  private $data = [
    '51015003'=>['nama'=>'Aprianto', 'email'=>'Aprianto@kharisma.ac.id', 'sex'=>'lk' ,'warna'=>''],
    '51015004'=>['nama'=>'Billy Tanyawan', 'email'=>'Biilytanyawan@kharisma.ac.id', 'sex'=>'lk' ,'warna'=>''],
    '51015006'=>['nama'=>'Evelyn Wijaya', 'email'=>'Evelyn@kharisma.ac.id', 'sex'=>'pr' ,'warna'=>''],
    '51015012'=>['nama'=>'Kenny Ivan', 'email'=>'kennyivan@kharisma.ac.id', 'sex'=>'lk' ,'warna'=>''],
    '51015010'=>['nama'=>'Ivan Dharmawan', 'email'=>'ivandarmawan@kharisma.ac.id', 'sex'=>'lk' ,'warna'=>''],
    '51015008'=>['nama'=>'Florencia Irene', 'email'=>'florencia@kharisma.ac.id', 'sex'=>'pr' ,'warna'=>''],
  ];

  function member($nim){
  $this->nama =$this->data[$nim]['nama'];
  $this->email=$this->data[$nim]['email'];
  $this->sex=$this->data['sex'];
  $this->warna=$this-data['warna'];
  }

  function getnama(){
    return $this->nama;
  }
  function getemail(){
    return $this->email;
  }
  function getsex(){
    return $this->sex;
  }
  function getwarna(){
    return $this->warna;
  }

}

 ?>
