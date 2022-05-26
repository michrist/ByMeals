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
        PostModel::create([
            'id'=> 1,
            'user_id' => 1,
            'title'=>'BEST SPOONS FOR BABY',
            'category_id'=> 1,
            'body'=>'Baby spoons are not just smaller versions of adult spoons (spoiler alert!).
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
            - Don’t worry if your baby doesn’t seem interested in using the spoon or is more distracted by throwing it off their tray at first. You can always remove the spoon and offer it again at another meal. Your baby can still get in great practice with hand-eye coordination needed for spoon-feeding by dipping their fingers in a bowl and slurping the puree off of them!',
            'image' => 'https://source.unsplash.com/900x400?'
        ]);
       PostModel::create([
            'id'=>2,
            'user_id' => 2,
            'title'=>'Memperkenalkan Makanan Bayi Sesuai Usia',
            'category_id'=>2,
            'body'=>'Makanan bayi umumnya sudah bisa diberikan saat bayi berusia 6 bulan. Bunda dapat mulai memperkenalkan makanan bayi kepada Si Kecil di usia tersebut agar ia terbiasa mengonsumsi makanan padat. Namun, lakukan secara bertahap dan pilih makanan bayi sesuai usia Si Kecil.

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
            d. Apabila Bunda masih memiliki pertanyaan terkait cara memperkenalkan makanan bayi sesuai usia atau bingung memilih makanan yang tepat untuk Si Kecil, jangan ragu bertanya kepada dokter, ya.',
            'image' => 'https://source.unsplash.com/900x400?'
        ]);
        PostModel::create([
            'id'=>3,
            'user_id' => 1,
            'title'=>'Apa itu MPASI?',
            'category_id'=>4,
            'body'=>'Pengertian MPASI
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
            - Biasakan untuk memeriksa pertumbuhan bayi sesering mungkin dan pastikan selalu dicatat pada grafik pertumbuhan. Perhatikan apakah pertumbuhan anak sesuai dengan pola yang ada pada grafik tersebut. Jika tidak sesuai, ada baiknya menemui dokter untuk memastikannya.',
            'image' => 'https://source.unsplash.com/900x400?'
        ]);
        PostModel::create([
            'id'=>4,
            'user_id' => 2,
            'title'=>'Alpukat sebagai MPASI, Ini Manfaatnya untuk Bayi',
            'category_id'=>3,
            'body'=>'Alpukat sebagai MPASI, Ini Manfaatnya untuk Bayi
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

            Itulah yang perlu diketahui mengenai pemberian MPASI pada bayi. Pastikan agar Si Kecil mendapatkan asupan yang bergizi seimbang ya, Bu.',
            'image' => 'https://source.unsplash.com/900x400?'
        ]);
        PostModel::create([
            'id'=>5,
            'user_id' => 1,
            'title'=>'Memperkenalkan Makanan Bayi Sesuai Usia',
            'category_id'=>2,
            'body'=>'Alpukat sebagai MPASI, Ini Manfaatnya untuk Bayi
            “Buah alpukat mengandung nutrisi dan lemak tak jenuh yang baik untuk bayi, yang dibutuhkan untuk mendukung perkembangan otak dan tubuhnya. Ada beberapa manfaat lainnya dari alpukat yang bisa didapatkan bayi saat diberi MPASI. Contohnya merawat saluran cerna dan mencegah peradangan pada tubuh bayi.”

            Sebagian ibu pasti tidak sabar menunggu bayinya mencapai usia enam bulan untuk diberi MPASI. Jenis makanan yang menjadi favorit ibu adalah buah-buahan, misalnya alpukat karena buah ini mudah diolah dan mengandung nilai gizi yang tinggi.

            Buah alpukat mengandung nutrisi dan lemak tak jenuh yang baik untuk bayi, yang dibutuhkan untuk mendukung perkembangan otak dan tubuhnya. Buah alpukat mengandung banyak nutrisi yang baik untuk bayi seperti vitamin dan mineral. Beberapa di antaranya vitamin C, A, K, E, dan B6, serta folat, thiamin, kalsium, zat besi, kalium, dan natrium.',
            'image' => 'https://source.unsplash.com/900x400?'
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
            'kategorirentang'=> 1,
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
            'kategorirentang'=> 2,
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
            'waktu'=>'lunch',
            'kategorirentang'=> 3,
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
            'waktu'=>'lunch',
            'kategorirentang'=> 4,
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
            'waktu'=>'lunch',
            'kategorirentang'=> 5,
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
            'waktu'=>'lunch',
            'kategorirentang'=> 1,
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
            'waktu'=>'lunch',
            'kategorirentang'=> 2,
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
            'waktu'=>'lunch',
            'kategorirentang'=> 3,
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
            'waktu'=>'lunch',
            'kategorirentang'=> 4,
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
            'waktu'=>'lunch',
            'kategorirentang'=> 5,
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
            'waktu'=>'lunch',
            'kategorirentang'=> 1,
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
            'waktu'=>'lunch',
            'kategorirentang'=> 2,
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
            'waktu'=>'lunch',
            'kategorirentang'=> 3,
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
            'waktu'=>'lunch',
            'kategorirentang'=> 4,
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
            'waktu'=>'lunch',
            'kategorirentang'=> 5,
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
            'waktu'=>'lunch',
            'kategorirentang'=> 1,
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
            'waktu'=>'lunch',
            'kategorirentang'=> 2,
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
            'waktu'=>'breakfast',
            'kategorirentang'=> 3,
            'gambar'=>'https://cdn.discordapp.com/attachments/897774150716887081/968908973015187586/buah_naga.jpg'
        ]);
        Mpasi::create([
            'nama'=>'Nasi Tim Ayam',
            'umur'=>'19',
            'bahan'=>'Potongan sawi---Beras---Ayam suir---Wortel---Garam',
            'kuantitas'=>'secukupnya---250 ml---2 sdm---1 buah---secukupnya',
            'kandungan'=>'Protein---Untuk pembentukan imunoglobulin/antibodi yang berfungsi untuk menangkal infeksi yang disebabkan oleh virus atau bakteri---Zat Besi---Membantu pembentukan hemoglobin dan sel darah merah, zat besi juga memiliki peran penting untuk menunjang pertumbuhan serta fungsi saraf dan otak bayi---Vitamin C---Vitamin C berperan dalam pembentukan dan perbaikan sel-sel darah merah, tulang, dan jaringan tubuh---Karbohidrat---Menyediakan bahan bakar bagi bakteri baik di dalam tubuh yang membantu produksi vitamin B kompleks---Kalsium---Membantu perkembangan sistem syaraf dan fungsi otot tubuh anak',
            'deskripsi'=>'Nasi tim menjadi salah satu kesukaan Si Kecil sebagai resep MPASI 6 bulan. Tambahkan potongan sayur untuk melengkapi kebutuhan nutrisi bayi ya, Moms!',
            'prosedur'=>'1. Langkah Pertama---Buatlah nasi tim dari beras putih yang dimasak hingga empuk---2. Langkah Kedua---Blender ayam hingga halus---3. Langkah Ketiga---Tambahkan sayur sawi rebus, sedikit garam, dan 2 sdm suwiran ayam ke dalam panci---4. Langkah Keempat---Masak sampai matang. Siap disantap Si Kecil!',
            'durasi'=>'PREP TIME---15 min---COOK TIME---45 min---CHICKEN',
            'waktu'=>'dinner',
            'kategorirentang'=> 4,
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
            'waktu'=>'lunch',
            'kategorirentang'=> 5,
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
            'waktu'=>'lunch',
            'kategorirentang'=> 1,
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
            'waktu'=>'lunch',
            'kategorirentang'=> 2,
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
            'waktu'=>'lunch',
            'kategorirentang'=> 3,
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
            'waktu'=>'lunch',
            'kategorirentang'=> 4,
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
            'waktu'=>'lunch',
            'kategorirentang'=> 5,
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
            'waktu'=>'lunch',
            'kategorirentang'=> 1,
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
            'waktu'=>'lunch',
            'kategorirentang'=> 2,
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
            'waktu'=>'lunch',
            'kategorirentang'=> 3,
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
            'waktu'=>'lunch',
            'kategorirentang'=> 4,
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
            'waktu'=>'lunch',
            'kategorirentang'=> 5,
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
            'waktu'=>'lunch',
            'kategorirentang'=> 1,
            'gambar'=>''
        ]);
    }

}
