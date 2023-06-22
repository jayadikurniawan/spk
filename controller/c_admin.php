<?php
require "../model/m_admin.php";

class c_admin
{
    public $model;

    public function __construct()
    {
        $this->model = new m_admin();
    }

    public function getListPemberiKerja()
    {
        $data = $this->model->getListPemberiKerja();
        include "../view/v_admin_pemberikerja.php";
    }

    public function getDetailPemberiKerja($id)
    {
        $data = $this->model->getDetailPemberiKerja($id);
        include "../view/v_admin_pemberikerja_edit.php";
    }

    public function updatePemberiKerja($username, $password, $newEmail, $newTelepon, $newNama, $newAlamat)
    {
        $this->model->updatePemberiKerja($username, $password, $newEmail, $newTelepon, $newNama, $newAlamat);
        header("location:../page_admin/list_pemberikerja.php");
    }

    public function getListPencariKerja()
    {
        $data = $this->model->getListPencariKerja();
        include "../view/v_admin_pencarikerja.php";
    }

    public function getDetailPencariKerja($id)
    {
        $data = $this->model->getDetailPencariKerja($id);
        include "../view/v_admin_pencarikerja_edit.php";
    }

    public function updatePencariKerja($id, $password, $email, $telepon, $nama, $umur, $alamat, $tanggallahir, $sex)
    {
        $this->model->updatePencariKerja($id, $password, $email, $telepon, $nama, $umur, $alamat, $tanggallahir, $sex);
        header("location:../page_admin/list_pencarikerja.php");
    }


    public function deletePemberiKerja($id)
    {
        $this->model->deletePemberiKerja($id);
        header("location:../page_admin/list_pemberikerja.php");
    }

    public function deletePencariKerja($id)
    {
        $this->model->deletePencariKerja($id);
        header("location:../page_admin/list_pencarikerja.php");
    }
}
