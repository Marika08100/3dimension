<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create(
            [
                "name" => "Wolf",
                "slug" => "Luxury Wolf",
                "description" => '<ul><li><i class="icofont-check"></i> Stainless Steel</li><li><i class="icofont-check"></i> High Quality Glass</li><li><i class="icofont-check"></i> 3 Step Protection</li><li><i class="icofont-check"></i> 2 Year Guarantee</li></ul>',
                "image_name" => "watch-3.png",
                "price" => 250.00,

            ]);

         Product::create(
                [
                    "name" => "Pink",
                    "slug" => "Luxury Wolf",
                    "description" => '<ul><li><i class="icofont-check"></i> Stainless Steel</li><li><i class="icofont-check"></i> High Quality Glass</li><li><i class="icofont-check"></i> 3 Step Protection</li><li><i class="icofont-check"></i> 2 Year Guarantee</li></ul>',
                    "image_name" => "kep1.jpeg",
                    "price" => 250.00,

                ]);

                Product::create(
                    [
                        "name" => "Wolf",
                        "slug" => "Luxury Wolf",
                        "description" => '<ul><li><i class="icofont-check"></i> Stainless Steel</li><li><i class="icofont-check"></i> High Quality Glass</li><li><i class="icofont-check"></i> 3 Step Protection</li><li><i class="icofont-check"></i> 2 Year Guarantee</li></ul>',
                        "image_name" => "kep2.png",
                        "price" => 250.00,

                    ]);
    }
}
