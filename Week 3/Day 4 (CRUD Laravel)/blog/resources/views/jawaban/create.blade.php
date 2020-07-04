@extends('adminlte.master')

@section('content')
<div class="content-wrapper ">
    <div class="card">
        <div class="ml-3">
            <div class="card-header">
                <h3 class="card-title">Tambah Jawaban</h3>
            </div>
        <form action="/jawaban/{{$id}}" method="POST">
                @csrf
                <div class="card-body">
                <div class="form-group">
                    <label for="name">Jawab Pertanyaan : </label>
                    <input type="text" class="form-control" name="isi" placeholder="Masukkan jawaban" id="isi">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                </div>
        </form>
        </div>
    </div>
</div>
@endsection