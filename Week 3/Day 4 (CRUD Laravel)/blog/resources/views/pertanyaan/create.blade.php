@extends('adminlte.master')

@section('content')
<div class="content-wrapper ">
<div class="card">
<div class="ml-3">
    <form action="/pertanyaan" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Judul Pertanyaan : </label>
            <input type="text" class="form-control" name="judul" placeholder="Masukkan judul pertanyaan" id="judul">
          </div>
          <div class="form-group">
            <label for="description">Isi Pertanyaan : </label>
            <input type="text" class="form-control" name="isi" id="isi" placeholder="Masukkan isi pertanyaan">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</div>
</div>
@endsection