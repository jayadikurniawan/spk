<?php
require "../model/m_pencariKerja.php";

class c_pencariKerjaNotif
{
    public $model;

    public function __construct()
    {
        $this->model = new m_pencariKerja();
    }

    public function notif(){
        $data = $this->model->getListLamar();
        include "../view/v_pencarikerja_notif.php";
    }
}