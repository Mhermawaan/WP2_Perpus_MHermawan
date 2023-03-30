<?php
class Latihan1 extends CI_Controller
{
    public function index()
    {
        echo "selamat datang....selamat belajar web programing";
        // $this -> load -> view ('view-Latihan1');
    }
    public function Penjumlahan($n1, $n2)
    {
        $this->load->model('Model_Latihan1');
       $data['nilai1']=$n1;
       $data['nilai2']=$n2;
       $data ['hasil']=$this ->Model_Latihan1->jumlah($n1,$n2);
       $this -> load ->view('view-latihan',$data);
    }
}