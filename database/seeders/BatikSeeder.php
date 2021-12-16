<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BatikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            //batik 1
            [
                'nama' => 'Batik Parang',
                'warna' => 'Coklat dan putih',
                'motif' => 'Gulungan ombak',
                'deskripsi' => 'Motif batik parang memiliki filosofi bahwa hidup selayaknya dilandasi perjuangan dan usaha untuk mencapai kemakmuran lahir batin dengan mengindahkan nilai kebudayaan Jawa.',
                'gambar' => 'Assets/img/batik/parangkusumo.jpg',
                'asaldaerah' => 'Solo',
                'status' => 'yes',
            ],
            //batik 2
            [
                'nama' => 'Batik Megamendung',
                'warna' => 'Biru dan Hitam',
                'motif' => 'Gumpalan Awan',
                'deskripsi' => 'Filosofi dari batik ini adalah bahwa manusia harus bisa meredam gejolak amarahnya dalam kondisi dan situasi apapun.',
                'gambar' => 'Assets/img/batik/megamendung.jpg',
                'asaldaerah' => 'Cirebon',
                'status' => 'yes',
            ],
            //batik 3
            [
                'nama' => 'Batik Sidomukti',
                'warna' => 'Coklat',
                'motif' => 'Garuda',
                'deskripsi' => 'Sesuai dengan namanya, filosofinya diambil dari kata “sido” yang berarti menjadi atau jadi dan “mukti” yang berarti mulia serta sejahtera. Jadi, filosofi dari batik ini adalah nilai kemuliaan dan sejahtera, sesuai dengan peruntukkan keraton.',
                'gambar' => 'Assets/img/batik/sidomukti.jpg',
                'asaldaerah' => 'Solo',
                'status' => 'yes',
            ],
            //batik 4
            [
                'nama' => 'Batik Tujuh Rupa',
                'warna' => 'Berwarna warni',
                'motif' => 'Bunga',
                'deskripsi' => 'Filosofi dari batik ini adalah ikatan kebudayaan leluhur yang mana kala itu Pekalongan merupakan wilayah transit perdagangan.',
                'gambar' => 'Assets/img/batik/tujuhrupapekalongan.png',
                'asaldaerah' => 'Pekalongan',
                'status' => 'yes',
            ],
            //batik 5
            [
                'nama' => 'Batik Lasem',
                'warna' => 'Merah',
                'motif' => 'Bunga',
                'deskripsi' => 'Filosofi dari batik ini adalah persatuan dan akulturasi dari Tionghoa pendatang dan masyarakat setempat.',
                'gambar' => 'Assets/img/batik/lasem.png',
                'asaldaerah' => 'Rembang',
                'status' => 'yes',
            ],
            //batik 6
            [
                'nama' => 'Batik Singa Barong',
                'warna' => 'Putih Emas',
                'motif' => 'Barong',
                'deskripsi' => 'Filosofi dari batik ini diambil berdasarkan namanya, makhluk mitologi bersifat spiritual. Motif dari batik ini sendiri tidak terlepas dari sosok makhluk mitologi tersebut.',
                'gambar' => 'Assets/img/batik/singabarong.jpg',
                'asaldaerah' => 'Cirebon',
                'status' => 'yes',
            ],
            //batik 7
            [
                'nama' => 'Batik Sekar Jagad',
                'warna' => 'Coklat Orange',
                'motif' => 'Menyerupai Pulau',
                'deskripsi' => 'Batik Sekar Jagad merupakan batik dengan motif unik yang membuat orang terpesona saat melihatnya. Motif ini melambangkan keragaman Nusantara dan dunia. Bahkan ada yang menilai bahwa motif batik ini dibentuk menyerupai pulau.',
                'gambar' => 'Assets/img/batik/sekarjagadyogya.jpg',
                'asaldaerah' => 'Yogyakarta dan Solo',
                'status' => 'yes',
            ],
            //batik 8
            [
                'nama' => 'Batik Pring Sedapur',
                'warna' => 'Hitam Coklat',
                'motif' => 'Bambu',
                'deskripsi' => 'Batik yang satu ini memiliki motif yang cukup sederhana, tapi tetap terlihat indah dengan perpaduannya yang menarik. Motifnya didominasi dengan bambu dan burung yang menyimbolkan sebuah kerukunan dan ketentraman hidup.',
                'gambar' => 'Assets/img/batik/pringsedapur.jpg',
                'asaldaerah' => 'Magetan',
                'status' => 'yes',
            ],
            //batik 9
            [
                'nama' => 'Batik Sidoluhur',
                'warna' => 'Coklat',
                'motif' => 'Bunga',
                'deskripsi' => 'Batik Sidoluhur diperuntukkan untuk prosesi pernikahan, karena dipakai pengantin wanita saat malam pengantin. Filosofi dari batik ini adalah sebuah bentuk doa kepada pemakainya agar senantiasa menjadi orang yang terhormat dan bermartabat.',
                'gambar' => 'Assets/img/batik/sidoluhur.png',
                'asaldaerah' => 'Solo',
                'status' => 'yes',
            ],
        ];

        DB::table('batiks')->insert($data);
    }
}
