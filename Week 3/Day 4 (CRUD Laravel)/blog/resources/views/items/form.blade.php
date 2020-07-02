@extends('adminlte.master')

@section('content')
<div class="content-wrapper ">
<div class="card">
<div class="ml-3">
    <form action="/items" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name : </label>
            <input type="text" class="form-control" name="name" placeholder="Enter name" id="name">
          </div>
          <div class="form-group">
            <label for="description">Description : </label>
            <input type="text" class="form-control" name="description" id="description" placeholder="Enter description">
          </div>
          <div class="form-group">
            <label for="stock">Stock : </label>
            <input type="number" class="form-control" name="stock" id="stock" placeholder="Enter stock">
          </div>
          <div class="form-group">
            <label for="price">Price : </label>
            <input type="number" class="form-control" name="price" id="price" placeholder="Enter price">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</div>
</div>
@endsection