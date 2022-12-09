<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use Carbon\Carbon;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = [
            [
            'name' => 'Avanza',
            'stok' => 2,
            'harga' => 160000000,
            'tahun' => 2020,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'name' => 'Inova',
            'stok' => 5,
            'harga' => 190000000,
            'tahun' => 2021 ,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'name' => 'Xpander Cross',
            'stok' => 3,
            'harga' => 309950000,
            'tahun' => 2022 ,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'name' => 'Xpander',
            'stok' => 6,
            'harga' => 254400000,
            'tahun' => 2022 ,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'name' => 'Pajero Sport',
            'stok' => 5,
            'harga' => 540600000,
            'tahun' => 2022 ,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'name' => 'Triton',
            'stok' => 5,
            'harga' => 283550000,
            'tahun' => 2022 ,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
    ];

    Product::insert($product);

    }
}
