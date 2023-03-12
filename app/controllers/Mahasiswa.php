<?php 
class Mahasiswa extends Controller{

  public function index(){
    $data['title'] = APPTITLE . SEPARATOR . 'Daftar Mahasiswa';
    $data['mhs'] = $this->model('Mahasiswa_model')->getAllMahasiswa();
    $this->view('templates/header',$data);
    $this->view('mahasiswa/index',$data);
    $this->view('templates/footer');
  }

  public function detail($id = null){
    if ( is_null($id) ) {
      die('Parameter Not Found');
    }

    $data['title'] = APPTITLE . SEPARATOR . 'Detail Mahasiswa';
    $data['mhs'] = $this->model('Mahasiswa_model')->getMahasiswaById($id);
    $this->view('templates/header',$data);
    $this->view('mahasiswa/detail',$data);
    $this->view('templates/footer');
  }

  public function tambah(){
    if ( $this->model('Mahasiswa_model')->tambahDataMahasiswa($_POST) > 0 ) {
      Flasher::setFlash('Berhasil', 'ditambahkan', 'success');
      header('Location: ' . BASEURL . '/mahasiswa');
      exit;
    }else {
      Flasher::setFlash('Gagal', 'ditambahkan', 'danger');
      header('Location: ' . BASEURL . '/mahasiswa');
      exit;
    }
  }
}
