<?php
  /**
   *
   */
  class prostu
  {
      private $nama;
      private $program;

      private $data=[
        '51015003'=>['nama'=>'Sistem Informasi','program'=>'Diploma'],
        '51015004'=>['nama'=>'Sistem Informasi','program'=>'Sarjana'],
        '51015006'=>['nama'=>'Sistem Informasi','progrma'=>'sarjana'],
        '51015012'=>['nama'=>'Sistem Informasi','progrma'=>'sarjana'],
        '51015010'=>['nama'=>'Sistem Informasi','progrma'=>'sarjana'],
        '51015008'=>['nama'=>'Sistem Informasi', 'progrma'=>'sarjana']
      ]  ;
      function prostu($nim){
        $this->nama = $this->data[$nim]['nama'];
        $this->nama = $this->data[$nim]['program'];
      }

      function getnama(){
        return $this->nama;
      }
      function getprogram(){
        return $this->program;
      }
  }

 ?>
