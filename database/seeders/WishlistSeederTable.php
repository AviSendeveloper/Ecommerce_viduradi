<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Wishlist;

class WishlistSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $wishlistItem = [
            ['id'=>1, 'user_id'=>1, 'product_id'=>10],
            ['id'=>2, 'user_id'=>1, 'product_id'=>11],
            ['id'=>3, 'user_id'=>1, 'product_id'=>12],
            ['id'=>4, 'user_id'=>1, 'product_id'=>13],
            ['id'=>5, 'user_id'=>1, 'product_id'=>14],
        ];

        Wishlist::insert($wishlistItem);
    }
}
