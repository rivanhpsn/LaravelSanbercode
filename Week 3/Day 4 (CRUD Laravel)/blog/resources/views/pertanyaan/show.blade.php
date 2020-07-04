@extends('adminlte.master')

@section('content')
<div class="content-wrapper">
    <div class="card">    
        <div class="card-body">
        <div class="ml-3 mt-3">
            <h3>Detail Pertanyaan {{$pertanyaan ->id}}</h3>
            <p>Judul pertanyaan : {{$pertanyaan->judul}}</p>
            <p>Isi pertanyaan : {{$pertanyaan->isi}}</p>
            <p>Tanggal dibuat : {{$pertanyaan->created_at}}</p>
            <p>Tanggal diperbaharui : {{$pertanyaan->updated_at}}</p>
            {{-- <tbody>
                @foreach ($data['jawaban'] as $key => $jawaban)
                    <tr id="{{$jawaban->id}}">
                    <td> {{ $key + 1}}</td>
                    <td> {{ $jawaban -> isi}}</td>
                    {{-- <td> {{ $pertanyaan -> like}}</td>
                    <td> {{ $pertanyaan -> dislike}}</td> --}}
                    {{-- </tr>
                @endforeach
            </tbody> --}}
        </div>
        </div>
    </div>
</div> 
@endsection