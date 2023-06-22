<?php
require "../model/m_pemberiKerja.php";

class c_pemberiKerjaProfile
{
    public $model;

    public function __construct()
    {
        $this->model = new m_pemberiKerja();
    }

    public function profile($pelamar, $idpekerjaan, $status){
        $row = $this->model->getProfile($pelamar);
        include "../view/v_pemberiKerja_showprofile.php";
    }

    public function apply($status, $pelamar, $idpekerjaan){
        $this->model->apply($status, $pelamar, $idpekerjaan);
    }
}