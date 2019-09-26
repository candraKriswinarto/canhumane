<?php 
class Posts extends CI_Controller {
  public function index() {
    
    $data['title'] = 'Latest Posts';

    // $url = 'https://jsonplaceholder.typicode.com/posts';
    // $urlData = file_get_contents($url);
    // $data = json_decode($urlData, true);


    $this->load->view('templates/header', $data);
    $this->load->view('posts/index', $data);
    $this->load->view('templates/footer');
  }
}

