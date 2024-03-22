<?php

namespace Database\Seeders;

use Database\Seeders\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Artikel;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class kontenseeder extends Seeder
{

    public function run(): void
    {
        // Ambil semua pengguna dengan peran "admin"
        $adminUsers = User::role('admin')->get();

        foreach ($adminUsers as $adminUser) {
            $konten =
            " <p>Masa balita (bayi di bawah lima tahun) merupakan waktu saat otak anak mengalami pertumbuhan yang sangat pesat. Periode ini juga umumnya dikenal dengan istilah masa keemasan (the golden age). Meski begitu, pertumbuhan balita bisa bervariasi, jadi mungkin sulit untuk mengetahui apakah pertumbuhan anak cukup sehat dan optimal dalam hal tinggi dan berat badannya.
            </p> <br> <p>
            Orangtua biasanya mudah khawatir jika balita terlibat lebih besar atau lebih kecil dibandingkan anak seusianya. Hal yang perlu digarisbawahi, banyak faktor yang mendukung pertumbuhan balita. Beberapa faktor mungkin tidak mengkhawatirkan, tapi faktor lainnya mungkin perlu diwaspadai.
            </p> <br><br>
            <h1>Tahap Tumbuh Kembang Balita yang Ideal</h1>
            <br> <p>
            Seiring usia Si Kecil bertambah, tentunya hal ini akan diiringi dengan bertambahnya perkembangan dan pertumbuhannya dari segala aspek. Tumbuh kembang balita dapat diperhatikan dari dua aspek, yaitu:
            </p> <br>
            <ul>
            <li>Tumbuh yang menggambarkan perubahan fisik pada anak.</li>
            <li>Perkembangan yang menggambarkan kemampuan struktur dan fungsi tubuh yang lebih kompleks.</li>
            </ul>
            <br>
            <p>
            Menurut banyak ahli, bayi terlahir dengan sejumlah refleks bawaan. Selain itu, mereka juga terlahir dengan dorongan untuk mengeksplorasi dunianya.
            </p> <br> <p>
            Pada tahap ini anak mampu mengasimilasi dan mengakomodasi informasi dengan cara melihat, mendengar, menyentuh dan aktivitas motorik. Semua kegiatan yang dilakukan berfokus pada mulut (oral).

            Sejak di dalam kandungan hingga anak lahir dan tumbuh menjadi dewasa, mata pun rasanya tidak pernah ingin lepas dari si buah hati. Ibaratnya, seorang ibu bisa tahu bila ada setitik saja noda tambahan pada tubuh anaknya. Naluri orangtua selalu memantau perkembangan dan pertumbuhan anak hingga kapan pun juga.
            </p> <br> <p>
            Dari fase-fase pertumbuhan anak, usia 0-3 tahun merupakan waktu ketika tumbuh kembang anak terjadi dengan pesat. Di masa ini, ibu tak boleh melupakan asupan nutrisi dan gizi yang diperlukan anak. Alasannya sederhana, tercukupi kebutuhan gizi bisa membantu tumbuh kembangnya menjadi lebih baik. Perhatikan kehidupan anak saat dalam proses tumbuh kembang, tumbuh kembang yang baik tentu akan memengaruhi kesehatan dan kehidupan anak kedepannya.
            </p> <br> <br>
            <h1>Bagaimana Pertumbuhan Balita Terjadi?</h1>
            <br> <p>
            Rata-rata bayi cukup bulan akan menggandakan berat badannya dalam empat bulan pertama. Setelah itu, pertumbuhan melambat, tapi hanya sedikit. Pada akhir tahun pertama, tinggi dan berat badan anak akan menjadi sekitar tiga kali berat dan panjang lahirnya.
            </p> <br> <p>
            Pada tahun kedua, pertumbuhan melambat dan rata-rata balita akan bertambah sekitar 4 kg dan 10 atau 12 sentimeter. Sementara itu pada tahun ketiga, berat dan tinggi badan naik secara lambat sekitar 2 kg dan 5 atau 8 sentimeter selama 12 bulan.
            </p> <br> <p>
            Tinggi dan berat badan balita dapat dilacak pada grafik standar yang direkomendasikan World Health Organization (WHO). Namun, ada grafik yang berbeda untuk bayi yang lahir prematur dan bayi dengan kondisi medis tertentu. Sebab kedua kondisi tersebut dapat mempengaruhi pertumbuhan anak ke depannya.
            </p> <br><br>
            <h1>Faktor yang Menyebabkan Balita Terlihat Lebih Besar atau Lebih Kecil</h1>
            <br> <p>
            Ada berbagai alasan mengapa balita mungkin terlihat lebih besar atau lebih kecil dari teman sebayanya. Berikut alasan umum yang perlu diketahui:
            </p> <br>
            <h3>1.Genetik</h3> <br>
            <p>
            Ayah dan ibu perlu melihat apakan anak mungkin mewarisi genetik rata-rata dalam keluarga. Meskipun ayah dan ibu mungkin memiliki tinggi badan yang melebihi rata-rata, bisa jadi Si Kecil mewarisi gen anggota keluarga lainnya. Misalnya, jika nenek atau kakek dari anak memiliki tinggi badan rendah, maka balita pun mungkin bisa saja mewarisinya.
            </p> <br>
            <h3>2.nutrisi yg tidak tepat</h3> <br>
            <p>
            Anak-anak yang tidak mendapatkan makanan dengan nilai gizi yang sesuai mungkin memiliki pertumbuhan yang terhambat. Sehingga ia akan memiliki berat atau tinggi badan yang tidak optimal. Pola makan atau nutrisi yang tidak tepat bisa membuat tubuh anak kekurangan gizi dan kalori yang dibutuhkannya tubuhnya untuk tumbuh.
            </p> <br>
            <h3>3.Masalah pada Hormon Pertumbuhan</h3> <br>
            <p>
            Seorang anak mungkin memiliki terlalu banyak atau terlalu sedikit hormon pertumbuhan. Seperti yang diketahui, terlalu banyak hormon pertumbuhan akan menyebabkan seorang anak tumbuh lebih cepat. Hal sebaliknya berlaku, bila terlalu sedikit maka akan menghambat pertumbuhannya.
            </P> <br>
            <h3>4.gangguan tiroid</h3> <br> <p>
            Bahan kimia yang dikeluarkan oleh tiroid memengaruhi pertumbuhan tulang. Jadi, jika seorang anak mengalami hipotiroidisme  tubuh mereka tidak menghasilkan cukup hormon tiroid, sehingga pertumbuhannya pun dapat terhambat.
            </P> <br>
            <h3>5.Penyakit sistemik</h3> <br> <p>
            Anak-anak yang hidup dengan kondisi kesehatan kronis atau penyakit jangka panjang, mungkin terhambat tumbuh pada tingkat rata-rata. Hal ini bisa terjadi karena penyakit secara langsung memengaurhi pertumbuhan. Karena nutrisi “terbakar” melawan penyakit, atau karena seorang anak merasa terlalu tidak sehat untuk menerima kalori yang cukup.
            </p> <br>
            <h3>6.Gagal untuk berkembang</h3> <br> <p>
            Selain penyakit atau kondisi tertentu, gagal tumbuh adalah istilah umum untuk anak yang tidak tumbuh pada tingkat yang diharapkan. Penyebab gagal tumbuh dapat bervariasi, dan terkadang ada penyebab khusus yang pernah diidentifikasi.
            </p> <br>
            <h3>7. Kesehatan Ibu Selama Kehamilan</h3> <br> <p>
            Jika ibu merokok, menggunakan obat-obatan, atau tidak memiliki pola makan yang baik selama kehamilan, kemungkinan besar akan melahirkan bayi yang kecil. Jika berat badan ibu bertambah banyak selama kehamilan atau mengidap diabetes gestasional, kemungkinan besar akan melahirkan bayi yang lebih besar.
            </p> <br>
           <h3> 8. Jenis Kelamin Bayi</h3> <br> <p>
            Bayi perempuan biasanya sedikit lebih kecil (panjang dan berat) saat lahir dibandingkan bayi laki-laki.
            </p> <br>
            <h3>9. Diberi ASI atau Susu Formula</h3> <br> <P>
            Pada tahun pertamanya, bayi yang diberi ASI bertambah berat badan lebih lambat dibandingkan bayi yang diberi susu formula. Untuk beberapa bulan pertama, bayi yang diberi ASI sebenarnya tumbuh lebih cepat, tapi pada usia 3 bulan hal ini akan berubah. Kemudian pada usia 2 tahun, berat bayi yang diberi ASI dan susu formula hampir sama.
            </p> <br>
            <h3>10. Pola Tidur</h3> <br> <p><p
            Percepatan pertumbuhan pada balita juga terkait dengan pola dan kualitas tidurnya. Sebuah studi menemukan bahwa tidur lebih banyak secara langsung meningkatkan kemungkinan balita tumbuh lebih cepat. Faktanya, lonjakan pertumbuhan terjadi pada waktu 48 jam setelah tidur siang.
            </p> <br><br>
            <h1>Bagaimana Agar Balita Memiliki Tubuh Sehat?</h1> <br> <br> <p>
            Agar kesehatan tubuhnya senantiasa terjaga, berikut beberapa cara yang bisa orangtua lakukan:
            </P> <br> <p>
            Beri balita air putih dan susu biasa sebagai pengganti minuman manis. Setelah tahun pertama, ketika balita menyusui makan lebih banyak dan mengonsumsi makanan padat, ASI merupakan tambahan yang ideal untuk pola makannya.
             </p> <br> <p>   Anak mungkin menjadi pemilih makanan dan pilihannya tidak menentu. Namun, pastikan untuk menawarkan pilihan makanan sehat dan biarkan dia memilih apa yang diinginkannya. Teruslah mencoba makanan baru, mungkin perlu waktu bagi balita untuk belajar menyukai setiap makanan berbeda.
             </p> <br> <p>Batasi atau hindari sama sekali anak melihat layar gadget atau TV. </p> <br>
            <p> Balita tampaknya akan terus aktif, berlari, menendang, memanjat, atau melompat. Biarkan dia aktif agar tubuhnya mengembangkan koordinasi dan menjadi kuat.
           </P> <br> <p> Pastikan balita mendapatkan jumlah tidur yang disarankan setiap malam. Untuk balita 1-2 tahun, 11-14 jam sehari (termasuk tidur siang).
            <p/> <br> <br>
         "
            ;

            Artikel::create([
                'user_id' => $adminUser->id,
                'judul' => 'Pertumbuhan Balita',
                'penulis' => 'dr. Fadhli Rizal Makarim',
                'tanggal_posting' => now(),
                'konten' => $konten,
                'public' => true,
            ]);
        }
    }
}
