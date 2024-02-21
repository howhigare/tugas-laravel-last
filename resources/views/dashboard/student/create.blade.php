@extends('dashboard.layout.sidebar')

@section('content')
<h1> New data Student </h1>
<div class="col-lg-6">
    <form method="post" action="/dashboard/student/add">
        @csrf
        <div class="mb-3">
            <label for="nis" class="form-label"> NIS </label>
            <input type="number" class="form-control" required id="nis" name="nis" value="{{ old('nis')}}">
        </div>

        <div class="mb-3">
            <label for="nama" class="form-label"> Nama </label>
            <input type="text" class="form-control" required id="nama" name="nama" value="{{ old('nama')}}">
        </div>
        <div class="mb-3">
            <label for="kelas_id" class="form-label">Kelas:</label>
            <select class="form-select" id="kelas_id" name="kelas_id"  required>
                @foreach ($kelas_id as $class)
                    <option value="{{ $class->id }}">{{$class->nama}}</option>a
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="tgl_lahir" class="form-label"> Tanggal Lahir </label>
            <input type="date" class="form-control" required id="tgl_lahir" name="tgl_lahir" value="{{ old('tgl_lahir')}}">
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label"> Alamat </label>
            <input type="text" class="form-control" required id="alamat" name="alamat" value="{{ old('alamat')}}">
        </div>


        <button type="submit" class="btn btn-primary">Add </button>
    </form>
</div>
@endsection
