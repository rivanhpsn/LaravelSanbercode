@extends('adminlte.master')

@section('content')
<div class="content-wrapper ">
    
    <div class="card">
        <div class = "card-header">
            <h2 class="card-title">Jawaban-jawaban dari pertanyaan {{$data['pertanyaan_id']}}</h2>
        </div>
        <div class="card-body">
            <table id="datatable" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Jawaban</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($data['jawaban'] as $key => $jawaban)
                        <tr id="{{$jawaban->id}}">
                        <td> {{ $key + 1}}</td>
                        <td> {{ $jawaban -> isi}}</td>
                        {{-- <td> {{ $pertanyaan -> like}}</td>
                        <td> {{ $pertanyaan -> dislike}}</td> --}}
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <a class="btn btn-primary"  href="/pertanyaan" role="button" >Kembali</a>
            <a class="btn btn-primary"  href="/jawaban/{{$data['pertanyaan_id']}}/create" role="button" >Masukkan Jawaban</a>
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