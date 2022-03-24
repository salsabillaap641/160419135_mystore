<?php

use Illuminate\Database\Seeder;

class PriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->where('category_id',1)->update([
            'price'=>'15000'
        ]);
        DB::table('products')->where('category_id',2)->update([
            'price'=>'20000'
        ]);
        DB::table('products')->where('category_id',3)->update([
            'price'=>'24000'
        ]);
        DB::table('products')->where('category_id',4)->update([
            'price'=>'30000'
        ]);
        DB::table('products')->where('category_id',5)->update([
            'price'=>'14000'
        ]);
        DB::table('products')->where('category_id',6)->update([
            'price'=>'12000'
        ]);
        DB::table('products')->where('category_id',7)->update([
            'price'=>'10000'
        ]);
        DB::table('products')->where('category_id',8)->update([
            'price'=>'18000'
        ]);
        DB::table('products')->where('category_id',9)->update([
            'price'=>'25000'
        ]);
        DB::table('products')->where('category_id',10)->update([
            'price'=>'28000'
        ]);
        DB::table('products')->where('category_id',11)->update([
            'price'=>'35000'
        ]);


    }
}
