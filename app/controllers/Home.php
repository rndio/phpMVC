<?php 

class Home extends Controller{
    public function index(){
        $data['title'] = APPTITLE . SEPARATOR . 'Home';
        $data['nama'] = $this->model('User_model')->getUser();
        $this->view('templates/header', $data);
        $this->view('home/index');
        $this->view('templates/footer');
    }

    public function error404(){
        $data['title'] = '404 - Not Found';
        $this->view('home/error/404',$data);
    }
}

