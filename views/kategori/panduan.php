<?php

use app\models\KatalogAwal;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\KatalogAwalSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Katalog Awals';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pc-content">

    <h1 style="color:black; padding-bottom:50px; text-align:center;"> Panduan CRUD Website Katalog </h1>

    <h2 style="color: black; padding-bottom:15px">Penjelasan</h2>

    <p style="color: black; font-size:20px;">
            Halaman admin pada website ini digunakan untuk mengelola foto produk, detail produk, dan data lainnya yang ada di database.<br>
            <strong style="font-size:15px;">--Note-- CRUD disini digunakan untuk data yang dinamis saja. --Note--</strong><br>
        <ul style="padding-left: 15px; color: black; font-size:20px; line-height: 35px; padding-bottom:30px;">
            Untuk Penjelasan Per-Section sebagai berikut : <br>
            1. Kategori : Digunakan untuk menambah kategori barang. <br>
            2. Sub-Kategori : Digunakan untuk menambah sub-kategori dari kategori yang sudah ada.<br>
            3. Foto Katalog : Digunakan untuk menambah foto-foto produk yang nanti ditampilkan di katalog di home.<br>
            4. Detail Produk : Digunakan untuk menambah detail produk katalog saat foto katalog di home ditekan..<br>
            5. Foto Produk : Digunakan untuk menambah foto-foto hasil custom yang nanti ditampilkan di galei produk about.<br>
            6. Foto Slide : Digunakan untuk menambah foto beberapa produk yang nanti ditampilkan di slider di home.<br>
            7. Info Testimonial : Digunakan untuk menambahkan testimonial dari pelanggan.<br>
        </ul>
    </p>

    <p style="color: black; font-size:20px;">
        <strong style="font-size:35px;">Kategori</strong><br>
        <ul style="padding-left: 16px; color: black; font-size:20px; line-height: 35px;">
            Kategori Terdiri Atas:<br>
            1. Nama Kategori : Untuk nama kategori sebuah produk.<br>
            2. Slug : Bisa digunakan untuk url sebagai pengganti id.<br>
            3. Status : yang berfungsi untuk memberikan kode kategori mana saja yang ingin ditampilkan di home mana yang tidak.<br>
               Status ada dua pilian, "0" artinya tidak tampil dan "1" artinya tampil di home.<br>
        </ul>
    </p>

    <p style="color: black; font-size:20px;">
        <strong style="font-size:35px;">Sub Kategori</strong><br>
        <ul style="padding-left: 15px; color: black; font-size:20px; line-height: 35px;">
            Sub Kategori Terdiri Atas:<br>
            1. Nama Sub Kategori : Untuk nama sub kategori dari kategori.<br>
            2. Slug : Bisa digunakan untuk url sebagai pengganti id.<br>
            3. Nama Kategori : Untuk mengaitkan kategori mana yang diberi sub kategori.<br>
        </ul>
    </p>

    <p style="color: black; font-size:20px;">
        <strong style="font-size:35px;">Foto Katalog</strong><br>
        <ul style="padding-left: 15px; color: black; font-size:20px; line-height: 35px;">
            Foto Katalog Terdiri Atas:<br>
            1. Alt Foto : Untuk memberikan alt pada foto, jadi saat foto tidak bisa tampil, ada alt yang memberikan info foto.<br>
            2. Judul Foto : Digunakan untuk memberi nama pada foto katalog (judul).<br>
            3. Deskripsi Foto : Untuk menambah deskripsi untuk foto katalog untuk ditampilkan.<br>
            4. Slug : Bisa digunakan untuk url sebagai pengganti id.<br>
            5. Sub Kategori = Untuk memilih sub kategori dari barang yang ingin ditambah.<br>
            6. Thumbnail Foto : Untuk menambahkan foto yang ingin ditampilkan.<br>
            <strong style="font-size:16px;">--Note-- Foto Untuk Foto Katalog Usahakan Ukuran 1:1 (800px x 800px) --Note--</strong><br>
        </ul>
    </p>

    <p style="color: black; font-size:20px;">
        <strong style="font-size:35px;">Detail Produk</strong><br>
        <ul style="padding-left: 15px; color: black; font-size:20px; line-height: 35px;">
            Detail Produk Terdiri Atas:<br>
            1. Nama Kategori : Untuk nama kategori yang akan diberi deskripsi atau detail.<br>
            2. Deskripsi Awal : Untuk memberikan deskripsi atau detail produk di bagian awal sebelum detail bahan dll.<br>
            3. Bahan Produk: Untuk memberikan informasi mengenai bahan produk (contoh: katun).<br>
            4. Minim Order: Untuk memberikan informasi mengenai minim order produk (contoh: 60pcs).<br>
            5. Custom/Ready: Untuk memberikan informasi mengenai produk tersebut barang ready atau by custom (contoh: custom).<br>
            6. Deskripsi Akhir : Untuk memberikan deskripsi atau detail produk di bagian awal setelah detail bahan dll.<br>
        </ul>
    </p>

    <p style="color: black; font-size:20px;">
        <strong style="font-size:35px;">Foto Produk</strong><br>
        <ul style="padding-left: 15px; color: black; font-size:20px; line-height: 35px;">
            Foto Produk Terdiri Atas:<br>
            1. Alt Foto : Untuk memberikan alt pada foto, jadi saat foto tidak bisa tampil, ada alt yang memberikan info foto.<br>
            2. Judul Foto : Digunakan untuk memberi nama pada foto produk (judul).<br>
            3. Deskripsi : Untuk menambah deskripsi untuk foto produk untuk ditampilkan.<br>
            4. Foto Produk : Untuk menambahkan foto produk yang ingin ditampilkan.<br>
            <strong style="font-size:16px;">--Note-- Foto Untuk Foto Slide Usahakan Ukuran 867px x 1086px atau 887px x 887px --Note--</strong><br>
        </ul>
    </p>

    <p style="color: black; font-size:20px;">
        <strong style="font-size:35px;">Foto Slide</strong><br>
        <ul style="padding-left: 15px; color: black; font-size:20px; line-height: 35px;">
            Foto Slide Terdiri Atas:<br>
            1. Judul Foto : Digunakan untuk memberi nama pada foto produk (judul).<br>
            2. Deskripsi : Untuk menambah deskripsi untuk foto slide untuk ditampilkan.<br>
            3. Alt Foto : Untuk memberikan alt pada foto, jadi saat foto tidak bisa tampil, ada alt yang memberikan info foto.<br>
            4. Foto Slide : Untuk menambahkan foto slide yang ingin ditampilkan.<br>
            <strong style="font-size:16px;">--Note-- Foto Untuk Foto Slide Usahakan Ukuran 1320px x 700px--Note--</strong><br>
        </ul>
    </p>

    <p style="color: black; font-size:20px;">
        <strong style="font-size:35px;">Info Testimonial</strong><br>
        <ul style="padding-left: 15px; color: black; font-size:20px; line-height: 35px;">
            Info Testimonial Terdiri Atas:<br>
            1. Nama Customer : Untuk menginformasikan nama customer yang memberikan testimonial.<br>
            2. Note Customer : Digunakan untuk memberikan note customer.<br>
            3. Deskripsi Testi : Digunakan untuk memberikan deskripsi testi.<br>
        </ul>
    </p>

</div>
