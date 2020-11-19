<?php

use Illuminate\Database\Seeder;

class ProducerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('producers')->truncate();

        $producers=[
            ["id"=>"1","name"=>"Nha Sach Lac Viet"],
            ["id"=>"2","name"=>"Nha Sach Lac Hong"],
            ["id"=>"3","name"=>"Nha Sach SH"],
            ["id"=>"4","name"=>"Nha Sach Giao Duc"],
            ["id"=>"5","name"=>"Nha Sach Tre"],
        ];
        foreach ($producers as $producer){
            App\Producer::create([
                    'id' => $producer['id'],
                    'name' => $producer['name']
                ]
            );
        }
        Schema::enableForeignKeyConstraints();

        //
    }
}
