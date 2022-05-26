<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mpasi;

class MpasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Mpasi::create([
        //     'nama'=>'Bubur Hati Ayam & Kacang Hijau',
        //     'umur'=>1,
        //     'bahan'=>'Hati ayam, dibersihkan------Beras---Kacang Merah---Wortel, potong dadu---Minyak kelapa---Air',
        //     'kuantitas'=>'200 gr---200 gr---1 buah---2 sdm---400 ml',
        //     'kandungan'=>'Protein---Untuk pembentukan imunoglobulin/antibodi yang berfungsi untuk menangkal infeksi yang disebabkan oleh virus atau bakteri---Zat Besi---Membantu pembentukan hemoglobin dan sel darah merah, zat besi juga memiliki peran penting untuk menunjang pertumbuhan serta fungsi saraf dan otak bayi---Vitamin C---Vitamin C berperan dalam pembentukan dan perbaikan sel-sel darah merah, tulang, dan jaringan tubuh---Karbohidrat---Menyediakan bahan bakar bagi bakteri baik di dalam tubuh yang membantu produksi vitamin B kompleks---Kalsium---Membantu perkembangan sistem syaraf dan fungsi otot tubuh anak',
        //     'deskripsi'=>'Ada banyak kandungan nutrisi yang bisa mendukung pertumbuhan. Namun, hati ayam harus dikombinasikan dengan sumber karbohidrat dan serat lain seperti kacang merah.',
        //     'prosedur'=>'1. Langkah Pertama---Cuci bersih bahan yang akan digunakan lalu tiriskan---2. Langkah Kedua---Masukkan minyak kelapa pada tempat memasak---3. Langkah Ketiga---Campurkan seluruh bahan lalu aduk rata---4. Langkah Keempat---Tambahkan air hingga seluruh bahan terendam air ---5. Langkah Kelima---Masak seluruh bahan selama +- 2 jam hingga matang dan air menyusut sambil diaduk rata---6. Langkah Keenam---Angkat seluruh bahan dan blender hingga halus---7. Langkah Ketujuh---Saring bahan yang sudah diblender hingga mendapatkan puree---8. Langkah Kedelapan---Diamkan 5 menit dan sajikan secara langsung---9. Langkah Kesembilan---Simpan di wadah tertutup pada kulkas apabila tidak habis',
        //     'durasi'=>'PREP TIME---15 min---COOK TIME---2 h 30 min---RED BEAN',
        //     'waktu'=>'lunch',
        //     'gambar'=>'https://cdn.discordapp.com/attachments/879961214334156842/968539268542767184/bubur_merah.jpg'
        // ]);
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
        Mpasi::create([
            'nama'=>'Puree Alpukat Kembang Kol',
            'umur'=>'9',
            'bahan'=>'Beras---Alpukat---Kembang kol---Minyak zaitun',
            'kuantitas'=>'1 cangkir----1/2 buah---1/3 buah---1 sdt',
            'kandungan'=>'Protein---Untuk pembentukan imunoglobulin/antibodi yang berfungsi untuk menangkal infeksi yang disebabkan oleh virus atau bakteri---Zat Besi---Membantu pembentukan hemoglobin dan sel darah merah, zat besi juga memiliki peran penting untuk menunjang pertumbuhan serta fungsi saraf dan otak bayi---Vitamin C---Vitamin C berperan dalam pembentukan dan perbaikan sel-sel darah merah, tulang, dan jaringan tubuh---Karbohidrat---Menyediakan bahan bakar bagi bakteri baik di dalam tubuh yang membantu produksi vitamin B kompleks---Kalsium---Membantu perkembangan sistem syaraf dan fungsi otot tubuh anak',
            'deskripsi'=>'Makanan yang mengandung karbohidrat, protein hewani, nabati, serta sayur-sayuran sangat baik untuk bayi 9 bulan',
            'prosedur'=>'1. Langkah Pertama---Masak beras hingga matang dan menjadi nasi---2. Langkah Kedua---Haluskan buah alpukat dengan garpu---3. Langkah Ketiga---Kukus kembang kol dan haluskan dengan garpu---4. Langkah Keempat---Campur semua bahan di dalam wadah dan aduk dengan menggunakan garpu---5. Langkah Kelima---Jika ingin konsistensi yang lebih lembut, dapat memasukkan semua bahan ke dalam blender---6. Langkah Keenam---Siap disajikan!',
            'durasi'=>'PREP TIME---15 min---COOK TIME---45 min---AVOCADO',
            'gambar'=>'https://cdn.discordapp.com/attachments/897774150716887081/968883222593282129/Puree_Alpukat_Kembang_Kol1.jpg'
        ]);
        Mpasi::create([
            'nama'=>'Bubur Sayur',
            'umur'=>'10',
            'bahan'=>'Beras---Air---Wortel---Bayam',
            'kuantitas'=>'250 gr---500 ml---1 buah---1 ikat',
            'kandungan'=>'Protein---Untuk pembentukan imunoglobulin/antibodi yang berfungsi untuk menangkal infeksi yang disebabkan oleh virus atau bakteri---Zat Besi---Membantu pembentukan hemoglobin dan sel darah merah, zat besi juga memiliki peran penting untuk menunjang pertumbuhan serta fungsi saraf dan otak bayi---Vitamin C---Vitamin C berperan dalam pembentukan dan perbaikan sel-sel darah merah, tulang, dan jaringan tubuh---Karbohidrat---Menyediakan bahan bakar bagi bakteri baik di dalam tubuh yang membantu produksi vitamin B kompleks---Kalsium---Membantu perkembangan sistem syaraf dan fungsi otot tubuh anak',
            'deskripsi'=>'Porsi makanan bayi 6 bulan tak usah berlebihan dan sewajarnya saja. Salah satunya dengan membuatkan menu MPASI bubur sayur berikut. Dijamin enak dan bergizi untuk Si Kecil.',
            'prosedur'=>'1. Langkah Pertama---Masak beras sampai menjadi bubur---2. Langkah Kedua---Masukan wortel dan bayam yang sudah diblender, aduk merata---3. Langkah Ketiga---Untuk tambahan protein, bisa tambahkan ikan salmon atau dada ayam yang dihaluskan',
            'durasi'=>'PREP TIME---10 min---COOK TIME---20 min---VEGETABLE',
            'gambar'=>'https://cdn.discordapp.com/attachments/897774150716887081/968884722749018142/bubur_sayur.jpeg'
        ]);
        Mpasi::create([
            'nama'=>'Puree Alpukat dan Ubi Jalar',
            'umur'=>'13',
            'bahan'=>'Ubi jalar, potong dadu---Alpukat---Air',
            'kuantitas'=>'2 cangkir---1 buah---500 ml',
            'kandungan'=>'Protein---Untuk pembentukan imunoglobulin/antibodi yang berfungsi untuk menangkal infeksi yang disebabkan oleh virus atau bakteri---Zat Besi---Membantu pembentukan hemoglobin dan sel darah merah, zat besi juga memiliki peran penting untuk menunjang pertumbuhan serta fungsi saraf dan otak bayi---Vitamin C---Vitamin C berperan dalam pembentukan dan perbaikan sel-sel darah merah, tulang, dan jaringan tubuh---Karbohidrat---Menyediakan bahan bakar bagi bakteri baik di dalam tubuh yang membantu produksi vitamin B kompleks---Kalsium---Membantu perkembangan sistem syaraf dan fungsi otot tubuh anak',
            'deskripsi'=>'Ubi jalar sangat tepat dikombinasikan dengan buah alpukat untuk membuat resep jadwal menu MPASI 6 bulan terbaik. Ini salah satu menu yang bernutrisi dengan rasa manis alami.',
            'prosedur'=>'1. Langkah Pertama---Pindahkan ubi jalar ke dalam wadah untuk dimasak bersama dengan air dan rebus selama 25 menit. Saring ubi jalar dari air dan biarkan dingin---2. Langkah Kedua---Masukkan buah alpukat ke dalam blender dan tambahkan secangkir air---3. Langkah Ketiga---Tambahkan ubi jalar rebus ke dalam blender berisi buah alpukat, lalu haluskan---4. Langkah Keempat---Tuangkan lebih banyak air jika diperlukan, hingga mendapatkan konsistensi puree yang diinginkan',
            'durasi'=>'PREP TIME---15 min---COOK TIME---45 min---AVOCADO',
            'gambar'=>'https://cdn.discordapp.com/attachments/897774150716887081/968886272879919154/Puree_Alpukat_dan_Ubi_Jalar.jpg'
        ]);
        Mpasi::create([
            'nama'=>'Sup Labu',
            'umur'=>'14',
            'bahan'=>'Labu kuning---Air---Kayu manis',
            'kuantitas'=>'500 gr---400 ml---2 sdm',
            'kandungan'=>'Protein---Untuk pembentukan imunoglobulin/antibodi yang berfungsi untuk menangkal infeksi yang disebabkan oleh virus atau bakteri---Zat Besi---Membantu pembentukan hemoglobin dan sel darah merah, zat besi juga memiliki peran penting untuk menunjang pertumbuhan serta fungsi saraf dan otak bayi---Vitamin C---Vitamin C berperan dalam pembentukan dan perbaikan sel-sel darah merah, tulang, dan jaringan tubuh---Karbohidrat---Menyediakan bahan bakar bagi bakteri baik di dalam tubuh yang membantu produksi vitamin B kompleks---Kalsium---Membantu perkembangan sistem syaraf dan fungsi otot tubuh anak',
            'deskripsi'=>'Labu berwarna kuning memang kaya akan gizi untuk Si Kecil yaitu vitamin A, C, E dan mineral. Selain itu, bermanfaat juga untuk menambah sistem kekebalan tubuh bayi.',
            'prosedur'=>'1. Langkah Pertama---Haluskan labu dengan blender---2. Langkah Kedua---Jika labu sudah halus, masukkan ke dalam panci dan tambahkan sedikit air dan ¼ sdt kayu manis untuk menambah rasa---3. Langkah Ketiga---Panaskan sampai mendidih, angkat---4. Langkah Keempat---Tunggu sampai tidak terlalu panas dan sup labu kuning siap disantap Si Kecil',
            'durasi'=>'PREP TIME---15 min---COOK TIME---45 min---VEGETABLE',
            'gambar'=>'https://cdn.discordapp.com/attachments/897774150716887081/968887501882269706/Sup_Labu.jpg'
        ]);
        Mpasi::create([
            'nama'=>'Puree Wortel dan Alpukat',
            'umur'=>'17',
            'bahan'=>'Wortel, potong dadu---Alpukat---Air',
            'kuantitas'=>'250 gr---1 buah---400 ml',
            'kandungan'=>'Protein---Untuk pembentukan imunoglobulin/antibodi yang berfungsi untuk menangkal infeksi yang disebabkan oleh virus atau bakteri---Zat Besi---Membantu pembentukan hemoglobin dan sel darah merah, zat besi juga memiliki peran penting untuk menunjang pertumbuhan serta fungsi saraf dan otak bayi---Vitamin C---Vitamin C berperan dalam pembentukan dan perbaikan sel-sel darah merah, tulang, dan jaringan tubuh---Karbohidrat---Menyediakan bahan bakar bagi bakteri baik di dalam tubuh yang membantu produksi vitamin B kompleks---Kalsium---Membantu perkembangan sistem syaraf dan fungsi otot tubuh anak',
            'deskripsi'=>'Wortel kaya akan vitamin, sehingga membuat kombinasi resep jadwal menu MPASI 6 bulan ini perlu dicoba!  Cocok saat makan siang, ya.',
            'prosedur'=>'1. Langkah Pertama---Rebus wortel dalam air selama 20 menit dengan api sedang---2. Langkah Kedua---Dinginkan wortel di dalam air rebusannya---3. Langkah Ketiga---Masukkan alpukat ke dalam blender, tambahkan wortel dan sedikit rebusannya untuk dihaluskan---4. Langkah Keempat---Haluskan hingga mencapai konsistensi yang diinginkan---5. Langkah Kelima---Apabila telah matang siap disajikan!',
            'durasi'=>'PREP TIME---15 min---COOK TIME---45 min---AVOCADO',
            'gambar'=>'https://cdn.discordapp.com/attachments/897774150716887081/968893663851708427/wortel_apukat.jpg'
        ]);
        Mpasi::create([
            'nama'=>'Puree Kentang Wortel',
            'umur'=>'18',
            'bahan'=>'Nasi putih---Seledri---Wortel---Kentang---ASI',
            'kuantitas'=>'5 sdm---1 batang---1 buah---1 buah---250 ml',
            'kandungan'=>'Protein---Untuk pembentukan imunoglobulin/antibodi yang berfungsi untuk menangkal infeksi yang disebabkan oleh virus atau bakteri---Zat Besi---Membantu pembentukan hemoglobin dan sel darah merah, zat besi juga memiliki peran penting untuk menunjang pertumbuhan serta fungsi saraf dan otak bayi---Vitamin C---Vitamin C berperan dalam pembentukan dan perbaikan sel-sel darah merah, tulang, dan jaringan tubuh---Karbohidrat---Menyediakan bahan bakar bagi bakteri baik di dalam tubuh yang membantu produksi vitamin B kompleks---Kalsium---Membantu perkembangan sistem syaraf dan fungsi otot tubuh anak',
            'deskripsi'=>'Resep jadwal MPASI 6 bulan lainnya adalah puree nasi, kentang, dan wortel. Ini adalah makanan bayi 6 bulan yang memiliki kandungan gizi dan manfaat untuk tumbuh kembang.',
            'prosedur'=>'1. Langkah Pertama---Cuci bersih seledri, wortel, dan kentang---2. Langkah Kedua---Masak nasi putih hingga menjadi bubur, lalu tambahkan seledri---3. Langkah Ketiga---Kukus wortel dan kentang sampai empuk. Setelah matang, saring bubur, wortel dan kentang---4. Langkah Keempat---Campur semua bahan dengan susu formula atau ASI sesuai selera. Aduk hingga rata',
            'durasi'=>'PREP TIME---15 min---COOK TIME---45 min---POTATO',
            'gambar'=>'https://cdn.discordapp.com/attachments/897774150716887081/968896162302165083/wortel_kentang.jpg'
        ]);
        Mpasi::create([
            'nama'=>'Puree Alpukat dan Pisang',
            'umur'=>'21',
            'bahan'=>'Pisang---Alpukat',
            'kuantitas'=>'1 buah---1 buah',
            'kandungan'=>'Protein---Untuk pembentukan imunoglobulin/antibodi yang berfungsi untuk menangkal infeksi yang disebabkan oleh virus atau bakteri---Zat Besi---Membantu pembentukan hemoglobin dan sel darah merah, zat besi juga memiliki peran penting untuk menunjang pertumbuhan serta fungsi saraf dan otak bayi---Vitamin C---Vitamin C berperan dalam pembentukan dan perbaikan sel-sel darah merah, tulang, dan jaringan tubuh---Karbohidrat---Menyediakan bahan bakar bagi bakteri baik di dalam tubuh yang membantu produksi vitamin B kompleks---Kalsium---Membantu perkembangan sistem syaraf dan fungsi otot tubuh anak',
            'deskripsi'=>'Berdasarkan Journal of Pharmacognosy and Phytochemistry, pisang adalah sumber kalium yang sangat baik. MIneral ini memberikan manfaat untuk otot-otot di dalam tubuh Si Kecil.',
            'prosedur'=>'1. Langkah Pertama---Masukkan buah alpukat dan pisang ke dalam mangkuk, lalu haluskan dengan menggunakan garpu---2. Langkah Kedua---Tambahkan sedikit air atau susu formula jika ingin mendapatkan konsistensi MPASI bayi 6 bulan yang lebih halus---3. Langkah Ketiga---Siap disajikan!',
            'durasi'=>'PREP TIME---15 min---COOK TIME---45 min---AVOCADO',
            'gambar'=>'https://cdn.discordapp.com/attachments/897774150716887081/968896819511853096/alpukat_pisang.jpg'
        ]);
        Mpasi::create([
            'nama'=>'Sereal Salmon',
            'umur'=>'22',
            'bahan'=>'Oat---Daging Ikan Salmon---Air matang---Bawang putih, geprek---Jeruk nipis, peras---Seledri',
            'kuantitas'=>'2 sdm---2 potong---100 ml---1 siung---1 sdt---secukupnnya',
            'kandungan'=>'Protein---Untuk pembentukan imunoglobulin/antibodi yang berfungsi untuk menangkal infeksi yang disebabkan oleh virus atau bakteri---Zat Besi---Membantu pembentukan hemoglobin dan sel darah merah, zat besi juga memiliki peran penting untuk menunjang pertumbuhan serta fungsi saraf dan otak bayi---Vitamin C---Vitamin C berperan dalam pembentukan dan perbaikan sel-sel darah merah, tulang, dan jaringan tubuh---Karbohidrat---Menyediakan bahan bakar bagi bakteri baik di dalam tubuh yang membantu produksi vitamin B kompleks---Kalsium---Membantu perkembangan sistem syaraf dan fungsi otot tubuh anak',
            'deskripsi'=>'Bahkan jenis ikan satu ini bisa Moms campurkan dengan oat yang biasanya akan disukai anak. Menurut Infant Cereals: Current Status, Challenges, and Future Opportunities for Whole Grains, sereal bayi adalah salah satu makanan bayi 6 bulan pertama yang baik.',
            'prosedur'=>'1. Langkah Pertama---Lumuri ikan salmon dengan air jeruk nipis selama 10 menit---2. Langkah Kedua---Kukus salmon yang telah dilumuri dengan air jeruk nipis bersama bawang putih geprek dan seledri---3. Langkah Ketiga---Kukus selama 30 menit---4. Langkah Keempat---Selagi menunggu salmon siap, masak oat hingga matang---5. Langkah Kelima---Campur salmon dan oat dalam satu wadah---6. Langkah Keenam---Blender salmon dan oat hingga lunak, kemudian saring---7. Langkah Ketujuh---Siap disajikan',
            'durasi'=>'PREP TIME---15 min---COOK TIME---45 min---FISH',
            'gambar'=>'https://cdn.discordapp.com/attachments/897774150716887081/968898172653010974/sereal_salmon.jpg'
        ]);
        Mpasi::create([
            'nama'=>'Nasi Tim Ikan Dori',
            'umur'=>'25',
            'bahan'=>'Ikan dori---Beras---Bawang bombay---Jahe---Seledri---Air',
            'kuantitas'=>'1 ruas jari---1 genggam---3 iris---secukupnya---1 batang---300 ml',
            'kandungan'=>'Protein---Untuk pembentukan imunoglobulin/antibodi yang berfungsi untuk menangkal infeksi yang disebabkan oleh virus atau bakteri---Zat Besi---Membantu pembentukan hemoglobin dan sel darah merah, zat besi juga memiliki peran penting untuk menunjang pertumbuhan serta fungsi saraf dan otak bayi---Vitamin C---Vitamin C berperan dalam pembentukan dan perbaikan sel-sel darah merah, tulang, dan jaringan tubuh---Karbohidrat---Menyediakan bahan bakar bagi bakteri baik di dalam tubuh yang membantu produksi vitamin B kompleks---Kalsium---Membantu perkembangan sistem syaraf dan fungsi otot tubuh anak',
            'deskripsi'=>'Ikan dori memiliki tekstur yang lembut sehingga cocok untuk makanan bayi 6 bulan pertama. Berikut adalah langkah-langkah mudah membuat resep MPASI Si Kecil, Moms!',
            'prosedur'=>'1. Langkah Pertama---Rebus air dan masak beras putih. Aduk hingga nasi setengah lembek---2. Langkah Kedua---Masukkan ikan dori, bawang bombay yang sudah dicincang, dan jahe secukupnya untuk menghilangkan amis pada ikan---3. Langkah Ketiga---Aduk hingga beras menjadi bubur ikan yang tercampur rata. Masukkan seledri untuk menambah aroma---4. Langkah Keempat---Aduk hingga kekentalan bubur dirasa pas. Biarkan setengah dingin kemudian saring---5. Langkah Kelima---Sajikan selagi hangat',
            'durasi'=>'PREP TIME---15 min---COOK TIME---45 min---FISH',
            'gambar'=>'https://cdn.discordapp.com/attachments/897774150716887081/968899994578993172/ikan_dori.jpg'
        ]);
        Mpasi::create([
            'nama'=>'Jagung Manis, Tahu, dan Telur',
            'umur'=>'7',
            'bahan'=>'Jagung manis pipil---Tahu putih---Telur---Bawang putih',
            'kuantitas'=>'30 gr---15 gr---25 gr---1 siung',
            'kandungan'=>'Protein---Untuk pembentukan imunoglobulin/antibodi yang berfungsi untuk menangkal infeksi yang disebabkan oleh virus atau bakteri---Zat Besi---Membantu pembentukan hemoglobin dan sel darah merah, zat besi juga memiliki peran penting untuk menunjang pertumbuhan serta fungsi saraf dan otak bayi---Vitamin C---Vitamin C berperan dalam pembentukan dan perbaikan sel-sel darah merah, tulang, dan jaringan tubuh---Karbohidrat---Menyediakan bahan bakar bagi bakteri baik di dalam tubuh yang membantu produksi vitamin B kompleks---Kalsium---Membantu perkembangan sistem syaraf dan fungsi otot tubuh anak',
            'deskripsi'=>'Jagung manis bisa menjadi sumber karbohidrat sekaligus serat yang dibutuhkan oleh tubuh. Sedangkan, telur adalah sumber protein hewani dan tahu merupakan protein nabati.',
            'prosedur'=>'1. Langkah Pertama---Rebus telur sampai matang, kupas dan sisihkan (ambil 25 gram)---2. Langkah Kedua---Kukus jagung manis pipil dan juga tahu---3. Langkah Ketiga---Tumis bawang putih dan campurkan jagung manis, tahu, dan telur---4. Langkah Keempat---Blender hingga halus dan saring. Sajikan',
            'durasi'=>'PREP TIME---15 min---COOK TIME---45 min---CORN',
            'gambar'=>'https://cdn.discordapp.com/attachments/897774150716887081/968900880105627699/jagung_tahu_telur.jpg'
        ]);
        Mpasi::create([
            'nama'=>'Sup Krim Kentang',
            'umur'=>'8',
            'bahan'=>'Kentang kecil, haluskan---Jagung manis, haluskan---Labu siam, haluskan---Daging ayam cincang, haluskan---Kembang kol, cincang halus---Daun bayam, cincang halus---Seledri, cincang halus---Bawang bombay, cincang halus---Bawang putih---Tepung terigu---Susu UHT---Kaldu---Keju parut',
            'kuantitas'=>'5 buah---1 bonggol---1/2 buah---50 gr---secukupnya---1 ikat---1 batang---1/2 buah---1 siung---1 sdm---150 ml---100 ml---1 sdm',
            'kandungan'=>'Protein---Untuk pembentukan imunoglobulin/antibodi yang berfungsi untuk menangkal infeksi yang disebabkan oleh virus atau bakteri---Zat Besi---Membantu pembentukan hemoglobin dan sel darah merah, zat besi juga memiliki peran penting untuk menunjang pertumbuhan serta fungsi saraf dan otak bayi---Vitamin C---Vitamin C berperan dalam pembentukan dan perbaikan sel-sel darah merah, tulang, dan jaringan tubuh---Karbohidrat---Menyediakan bahan bakar bagi bakteri baik di dalam tubuh yang membantu produksi vitamin B kompleks---Kalsium---Membantu perkembangan sistem syaraf dan fungsi otot tubuh anak',
            'deskripsi'=>'Jika Si Kecil bosan dengan puree, Moms bisa memberikan selingan berupa krim sup kentang.',
            'prosedur'=>'1. Langkah Pertama---Tumis bawang bombay dan putih dengan unsalted butter hingga wangi---2. Langkah Kedua---Masukan daging ayam cincang, aduk sampai daging ayam berubah warna---3. Langkah Ketiga---Tambahkan tepung terigu, aduk cepat lalu masukan susu UHT. Aduk terus agar tepung terigu bergerindil---4. Langkah Keempat---Tambahkan kaldu, masukkan kentang dan labu siam, aduk aduk sampai susu dan kaldu menyusut---5. Langkah Kelima---Masukan jagung manis, daun bayam, dan seledri. Masak hingga semua bahan matang---6. Langkah Keenam---Apabila bahan belum matang dan cairan sudah menyusut dapat ditambah air sampai kekentalan yang diinginkan---7. Langkah Ketujuh---Masukan keju untuk bayi sesaat sebelum diangkat. Saring bila diperlukan---8. Langkah Kedelapan---Sajikan!',
            'durasi'=>'PREP TIME---15 min---COOK TIME---45 min---POTATO',
            'gambar'=>'https://cdn.discordapp.com/attachments/897774150716887081/968902464264880168/sup_kentang.jpg'
        ]);
        Mpasi::create([
            'nama'=>'Puree Alpukat dan Tahu',
            'umur'=>'11',
            'bahan'=>'Tahu---Alpukat---Minyak zaitun---Jeruk nipis',
            'kuantitas'=>'1 kotak---1/2 buah---1 sdt---1 buah',
            'kandungan'=>'Protein---Untuk pembentukan imunoglobulin/antibodi yang berfungsi untuk menangkal infeksi yang disebabkan oleh virus atau bakteri---Zat Besi---Membantu pembentukan hemoglobin dan sel darah merah, zat besi juga memiliki peran penting untuk menunjang pertumbuhan serta fungsi saraf dan otak bayi---Vitamin C---Vitamin C berperan dalam pembentukan dan perbaikan sel-sel darah merah, tulang, dan jaringan tubuh---Karbohidrat---Menyediakan bahan bakar bagi bakteri baik di dalam tubuh yang membantu produksi vitamin B kompleks---Kalsium---Membantu perkembangan sistem syaraf dan fungsi otot tubuh anak',
            'deskripsi'=>'Berdasarkan jurnal Medicine, tofu mengandung semua 9 asam amino esensial yang penting untuk menjalani gaya hidup sehat dan seimbang.',
            'prosedur'=>'1. Langkah Pertama---Haluskan buah alpukat dengan menggunakan garpu---2. Langkah Kedua---Campurkan buah alpukat dan tofu ke dalam wadah. Tambahkan sedikit perasan jeruk nipis---3. Langkah Ketiga---Haluskan semua bahan dengan garpu atau gunakan blender untuk mendapatkan konsistensi yang lebih lembut---4. Langkah Keempat---Siap disantap!',
            'durasi'=>'PREP TIME---15 min---COOK TIME---45 min---AVOCADO',
            'gambar'=>'https://cdn.discordapp.com/attachments/897774150716887081/968903492519485470/alpukat_tahu.jpg'
        ]);
        Mpasi::create([
            'nama'=>'Bubur Hati Ayam Edamame',
            'umur'=>'12',
            'bahan'=>'Nasi putih---Hati ayam, kukus---Brokoli---Edamame---Bawang putih',
            'kuantitas'=>'3 sdm---1 potong---15 gr---10 gr---1 siung',
            'kandungan'=>'Protein---Untuk pembentukan imunoglobulin/antibodi yang berfungsi untuk menangkal infeksi yang disebabkan oleh virus atau bakteri---Zat Besi---Membantu pembentukan hemoglobin dan sel darah merah, zat besi juga memiliki peran penting untuk menunjang pertumbuhan serta fungsi saraf dan otak bayi---Vitamin C---Vitamin C berperan dalam pembentukan dan perbaikan sel-sel darah merah, tulang, dan jaringan tubuh---Karbohidrat---Menyediakan bahan bakar bagi bakteri baik di dalam tubuh yang membantu produksi vitamin B kompleks---Kalsium---Membantu perkembangan sistem syaraf dan fungsi otot tubuh anak',
            'deskripsi'=>'Makanan bayi 6 bulan satu ini yaitu menggunakan hati ayam, brokoli, dan edamame. Bisa menjadi pilihan lainnya untuk Si Kecil.',
            'prosedur'=>'1. Langkah Pertama---Campurkan dengan 3 sdm nasi putih dan tambahkan air secukupnya. Masak hingga teksturnya menjadi bubur dan pisahkan---2. Langkah Kedua---Kukus edamame dan brokoli sampai empuk---3. Langkah Ketiga---Tumis bawang putih dan masukkan potongan hati ayam hingga matang---4. Langkah Keempat---Blender semua bahan kecuali bubur nasi hingga lembut dan saring---5. Langkah Kelima---Sajikan lengkap bubur nasi yang sudah disaring dengan hati dan sayuran',
            'durasi'=>'PREP TIME---15 min---COOK TIME---45 min---AVOCADO',
            'gambar'=>'https://cdn.discordapp.com/attachments/897774150716887081/968904684251263036/hati_ayam_edamame.jpg'
        ]);
        Mpasi::create([
            'nama'=>'Puree Nanas Segar',
            'umur'=>'15',
            'bahan'=>'Potongan nanas segar---Yoghurt plain',
            'kuantitas'=>'250 gr---250 gr',
            'kandungan'=>'Protein---Untuk pembentukan imunoglobulin/antibodi yang berfungsi untuk menangkal infeksi yang disebabkan oleh virus atau bakteri---Zat Besi---Membantu pembentukan hemoglobin dan sel darah merah, zat besi juga memiliki peran penting untuk menunjang pertumbuhan serta fungsi saraf dan otak bayi---Vitamin C---Vitamin C berperan dalam pembentukan dan perbaikan sel-sel darah merah, tulang, dan jaringan tubuh---Karbohidrat---Menyediakan bahan bakar bagi bakteri baik di dalam tubuh yang membantu produksi vitamin B kompleks---Kalsium---Membantu perkembangan sistem syaraf dan fungsi otot tubuh anak',
            'deskripsi'=>'Cara membuatnya sangat mudah dan bisa dikreasikan dengan berbagai bahan tambahan.',
            'prosedur'=>'1. Langkah Pertama---Blender potongan nanas sampai jadi halus---2. Langkah Kedua---Tambahkan yogurt, kembali blender sampai tercampur rata---3. Langkah Ketiga---Bila masih terlalu asam, tambahkan pisang ke dalamnya---4. Langkah Keempat---Sajikan',
            'durasi'=>'PREP TIME---15 min---COOK TIME---45 min---AVOCADO',
            'gambar'=>'https://cdn.discordapp.com/attachments/897774150716887081/968906103209480232/nanas_segar.jpg'
        ]);
        Mpasi::create([
            'nama'=>'Sup Kentang Daging Kacang Merah',
            'umur'=>'16',
            'bahan'=>'Daging sapi giling---Kentang---Wortel---Kacang merah---Bawang putih---Air---Keju---Butter---Daun seledri',
            'kuantitas'=>'1 1/2 sdm---1 buah---1 buah---1 sdm---1 siung---250 ml---1 potong---1 sdm---5 buah',
            'kandungan'=>'Protein---Untuk pembentukan imunoglobulin/antibodi yang berfungsi untuk menangkal infeksi yang disebabkan oleh virus atau bakteri---Zat Besi---Membantu pembentukan hemoglobin dan sel darah merah, zat besi juga memiliki peran penting untuk menunjang pertumbuhan serta fungsi saraf dan otak bayi---Vitamin C---Vitamin C berperan dalam pembentukan dan perbaikan sel-sel darah merah, tulang, dan jaringan tubuh---Karbohidrat---Menyediakan bahan bakar bagi bakteri baik di dalam tubuh yang membantu produksi vitamin B kompleks---Kalsium---Membantu perkembangan sistem syaraf dan fungsi otot tubuh anak',
            'deskripsi'=>'Jenis pilihan lain resep MPASI 6 bulan terbaik adalah sup kentang daging kacang merah.',
            'prosedur'=>'1. Langkah Pertama---Iris dan tumis bawang merah putih kemudian sisihkan---2. Langkah Kedua---Didihkan air di panci. Setelah mendidih, masukkan kacang merah lalu tunggu hingga empuk---3. Langkah Ketiga---Setelah itu, masukkan kentang yang sudah dipotong-potong, lalu tunggu hingga setengah empuk---4. Langkah Keempat---Kemudian, masukkan potongan wortel dan daging giling hingga matang---5. Langkah Kelima---Sebelum api dimatikan, masukkan cincangan daun seledri, bawang merah, dan bawang putih yang sebelumnya sudah ditumis---6. Langkah Keenam---Tunggu air didihan hingga sedikit surut---7. Langkah Ketujuh---Jika sudah tidak terlalu panas, blender semua bahan hingga hancur. Jika sudah, sajikan---8. Langkah Kedelapan---Taburkan keju atau unsalted butter agar lebih gurih',
            'durasi'=>'PREP TIME---15 min---COOK TIME---45 min---POTATO',
            'gambar'=>'https://cdn.discordapp.com/attachments/897774150716887081/968907655135506502/bubur_hati_ayam.jpg'
        ]);
        Mpasi::create([
            'nama'=>'Puree Buah Naga',
            'umur'=>'18',
            'bahan'=>'Naga merah---Biskuit bayi',
            'kuantitas'=>'1/4 buah---1 buah',
            'kandungan'=>'Protein---Untuk pembentukan imunoglobulin/antibodi yang berfungsi untuk menangkal infeksi yang disebabkan oleh virus atau bakteri---Zat Besi---Membantu pembentukan hemoglobin dan sel darah merah, zat besi juga memiliki peran penting untuk menunjang pertumbuhan serta fungsi saraf dan otak bayi---Vitamin C---Vitamin C berperan dalam pembentukan dan perbaikan sel-sel darah merah, tulang, dan jaringan tubuh---Karbohidrat---Menyediakan bahan bakar bagi bakteri baik di dalam tubuh yang membantu produksi vitamin B kompleks---Kalsium---Membantu perkembangan sistem syaraf dan fungsi otot tubuh anak',
            'deskripsi'=>'Buah naga bisa dipakai sebagai bahan-bahan makanan bayi 6 bulan selanjutnya.',
            'prosedur'=>'1. Langkah Pertama---Dalam wadah lumatkan biskuit dengan air secukupnya---2. Langkah Kedua---Masukkan potongan buah naga ke dalam wadah---3. Langkah Ketiga---Aduk hingga merata dan tidak menggumpal---4. Langkah Keempat---Sajikan untuk Si Kecil!',
            'durasi'=>'PREP TIME---15 min---COOK TIME---45 min---FRUITS',
            'gambar'=>'https://cdn.discordapp.com/attachments/897774150716887081/968908973015187586/buah_naga.jpg'
        ]);
        Mpasi::create([
            'nama'=>'Nasi Tim Ayam',
            'umur'=>'19',
            'bahan'=>'Potongan sawi---Beras---Ayam suir---Wortel---Garam',
            'kuantitas'=>'secukupnya---250 ml---2 sdm---1 buah---secukupnya',
            'kandungan'=>'Protein---Untuk pembentukan imunoglobulin/antibodi yang berfungsi untuk menangkal infeksi yang disebabkan oleh virus atau bakteri---Zat Besi---Membantu pembentukan hemoglobin dan sel darah merah, zat besi juga memiliki peran penting untuk menunjang pertumbuhan serta fungsi saraf dan otak bayi---Vitamin C---Vitamin C berperan dalam pembentukan dan perbaikan sel-sel darah merah, tulang, dan jaringan tubuh---Karbohidrat---Menyediakan bahan bakar bagi bakteri baik di dalam tubuh yang membantu produksi vitamin B kompleks---Kalsium---Membantu perkembangan sistem syaraf dan fungsi otot tubuh anak',
            'deskripsi'=>'Nasi tim menjadi salah satu kesukaan Si Kecil sebagai resep MPASI 6 bulan. Tambahkan potongan sayur untuk melengkapi kebutuhan nutrisi bayi ya, Moms!
',
            'prosedur'=>'1. Langkah Pertama---Buatlah nasi tim dari beras putih yang dimasak hingga empuk---2. Langkah Kedua---Blender ayam hingga halus---3. Langkah Ketiga---Tambahkan sayur sawi rebus, sedikit garam, dan 2 sdm suwiran ayam ke dalam panci---4. Langkah Keempat---Masak sampai matang. Siap disantap Si Kecil!',
            'durasi'=>'PREP TIME---15 min---COOK TIME---45 min---CHICKEN',
            'gambar'=>'https://cdn.discordapp.com/attachments/897774150716887081/968912361379495987/nasi_tim_ayam.jpg'
        ]);
        Mpasi::create([
            'nama'=>'Apple stew dengan cinnamon',
            'umur'=>'20',
            'bahan'=>'Apel---Air---Bubuk kayu manis',
            'kuantitas'=>'1 buah---250 ml---1 sdm',
            'kandungan'=>'Protein---Untuk pembentukan imunoglobulin/antibodi yang berfungsi untuk menangkal infeksi yang disebabkan oleh virus atau bakteri---Zat Besi---Membantu pembentukan hemoglobin dan sel darah merah, zat besi juga memiliki peran penting untuk menunjang pertumbuhan serta fungsi saraf dan otak bayi---Vitamin C---Vitamin C berperan dalam pembentukan dan perbaikan sel-sel darah merah, tulang, dan jaringan tubuh---Karbohidrat---Menyediakan bahan bakar bagi bakteri baik di dalam tubuh yang membantu produksi vitamin B kompleks---Kalsium---Membantu perkembangan sistem syaraf dan fungsi otot tubuh anak',
            'deskripsi'=>'Buah apel dengan tambahan cinnamon tentu saja akan menghasilkan MPASI dengan aroma yang menggugah selera.',
            'prosedur'=>'1. Langkah Pertama---Kukus irisan apel yang telah dikupas dan dipotong dadu---2. Langkah Kedua---Haluskan apel yang telah dikukus dengan blender atau food processor. Jika sudah halus, saringlah apel dengan alat penyaring berlubang kecil---3. Langkah Ketiga---Setelah tersaring dengan halus, tambahkan sejumput bubuk kayu manis. Aduk rata dan sajikan',
            'durasi'=>'PREP TIME---15 min---COOK TIME---45 min---AVOCADO',
            'gambar'=>'https://cdn.discordapp.com/attachments/897774150716887081/968916645064106116/apple_stew.jpg'
        ]);
        Mpasi::create([
            'nama'=>'Puree jagung manis dan bayam',
            'umur'=>'21',
            'bahan'=>'Jagung manis---Daun bayam---Air',
            'kuantitas'=>'1 buah---15 lembar---5 sdm',
            'kandungan'=>'Protein---Untuk pembentukan imunoglobulin/antibodi yang berfungsi untuk menangkal infeksi yang disebabkan oleh virus atau bakteri---Zat Besi---Membantu pembentukan hemoglobin dan sel darah merah, zat besi juga memiliki peran penting untuk menunjang pertumbuhan serta fungsi saraf dan otak bayi---Vitamin C---Vitamin C berperan dalam pembentukan dan perbaikan sel-sel darah merah, tulang, dan jaringan tubuh---Karbohidrat---Menyediakan bahan bakar bagi bakteri baik di dalam tubuh yang membantu produksi vitamin B kompleks---Kalsium---Membantu perkembangan sistem syaraf dan fungsi otot tubuh anak',
            'deskripsi'=>'Jagung dan bayam merupakan kombinasi yang ideal. Mama bisa memberikannya bersamaan dengan bubur nasi yang ditambahkan telur.',
            'prosedur'=>'1. Langkah Pertama---Cuci bersih jagung manis dan bayam---2. Langkah Kedua---Rebus jagus manis sampai empuk dan mengeluarkan aroma, kemudian serut---3. Langkah Ketiga---Masukan bayam ke dalam air mendidih, masak dengan api kecil kira-kira selama 10 menit---4. Langkah Keempat---Campur bayam dengan jagung, dan masukan 5 sdm air matang---5. Langkah Kelima---Blender sampai halus---6. Langkah Keenam---Saring sampai tidak ada serat-serat kasar yang tersisa---7. Langkah Ketujuh---Sajikan',
            'durasi'=>'PREP TIME---15 min---COOK TIME---45 min---AVOCADO',
            'gambar'=>'https://cdn.discordapp.com/attachments/897774150716887081/968919065018114118/jagung_bayam1.jpg'
        ]);
        Mpasi::create([
            'nama'=>'Puree nasi kentang dan wortel',
            'umur'=>'23',
            'bahan'=>'Nasi putih---Seledri---Wortel---Kentang---ASI',
            'kuantitas'=>'5 sdm---1 batang---1 buah---1 buah---10 sdm',
            'kandungan'=>'Protein---Untuk pembentukan imunoglobulin/antibodi yang berfungsi untuk menangkal infeksi yang disebabkan oleh virus atau bakteri---Zat Besi---Membantu pembentukan hemoglobin dan sel darah merah, zat besi juga memiliki peran penting untuk menunjang pertumbuhan serta fungsi saraf dan otak bayi---Vitamin C---Vitamin C berperan dalam pembentukan dan perbaikan sel-sel darah merah, tulang, dan jaringan tubuh---Karbohidrat---Menyediakan bahan bakar bagi bakteri baik di dalam tubuh yang membantu produksi vitamin B kompleks---Kalsium---Membantu perkembangan sistem syaraf dan fungsi otot tubuh anak',
            'deskripsi'=>'Ada banyak kandungan nutrisi yang bisa mendukung pertumbuhan. Kentang dan wortel bisa jadi menu favorit si Kecil',
            'prosedur'=>'1. Langkah Pertama---Cuci bersih seledri, wortel, dan kentang---2. Langkah Kedua---Masak nasi putih hingga menjadi bubur, lalu tambahkan seledri---3. Langkah Ketiga---Kukus wortel dan kentang sampai empuk. Setelah matang, saring bubur, wortel dan kentang---4. Langkah Keempat---Campur semua bahan dengan susu formula atau ASI sesuai selera. Aduk hingga rata---5. Langkah Kelima---Siap disajikan',
            'durasi'=>'PREP TIME---15 min---COOK TIME---45 min---AVOCADO',
            'gambar'=>'https://cdn.discordapp.com/attachments/897774150716887081/968921516202930206/kentang_wortel.jpg'
        ]);
        Mpasi::create([
            'nama'=>'Puree brokoli, kentang, dan kaldu ikan',
            'umur'=>'24',
            'bahan'=>'Kentang---Brokoli---Ati ayam',
            'kuantitas'=>'1/2 buah---3 bunga---25 gram',
            'kandungan'=>'Protein---Untuk pembentukan imunoglobulin/antibodi yang berfungsi untuk menangkal infeksi yang disebabkan oleh virus atau bakteri---Zat Besi---Membantu pembentukan hemoglobin dan sel darah merah, zat besi juga memiliki peran penting untuk menunjang pertumbuhan serta fungsi saraf dan otak bayi---Vitamin C---Vitamin C berperan dalam pembentukan dan perbaikan sel-sel darah merah, tulang, dan jaringan tubuh---Karbohidrat---Menyediakan bahan bakar bagi bakteri baik di dalam tubuh yang membantu produksi vitamin B kompleks---Kalsium---Membantu perkembangan sistem syaraf dan fungsi otot tubuh anak',
            'deskripsi'=>'Makanan yang mengandung karbohidrat, protein hewani, nabati, serta sayur-sayuran sangat baik untuk bayi 6 bulan',
            'prosedur'=>'1. Langkah Pertama---Cuci bersih kentang dan brokoli---2. Langkah Kedua---Potong kentang menjadi beberapa bagian---3. Langkah Ketiga---Kukus brokoli bersama kentang yang sudah dipotong-potong selama kurang lebih 10 menit---4. Langkah Keempat---Angkat kentang dan brokoli kukus---5. Langkah Kelima---Rebus ati ayam sampai matang---6. Langkah Keenam---Blender semua bahan hingga halus. Pindahkan ke mangkuk. Sajikan',
            'durasi'=>'PREP TIME---15 min---COOK TIME---45 min---AVOCADO',
            'gambar'=>''
        ]);
        Mpasi::create([
            'nama'=>'Potato cream soup',
            'umur'=>'6',
            'bahan'=>'Kentang kecil, haluskan---Jagung manis, haluskan---Labu---Daging ayam cincang---Kembang kol---Daun bayam---Seledri---Bawang bombay---Bawang putih---Tepung terigu---Susu UHT---Kaldu---Keju parut',
            'kuantitas'=>'5 buah---1 buah---1/2 buah---50 gr---secukupnya---1 ikat---1 batang---1/2 buah---1 siung----1 sdm---150 ml---100 ml---1 sdm',
            'kandungan'=>'Protein---Untuk pembentukan imunoglobulin/antibodi yang berfungsi untuk menangkal infeksi yang disebabkan oleh virus atau bakteri---Zat Besi---Membantu pembentukan hemoglobin dan sel darah merah, zat besi juga memiliki peran penting untuk menunjang pertumbuhan serta fungsi saraf dan otak bayi---Vitamin C---Vitamin C berperan dalam pembentukan dan perbaikan sel-sel darah merah, tulang, dan jaringan tubuh---Karbohidrat---Menyediakan bahan bakar bagi bakteri baik di dalam tubuh yang membantu produksi vitamin B kompleks---Kalsium---Membantu perkembangan sistem syaraf dan fungsi otot tubuh anak',
            'deskripsi'=>'Porsi makanan bayi 6 bulan tak usah berlebihan dan sewajarnya saja. Salah satunya dengan membuatkan menu MPASI sup kentang berikut',
            'prosedur'=>'1. Langkah pertama---Tumis bawang bombay dan bawang putih dengan unsalted butter hingga wangi---2. Langkah kedua---Masukan daging ayam cincang, aduk sampai daging ayam berubah warna---3. Langkah ketiga---Tambahkan tepung terigu, aduk cepat lalu masukan susu UHT, aduk terus agar tepung terigu bergerindil---4. Langkah keempat---Tambahkan kaldu, masukan kentang dan labu siam, aduk aduk sampai susu dan kaldu menyusut---5. Langkah kelima---Masukan jagung manis, daun bayam dan seledri, masak hingga semua bahan matang---6. Langkah keenam---Apabila bahan belum matang dan cairan sudah menyusut dapat ditambah air sampai kekentalan yang diinginkan---7. Langkah ketujuh---Masukan keju sesaat sebelum diangkat. Saring bila diperlukan---8. Langkah kedelapan---Sajikan kepada bayi.',
            'durasi'=>'PREP TIME---15 min---COOK TIME---45 min---AVOCADO',
            'gambar'=>''
        ]);
        Mpasi::create([
            'nama'=>'Banana rise raisin',
            'umur'=>'9',
            'bahan'=>'Pisang (ukuran sedang)---Nasi---ASI---Kayu manis---Kismis',
            'kuantitas'=>'1 buah---200 gr---secukupnya---1 sdm---1 sdm',
            'kandungan'=>'Protein---Untuk pembentukan imunoglobulin/antibodi yang berfungsi untuk menangkal infeksi yang disebabkan oleh virus atau bakteri---Zat Besi---Membantu pembentukan hemoglobin dan sel darah merah, zat besi juga memiliki peran penting untuk menunjang pertumbuhan serta fungsi saraf dan otak bayi---Vitamin C---Vitamin C berperan dalam pembentukan dan perbaikan sel-sel darah merah, tulang, dan jaringan tubuh---Karbohidrat---Menyediakan bahan bakar bagi bakteri baik di dalam tubuh yang membantu produksi vitamin B kompleks---Kalsium---Membantu perkembangan sistem syaraf dan fungsi otot tubuh anak',
            'deskripsi'=>'Banana raisin sangat tepat untuk membuat resep jadwal menu MPASI 6 bulan terbaik. Ini salah satu menu yang bernutrisi dengan rasa manis alami.',
            'prosedur'=>'1. Langkah pertama---Kupas dan potong pisang menjadi bagian kecil---2. Langkah kedua---Setelah itu, siapkan blender untuk menghaluskan pisang bersama seluruh bahan lainnya---3. Langkah ketiga---Kemudian Mama bisa saring makanan yang telah dihaluskan tadi. Setelahnya tambahkan---4. Langkah keempat---ASI secukupnya agar tekstur tidak terlalu kental---5. Langkah kelima---MPASI dengan bahan pisang pun siap disajikan untuk bayi mama.',
            'durasi'=>'PREP TIME---15 min---COOK TIME---45 min---AVOCADO',
            'gambar'=>''
        ]);
        Mpasi::create([
            'nama'=>'Chicken bolognese',
            'umur'=>'10',
            'bahan'=>'Ayam kampung (cincang)---Wortel, diparut---Kentang, dikukus---Kacang merah---Air---Bawang putih---Bawang bombay---Oregano powder---Olive oil',
            'kuantitas'=>'500 gr---1 sdm---1 1/2 buah---8 butir---250 ml---1 siung---1 buah---1 sdm---1 sdm',
            'kandungan'=>'Protein---Untuk pembentukan imunoglobulin/antibodi yang berfungsi untuk menangkal infeksi yang disebabkan oleh virus atau bakteri---Zat Besi---Membantu pembentukan hemoglobin dan sel darah merah, zat besi juga memiliki peran penting untuk menunjang pertumbuhan serta fungsi saraf dan otak bayi---Vitamin C---Vitamin C berperan dalam pembentukan dan perbaikan sel-sel darah merah, tulang, dan jaringan tubuh---Karbohidrat---Menyediakan bahan bakar bagi bakteri baik di dalam tubuh yang membantu produksi vitamin B kompleks---Kalsium---Membantu perkembangan sistem syaraf dan fungsi otot tubuh anak',
            'deskripsi'=>'Chicken bolognese bisa jadi pilihan menu yang dan bergizi untuk si kecil yang susah makan',
            'prosedur'=>'1. Langkah pertama---Siapkan dan panaskan olive oil, kemudian masukkan bawang putih dan bawang bombay. Tmuis hingga harum---2. Langkah kedua---Setelah itu, masukkan potongan ayam kampung dan tumis ayam sampai matang---3. Langkah ketiga---Masukkan juga wortel parut, lalu tuangkan tomat yang sudah diblender---4. Langkah keempat---Aduk rata sebentar, baru setelahnya tambahkan air dan kacang merah. Mama juga bisa menambahkan sedikit garam dan aduk rata kembali seluruhnya---5 Langkah kelima---Setelah air mendidih, masukkan kentang dan tambahkan oregano secukupnya---6. Langkah keenam---Jika semua sudah siap, blender dan saring agar tekstur menjadi lebih lembut. Chicken bolognese pun siap disajikan.',
            'durasi'=>'PREP TIME---15 min---COOK TIME---45 min---AVOCADO',
            'gambar'=>''
        ]);
        Mpasi::create([
            'nama'=>'Bubur ayam jamur',
            'umur'=>'8',
            'bahan'=>'Beras---Daging ayam---Jamur Shitake---Brokoli---Tomat ceri---Bawang merah---Bawang putih---Daun jeruk---Butter---Olive oil',
            'kuantitas'=>'2 sdm---30 gr---3 buah---2-3 kuntum---3 buah---3 siung---1 siung---1 lembar---1 sdm---1 sdt',
            'kandungan'=>'Protein---Untuk pembentukan imunoglobulin/antibodi yang berfungsi untuk menangkal infeksi yang disebabkan oleh virus atau bakteri---Zat Besi---Membantu pembentukan hemoglobin dan sel darah merah, zat besi juga memiliki peran penting untuk menunjang pertumbuhan serta fungsi saraf dan otak bayi---Vitamin C---Vitamin C berperan dalam pembentukan dan perbaikan sel-sel darah merah, tulang, dan jaringan tubuh---Karbohidrat---Menyediakan bahan bakar bagi bakteri baik di dalam tubuh yang membantu produksi vitamin B kompleks---Kalsium---Membantu perkembangan sistem syaraf dan fungsi otot tubuh anak',
            'deskripsi'=>'Jamur kaya akan vitamin dipandu dengan ayam yang kaya protein sangat baik untuk perkembangan bayimu',
            'prosedur'=>'1. Langkah pertama---Pertama, Mama bisa merebus jamur selama semalaman sebelum keesokan paginya dimasakn untuk MPASI si Kecil---2. Langkah kedua---Kemudian Mama bisa mencuci semua bahan hingga bersih---3. Langkah ketiga---Setelah itu, ambil jamur yang sudah direbus dan potong kecil bersamaan dengan daging ayam, brokoli dan tomat yang sudah dicuci bersih---4. Langkah keempat---Geprek bawang putih dan bawang merah, kemudian masukkan semua bahan kecuali butter dan olive oil kedalam slowcooker atau panci. Lalu masak hingga bubur benar-benar matang.
Ketika sudah matang, blender kemudian saring bubur hingga benar-benar halus---5. Langkah kelima---Sebelum disajikan pada si Kecil Mama bisa menambahkan butter dan olive oil untuk menambah cita rasa---6. Langkah keenam---Bubur ayam jamur pun siap disajikan!',
            'durasi'=>'PREP TIME---15 min---COOK TIME---45 min---AVOCADO',
            'gambar'=>''
        ]);
        Mpasi::create([
            'nama'=>'Nasi Tim Salmon',
            'umur'=>'11',
            'bahan'=>'Beras---Minyak---Air---Filet Salmon---Labu kuning, parut---Tempe---Tomat---Keju, parut',
            'kuantitas'=>'20 gr---1 sdt---200 ml---25 gr---25 gr---25 gr---25 gr---5 gr',
            'kandungan'=>'Protein---Untuk pembentukan imunoglobulin/antibodi yang berfungsi untuk menangkal infeksi yang disebabkan oleh virus atau bakteri---Zat Besi---Membantu pembentukan hemoglobin dan sel darah merah, zat besi juga memiliki peran penting untuk menunjang pertumbuhan serta fungsi saraf dan otak bayi---Vitamin C---Vitamin C berperan dalam pembentukan dan perbaikan sel-sel darah merah, tulang, dan jaringan tubuh---Karbohidrat---Menyediakan bahan bakar bagi bakteri baik di dalam tubuh yang membantu produksi vitamin B kompleks---Kalsium---Membantu perkembangan sistem syaraf dan fungsi otot tubuh anak',
            'deskripsi'=>'Salmon memiliki kandung gizi yang sangat baik untuk perkembangan bayi ',
            'prosedur'=>'1. Langkah pertama---Masukkan beras, air, ikan, dan tempe ke panci berisi air. Rebus sampai air tinggal setengahnya---2. Langkah kedua---Masukkan labu kuning---3. Langkah ketiga---Masak sampai lunak dan kental---4. Langkah keempat---Masukkan tomat iris, beri keju parut dan minyak, aduk rata. Masak sebentar sampai tomat masak, angkat, dan dinginkan---5. Langkah kelima---Haluskan dengan menggunakan blender atau disaring dengan saringan kawat. Tuang ke mangkuk.
Nasi tim salmon siap disajikan.',
            'durasi'=>'PREP TIME---15 min---COOK TIME---45 min---AVOCADO',
            'gambar'=>''
        ]);
        Mpasi::create([
            'nama'=>'Bubur Tim Ayam Keju',
            'umur'=>'12',
            'bahan'=>'Beras---Air---Dada ayam---Jagung manis---Daun sawi hijau---Bawang putih---Keju---Parsley',
            'kuantitas'=>'5 sdm---350 ml---150 gr---secukupnya---2 lembar---1 siung---10 gr--- 1 sdm',
            'kandungan'=>'Protein---Untuk pembentukan imunoglobulin/antibodi yang berfungsi untuk menangkal infeksi yang disebabkan oleh virus atau bakteri---Zat Besi---Membantu pembentukan hemoglobin dan sel darah merah, zat besi juga memiliki peran penting untuk menunjang pertumbuhan serta fungsi saraf dan otak bayi---Vitamin C---Vitamin C berperan dalam pembentukan dan perbaikan sel-sel darah merah, tulang, dan jaringan tubuh---Karbohidrat---Menyediakan bahan bakar bagi bakteri baik di dalam tubuh yang membantu produksi vitamin B kompleks---Kalsium---Membantu perkembangan sistem syaraf dan fungsi otot tubuh anak',
            'deskripsi'=>'Ayam dan keju adalah perpaduan yang sempurna untuk menu makan malam si Kecil ',
            'prosedur'=>'1. Langkah pertama---Masukan beras dan air ke dalam slowcooker, set 2 jam---2. Langkah kedua---Panaskan margarin ,masukkan bawang putih, masak hingga harum---3. Langkah ketiga---Masukkan ayam dan jagung, tambahkan sedikit air, kemudian masukkan keju, sawi, parsley, masak hingga air menyusut---4. Langkah keempat---Kemudian campurkan tumisan ayam ke dalam slowcooker. Setelah matang bagi menjadi 3 porsi.',
            'durasi'=>'PREP TIME---15 min---COOK TIME---45 min---AVOCADO',
            'gambar'=>''
        ]);
        Mpasi::create([
            'nama'=>'Cream Soup Bayam',
            'umur'=>'15',
            'bahan'=>'Bayam, dibuat puree---Butter---Tepung terigu---Susu UHT full cream---Bawang bombay---Lada---Heavy cream---Garam',
            'kuantitas'=>'1/2 ikat---2 sdm---1 sdm---250 ml---1/2 buah---1 sdt---2 sdm---1 jumput',
            'kandungan'=>'Protein---Untuk pembentukan imunoglobulin/antibodi yang berfungsi untuk menangkal infeksi yang disebabkan oleh virus atau bakteri---Zat Besi---Membantu pembentukan hemoglobin dan sel darah merah, zat besi juga memiliki peran penting untuk menunjang pertumbuhan serta fungsi saraf dan otak bayi---Vitamin C---Vitamin C berperan dalam pembentukan dan perbaikan sel-sel darah merah, tulang, dan jaringan tubuh---Karbohidrat---Menyediakan bahan bakar bagi bakteri baik di dalam tubuh yang membantu produksi vitamin B kompleks---Kalsium---Membantu perkembangan sistem syaraf dan fungsi otot tubuh anak',
            'deskripsi'=>'Bayam juga bisa jadi sajian makanan yang mudah dicerna si kecil yang lahap. Bayam membantu metabolisme bayi',
            'prosedur'=>'1. Langkah pertama---Panaskan butter/margarin---2. Langkah kedua---Tumis bawang bombai hingga harum---3. Langkah ketiga---Masukkan tepung terigu dan aduk hinnga rata---4. Langkah keempat---Tuang susu sedikit demi sedikit sambil diaduk, masak hingga mendidih---5. Langkah keenam---Masukkan puree bayam---6. Langkah keenam---Masukan lada, garam dan kaldu jamur. Masak hingga mendidih---7. Langkah ketujuh---Matikan kompor dan masukkan cream sambil diaduk.',
            'durasi'=>'PREP TIME---15 min---COOK TIME---45 min---AVOCADO',
            'gambar'=>''
        ]);
        Mpasi::create([
            'nama'=>'Nasi Tim Ati Ayam',
            'umur'=>'16',
            'bahan'=>'Beras putih---Ati ayam---Wortel---Kacang merah---Air kaldu---Bawang putih---Bawang merah---Daun salam---Butter',
            'kuantitas'=>'50 gr---60 gr---10 gr---10 gr---200 ml---1 siung---1 siung---2 lembar---1 sdm',
            'kandungan'=>'Protein---Untuk pembentukan imunoglobulin/antibodi yang berfungsi untuk menangkal infeksi yang disebabkan oleh virus atau bakteri---Zat Besi---Membantu pembentukan hemoglobin dan sel darah merah, zat besi juga memiliki peran penting untuk menunjang pertumbuhan serta fungsi saraf dan otak bayi---Vitamin C---Vitamin C berperan dalam pembentukan dan perbaikan sel-sel darah merah, tulang, dan jaringan tubuh---Karbohidrat---Menyediakan bahan bakar bagi bakteri baik di dalam tubuh yang membantu produksi vitamin B kompleks---Kalsium---Membantu perkembangan sistem syaraf dan fungsi otot tubuh anak',
            'deskripsi'=>'Hati ayam memiliki kandungan nutrisi yang baik untuk tumbuh kembang si kecil ',
            'prosedur'=>'1. Langkah pertama---Masak nasi lembek di magic com, masak bersama nasi biasa, taruh di wadah tahan panas dan beri banyak air---2. Lanngkah kedua---Tunggu sampai matang.
Potong dadu semua bahan---3. Langkah ketiga---Panaskan Unsalted butter, tumis bumbu aromatik sampai harum---4. Langkah keempat---Masukkan ati ayam, masak hingga berubah warna---5. Langkah kelima---Sebelumnya rebus kacang merah---6. langkah keenam---Kalau sudah matang tata di mangkok kecil, masukkan nasi dan lauk, kukus 15 menit---7. Langkah ketujuh---Sajikan.',
            'durasi'=>'PREP TIME---15 min---COOK TIME---45 min---AVOCADO',
            'gambar'=>''
        ]);
    }
}
