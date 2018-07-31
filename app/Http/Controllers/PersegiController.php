<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersegiController extends Controller
{
    public function persegi($angka1,$angka2)
    {

      $hasil = $angka1 * $angka2;

      return $hasil;

    }
}
