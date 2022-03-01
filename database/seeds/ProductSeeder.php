<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
        [
            'generic_name'=>'fentanil',
            'description'=>'inj: Hanya untuk nyeri berat dan harus diberikan oleh tim medis yang dapat melakukan resusitasi. patch: Untuk nyeri kronik pada pasien kanker yang tidak terkendali, Tidak untuk nyeri akut.',
            'form'=>'inj 0,05 mg/mL (i.m./i.v.)',
            'restriction_formula'=>'5 amp/kasus.',
            'tk1'=>0,
            'tk2'=>1,
            'tk3'=>1,
            'category_id'=>1
        ],
        [
            'generic_name'=>'fentanil',
            'description'=>'inj: Hanya untuk nyeri berat dan harus diberikan oleh tim medis yang dapat melakukan resusitasi. patch: Untuk nyeri kronik pada pasien kanker yang tidak terkendali, Tidak untuk nyeri akut.',
            'form'=>'patch 12,5 mcg/jam',
            'restriction_formula'=>'10 patch/bulan.',
            'tk1'=>0,
            'tk2'=>1,
            'tk3'=>1,
            'category_id'=>1
        ],
        [
            'generic_name'=>'fentanil',
            'description'=>'inj: Hanya untuk nyeri berat dan harus diberikan oleh tim medis yang dapat melakukan resusitasi. patch: Untuk nyeri kronik pada pasien kanker yang tidak terkendali, Tidak untuk nyeri akut.',
            'form'=>'patch 25 mcg/jam',
            'restriction_formula'=>'10 patch/bulan.',
            'tk1'=>0,
            'tk2'=>1,
            'tk3'=>1,
            'category_id'=>1
        ],
        [
            'generic_name'=>'morfin',
            'description'=>'Hanya untuk pemakaian pada tindakan anestesi atau perawatan di Rumah Sakit, Untuk mengatasi nyeri kanker yang tidak respons terhadap analgesik non narkotik, Untuk nyeri pada serangan jantung',
            'form'=>'tab 10 mg',
            'restriction_formula'=>'initial dosis 3-4 tab/hari',
            'tk1'=>0,
            'tk2'=>1,
            'tk3'=>1,
            'category_id'=>1
        ],
        [
            'generic_name'=>'morfin',
            'description'=>'Hanya untuk pemakaian pada tindakan anestesi atau perawatan di Rumah Sakit, Untuk mengatasi nyeri kanker yang tidak respons terhadap analgesik non narkotik, Untuk nyeri pada serangan jantung',
            'form'=>'tab lepas lambat 10 mg',
            'restriction_formula'=>'60 tab/bulan',
            'tk1'=>0,
            'tk2'=>1,
            'tk3'=>1,
            'category_id'=>1
        ],
        [
            'generic_name'=>'morfin',
            'description'=>'Hanya untuk pemakaian pada tindakan anestesi atau perawatan di Rumah Sakit, Untuk mengatasi nyeri kanker yang tidak respons terhadap analgesik non narkotik, Untuk nyeri pada serangan jantung',
            'form'=>'tab lepas lambat 15 mg',
            'restriction_formula'=>'60 tab/bulan',
            'tk1'=>0,
            'tk2'=>1,
            'tk3'=>1,
            'category_id'=>1
        ],
        [
            'generic_name'=>'morfin',
            'description'=>'Hanya untuk pemakaian pada tindakan anestesi atau perawatan di Rumah Sakit, Untuk mengatasi nyeri kanker yang tidak respons terhadap analgesik non narkotik, Untuk nyeri pada serangan jantung',
            'form'=>'tab lepas lambat 30 mg',
            'restriction_formula'=>'60 tab/bulan',
            'tk1'=>0,
            'tk2'=>1,
            'tk3'=>1,
            'category_id'=>1
        ],
        [
            'generic_name'=>'morfin',
            'description'=>'Hanya untuk pemakaian pada tindakan anestesi atau perawatan di Rumah Sakit, Untuk mengatasi nyeri kanker yang tidak respons terhadap analgesik non narkotik, Untuk nyeri pada serangan jantung',
            'form'=>'inj 10 mg/mL (i.m./s.k./i.v.)',
            'restriction_formula'=>'infus per 24 jam',
            'tk1'=>0,
            'tk2'=>1,
            'tk3'=>1,
            'category_id'=>1
        ],
        [
            'generic_name'=>'oksikodon',
            'description'=>'Untuk nyeri berat yang memerlukan terapi opioid jangka panjang, around-the-clock, Tidak untuk terapi as needed (prn), Pasien tidak memiliki gangguan respirasi, Harus dimulai dengan dosis paling rendah pada pasien yang belum pernah mendapat opioid sebelumnya',
            'form'=>'kaps 5 mg',
            'restriction_formula'=>'60 kaps/bulan',
            'tk1'=>0,
            'tk2'=>1,
            'tk3'=>1,
            'category_id'=>1
        ],
        [
            'generic_name'=>'oksikodon',
            'description'=>'Untuk nyeri berat yang memerlukan terapi opioid jangka panjang, around-the-clock, Tidak untuk terapi as needed (prn), Pasien tidak memiliki gangguan respirasi, Harus dimulai dengan dosis paling rendah pada pasien yang belum pernah mendapat opioid sebelumnya',
            'form'=>'kaps 10 mg',
            'restriction_formula'=>'60 kaps/bulan',
            'tk1'=>0,
            'tk2'=>1,
            'tk3'=>1,
            'category_id'=>1
        ],
        [
            'generic_name'=>'oksikodon',
            'description'=>'Untuk nyeri berat yang memerlukan terapi opioid jangka panjang, around-the-clock, Tidak untuk terapi as needed (prn), Pasien tidak memiliki gangguan respirasi, Harus dimulai dengan dosis paling rendah pada pasien yang belum pernah mendapat opioid sebelumnya',
            'form'=>'kaps 20 mg',
            'restriction_formula'=>'60 kaps/bulan',
            'tk1'=>0,
            'tk2'=>0,
            'tk3'=>1,
            'category_id'=>1
        ],
        [
            'generic_name'=>'oksikodon',
            'description'=>'Untuk nyeri berat yang memerlukan terapi opioid jangka panjang, around-the-clock, Tidak untuk terapi as needed (prn), Pasien tidak memiliki gangguan respirasi, Harus dimulai dengan dosis paling rendah pada pasien yang belum pernah mendapat opioid sebelumnya',
            'form'=>'tab lepas lambat 10 mg',
            'restriction_formula'=>'60 kaps/bulan',
            'tk1'=>0,
            'tk2'=>1,
            'tk3'=>1,
            'category_id'=>1
        ],
        [
            'generic_name'=>'oksikodon',
            'description'=>'Untuk nyeri berat yang memerlukan terapi opioid jangka panjang, around-the-clock, Tidak untuk terapi as needed (prn), Pasien tidak memiliki gangguan respirasi, Harus dimulai dengan dosis paling rendah pada pasien yang belum pernah mendapat opioid sebelumnya',
            'form'=>'tab lepas lambat 15 mg',
            'restriction_formula'=>'60 kaps/bulan',
            'tk1'=>0,
            'tk2'=>1,
            'tk3'=>1,
            'category_id'=>1
        ],
        [
            'generic_name'=>'oksikodon',
            'description'=>'Untuk nyeri berat yang memerlukan terapi opioid jangka panjang, around-the-clock, Tidak untuk terapi as needed (prn), Pasien tidak memiliki gangguan respirasi, Harus dimulai dengan dosis paling rendah pada pasien yang belum pernah mendapat opioid sebelumnya',
            'form'=>'tab lepas lambat 20 mg',
            'restriction_formula'=>'60 kaps/bulan',
            'tk1'=>0,
            'tk2'=>1,
            'tk3'=>1,
            'category_id'=>1
        ],
        [
            'generic_name'=>'oksikodon',
            'description'=>'Untuk nyeri berat yang memerlukan terapi opioid jangka panjang, around-the-clock, Tidak untuk terapi as needed (prn), Pasien tidak memiliki gangguan respirasi, Harus dimulai dengan dosis paling rendah pada pasien yang belum pernah mendapat opioid sebelumnya, Hanya untuk nyeri akut',
            'form'=>'inj 10 mg/mL',
            'restriction_formula'=>'2 amp/hari',
            'tk1'=>0,
            'tk2'=>1,
            'tk3'=>1,
            'category_id'=>1
        ],
        [
            'generic_name'=>'ketoprofen',
            'description'=>'Untuk nyeri sedang sampai berat pada pasien yang tidak dapat menggunakan analgesik secara oral',
            'form'=>'sup 100 mg',
            'restriction_formula'=>'2 sup/hari, maks 3 hari.',
            'tk1'=>0,
            'tk2'=>1,
            'tk3'=>1,
            'category_id'=>2
        ],
        [
            'generic_name'=>'ketorolak',
            'description'=>'Untuk nyeri sedang sampai berat pada pasien yang tidak dapat menggunakan analgesik secara oral',
            'form'=>'inj 30 mg/mL',
            'restriction_formula'=>'2-3 amp/hari maks 2 hari',
            'tk1'=>0,
            'tk2'=>1,
            'tk3'=>1,
            'category_id'=>2
        ],
        [
            'generic_name'=>'metamizol',
            'description'=>'Untuk nyeri post operatif dan hanya dalam waktu singkat',
            'form'=>'inj 500 mg/mL',
            'restriction_formula'=>'4 amp selama dirawat',
            'tk1'=>0,
            'tk2'=>1,
            'tk3'=>1,
            'category_id'=>2
        ],
        [
            'generic_name'=>'alopurinol',
            'description'=>'Tidak diberikan pada saat nyeri akut',
            'form'=>'tab 100 mg*',
            'restriction_formula'=>'30 tab/bulan',
            'tk1'=>1,
            'tk2'=>1,
            'tk3'=>1,
            'category_id'=>3
        ],
        [
            'generic_name'=>'alopurinol',
            'description'=>'Tidak diberikan pada saat nyeri akut',
            'form'=>'tab 300 mg',
            'restriction_formula'=>'30 tab/bulan',
            'tk1'=>1,
            'tk2'=>1,
            'tk3'=>1,
            'category_id'=>3
        ],
        [
            'generic_name'=>'kolkisin',
            'description'=>'-',
            'form'=>'tab 500 mcg',
            'restriction_formula'=>'30 tab/bulan',
            'tk1'=>1,
            'tk2'=>1,
            'tk3'=>1,
            'category_id'=>3
        ],
        [
            'generic_name'=>'probenesid',
            'description'=>'-',
            'form'=>'tab 500 mg',
            'restriction_formula'=>'30 tab/bulan',
            'tk1'=>1,
            'tk2'=>1,
            'tk3'=>1,
            'category_id'=>3
        ],
        [
            'generic_name'=>'gabapentin',
            'description'=>'Hanya untuk neuralgia pascaherpes atau nyeri neuropati diabetikum',
            'form'=>'kaps 100 mg',
            'restriction_formula'=>'60 kaps/bulan',
            'tk1'=>0,
            'tk2'=>1,
            'tk3'=>1,
            'category_id'=>4
        ],
        [
            'generic_name'=>'gabapentin',
            'description'=>'Hanya untuk neuralgia pascaherpes atau nyeri neuropati diabetikum',
            'form'=>'kaps 300 mg',
            'restriction_formula'=>'30 kaps/bulan',
            'tk1'=>0,
            'tk2'=>1,
            'tk3'=>1,
            'category_id'=>4
        ],
        [
            'generic_name'=>'karbamazepin',
            'description'=>'Hanya untuk neuralgia trigeminal',
            'form'=>'tab 100 mg',
            'restriction_formula'=>'60 tab/bulan',
            'tk1'=>1,
            'tk2'=>1,
            'tk3'=>1,
            'category_id'=>4
        ],
        [
            'generic_name'=>'amitriptilin',
            'description'=>'-',
            'form'=>'tab 25 mg',
            'restriction_formula'=>'30 tab/bulan',
            'tk1'=>1,
            'tk2'=>1,
            'tk3'=>1,
            'category_id'=>4
        ],
        [
            'generic_name'=>'bupivakain',
            'description'=>'-',
            'form'=>'inj 0,5%',
            'restriction_formula'=>'-',
            'tk1'=>0,
            'tk2'=>1,
            'tk3'=>1,
            'category_id'=>5
        ],
        [
            'generic_name'=>'bupivakain heavy',
            'description'=>'Khusus untuk analgesia spinal',
            'form'=>'inj 0,5% + glukosa 8%',
            'restriction_formula'=>'-',
            'tk1'=>0,
            'tk2'=>1,
            'tk3'=>1,
            'category_id'=>5
        ],
        [
            'generic_name'=>'etil klorida',
            'description'=>'-',
            'form'=>'spray 100 mL',
            'restriction_formula'=>'-',
            'tk1'=>1,
            'tk2'=>1,
            'tk3'=>1,
            'category_id'=>5
        ],
        [
            'generic_name'=>'lidokain',
            'description'=>'-',
            'form'=>'inj 2%',
            'restriction_formula'=>'-',
            'tk1'=>1,
            'tk2'=>1,
            'tk3'=>1,
            'category_id'=>5
        ],
        [
            'generic_name'=>'lidokain',
            'description'=>'-',
            'form'=>'gel 2%',
            'restriction_formula'=>'-',
            'tk1'=>1,
            'tk2'=>1,
            'tk3'=>1,
            'category_id'=>5
        ],
        [
            'generic_name'=>'lidokain',
            'description'=>'-',
            'form'=>'spray topikal 10%',
            'restriction_formula'=>'-',
            'tk1'=>1,
            'tk2'=>1,
            'tk3'=>1,
            'category_id'=>5
        ],
        [
            'generic_name'=>'ropivakain ',
            'description'=>'-',
            'form'=>'inj 7,5 mg/mL',
            'restriction_formula'=>'-',
            'tk1'=>0,
            'tk2'=>1,
            'tk3'=>1,
            'category_id'=>5
        ],
        [
            'generic_name'=>'deksmedetomidin',
            'description'=>'Untuk sedasi pada pasien di ICU, kraniotomi, bedah jantung dan operasi yang memerlukan waktu pembedahan yang lama',
            'form'=>'inj 100 mcg/mL',
            'restriction_formula'=>'-',
            'tk1'=>0,
            'tk2'=>1,
            'tk3'=>1,
            'category_id'=>6
        ],
        [
            'generic_name'=>'desfluran',
            'description'=>'-',
            'form'=>'ih',
            'restriction_formula'=>'-',
            'tk1'=>0,
            'tk2'=>1,
            'tk3'=>1,
            'category_id'=>6
        ],
        [
            'generic_name'=>'halotan',
            'description'=>'Tidak boleh digunakan berulang, Tidak untuk pasien dengan gangguan fungsi hati',
            'form'=>'ih',
            'restriction_formula'=>'-',
            'tk1'=>0,
            'tk2'=>1,
            'tk3'=>1,
            'category_id'=>6
        ],
        [
            'generic_name'=>'isofluran',
            'description'=>'-',
            'form'=>'ih',
            'restriction_formula'=>'-',
            'tk1'=>0,
            'tk2'=>1,
            'tk3'=>1,
            'category_id'=>6
        ],
        [
            'generic_name'=>'atropin',
            'description'=>'-',
            'form'=>'inj 0,25 mg/mL (i.v./s.k.) ',
            'restriction_formula'=>'-',
            'tk1'=>1,
            'tk2'=>1,
            'tk3'=>1,
            'category_id'=>7
        ],
        [
            'generic_name'=>'diazepam',
            'description'=>'-',
            'form'=>'inj 5 mg/mL',
            'restriction_formula'=>'-',
            'tk1'=>1,
            'tk2'=>1,
            'tk3'=>1,
            'category_id'=>7
        ],
        [
            'generic_name'=>'midazolam',
            'description'=>'Dapat digunakan untuk premedikasi sebelum induksi anestesi dan rumatan selama anestesi umum',
            'form'=>'inj 1 mg/mL (i.v.)',
            'restriction_formula'=>'Dosis rumatan: 1 mg/jam (24mg/hari). Dosis premedikasi: 8 vial/kasus.',
            'tk1'=>0,
            'tk2'=>1,
            'tk3'=>1,
            'category_id'=>7
        ],
        [
            'generic_name'=>'midazolam',
            'description'=>'Dapat digunakan untuk premedikasi sebelum induksi anestesi dan rumatan selama anestesi umum, Dapat digunakan untuk sedasi pada pasien ICU dan HCU',
            'form'=>'inj 5 mg/mL (i.v.) ',
            'restriction_formula'=>'Dosis rumatan: 1 mg/jam (24mg/hari). Dosis premedikasi: 8 vial/kasus.',
            'tk1'=>0,
            'tk2'=>1,
            'tk3'=>1,
            'category_id'=>7
        ],
        [
            'generic_name'=>'deksametason',
            'description'=>'-',
            'form'=>'inj 5 mg/mL',
            'restriction_formula'=>'20 mg/hari',
            'tk1'=>1,
            'tk2'=>1,
            'tk3'=>1,
            'category_id'=>8
        ],
        [
            'generic_name'=>'difenhidramin',
            'description'=>'-',
            'form'=>'inj 10 mg/mL (i.v./i.m.) ',
            'restriction_formula'=>'30 mg/hari.',
            'tk1'=>1,
            'tk2'=>1,
            'tk3'=>1,
            'category_id'=>8
        ],
        [
            'generic_name'=>'epinefrin (adrenalin)',
            'description'=>'-',
            'form'=>'inj 1 mg/mL',
            'restriction_formula'=>'-',
            'tk1'=>1,
            'tk2'=>1,
            'tk3'=>1,
            'category_id'=>8
        ],
        [
            'generic_name'=>'hidrokortison',
            'description'=>'-',
            'form'=>'inj 100 mg',
            'restriction_formula'=>'-',
            'tk1'=>0,
            'tk2'=>1,
            'tk3'=>1,
            'category_id'=>8
        ],
        [
            'generic_name'=>'atropin',
            'description'=>'-',
            'form'=>'tab 0,5 mg',
            'restriction_formula'=>'-',
            'tk1'=>1,
            'tk2'=>1,
            'tk3'=>1,
            'category_id'=>9
        ],
        [
            'generic_name'=>'atropin',
            'description'=>'-',
            'form'=>'inj 0,25 mg/mL (i.v.)',
            'restriction_formula'=>'-',
            'tk1'=>1,
            'tk2'=>1,
            'tk3'=>1,
            'category_id'=>9
        ],
        [
            'generic_name'=>'efedrin',
            'description'=>'-',
            'form'=>'inj 50 mg/mL',
            'restriction_formula'=>'-',
            'tk1'=>0,
            'tk2'=>1,
            'tk3'=>1,
            'category_id'=>9
        ],
        [
            'generic_name'=>'kalsium glukonat',
            'description'=>'-',
            'form'=>'inj 10%',
            'restriction_formula'=>'-',
            'tk1'=>1,
            'tk2'=>1,
            'tk3'=>1,
            'category_id'=>9
        ],
        [
            'generic_name'=>'nalokson',
            'description'=>'Hanya untuk mengatasi depresi pernapasan akibat morfin atau opioid',
            'form'=>'inj 0,4 mg/mL',
            'restriction_formula'=>'-',
            'tk1'=>0,
            'tk2'=>1,
            'tk3'=>1,
            'category_id'=>9
        ],
        [
            'generic_name'=>'magnesium sulfat',
            'description'=>'-',
            'form'=>'serb',
            'restriction_formula'=>'-',
            'tk1'=>1,
            'tk2'=>1,
            'tk3'=>1,
            'category_id'=>10
        ],
        [
            'generic_name'=>'diazepam',
            'description'=>'Tidak untuk i.m.',
            'form'=>'inj 5 mg/mL',
            'restriction_formula'=>'10 amp/kasus, kecuali untuk kasus di ICU',
            'tk1'=>1,
            'tk2'=>1,
            'tk3'=>1,
            'category_id'=>11
        ],
        [
            'generic_name'=>'diazepam',
            'description'=>'-',
            'form'=>'enema 5 mg/2,5 mL',
            'restriction_formula'=>'2 tube/hari, bila kejang.',
            'tk1'=>1,
            'tk2'=>1,
            'tk3'=>1,
            'category_id'=>11
        ],
        [
            'generic_name'=>'diazepam',
            'description'=>'-',
            'form'=>'enema 10 mg/2,5 mL',
            'restriction_formula'=>'2 tube/hari, bila kejang.',
            'tk1'=>1,
            'tk2'=>1,
            'tk3'=>1,
            'category_id'=>11
        ],
        [
            'generic_name'=>'klonazepam',
            'description'=>'-',
            'form'=>'tab 2 mg',
            'restriction_formula'=>'30 tab/bulan.',
            'tk1'=>0,
            'tk2'=>1,
            'tk3'=>1,
            'category_id'=>11
        ],
        [
            'generic_name'=>'magnesium sulfat',
            'description'=>'Hanya untuk kejang pada preeklampsia dan eklampsia. Tidak digunakan untuk kejang lainnya',
            'form'=>'inj 20% (i.v.)',
            'restriction_formula'=>'-',
            'tk1'=>1,
            'tk2'=>1,
            'tk3'=>1,
            'category_id'=>11
        ],
        [
            'generic_name'=>'magnesium sulfat',
            'description'=>'Hanya untuk kejang pada preeklampsia dan eklampsia. Tidak digunakan untuk kejang lainnya',
            'form'=>'inj 40% (i.v.)',
            'restriction_formula'=>'-',
            'tk1'=>1,
            'tk2'=>1,
            'tk3'=>1,
            'category_id'=>11
        ]]);
    }
}
