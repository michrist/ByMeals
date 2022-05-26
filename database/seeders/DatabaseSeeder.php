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
        Artikel::create([
            'idArtikel'=>'1',
            'judul'=>'BEST SPOONS FOR BABY',
            'kategori'=>'Bayi',
            'isi'=>'Baby spoons are not just smaller versions of adult spoons (spoiler alert!). 
            Whether you use a traditional weaning approach, baby-led weaning, or a combination of both, at some point your baby is going to need to use utensils, including a spoon. And although a baby eating yogurt with their fingers at 7 months is oh-so-adorable, a child eating yogurt with their fingers at 7 years is not quite as cute. 
            
            HOW TO PICK THE BEST SPOON
            Buying baby spoons is different in many ways than buying spoons for a toddler or older child. Here are a few tips to consider when picking the best spoon for both your baby’s and family’s needs.
            
            - FEEDING APPROACH 
            Although there are spoons that work well for both traditional weaning and baby-led weaning, some spoons are designed more for parent feeding, while others are designed more for baby’s self-feeding. Think about what type of approaches you plan to use with your little one and consider trying a few different options as your baby grows.
            
            - SIZE/SHAPE
            An infant spoon should be relatively small and narrow so that it fits easily in the mouth. A shallow bowl is helpful so that baby can close their lips and easily clear food off the spoon. Shorter, thicker handles are easier for your baby to self-feed with, while longer, thinner handles help parents feed purees.
            
            - MATERIALS
            You’ll want a material that provides structure and is firm, yet flexible and gentle enough for baby’s mouth. Food grade silicone is a popular choice that also allows your baby to “teethe” a little on the spoon. Stainless steel and plastic may also work for your baby, especially if the spoon has more than one texture or material.
            
            - STYLE
            The variety of colors, designs, and textures are endless these days. We like spoons that offer “built-in” teething options, such as added texture via bumps or ridges on the handles
            
            BEST SPOONS FOR SELF-FEEDING BABIES
            - NumNum Pre-Spoon GOOtensils
            - Olababy Soft-Tip Training Spoon
            - Bumkins Utensils
            - PrimaStella Silicone Rainbow Spoon Set for Babies
            
            BEST SPOONS FOR PUREES
            - Munchkin 6 Piece Lift Infant Spoons
            - WeeSprout Silicone Baby Spoons
            - Boon Swap 2-in-1 Baby Spoon
            - ezpz Tiny Spoon
            - Avanchy Stainless Steel Infant Spoons
            
            HOW TO TEACH BABY TO USE A SPOON
            - As with starting solid foods in general, make sure your baby has good support at their head, trunk, and feet, ideally via sitting in a high chair or booster chair.
            - Serve thicker purees that will stick easily to the spoon to start with, such as oatmeal, mashed sweet potatoes, or greek yogurt.
            - Model dipping the spoon in the puree and bringing it up to your mouth. You can do this with your baby’s spoon before offering it to them and with your own food during the meal.
            - You can simply hand baby the spoon and see what they’ll do, but you may also want to consider pre-loading the spoon to help baby get started. Just scoop up a small amount and either set the spoon on the tray for your baby to grasp or place the spoon in their hand. This may help decrease frustration with unsuccessful attempts in the early stages of learning.
            - Don’t worry if your baby doesn’t seem interested in using the spoon or is more distracted by throwing it off their tray at first. You can always remove the spoon and offer it again at another meal. Your baby can still get in great practice with hand-eye coordination needed for spoon-feeding by dipping their fingers in a bowl and slurping the puree off of them!'
            
        ]);
        Artikel::create([
            'idArtikel'=>'2',
            'judul'=>'Memperkenalkan Makanan Bayi Sesuai Usia',
            'kategori'=>'Ibu',
            'isi'=>'Makanan bayi umumnya sudah bisa diberikan saat bayi berusia 6 bulan. Bunda dapat mulai memperkenalkan makanan bayi kepada Si Kecil di usia tersebut agar ia terbiasa mengonsumsi makanan padat. Namun, lakukan secara bertahap dan pilih makanan bayi sesuai usia Si Kecil.

            Sumber gizi dan asupan utama bayi adalah air susu ibu (ASI). Jika tidak memungkinkan untuk menyusu, bayi bisa diberikan susu formula. Nah, setelah usianya 6 bulan, bayi sudah bisa diperkenalkan dengan makanan pendamping ASI (MPASI) agar ia mulai terbiasa mengonsumsi makanan padat.. 
            
            Ada beberapa tanda yang dapat Bunda kenali sebagai kesiapan Si Kecil untuk mengonsumsi makanan padat, seperti mulai hilangnya refleks mendorong pada lidah Si Kecil, ia bisa duduk tegak dan mempertahankan posisi kepala dan lehernya, serta ia terlihat tertarik pada makanan.
            
            Memperkenalkan Makanan Bayi Sesuai Usia
            Memperkenalkan makanan bayi perlu dilakukan secara bertahap. Berikut ini adalah petunjuk pemberian makanan bayi sesuai usianya:
            
            Usia 4–6 Bulan
            Pada masa ini, ASI atau susu formula masih merupakan asupan nutrisi utama bayi. Sementara itu, makanan padat masih merupakan asupan tambahan saja.
            
            Biasanya makanan bayi yang paling awal diperkenalkan adalah bubur sereal bayi yang dicampur ASI atau susu formula. Selain itu, Bunda juga bisa mulai memberikan bubur yang terbuat dari pisang, apel, pepaya, dan ubi yang dihaluskan dengan blender.
            
            Untuk memperkenalkan makanan pada bayi, Bunda tidak perlu terburu-buru dan lakukanlah secara perlahan dan bertahap sesuai kemauan dan kemampuan Si kecil. Misalnya, berikan bubur sekitar 1 sendok teh, kemudian tingkatkan menjadi 1 sendok makan, dan berikan sebanyak 2 kali sehari.
            
            Cara memberikannya juga perlu Bunda perhatikan. Berikan makanan dengan mendekatkan 1 sendok makanan di dekat mulut Si Kecil dan perhatikan responsnya. Jika ia menolak, tunda sejenak atau tunggu beberapa hari sebelum mencoba lagi.
            
            Sebisa mungkin usahakan untuk memberikan Si Kecil makan secara teratur. Jangan menunda sampai ia terlalu lapar, karena hal ini bisa membuatnya menjadi rewel atau lela, sehingga susah untuk makan.
            
            Untuk menyiasatinya, Bunda bisa memberi sedikit ASI terlebih dahulu. Setelah itu, pangku Si Kecil atau dudukkan pada tempat duduk khusus untuk memulai langkah awal pemberian makanan bayi.
            
            Usia 6–8 bulan
            Pada usia ini, rata-rata bayi sudah mampu duduk di kursi khusus bayi tanpa bantuan. Namun, agar lebih aman, jangan lupa kenakan sabuk pengaman yang biasa terpasang pada kursi bayi, ya, Bun.
            
            Nah, bila bayi Bunda sudah bisa makan sereal lunak atau bubur nasi dari sendok, selanjutnya Bunda dapat memperkenalkan makanan bayi jenis lain. Namun, ingat. Tetap perkenalkan secara perlahan ketika Bunda memberinya jenis makanan baru.
            
            Bunda bisa memberikan makanan tersebut kepada Si Kecil selama beberapa hari berturut-turut, agar dia terbiasa dengan rasanya, sekaligus mengetahui kemungkinan bayi memiliki reaksi alergi terhadap suatu makanan atau tidak.
            
            Pada usia ini, Bunda sudah dapat memberikan buah dan sayur yang dihaluskan. Misalnya, alpukat, ubi, atau wortel yang sudah dimasak terlebih dahulu. Pilihan lainnya adalah bubur dari kacang-kacangan, seperti edamame, kacang panjang, kacang merah, kedelai, serta bubur dari tahu.
            
            Porsi untuk bayi 6–8 bulan adalah 1 sendok teh bubur buah, yang kemudian dapat ditingkatkan menjadi ¼ hingga ½ cangkir secara bertahap dalam 2–3 kali makan. Porsi yang sama berlaku untuk bubur dari sayur. Sementara itu, sereal lunak atau bubur nasi dapat Bunda berikan sekitar 3–9 sendok makan dalam 2–3 kali makan.
            
            Untuk memenuhi kebutuhan protein Si Kecil, Bunda bisa memberikan daging, ikan, telur, tahu, dan tempe yang sudah dipotong halus. Selain itu, Bunda juga boleh memberikan yogurt tanpa pemanis dalam porsi kecil.
            
            Usia 8–10 bulan
            Pada usia 8–10 bulan, sebagian besar bayi sudah mampu mengonsumsi bubur atau sereal yang diberikan bersama dengan ASI atau susu formula.
            
            Umumnya, saat ini bayi sudah bisa menikmati mengunyah makanan dengan tekstur yang lebih kasar. Bayi usia 9 bulan juga biasanya sudah lebih pandai menggenggam makanan dan memasukkannya ke dalam mulut.
            
            Pada usia ini, Bunda cukup menghaluskan makanan bayi saja, tidak perlu lagi membuatnya menjadi bubur.
            
            Beberapa jenis makanan, seperti wortel atau ubi, tetap perlu dimasak terlebih dahulu, tetapi tidak perlu dihaluskan. Bunda cukup memotong makanan tersebut kecil-kecil agar SI Kecil tidak tersedak. Demikian pula bila Bunda akan memberikan biskuit khusus bayi.
            
            Porsi makan bayi usia 8–10 bulan adalah sekitar ¼ hingga ½ cangkir sereal, ¾ atau 1 cangkir buah dan sayur, serta  hingga ½ cangkir makanan sumber protein, seperti daging dan ikan.
            
            Usia 10–12 bulan
            Menjelang ulang tahun pertamanya, bayi sudah mampu mengonsumsi banyak jenis makanan yang sama dengan orang dewasa. Hanya saja, perlu diberikan dalam potongan kecil agar aman saat dikunyah dan ditelan.
            
            Kendati demikian, produk kacang-kacangan, telur utuh, dan ikan sebaiknya diberikan kepada bayi ketika sudah berusia 1 tahun, terutama jika bayi memiliki faktor risiko untuk mengalami alergi, misalnya jika ada anggota keluarga yang memiliki riwayat alergi.
            
            Selain itu, susu sapi dan madu juga disarankan untuk diberikan setelah bayi berusia 1 tahun. Untuk porsi makannya, bayi usia 10–12 bulan tidak terlalu berbeda dengan usia 8–10 bulan.
            
            Tips Menyiapkan Makanan Bayi
            Sebelum menyiapkan makanan bayi, hal pertama yang tidak boleh Bunda lupakan adalah mencuci tangan dengan air mengalir dan sabun hingga benar-benar bersih.
            
            Selain itu, ingat juga untuk selalu memberikan makanan dengan tekstur yang sesuai dengan usia Si Kecil. Misalnya, pada usia 9 bulan, Bunda sudah bisa memberi ia makanan dengan tekstur yang lebih kasar dan kental untuk membantunya belajar mengunyah.
            
            Berikut adalah cara menyiapkan makanan bayi sesuai dengan jenis makanannya:
            
            Makanan siap saji
            Bila Bunda memutuskan untuk memberi Si Kecil makanan bayi siap saji, hal yang perlu Bunda perhatikan antara lain:
            
            - Pastikan produk makanan bayi sudah memenuhi standar kesehatan.
            - Hindari membeli produk makanan bayi yang mengandung pemanis dan bahan tambahan lainnya.
            - Pindahkan makanan bayi terlebih dahulu ke mangkuk sebelum memberikannya pada Si Kecil. Kemudian, simpan sisanya di dalam lemari pendingin.
            - Habiskan makanan bayi siap pakai dalam 1–2 hari setelah kemasannya dibuka.
            - Makanan yang disiapkan sendiri
            - Jika Bunda memilih untuk memberi Si Kecil makanan bayi yang Bunda siapkan sendiri, hal-hal yang perlu Bunda perhatikan adalah:
            
            a. Gunakan blender atau food processor untuk menghaluskan makanan bayi.
            b. Pilih cara memasak yang dapat menjaga nutrisi dengan baik. Misalnya, dibandingkan direbus, lebih baik Bunda mengukus buah dan sayur.
            c. Berikan Si Kecil makanan dengan 1 bahan terlebih dahulu. Bila ia sudah terbiasa, cobalah campur 2 bahan makanan untuk diolah menjadi bubur.
            d. Apabila Bunda masih memiliki pertanyaan terkait cara memperkenalkan makanan bayi sesuai usia atau bingung memilih makanan yang tepat untuk Si Kecil, jangan ragu bertanya kepada dokter, ya.'
            
        ]);
        Artikel::create([
            'idArtikel'=>'3',
            'judul'=>'Apa itu MPASI?',
            'kategori'=>'Tips and Trick',
            'isi'=>'Pengertian MPASI
            Makanan Pendamping ASI (MPASI) diberikan pada bayi setelah menginjak usia enam bulan. Seperti namanya, makanan ini diberikan sebagai pendamping bagi bayi yang menyusui. Untuk mengolah MPASI pun tidak boleh sembarangan, karena pengolahannya berbeda dengan makanan orang dewasa. Ada beberapa hal yang perlu diketahui dan diperhatikan oleh ibu dalam menyiapkan MPASI.
            
            Makanan ini diberikan pada bayi yang sedang tumbuh dan membutuhkan tambahan zat besi, seng, dan energi dari ASI atau susu formula saja. Namun, ASI memiliki nutrisi yang penting untuk pertumbuhan dan harus dilanjutkan paling tidak hingga bayi berusia 12 bulan dan lebih dari itu lebih baik. Hal ini agar bayi dapat makan berbagai makanan sehat bersama anggota keluarga lainnya.
            
            Hal-Hal yang Perlu Diperhatikan dari MPASI
            Sekitar usia 6 bulan, kebutuhan energi dan nutrisi bayi mulai tidak tercukupi jika hanya berasal dari ASI. Maka dari itu, makanan pendamping ASI atau MPASI dibutuhkan untuk menjamin kebutuhan gizi anak sehingga tumbuh dengan maksimal. Selain itu, bayi yang memasuki usia ini juga sudah siap mendapatkan makanan lain secara perkembangan tubuhnya.
            
            Jika makanan pendamping tidak diperkenalkan sekitar usia 6 bulan, atau tidak diberikan secara tepat, maka pertumbuhan bayi mungkin saja terganggu. Untuk memastikan terpenuhinya kebutuhan nutrisi bayi, beberapa hal yang perlu diperhatikan dari MPASI yang diberikan, antara lain:
            - Tepat Waktu: Makanan ini diberikan bertepatan ketika kebutuhan energi dan nutrisi yang dibutuhkan tidak cukup hanya dengan diberikannya melalui ASI eksklusif. Hal ini juga dapat terlihat saat Si Kecil sudah menunjukkan ketertarikan pada makanan dan sudah dapat mengangkat kepala tanpa bantuan.
            - Cukup: Memastikan untuk menyediakan energi, protein, dan mikronutrien yang cukup untuk memenuhi kebutuhan gizi anak yang sedang tumbuh. Beberapa nutrisi yang perlu dipenuhi adalah karbohidrat, protein hewani dan nabati, zat besi, serta zinc. Pastikan juga menyesuaikan jumlah dan tekstur sesuai dengan usia anak.
            - Aman: Ibu juga harus menyimpan dan menyiapkan semua makanan yang akan diberikan pada anak tetap higienis. Sebelumnya juga, bersihkan semua alat makan dengan sabun khusus bayi. Ada baiknya untuk menyimpan semua makanan, seperti daging dan ikan, di kulkas dengan suhu di bawah 5 derajat Celcius.
            - Diberikan dengan Tepat: Makanan diberikan sesuai dengan nafsu makan dan tingkat kekenyangan anak, serta penyesuaian porsi dengan usianya. Ibu juga perlu membuat jadwal yang teratur dengan tiga makanan utama dan dua camilan.
            
            
            Jenis MPASI yang Buruk untuk Bayi
            Penting untuk memberikan bayi berbagai macam makanan dengan rasa dan tekstur yang berbeda-beda. Namun, ada beberapa makanan yang sebaiknya tidak diberikan dan dihindari saat anak baru belajar mengonsumsi makanan pendamping untuk mengurangi risiko tersedak atau gangguan lainnya. Beberapa makanan tersebut, antara lain:
            - Makanan yang kecil dan keras sehingga mampu menyebabkan anak tersedak. Hindari makanan, seperti kacang-kacangan utuh, biji-bijian, wortel yang tidak dihaluskan, serta potongan apel.
            - Jangan menambahkan gula atau garam ke makanan yang ada. Tambahan tersebut dapat menimbulkan kerusakan gigi dan dapat lebih membebani kerja dari ginjal anak sehingga rentan terserang penyakit.
            - Hindari memberikan susu sapi hingga usianya mencapai 12 bulan. Jika usianya sudah cukup, ibu dapat menggunakan susu sapi ke dalam makanan untuk menghaluskan MPASI yang akan diberikan.
            - Si Kecil tidak membutuhkan madu dan sebaiknya tidak diberikan karena dapat menimbulkan penyakit pada bayi di bawah usia 12 bulan. Hindari juga menggunakan madu sebagai pemanis pada semua mainan gigit anak.
            
            
            Tips MPASI pada Anak
            - Siapkan makanan sebelum disajikan dan bekukan kembali dalam wadah kecil untuk digunakan nanti guna mengurangi kemungkinan dihinggapi bakteri.
            - Pastikan makanan yang diberikan tetap segar, bersih, dan disimpan dengan benar untuk mengurangi kemungkinan keracunan makanan. Simpan makanan di lemari es hanya selama 1 hingga 2 hari.
            - Ibu dapat melihat perubahan pada kotoran bayi saat mengonsumsi makanan jenis baru. Ini terbilang normal dan dapat berubah tergantung makanan yang dikonsumsi.
            - Biasakan untuk memeriksa pertumbuhan bayi sesering mungkin dan pastikan selalu dicatat pada grafik pertumbuhan. Perhatikan apakah pertumbuhan anak sesuai dengan pola yang ada pada grafik tersebut. Jika tidak sesuai, ada baiknya menemui dokter untuk memastikannya.'
            
        ]);
        Artikel::create([
            'idArtikel'=>'4',
            'judul'=>'Alpukat sebagai MPASI, Ini Manfaatnya untuk Bayi',
            'kategori'=>'Nutrisi',
            'isi'=>'Alpukat sebagai MPASI, Ini Manfaatnya untuk Bayi 
            “Buah alpukat mengandung nutrisi dan lemak tak jenuh yang baik untuk bayi, yang dibutuhkan untuk mendukung perkembangan otak dan tubuhnya. Ada beberapa manfaat lainnya dari alpukat yang bisa didapatkan bayi saat diberi MPASI. Contohnya merawat saluran cerna dan mencegah peradangan pada tubuh bayi.”
            
            Sebagian ibu pasti tidak sabar menunggu bayinya mencapai usia enam bulan untuk diberi MPASI. Jenis makanan yang menjadi favorit ibu adalah buah-buahan, misalnya alpukat karena buah ini mudah diolah dan mengandung nilai gizi yang tinggi. 
            
            Buah alpukat mengandung nutrisi dan lemak tak jenuh yang baik untuk bayi, yang dibutuhkan untuk mendukung perkembangan otak dan tubuhnya. Buah alpukat mengandung banyak nutrisi yang baik untuk bayi seperti vitamin dan mineral. Beberapa di antaranya vitamin C, A, K, E, dan B6, serta folat, thiamin, kalsium, zat besi, kalium, dan natrium.
            
            Ragam Manfaat Alpukat untuk Bayi
            Nah, beberapa manfaat dari alpukat yang bisa didapatkan bayi saat diberi MPASI, antara lain: 
            
            1. Membantu Proses Perkembangan Otak Bayi
            
            Alpukat juga kaya akan lemak tak jenuh yang baik untuk tubuh bayi, yaitu asam lemak omega 3. Kandungan lemak tersebut meningkatkan kadar kolesterol yang sangat baik untuk perkembangan otak bayi dan berperan penting untuk kecerdasan bayi di masa yang akan datang, Maka dari itu, selama hamil, menyusui dan MPASI, ibu disarankan memberikannya untuk bayi agar bayi tumbuh cerdas. 
            
            2. Merawat Saluran Pencernaan
            
            Salah satu manfaat alpukat sebagai MPASI adalah merawat saluran cerna dan mencegah penyakit di area tersebut. Alpukat termasuk dalam buah yang mudah dicerna bayi. Tidak hanya itu, alpukat juga mengandung antioksidan yang dapat membantu bayi terhindari dari hal-hal yang menyebabkan perutnya sakit. Jika selama proses MPASI bayi alami keluhan seputar pencernaan seperti terjadi diare atau sembelit, ibu bisa chat dengan dokter di Halodoc. Dokter di Halodoc akan memberikan saran kesehatan yang dibutuhkan sesuai kondisi kesehatan bayi. 
            
            3. Mencegah Peradangan pada Tubuh Bayi
            Alpukat sebagai MPASI dapat mencegah terjadinya peradangan pada tubuh bayi. Bayi rentan terhadap peradangan, terutama peradangan pada bagian kulit karena ia masih sangat sensitif. Antioksidan pada kandungan alpukat bisa melindungi bayi dan meminimalkan masalah peradangan dan iritasi.
            
            4. Sumber Mineral dan Vitamin
            Vitamin dan mineral adalah hal yang dibutuhkan untuk perkembangan bayi. Kandungan vitamin dan mineral pada alpukat termasuk salah satu yang cukup tinggi. Vitamin dan mineral pada buah alpukat akan membantu menjaga kesehatan bayi dan membuatnya tumbuh dengan baik. Selain itu, dengan mengonsumsi alpukat secara teratur, pertumbuhan bayi akan optimal sehingga bayi bisa tumbuh sehat dan pintar. 
            
            5. Sebagai Antioksidan
            Alpukat berfungsi sebagai antioksidan dan baik digunakan sebagai MPASI. Antioksidan yang ada di dalam alpukat mempunyai fungsi melawan kerusakan karena radikal bebas di dalam tubuh. Radikal bebas ini jika dibiarkan bisa menyebabkan kerusakan pada jaringan dan sel-sel di dalam tubuh. Tidak hanya itu, kandungan antioksidan pada alpukat mampu menetralisir radikal bebas dalam tubuh.
            
            6. Melindungi Hati
            Manfaat lain yang bisa didapatkan dari alpukat adalah melindungi organ hatinya. Dengan mengonsumsi alpukat secara teratur, maka tubuh terlindungi dari kerusakan hati dan beberapa penyakit seperti hepatitis dan penyakit kuning. Namun, bayi yang mengidap hepatitis atau penyakit kuning tidak boleh diberi alpukat karena ini bisa memperparah kondisinya. 
            
            7. Membuat Penyembuhan Luka Lebih Cepat
            Alpukat mampu membuat proses penyembuhan luka jadi lebih cepat. Alpukat efektif menyembuhkan luka lebih aman dibandingkan dengan memberikan obat-obatan yang mengandung zat kimia.
            
            Atur Porsi MPASI dengan Tepat
            Rentang usia pemberian MPASI dimulai dari usia 6 bulan hingga 24 bulan. Ini dilakukan meskipun menyusui dapat berlanjut sampai usia anak lebih dari dua tahun. Bagaimana menentukan jenis makanan dan porsi MPASI untuk Si Kecil? Salah satu yang tidak boleh diabaikan adalah pemberian variasi makanan. 
            
            Berikan berbagai makanan untuk memastikan kebutuhan nutrisi terpenuhi. Daging, unggas, ikan atau telur adalah pilihan untuk menu MPASI. Demikian juga dengan buah dan sayuran kaya vitamin A. Intinya ibu harus memberikan anak makanan dengan kandungan lemak yang cukup serta hindari pemberian minuman dengan nilai gizi rendah. Contohnya seperti teh, kopi, dan gula termasuk membatasi jumlah pemberian jus.
            
            Ketika bayi mencapai usia enam bulan, makanan pendamping harus dihaluskan dan awalnya ditawarkan hanya beberapa sendok sehari. Ibu harus ingat untuk menjaga frekuensi pemberian ASI agar tidak terjadi gizi buruk dan stunting. 
            
            Bayi juga harus diperkenalkan minum dari cangkir sekitar enam bulan yang diisi dengan pilihan menu bergizi. Perlu ditekankan bahwa minuman tersebut harus melengkapi, bukan menggantikan ASI. 
            
            Sekitar sembilan bulan, makanan yang mudah diambil dengan ibu jari dan telunjuk dapat diperkenalkan kepada Si Kecil. Pada usia 12 bulan, bayi pada umumnya dapat makan sebagian besar makanan yang sama yang dimakan oleh anggota keluarga lainnya. Namun, porsi dan teksturnya tentu perlu diperhatikan, untuk membuatnya lebih mudah dan aman untuk dikunyah dan ditelan. 
            
            Itulah yang perlu diketahui mengenai pemberian MPASI pada bayi. Pastikan agar Si Kecil mendapatkan asupan yang bergizi seimbang ya, Bu.'
            
        ]);
        Artikel::create([
            'idArtikel'=>'2',
            'judul'=>'Memperkenalkan Makanan Bayi Sesuai Usia',
            'kategori'=>'Ibu',
            'isi'=>''
            
        ]);
    }

}
