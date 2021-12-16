# Proyek 2

|                |                                         |
| -------------- | --------------------------------------- |
| Dosen Pengampu | Ir. Deddy Kusbianto Purwoko Aji, M.MKom |
| Email          | deddy_kusbianto@polinema.ac.id          |
| Institusi      | jti.polinema.ac.id                      |
|                |                                         |

## Data Diri

|              |                               |
| ------------ | ----------------------------- |
| NIM          | **1941720169**                |
| Nama Lengkap | **Dhimas Arbi Sukma Himawan** |
| Kelas        | TI-3B                         |

#### Deploy untuk lokal testing:

1. Buka project dengan [VSCode](https://code.visualstudio.com/), kemudian buka new terminal
2. Pada terminal ketikkan perintah dibawah ini, dan tunggu sampai proses selesai
    > composer install
3. Kemudian buat database baru dengan nama "batikweb"
4. Lalu kembali ke terminal sebelumnya dan ketikkan perintah berikut untuk membuat tabel pada database
    > php artisan migrate
5. Kemudian ketikkan perintah berikut untuk mengisi tabel pada database
    > php artisan db:seed
6. Lalu untuk menjalankan web ketikkan perintah berikut
    > php artisan serve

#### Deploy pada server: soon
