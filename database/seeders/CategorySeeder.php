<?php

namespace Database\Seeders;
use App\Models\Category;
use Dflydev\DotAccessData\Data;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
     $data=[
        [   'name'=>'Birthday',
            'image'=>'342381101.category-6.jpg',  
        ],
        [   'name'=>'Anniversary',
            'image'=>'1260180640.category-5.jpg',  
        ],
        [   'name'=>'Babyshower',
            'image'=>'2023424037.category-1.jpg',  
        ],
        [   'name'=>'Wedding',
            'image'=>'1073874569.category-3.jpg',  
        ],
        [   'name'=>'Valentaye Day',
            'image'=>'1579465435.category-4.jpg',  
        ],
        [   'name'=>'Spicial',
            'image'=>'658667684.category-2.jpg',  
        ],

     ];
     foreach($data as $item){
        Category::create($item);
     }
    }
}
