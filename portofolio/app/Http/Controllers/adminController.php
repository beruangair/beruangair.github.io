<?php

namespace App\Http\Controllers;

use DB;
use Symfony\Component\HttpKernel\Tests\Controllers;

class adminController extends Controller
{
    public function index() {
        // $sosmed = DB::select('select * from sosmed');
        return view('admin/dashboard');
        // return view('admin/dashboard', compact('sosmed'));
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
