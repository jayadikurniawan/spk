<?php
require "../model/m_admin.php";

class c_admin
{
    public $model;

    public function __construct()
    {
        $this->model = new m_admin();
    }
    public function getListPencariKerja()
    {
        return $this->model->getListPencariKerja();
    }

    public function getListPemberiKerja()
    {
        return $this->model->getListPemberiKerja();
    }

    public function getDetailPemberiKerja($id)
    {
        return $this->model->getDetailPemberiKerja($id);
    }

    public function updatePemberiKerja($id, $password)
    {
        $this->model->updatePemberiKerja($id, $password);
        header("location:../view/v_admin_pemberikerja.php");
    }
}