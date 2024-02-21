@extends('layout.main')

@section('content')
    <div class="title-container">
        <h1>Ini adalah halaman kelas </h1>
    </div>
    <a type="button" class="btn btn-outline-warning" href="/kelas/create">Add</a>

    @if (session()->has('success'))
        <div class="alert alert-success col-lg-12" role="alert">
            {{ session('success') }}
        </div>
    @endif

<table class="table container">
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Action</th>

    </tr>


    @foreach ($class as $key => $classes)
    <tr>
        <td>{{ $classes["id"] }}</td>
        <td>{{ $classes["nama"] }}</td>
        <td>
            <a type="button" class="btn btn-outline-primary" href="/kelas/edit/{{ $classes['id'] }}">Edit</a>
            <form method="POST" action="/kelas/delete/{{ $classes->id }}" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus kelas ini?');">
                @method('delete')
                @csrf
                <button class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
@endforeach

</table>



@endsection
