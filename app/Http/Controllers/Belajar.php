<?php

namespace App\Http\Controllers;

use app\Http\Controllers\Controller;
use illuminate\Http\Request;
use App\Http\Controllers\FormController;

Class Belajar{
    public $var_test="";
    public function __construct(){
        $this->var_test="text";
    }
    public function view(){
        // memanggil dengan Object
        // Membuat Object FormController ("new" menandakan Object)
        // $Form = new FormController(); 
        // return $Form->get_nomor_peserta();
        /**memanggil tanpa Object */
        return FormController::$nama_peserta;
    }
}
