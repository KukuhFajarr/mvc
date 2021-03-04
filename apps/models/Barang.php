<?php
/**
 *
 */
class barang
{
  private $id;
  private $nama;
  private $qty;

  function __construct()
  {
    $this->id="A1";
    $this->nama="beras";
    $this->qty="100";
  }

  public function getData(){
    return "data model ada $this->nama, $this->id, $this->qty";

  }

  public function getDataOne()
  {
    $data=[
      'id' => $this->id,
      'nama' => $this->nama,
      'qty' => $this->qty
    ];
    return $data;
  }

}

 ?>
