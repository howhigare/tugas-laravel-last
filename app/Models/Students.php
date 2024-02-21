<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students
{
    private static $students =[
        [
            "id" => 1,
            "nis" => 567894,
            "nama" => "Amanda Rezquita Jamila",
            "kelas" => "11 PPLG 1",
            "tgl_lahir" => "9 juli, 2007",
            "alamat" => "Besito",
        ],
        [
            "id" => 2,
            "nis" => 567789,
            "nama" => "Aulia Putri Wulandari",
            "kelas" => "11 PPLG 1",
            "tgl_lahir" => "12 Maret, 2007",
            "alamat" => "Besito",
        ],
        [
            "id" => 3,
            "nis" => 567456,
            "nama" => "Alysa Oktavia Ramadhani",
            "kelas" => "11 PPLG 1",
            "tgl_lahir" => "1 januari, 2007",
            "alamat" => "Besito",
        ],
        [
            "id" => 4,
            "nis" => 567123,
            "nama" => "Amelia Salsabila",
            "kelas" => "11 PPLG 1",
            "tgl_lahir" => "12 november, 2007",
            "alamat" => "Jekulo",
        ],
        [
            "id" => 5,
            "nis" => 5675677,
            "nama" => "Ayla Syafa Syahira",
            "kelas" => "11 PPLG 1",
            "tgl_lahir" => "23 januari, 2007",
            "alamat" => "Besito",
        ],
        [
            "id" => 6,
            "nis" => 567654,
            "nama" => "Nadia Salsabila Ibrahim",
            "kelas" => "11 PPLG 1",
            "tgl_lahir" => "1 januari, 2007",
            "alamat" => "Besito",
        ],
        [
            "id" => 7,
            "nis" => 567785,
            "nama" => "Vania Aisya Rohmawati",
            "kelas" => "11 PPLG 1",
            "tgl_lahir" => "5 november, 2007",
            "alamat" => "Besito",
        ]

    ];

    public static function all()
    {
        return self::$students;
    }

}
