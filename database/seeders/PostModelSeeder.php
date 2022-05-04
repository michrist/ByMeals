<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PostModel;

class PostModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PostModel::create([
            'category_id'=>1,
            'user_id'=>1,
            'title'=>'5 Aturan Pakai Minyak Esensial pada Bayi',
            'body'=>'Hal ini karena kulit bayi masih sangat sensitif. Selain itu, penggunaan minyak esensial secara berlebihan dan tidak sesuai dengan jenis kulit bayi juga dapat merusak lapisan lemak di permukaan kulit bayi sehingga meningkatkan risiko iritasi dan infeksi kulit.

            Aturan Penggunaan Minyak Esensial pada Bayi
            Ada hal-hal yang harus diperhatikan dalam memberikan atau mengoleskan minyak esensial pada bayi, seperti:

            1. Periksa label kemasan produk
            Saat membeli minyak esensial, bacalah label kemasan terlebih dahulu untuk mengetahui bahan dasar minyak tersebut. Sebaiknya, hindari penggunaan minyak esensial yang dicampur dengan alkohol dan wewangian sintetis karena dapat memicu iritasi pada kulit bayi.

            Nah, ada beberapa jenis minyak esensial yang tidak disarankan pemakaiannya pada kulit bayi, antara lain eukaliptus, hyssop, idaho tansy, sage, dan wintergreen. Hal ini karena kandungan tersebut belum teruji keamanannya untuk bayi.

            2. Sesuaikan dengan umur bayi
            Sebenarnya, tidak ada patokan khusus mengenai umur bayi yang aman untuk menggunakan minyak esensial. Namun, ada beberapa minyak esensial yang tidak boleh diberikan kepada bayi di bawah usia 30 bulan dan salah satunya adalah minyak peppermint.

            Jenis minyak ini diduga bisa menyebabkan gangguan pernapasan, bahkan kejang. Selain itu, sensasi dingin dari peppermint bisa meningkatkan risiko iritasi kulit pada bayi.

            3. Campurkan dengan minyak pengencer terlebih dahulu
            Minyak esensial memiliki konsentrasi bahan kimia yang cukup pekat, sehingga berbahaya apabila langsung digunakan ke kulit bayi. Sebelum dioleskan, sebaiknya lakukan pengenceran terlebih dahulu dengan minyak pengencer.

            Beberapa jenis minyak pengencer yang dapat Anda gunakan adalah minyak kelapa, minyak zaitun, dan minyak bunga matahari murni. Anda bisa melakukannya dengan mencampur 3 tetes minyak esensial dengan 6 sendok teh minyak pengencer.'
        ]);
    }
}
