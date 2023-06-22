<?php
require "../model/m_pencariKerja.php";

class c_pencariKerjaSearch
{
    public $model;

    public function __construct()
    {
        $this->model = new m_pencariKerja();
    }

    public function search(){
        $data = $this->model->getListPekerjaan();
        include "../view/v_pencarikerja_search.php";
    }

}