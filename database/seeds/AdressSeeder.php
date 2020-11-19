<?php

use Illuminate\Database\Seeder;

class AdressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        $addresses = array(
            array('id' => '1','name' => 'Đà Nẵng','parrent_id' => NULL),
            array('id' => '2','name' => 'Hồ Chí Minh','parrent_id' => NULL),
            array('id' => '3','name' => 'Hà Nội','parrent_id' => NULL),
            array('id' => '4','name' => 'Nha Trang','parrent_id' => NULL),
            array('id' => '5','name' => 'Vũng Tàu','parrent_id' => NULL),
            array('id' => '6','name' => 'Thanh Hóa','parrent_id' => NULL),
            array('id' => '7','name' => 'Bình Định','parrent_id' => NULL),
            array('id' => '8','name' => 'Quy Nhơn','parrent_id' => NULL),
            array('id' => '9','name' => 'Thanh Khê','parrent_id' => '1'),
            array('id' => '10','name' => 'Hải Châu','parrent_id' => '1'),
            array('id' => '11','name' => 'Sơn Trà','parrent_id' => '1'),
            array('id' => '12','name' => 'Xuân Hà','parrent_id' => '9'),
            array('id' => '13','name' => 'Thạch Gián','parrent_id' => '9'),
            array('id' => '14','name' => 'Ba Đình','parrent_id' => '3'),
            array('id' => '15','name' => 'Hoàn Kiếm','parrent_id' => '3'),
            array('id' => '16','name' => 'Tây Hồ','parrent_id' => '3'),
            array('id' => '17','name' => 'Long Biên','parrent_id' => '3'),
            array('id' => '18','name' => 'Cầu Giấy','parrent_id' => '3'),
            array('id' => '19','name' => 'Kim Mã','parrent_id' => '14'),
            array('id' => '20','name' => 'Liễu Giai','parrent_id' => '14'),
            array('id' => '21','name' => 'Mai Dịch','parrent_id' => '18'),
            array('id' => '22','name' => 'Dịch Vọng','parrent_id' => '18'),
            array('id' => '23','name' => 'Quận 1','parrent_id' => '2'),
            array('id' => '24','name' => 'Quận 12','parrent_id' => '2'),
            array('id' => '25','name' => 'Bình Thạnh','parrent_id' => '2'),
            array('id' => '26','name' => 'Phường 1','parrent_id' => '25'),
            array('id' => '27','name' => 'Phường 2','parrent_id' => '25'),
            array('id' => '28','name' => 'Phường 3','parrent_id' => '25'),
            array('id' => '29','name' => 'Bến Thành','parrent_id' => '23'),
            array('id' => '30','name' => 'Cầu Kho','parrent_id' => '23'),
            array('id' => '31','name' => 'Cầu Ông Lãnh','parrent_id' => '23')
        );
        foreach ($addresses as $item) {
            App\Address::create([
                'name'=>$item['name'],
                'parrent_id'=>$item['parrent_id'],
            ]);
        }
        Schema::enableForeignKeyConstraints();

        //
    }
}
