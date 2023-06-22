<?php
require "../model/m_pemberiKerja.php";

class c_pemberiKerjaManage
{
    public $model;

    public function __construct()
    {
        $this->model = new m_pemberiKerja();
    }

    public function manage(){
        $data = $this->model->getListPekerjaan();
        include "../view/v_pemberiKerja_manage.php";
    }

    public function add($posisi, $perusahaan, $gaji, $deskripsi, $alamat, $tanggalPosting, $penerimaan, $id){
        $this->model->addPekerjaan($posisi, $perusahaan, $gaji, $deskripsi, $alamat, $tanggalPosting, $penerimaan, $id);
        header("Location: manage.php");
    }
}