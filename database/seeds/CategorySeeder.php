<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
        [
            'name'=>'Analgesik Narkotik',
            'description'=>'Analgesik bersifat narkotik seperti opioid dan opidium bisa menekan sistem saraf pusat dan mengubah persepsi terhadap nyeri (noisepsi). Obat jenis ini lebih kuat dalam mengurangi nyeri dibandingkan OAINS.'
        ],
        [
            'name'=>'Analgesik Non Narkotik',
            'description'=>'Obat Analgesik Non-Narkotik dalam Ilmu Farmakologi juga sering dikenal dengan istilah Analgetik/Analgetika/ Analgesik Perifer. Analgetika perifer (non-narkotik), yang terdiri dari obat-obat yang tidak bersifat narkotik dan tidak bekerja sentral.'
        ],
        [
            'name'=>'Antipirai',
            'description'=>'Fenofibrate, obat golongan agonis PPAR-alfa (peroxisome proliferator-activated receptor alpha) yang umum digunakan untuk penanganan hiperlipidemia, ditemukan dapat menurunkan kadar asam urat dalam darah (antipirai).'
        ],
        [
            'name'=>'Nyeri Neuropatik',
            'description'=>'Neuropati adalah istilah yang digunakan untuk gejala gangguan atau penyakit pada saraf di tubuh. Gejala yang muncul bisa berupa nyeri, kesemutan, kram otot, hingga susah buang air kecil'
        ],
        [
            'name'=>'Anestetik Lokal',
            'description'=>'Anestesi lokal dilakukan dengan memblokir sensasi atau rasa sakit pada area tubuh yang akan dioperasi. Jenis anestesi ini tidak memengaruhi kesadaran, sehingga pasien akan tetap sadar selama menjalani operasi atau prosedur medis.'
        ],
        [
            'name'=>'Anestetik Umum dan Oksigen',
            'description'=>'Anestesi umum atau general anestesi merupakan tindakan meniadakan nyeri secara sentral disertai hilangnya kesadaran yang dapat pulih kembali (reversible).'
        ],
        [
            'name'=>'Obat untuk prosedur pre operatif',
            'description'=>'Pra operasi adalah masa yang dimulai ketika keputusan untuk menjalani operasi dibuat dan berakhir ketika pasien dipindahkan ke meja operasi, pada Page 3 10 fase ini ada beberapa persiapan yang harus disiapkan oleh pasien sebelum dilakukan tindakan operasi'
        ],
        [
            'name'=>'antialergi dan obat untuk anafilaksis',
            'description'=>'Suntikan epinephrine adalah salah satu pengobatan syok anafilaktik. Dokter akan memberikan suntikan ini secepatnya pada pasien yang mengalami syok anafilaktik.'
        ],
        [
            'name'=>'khusus',
            'description'=>'Obat khusus untuk penyakit tertentu'
        ],
        [
            'name'=>'umum',
            'description'=>'obat untuk penyakit umum'
        ],
        [
            'name'=>'antipilepsi - antikonvulsi',
            'description'=>'Antikonvulsan adalah obat yang digunakan untuk mengontrol dan mencegah kejang atau konvulsi. Obat antikonvulsi ini juga dapat mengatasi serangan kejang yang sedang berlangsung.'
        ]]);
    }
}
