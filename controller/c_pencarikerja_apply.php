

<?php
require "../model/m_pencariKerja.php";

class c_pencariKerjaApply
{
    public $model;

    public function __construct()
    {
        $this->model = new m_pencariKerja();
    }

    public function getPekerjaan($id){
        $data = $this->model->getPekerjaan($id);
        include "../view/v_pencarikerja_apply.php";
    }

    public function apply($pelamar, $perusahaan, $posisi, $id, $status){
        $this->model->apply($pelamar, $perusahaan, $posisi, $id, $status);
    }
}