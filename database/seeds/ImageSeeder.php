<?php

use Illuminate\Database\Seeder;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->where('id',1)->update([
            'image'=>'1.jpg'
        ]);
        DB::table('products')->where('id',2)->update([
            'image'=>'1.jpg'
        ]);
        DB::table('products')->where('id',3)->update([
            'image'=>'2.jpg'
        ]);
        DB::table('products')->where('id',4)->update([
            'image'=>'3.jpg'
        ]);
        DB::table('products')->where('id',5)->update([
            'image'=>'3.jpg'
        ]);
        DB::table('products')->where('id',6)->update([
            'image'=>'3.jpg'
        ]);
        DB::table('products')->where('id',7)->update([
            'image'=>'3.jpg'
        ]);
        DB::table('products')->where('id',8)->update([
            'image'=>'3.jpg'
        ]);
        DB::table('products')->where('id',9)->update([
            'image'=>'4.jpg'
        ]);
        DB::table('products')->where('id',10)->update([
            'image'=>'4.jpg'
        ]);
        DB::table('products')->where('id',11)->update([
            'image'=>'4.jpg'
        ]);
        DB::table('products')->where('id',12)->update([
            'image'=>'4.jpg'
        ]);
        DB::table('products')->where('id',13)->update([
            'image'=>'4.jpg'
        ]);
        DB::table('products')->where('id',14)->update([
            'image'=>'4.jpg'
        ]);
        DB::table('products')->where('id',15)->update([
            'image'=>'4.jpg'
        ]);
    }
}
