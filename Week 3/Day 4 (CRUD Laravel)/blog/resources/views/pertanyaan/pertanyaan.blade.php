@extends('adminlte.master')

@section('content')
<div class="content-wrapper ">
    <div align="right">
    <a class="btn btn-primary"  href="/pertanyaan/create" role="button" >+ Tambah Pertanyaan</a>
    </div>
    <div class="card">
        <div class="card-body">
            <table id="datatable" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Judul Pertanyaan</th>
                    <th scope="col">Isi</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($pertanyaan as $key => $pertanyaan)
                        <tr>
                        <td> {{ $key + 1}}</td>
                        <td> {{ $pertanyaan -> judul}}</td>
                        <td> {{ $pertanyaan -> isi}}</td>
                        <td><a class="btn btn-primary"  href="/jawaban" role="button" >Jawab</a></td>
                        {{-- <td> {{ $pertanyaan -> like}}</td>
                        <td> {{ $pertanyaan -> dislike}}</td> --}}
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@push('jsDT')
<!-- DataTables -->
<script src="{{ asset('adminlte/plugins/datatables/jquery.dataTables.js') }}"></script>
<script src="{{ asset('adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
<script>
    $(document).ready(function(){
        $('#datatable').DataTable();
    });
</script>
@endpush

@push('cssDT')
<!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">

@endpush