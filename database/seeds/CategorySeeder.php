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
        Schema::disableForeignKeyConstraints();
        DB::table('categories')->truncate();

        $categories = [
            ["id"=>"1","name"=>"Thiếu Nhi","parrent_id"=>null,"photo"=>"fas fa-mobile-alt"],
            ["id"=>"2","name"=>"Văn Học","parrent_id"=>null,"photo"=>"fas fa-tv"],
            ["id"=>"3","name"=>"Tâm Lý - Kỹ Năng Sống","parrent_id"=>null,"photo"=>"fas fa-blender"],
            ["id"=>"4","name"=>"Sách Học Ngoại Ngữ","parrent_id"=>null,"photo"=>"fa fa-camera-retro"],
            ["id"=>"5","name"=>"Kinh Tế","parrent_id"=>null,"photo"=>"fa fa-laptop"],
            ["id"=>"6","name"=>"Lịch Sử - Địa Lý","parrent_id"=>null,"photo"=>"fas fa-book"],
            ["id"=>"7","name"=>"Khoa Học Kỹ Thuật","parrent_id"=>null,"photo"=>"fas fa-headphones"],
            ["id"=>"8","name"=>"Nuôi Dạy Con","parrent_id"=>null,"photo"=>"fas fa-headphones"],
            ["id"=>"9","name"=>"Nữ Công Gia Chánh","parrent_id"=>null,"photo"=>"fas fa-headphones"],
            ["id"=>"10","name"=>"Chính Trị - Pháp Lý ","parrent_id"=>null,"photo"=>"fas fa-headphones"],
            ["id"=>"11","name"=>"Tiểu Sử Hồi Ký","parrent_id"=>null,"photo"=>"fas fa-headphones"],

        ];

        foreach ($categories as $cate) {
            App\Category::create([
                'name' => $cate['name'],
                'photo'=>$cate['photo'],
                'parrent_id'=>$cate['parrent_id']

            ]);
        }
        Schema::enableForeignKeyConstraints();
    }
}
