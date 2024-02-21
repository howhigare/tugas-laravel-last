<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Extracurricular
{
    private static $extracurricular =[
        [
            "id" => 1,
            "nama" => "Theater",
            "pembina" => "Bu Fara",
            "deskripsi" => "Extra ini meruju kepada penampilan drama.",
        ],
        [
            "id" => 2,
            "nama" => "OSIS",
            "pembina" => "Bu Widy",
            "deskripsi" => "Eskul OSIS adalah salah satu kegiatan ekstrakurikuler yang merupakan wadah bagi siswa untuk terlibat dalam pengelolaan dan pengorganisasian berbagai kegiatan di sekolah.",
        ],
        [
            "id" => 3,
            "nama" => "Rohis",
            "pembina" => "Pak Sarwo Edi",
            "deskripsi" => "ROHIS adalah singkatan dari 'Rohani Islam' atau 'Rohani Islamiah.' Ini adalah salah satu jenis organisasi atau klub di sekolah yang fokus pada aspek keagamaan dan rohani dalam konteks Islam. ",
        ],
        [
            "id" => 4,
            "nama" => "MPK",
            "pembina" => "Bu Widy",
            "deskripsi" => "MPK adalah wadah yang mewakili suara dan aspirasi siswa di tingkat kelas. Setiap kelas biasanya memiliki satu atau beberapa anggota MPK yang dipilih oleh teman-teman sekelasnya..",
        ],
        [
            "id" => 5,
            "nama" => "Musik",
            "pembina" => "Kak liya",
            "deskripsi" => "Extra ini meruju kepada penampilan drama.",
        ],

    ];

    public static function all()
    {
        return self::$extracurricular;
    }

}
