<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Mpasi;
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
            'email' => 'khansaalfito3456@gmail.com',
            'password' => bcrypt('12345678')
        ]);
        User::create([
            'name' => 'Doddy',
            'username'=>'doddy24',
            'email' => 'khansaalfito34567@gmail.com',
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
        Mpasi::create([
            'nama'=>'Bubur Hati Ayam & Kacang Merah',
            'umur'=>1,
            'bahan'=>'Hati ayam, dibersihkan------Beras---Kacang Merah---Wortel, potong dadu---Minyak kelapa---Air',
            'kuantitas'=>'200 gr---200 gr---1 buah---2 sdm---400 ml',
            'kandungan'=>'Protein---Untuk pembentukan imunoglobulin/antibodi yang berfungsi untuk menangkal infeksi yang disebabkan oleh virus atau bakteri---Zat Besi---Membantu pembentukan hemoglobin dan sel darah merah, zat besi juga memiliki peran penting untuk menunjang pertumbuhan serta fungsi saraf dan otak bayi---Vitamin C---Vitamin C berperan dalam pembentukan dan perbaikan sel-sel darah merah, tulang, dan jaringan tubuh---Karbohidrat---Menyediakan bahan bakar bagi bakteri baik di dalam tubuh yang membantu produksi vitamin B kompleks---Kalsium---Membantu perkembangan sistem syaraf dan fungsi otot tubuh anak',
            'deskripsi'=>'Ada banyak kandungan nutrisi yang bisa mendukung pertumbuhan. Namun, hati ayam harus dikombinasikan dengan sumber karbohidrat dan serat lain seperti kacang merah.',
            'prosedur'=>'1. Langkah Pertama---Cuci bersih bahan yang akan digunakan lalu tiriskan---2. Langkah Kedua---Masukkan minyak kelapa pada tempat memasak---3. Langkah Ketiga---Campurkan seluruh bahan lalu aduk rata---4. Langkah Keempat---Tambahkan air hingga seluruh bahan terendam air ---5. Langkah Kelima---Masak seluruh bahan selama +- 2 jam hingga matang dan air menyusut sambil diaduk rata---6. Langkah Keenam---Angkat seluruh bahan dan blender hingga halus---7. Langkah Ketujuh---Saring bahan yang sudah diblender hingga mendapatkan puree---8. Langkah Kedelapan---Diamkan 5 menit dan sajikan secara langsung---9. Langkah Kesembilan---Simpan di wadah tertutup pada kulkas apabila tidak habis',
            'durasi'=>'PREP TIME---15 min---COOK TIME---2 h 30 min---RED BEAN',
            'waktu'=>'lunch',
            'gambar'=>'https://cdn.discordapp.com/attachments/879961214334156842/968539268542767184/bubur_merah.jpg'
        ]);
        Mpasi::create([
            'nama'=>'Bubur Hati Ayam & Kacang Hijau',
            'umur'=>1,
            'bahan'=>'Hati ayam, dibersihkan------Beras---Kacang Merah---Wortel, potong dadu---Minyak kelapa---Air',
            'kuantitas'=>'200 gr---200 gr---1 buah---2 sdm---400 ml',
            'kandungan'=>'Protein---Untuk pembentukan imunoglobulin/antibodi yang berfungsi untuk menangkal infeksi yang disebabkan oleh virus atau bakteri---Zat Besi---Membantu pembentukan hemoglobin dan sel darah merah, zat besi juga memiliki peran penting untuk menunjang pertumbuhan serta fungsi saraf dan otak bayi---Vitamin C---Vitamin C berperan dalam pembentukan dan perbaikan sel-sel darah merah, tulang, dan jaringan tubuh---Karbohidrat---Menyediakan bahan bakar bagi bakteri baik di dalam tubuh yang membantu produksi vitamin B kompleks---Kalsium---Membantu perkembangan sistem syaraf dan fungsi otot tubuh anak',
            'deskripsi'=>'Ada banyak kandungan nutrisi yang bisa mendukung pertumbuhan. Namun, hati ayam harus dikombinasikan dengan sumber karbohidrat dan serat lain seperti kacang merah.',
            'prosedur'=>'1. Langkah Pertama---Cuci bersih bahan yang akan digunakan lalu tiriskan---2. Langkah Kedua---Masukkan minyak kelapa pada tempat memasak---3. Langkah Ketiga---Campurkan seluruh bahan lalu aduk rata---4. Langkah Keempat---Tambahkan air hingga seluruh bahan terendam air ---5. Langkah Kelima---Masak seluruh bahan selama +- 2 jam hingga matang dan air menyusut sambil diaduk rata---6. Langkah Keenam---Angkat seluruh bahan dan blender hingga halus---7. Langkah Ketujuh---Saring bahan yang sudah diblender hingga mendapatkan puree---8. Langkah Kedelapan---Diamkan 5 menit dan sajikan secara langsung---9. Langkah Kesembilan---Simpan di wadah tertutup pada kulkas apabila tidak habis',
            'durasi'=>'PREP TIME---15 min---COOK TIME---2 h 30 min---RED BEAN',
            'waktu'=>'lunch',
            'gambar'=>'https://cdn.discordapp.com/attachments/879961214334156842/968539268542767184/bubur_merah.jpg'
        ]);

    }

}
