<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('mystore');
});

Route::get('salsabilla', function () {
    return 'hello wfp c';
});

Route::view('/selamatdatang', 'welcome');

Route::get('wfp/{kelas}', function($kelas){
    if($kelas=='c' || $kelas=='C')
    {
        return 'wfp kelas saya';
    }
    else return 'bukan kelas saya';
});

Route::get("greetings/", function(){
    return view('welcome', ['name'=> 'salsabilla']);
});

Route::get("catalog/", function(){
    return view('catalog', 
    ['catalog'=> [
        [
            'id_catalog'=>'1',
            'nama_catalog'=>'obat',
            'link_catalog' => 'cat_obat'
        ],
        [
            'id_catalog'=>'2',
            'nama_catalog'=>'alat',
            'link_catalog' => 'cat_alat'
        ]
        ]]);
});

Route::get("cat_obat", function(){
    return view('catalogdetail', 
    [
        'slug'=>'cat_obat',
        'data'=> [
        [
            'id'=>'1',
            'nama'=>'entrostop',
            'foto' => 'img/obat_1.jpg',
        ],
        [
            'id'=>'2',
            'nama'=>'paracetamol',
            'foto' => 'img/obat_2.jpg',
        ],
        [
            'id'=>'3',
            'nama'=>'obat maag',
            'foto' => 'img/obat_3.jpg',
        ],
        ]]);
});

Route::get("cat_alat", function(){
    return view('catalogdetail', 
    [
        'slug'=>'cat_alat',
        'data'=> [
        [
            'id'=>'1',
            'nama'=>'stetoskop',
            'foto' => 'img/alat_1.jpg',
        ],
        [
            'id'=>'2',
            'nama'=>'tes gula darah',
            'foto' => 'img/alat_2.jpg',
        ],
        [
            'id'=>'3',
            'nama'=>'tensi',
            'foto' => 'img/alat_3.jpg',
        ],
        ]]);
});

Route::get("cat_obat/{id}", function($id){
    $obat = [
        [
            'id'=>'1',
            'nama' => 'entrostop',
            'deskripsi'=>"Entrostop tablet merupakan obat yang digunakan untuk mengatasi diare dan nyeri perut. 
            Obat ini mengandung activated colloidal attapulgite dan pectin yang bisa menyerap racun penyebab diare.",
            'foto' => 'img/obat_1.jpg',
        ],
        [
            'id'=>'2',
            'nama' => 'paracetamol',
            'deskripsi'=>"obat paracetamol atau acetaminophen sebenarnya memiliki manfaat utama, yaitu untuk meredakan 
            rasa nyeri dan menurunkan demam. Namun, selain itu, obat yang dijual bebas ini juga bisa digunakan untuk 
            mengatasi berbagai macam keluhan kesehatan lainnya",
            'foto' => 'img/obat_2.jpg',
        ],
        [
            'id'=>'3',
            'nama' => 'obat maag',
            'deskripsi'=>"GASTRUCID merupakan obat dengan kandungan Alumunium Hydroxide, Magnesium Hydroxide, dan 
            Simethicone.",
            'foto' => 'img/obat_3.jpg',
        ],
        ];
        $hasil =[];
        foreach($obat as $result)
        {
            if($result['id']==$id)
            {
                $hasil=$result;
            }
        }
    return view('productdetail', 
    ['data'=> $hasil]);
});

Route::get("cat_alat/{id}", function($id){
    $alat = [
        [
            'id'=>'1',
            'nama' => 'stetoskop',
            'deskripsi'=>"Stetoskop merupakan alat yang digunakan para tenaga medis untuk mendengarkan suara organ 
            di dalam tubuh, seperti denyut jantung, nadi, organ pencernaan, dan paru-paru. ",
            'foto' => 'img/alat_1.jpg',
        ],
        [
            'id'=>'2',
            'nama' => 'tes gula darah',
            'deskripsi'=>"Rutin melakukan pemeriksaan gula darah atau glukosa mempunyai berbagai manfaat, 
            di antaranya: Mengidentifikasi tinggi rendahnya kadar gula darah dalam tubuh. Mempelajari pola makan 
            dan olahraga yang sesuai untuk menjaga kadar gula Anda. Memahami pengaruh faktor lain seperti penyakit 
            atau stres pada kadar gula darah.",
            'foto' => 'img/alat_2.jpg',
        ],
        [
            'id'=>'3',
            'nama' => 'tensi',
            'deskripsi'=>"mengetahui kondisi kesehatan jantung dan pembuluh darah Anda, dari hasil cek tekanan darah. 
            Memiliki tekanan darah normal menandakan bahwa jantung mampu memberikan suplai darah yang berisi oksigen 
            dan makanan, ke semua organ tubuh dengan baik.",
            'foto' => 'img/alat_3.jpg',
        ],
        ];
        $hasil =[];
        foreach($alat as $result)
        {
            if($result['id']==$id)
            {
                $hasil=$result;
            }
        }
    return view('productdetail', 
    ['data'=> $hasil]);
});

Route::resource('product', 'ProductController');


