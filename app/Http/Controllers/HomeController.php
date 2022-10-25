<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('home');
    }
    public function grafik()
    {
        $kendaraans = DB::table('tbaset')->where('kategori','Kendaraan')->where('kondisi','Baik')->count();
        $kendaraans1 = DB::table('tbaset')->where('kategori','Kendaraan')->where('kondisi','Rusak')->count();
        $bangunans = DB::table('tbaset')->where('kategori','Bangunan')->where('kondisi','Baik')->count();
        $bangunans1 = DB::table('tbaset')->where('kategori','Bangunan')->where('kondisi','Rusak')->count();
        $peralatans = DB::table('tbaset')->where('kategori','Peralatan')->where('kondisi','Baik')->count();
        $peralatans1 = DB::table('tbaset')->where('kategori','Peralatan')->where('kondisi','Rusak')->count();
        $lainnya = DB::table('tbaset')->where('kategori','Lainnya')->where('kondisi','Baik')->count();
        $lainnya1 = DB::table('tbaset')->where('kategori','Lainnya')->where('kondisi','Rusak')->count();

        return view('grafik',compact('kendaraans','bangunans','peralatans','lainnya','kendaraans1','bangunans1','peralatans1','lainnya1'));
    }
    public function displayImage($filename)

{

  

    $path = storage_public('app/' . $filename);

   

    if (!File::exists($path)) {

        abort(404);

    }

  

    $file = File::get($path);

    $type = File::mimeType($path);

  

    $response = Response::make($file, 200);

    $response->header("Content-Type", $type);

 

    return $response;

}
}

