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
        [
            'name' => 'Outlander PHEV',
            'stok' => 3,
            'harga' => 898000000,
            'tahun' => 2022 ,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'name' => 'BMW X7',
            'stok' => 4,
            'harga' => 2307000000,
            'tahun' => 2022 ,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'name' => 'BMW M8',
            'stok' => 4,
            'harga' => 6797000000,
            'tahun' => 2022 ,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'name' => 'BMW M4',
            'stok' => 2,
            'harga' => 2147000000,
            'tahun' => 2022 ,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'name' => 'BMW M5',
            'stok' => 46,
            'harga' => 4747000000,
            'tahun' => 2022 ,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'name' => ' BMW 8-Series',
            'stok' => 6,
            'harga' => 2527000000,
            'tahun' => 2022 ,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'name' => 'BMW M2',
            'stok' => 6,
            'harga' => 1649000000,
            'tahun' => 2022 ,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'name' => 'BMW 7-Series',
            'stok' => 6,
            'harga' => 1907000000,
            'tahun' => 2022 ,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'name' => 'BMW 530i',
            'stok' => 6,
            'harga' => 1287000000,
            'tahun' => 2022 ,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'name' => 'BMW X3',
            'stok' => 8,
            'harga' => 1087000000,
            'tahun' => 2022 ,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'name' => 'BMW 530i',
            'stok' => 6,
            'harga' => 1287000000,
            'tahun' => 2022 ,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'name' => 'BMW X2',
            'stok' => 8,
            'harga' => 869000000,
            'tahun' => 2022 ,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'name' => 'BMW M135i',
            'stok' => 6,
            'harga' => 1177000000,
            'tahun' => 2022 ,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
            'name' => 'BMW 4-Series',
            'stok' => 8,
            'harga' => 1357000000,
            'tahun' => 2022 ,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ],
    ];

    Product::insert($product);

    }
}
