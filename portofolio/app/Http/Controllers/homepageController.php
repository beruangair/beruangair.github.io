<?php

namespace App\Http\Controllers;

use DB;
use Symfony\Component\HttpKernel\Tests\Controllers;

class homepageController extends Controller
{
    public function index() {
      $logo = DB::select('SELECT logo FROM logo WHERE id_logo = 1');
      $navigation = DB::select('SELECT * FROM navigation');
      $sosmed = DB::select('SELECT * FROM sosmed');
      return view('homepage/index', compact('logo', 'navigation', 'sosmed'));
    }

    /*public function sosmed() {
        $sosmed = DB::select('select * from sosmed');
        return view('sosmed', compact('sosmed'));
    }

    public function insert() {
        DB::table('sosmed')->insert([
            ['facebook' => $_POST['facebook'], 'twitter' => $_POST['twitter'], 'youtube' => $_POST['youtube'], 'instagram' => $_POST['instagram']]
        ]);
        return redirect('sosmed');
    }

    public function logo() {
        $sosmed = DB::select('select * from sosmed');
        return view('logo', compact('sosmed'));
    }*/
}
