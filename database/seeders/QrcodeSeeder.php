<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Qrcode;
use Illuminate\Database\Seeder;

class QrcodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subCats  = Category::whereNotNull('parent_id')->get();
        foreach($subCats as $subCat){
            Qrcode::create([
                "qr_code" => bcrypt(time().rand(1000000,9999999).$subCat->id),
                "category_id" => $subCat->id
            ]);
        }
    }
}
