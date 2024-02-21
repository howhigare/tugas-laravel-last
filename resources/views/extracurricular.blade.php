@extends('layout.main')

@section('content')
<div class="title-container">
    <h1>Ini adalah halaman extra</h1>
</div>

<div class="table-container">
    <table class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>Nama</th>
                <th>Pembina</th>
                <th>Deskripsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($extracurricular as $extracurriculars)
                <tr>
                    <td>{{ $extracurriculars['id'] }}</td>
                    <td>{{ $extracurriculars['nama'] }}</td>
                    <td>{{ $extracurriculars['pembina'] }}</td>
                    <td>{{ $extracurriculars['deskripsi'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<style>
    .title-container {
        text-align: center; /* Menengahkan teks */
    }

    .table-container {
        width: 80%;
        margin: 0 auto;
    }

    .table {
        width: 100%;
        border-collapse: collapse;
    }

    .table th, .table td {
        padding: 8px 12px;
        text-align: left;
        border: 1px solid #ddd;
    }

    .table th {
        background-color: #f2f2f2;
    }

    .table tr:nth-child(even) {
        background-color: #f2f2f2;
    }
</style>
@endsection
