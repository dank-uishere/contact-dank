<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FormController extends Controller
{
    // membuat properties untuk Form
    public $nomor_peserta = "21";
    public static $nama_peserta = "Raditya B. Raharjo";
    public $tgl_peserta = "27-03-2006";
    public $tpl_peserta = "Garut";
    public $asal_sekolah = "MA Al-irsyad";
    public $program_studi = "Sejarah";

    public static function get_nama_peserta(){
        // memanggil dengan static
        // return NamaClass::$nama_properties;
        return FormController::$nama_peserta;
    }

    public function get_nomor_peserta(){
        return $this->nomor_peserta;
    }

    public function get_tgl_peserta(){
        return $this->tgl_peserta;
    }

    public function get_tpl_peserta(){
        return $this->tpl_peserta;
    }

    public function get_asal_sekolah(){
        return $this->asal_sekolah;
    }

    public function get_program_studi(){
        return $this->program_studi;
    }

    // akses form dengan $_POST[''];
    function saveData(){
        return array(
            "no_peserta"=>$_POST['no_peserta'],
            "nama_peserta"=>$_POST['nama_peserta'],
            "tpl_peserta"=>$_POST['tpl_peserta'],
            "tgl_peserta"=>$_POST['tgl_peserta'],
            "asal_sekolah"=>$_POST['asal_sekolah'],
            "program_studi"=>$_POST['program_studi']
        );
    }

    function testDatabase(){
        return DB::select('select * from peserta_assessment');
    }
}
