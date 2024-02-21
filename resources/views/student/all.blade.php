@extends('layout.main')

@section('content')
    <div class="title-container">
        <h1>masukkan data</h1>
    </div>
    {{-- <a type="button" class="btn btn-outline-warning" href="/student/create">Add</a> --}}

    @if (session()->has('success'))
        <div class="alert alert-success col-lg-12" role="alert">
            {{ session('success') }}
        </div>
    @endif

<div class="table-container">
    <table class="table">
        <thead>
            <tr>
                {{-- <th>ID</th> --}}
                <th>nis</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($student as $students)
                <tr>
                    {{-- <td>{{ $students['id'] }}</td> --}}
                    <td>{{ $students['nis'] }}</td>
                    <td>{{ $students['nama'] }}</td>
                    <td>{{ optional($students ->kelas)-> nama}}</td>
                    <td>
                        <a type="button" class="btn btn-outline-info" data-toggle="modal" href="/student/detail/{{ $students->id}}">Detail</a>
                        {{-- <a type="button" class="btn btn-outline-primary" href="/student/edit/{{ $students->id}}">Edit</a> --}}
                        {{-- <a type="button" class="btn btn-outline-danger" href="#">Delete</a> --}}
                        {{-- <form method="POST" action="/student/delete/{{ $students->id }}" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger">Delete</button>
                        </form> --}}

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>


<style>
    .title-container{
        text-align: center;
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

    .modal-content {
    width: 500px;
    margin: 0 auto;
}

.modal-header {
    text-align: center;
}

.modal-body {
    padding: 20px;
}

.modal-footer {
    text-align: right;
}
</style>

@endsection
