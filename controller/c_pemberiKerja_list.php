<?php
require "../model/m_pemberiKerja.php";

class c_pemberiKerjaList
{
    public $model;

    public function __construct()
    {
        $this->model = new m_pemberiKerja();
    }

    public function list(){
        $data = $this->model->listApl();
        include "../view/v_pemberiKerja_list.php";
    }
}