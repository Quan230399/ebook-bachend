<?php

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
    // $users= DB::table('users')->get();
    // $users= DB::table('users')->where('name','Admin 1')->get();
    // $users= DB::table('users')->first();
    // $addresses= DB::table('addresses')->select('addresses.*')->where('id','<>',4)->get();

    // return $addresses;
    // return DB::table('transactions as t')
    //         ->leftJoin('users','t.user_id','=','users.id')
    //         ->leftJoin('transaction_products','t.id','=','transaction_products.transaction_id')
    //         ->leftJoin('addresses','t.address_id','=','addresses.id')
    //         ->leftJoin('transaction_statuses','t.status_id','=','transaction_statuses.id')
    //         ->select('t.id','t.user_id','t.full_name',
    //             't.street','addresses.name as city','users.phone_number','users.name',
    //             DB::raw('SUM(transaction_products.price * transaction_products.amount) as total'),
    //             'transaction_statuses.name as status')
    //         // ->groupBy('t.user_id')
    //         ->get();
    // return DB::table('transactions as t')
    //         ->leftJoin('users','t.user_id','=','users.id')
    //         ->leftJoin('transaction_products','t.id','=','transaction_products.transaction_id')
    //         ->leftJoin('addresses','t.address_id','=','addresses.id')
    //         ->leftJoin('transaction_statuses','t.status_id','=','transaction_statuses.id')
    //         ->select('t.id','t.user_id','t.full_name',
    //             't.street','addresses.name as city','users.phone_number','users.name',
    //             DB::raw('SUM(transaction_products.price * transaction_products.amount) as total')
    //             , 'transaction_statuses.name as status')
    //         ->groupBy('t.id')
    //         ->get();

    // return  DB::table('users')->paginate(1);

    // return DB::table('users')->simplePaginate(1);
    // return DB::table('transactions as t')
    // ->leftJoin('transaction_products','t.id','=','transaction_products.transaction_id')
    // ->leftJoin('transaction_statuses','t.status_id','=','transaction_statuses.id')
    // ->select(DB::raw('SUM(transaction_products.price * transaction_products.amount) as money_total'),
    //     'transaction_statuses.name as status')
    // ->where(DB::raw('MONTH(t.updated_at)'),11)
    // ->groupBy('transaction_statuses.name')
    // ->get();

    

   
});

