<?php

use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('transactions')->truncate();

        $items = [
        ];

        foreach ($items as $item) {
            App\Transaction::create([
                'full_name' => $item[0],
                'user_id' => $item[1],
                'street' => $item[2],
                'address_id' => $item[3],
                'status_id' => $item[4]
            ]);
        }

        Schema::enableForeignKeyConstraints();
    }
}
