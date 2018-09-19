<?php
namespace App\Http\Controllers;

use DB;
use File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpKernel\Tests\Controllers;

class logoController extends Controller
{
  /* === Index Function === */
  public function index() {
    $logo = DB::select('SELECT * FROM logo WHERE id_logo = 1');
    //return view('admin/logo', compact('logo'));
    return view('admin.logo', ['logo' => $logo]);
  }
  /* === Insert Function ===  */
  public function insert() {
    DB::table('logo')
    	->insert([
        'id_logo' => 1,
        'logo' => $_POST['logo']
    	]);
    return redirect('/admin-logo');
  }
  /* === Update Function === */
  public function get($id) {
    $data['id_logo'] = $id;
    $logo = DB::select('SELECT * FROM logo WHERE id_logo = ?', [$data['id_logo']]);
    return view('admin/logo_update', ['logo' => $logo]);
  }
  public function update() {
    DB::table('logo')
      ->where('id_logo', $_POST['id_logo'])
      ->update([ 
        'logo' => $_POST['logo']
      ]);
    return redirect('/admin-logo');
  }
  /* === Delete Function === */
  public function delete($id) {
  	$data['id_logo'] = $id;
    DB::delete('DELETE FROM logo WHERE id_logo = ?', [$data['id_logo']]);
    return redirect('/admin-logo');
  }
}
