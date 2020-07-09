@extends('adminlte.master')

@section('content')
<div class="content-wrapper ">
    <div class="card">
    <table class="table">
        <thead>
        <tr>
            <th scope="col">No.</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Stock</th>
            <th scope="col">Price</th>
            <th scope="col">Category</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($items as $key => $items)
                <tr>
                <td> {{ $key + 1}}</td>
                <td> {{ $items -> name}}</td>
                <td> {{ $items -> description}}</td>
                <td> {{ $items -> stock}}</td>
                <td> {{ $items -> price}}</td>
                <td> {{ $items -> category['name']}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</div>
@endsection

