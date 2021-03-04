<?php
class Home extends Controller{

  private $dt;
  private $df;

  public function __construct(){
    $this->dt = $this->loadmodel("barang");
    $this->df = $this->loadmodel("daftarBarang");
  }

  public function index(){
    echo "action index";
  }

  public function home($data1, $data2){
    echo "action home dengan data1 = $data1 & data2 = $data2";
  }

  public function lihatData($id){
    $data = $this->df->getDataById($id);

    $this->loadview('template/header', ['title'=>'detail barang']);
    $this->loadview('home/detailbarang', $data);
    $this->loadview('template/footer');
  }

  public function listbarang(){
    $data = $this->df->getAllData();
    $this->loadview('template/header', ['title'=>'List Barang']);
    $this->loadview('home/listbarang', $data);
    $this->loadview('template/footer');

  }

  public function insertbarang(){
    if (!empty($_POST)) {
      if ($this->df->tambahBarang($_POST)) {
        header('Location: '.BASE_URL.'index.php?r=home/listbarang');
        exit;
      }
    }
    $this->loadview('template/header', ['title'=>'insert barang']);
    $this->loadview('home/insert');
    $this->loadview('template/footer');
  }

  public function updatebarang($id){
    $data = $this->df->getDataById($id);

    if (!empty($_POST)) {
      if ($this->df->updateBarang($_POST)) {
        header('Location: '.BASE_URL.'index.php?r=home/listbarang');
        exit;
      }
    }

    $this->loadview('template/header', ['title'=>'update barang']);
    $this->loadview('home/update', $data);
    $this->loadview('template/footer');
  }
}

?>
