<?php

namespace Database\Seeders;

use App\Models\Category;
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
        for($i=1 ; $i < 4 ;$i++){
            $category = Category::create([
                "title" => "Category_".$i
            ]);
            for($j=1 ; $j < 4 ;$j++){
                Category::create([
                    "title" => "SubCat_". $j ." Category_".$i,
                    "parent_id" => $category->id
                ]);

            }
        }
    }
}
