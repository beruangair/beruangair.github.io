<?php
namespace App\Http\Controllers;

use DB;
use File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpKernel\Tests\Controllers;

class navigationController extends Controller
{
  /* === Index Function === */
  public function index() {
    $nav = DB::select('SELECT * FROM navigation');
    //return view('admin/logo', compact('logo'));
    return view('admin.navigation', ['nav' => $nav]);
  }
  /* === Insert Function ===  */
  public function insert() {
    $total = count($_POST['navigation']);
    for ($i = 0; $i < $total; $i++) {
      DB::table('navigation')
      ->insert([
        'title' => $_POST['navigation'][$i]
      ]);
    }
    return redirect('/admin-navigation');
  }
  /* === Update Function === */
  public function get($id) {
    $data['id_navigation'] = $id;
    $navigation = DB::select('SELECT * FROM navigation WHERE id_navigation = ?', [$data['id_navigation']]);
    return view('admin/navigation_update', ['navigation' => $navigation]);
  }
  public function update() {
    DB::table('navigation')
      ->where('id_navigation', $_POST['id_navigation'])
      ->update([ 
        'title' => $_POST['navigation']
      ]);
    return redirect('/admin-navigation');
  }
  /* === Delete Function === */
  public function delete($id) {
  	$data['id_navigation'] = $id;
    DB::delete('DELETE FROM navigation WHERE id_navigation = ?', [$data['id_navigation']]);
    return redirect('/admin-navigation');
  }
}
