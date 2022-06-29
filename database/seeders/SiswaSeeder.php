<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Siswa;


class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $siswa1 = new Siswa;
        $siswa1 -> nis = "11242";
        $siswa1 -> nama = "Awi Suryadi";
        $siswa1 -> alamat = "Semarang";
        $siswa1 -> no_hp = "082813217";
        $siswa1 -> save();

        $siswa2 = new Siswa;
        $siswa2 -> nis = "99812";
        $siswa2 -> nama = "Bene Dion Rajagukguk";
        $siswa2 -> alamat = "Semarang";
        $siswa2 -> no_hp = "082899821";
        $siswa2 -> save();

        $siswa3 = new Siswa;
        $siswa3 -> nis = "6612";
        $siswa3 -> nama = "Suryadi";
        $siswa3 -> alamat = "Magelang";
        $siswa3 -> no_hp = "087652111";
        $siswa3 -> save();

        $siswa4 = new Siswa;
        $siswa4 -> nis = "17821";
        $siswa4 -> nama = "Nur ningsih";
        $siswa4 -> alamat = "Semarang";
        $siswa4 -> no_hp = "082898212";
        $siswa4 -> save();

        $siswa5 = new Siswa;
        $siswa5 -> nis = "22921";
        $siswa5 -> nama = "Bagus Setiawan";
        $siswa5 -> alamat = "Pati";
        $siswa5 -> no_hp = "082552161";
        $siswa5 -> save();

        $siswa6 = new Siswa;
        $siswa6 -> nis = "832191";
        $siswa6 -> nama = "Nada Cahya";
        $siswa6 -> alamat = "Kendal";
        $siswa6 -> no_hp = "082573812";
        $siswa6 -> save();

        $siswa7 = new Siswa;
        $siswa7 -> nis = "931278";
        $siswa7 -> nama = "Dwi Wiranto";
        $siswa7 -> alamat = "Demak";
        $siswa7 -> no_hp = "083215122";
        $siswa7 -> save();

        $siswa8 = new Siswa;
        $siswa8 -> nis = "361712";
        $siswa8 -> nama = "Danu Sadewa";
        $siswa8 -> alamat = "Pati";
        $siswa8 -> no_hp = "085216273";
        $siswa8 -> save();

        $siswa9 = new Siswa;
        $siswa9 -> nis = "372181";
        $siswa9 -> nama = "Juan Matta";
        $siswa9 -> alamat = "Jepara";
        $siswa9 -> no_hp = "083421556";
        $siswa9 -> save();
    }
}
