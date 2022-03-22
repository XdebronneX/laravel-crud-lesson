<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Item;

class ItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $item = new Item([
            'img_path' => 'https://hpmedia.bloomsbury.com/.../9781408855911_309576.jpeg
',
            'title' => 'Harry Potter',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ',
            'cost_price' => 15,
            'sell_price' => 20
        ]);
         $item = new Item([
            'img_path' => 'https://hpmedia.bloomsbury.com/.../9781408855911_309576.jpeg
',
            'title' => 'Harry Potter',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ',
            'cost_price' => 15,
            'sell_price' => 20
        ]);
         $item = new Item([
            'img_path' => 'https://hpmedia.bloomsbury.com/.../9781408855911_309576.jpeg
',
            'title' => 'Harry Potter',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ',
            'cost_price' => 15,
            'sell_price' => 20
        ]);
         $item = new Item([
            'img_path' => 'https://hpmedia.bloomsbury.com/.../9781408855911_309576.jpeg
',
            'title' => 'Harry Potter',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ',
            'cost_price' => 15,
            'sell_price' => 20
        ]);
         $item = new Item([
            'img_path' => 'https://hpmedia.bloomsbury.com/.../9781408855911_309576.jpeg
',
            'title' => 'Harry Potter',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ',
            'cost_price' => 15,
            'sell_price' => 20
        ]);
        $item->save();
    } 
}
