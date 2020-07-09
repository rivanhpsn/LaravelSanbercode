@extends('adminlte.master')

@section('content')
<a href="/categories/create" class="btn btn-primary mt-3 ml-3"> Create new </a>
<div class="content-wrapper ">
    <div class="card">
    <table class="table">
        <thead>
        <tr>
            <th scope="col">No.</th>
            <th scope="col">Name</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($categories as $key => $category)
                <tr>
                <td> {{ $key + 1}}</td>
                <td> {{ $category -> name}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</div>
@endsection

