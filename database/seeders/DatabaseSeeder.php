<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\PostModel;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Khansa',
            'username'=>'alfito24',
            'email' => 'khansaalfito345@gmail.com',
            'password' => bcrypt('12345678')
        ]);
        User::create([
            'name' => 'Doddy',
            'username'=>'doddy24',
            'email' => 'khansaalfito34@gmail.com',
            'password' => bcrypt('12345678')
        ]);
        Category::create([
            'name'=>'Bayi',
            'slug'=>'bayi',
            'picture'=>'https://cdn.discordapp.com/attachments/879961214334156842/968517706464788520/baby-behaviour-and-awareness.jpg'
        ]);
        Category::create([
            'name'=>'Ibu',
            'slug'=>'ibu',
            'picture'=>'https://cdn.discordapp.com/attachments/879961214334156842/968517593520537600/Paket-Mom-_-Baby-Care-min.jpg'
        ]);
        Category::create([
            'name'=>'Nutrisi',
            'slug'=>'nutrisi',
            'picture'=>'https://cdn.discordapp.com/attachments/879961214334156842/968517140279853116/nutrisi.jpg'
        ]);
        Category::create([
            'name'=>'Tips and Trick',
            'slug'=>'tipsntrick',
            'picture'=>'https://cdn.discordapp.com/attachments/879961214334156842/968517827524952114/Tips-and-Tricks-Lolos-Menjadi-Delegasi-International.jpg'
        ]);
        // PostModel::create([
        //     'category_id'=>1,
        //     'user_id'=>1,

        // ]);
    }
}
