@extends('layout')
@section('content')
<div class="card upper">
    <div class="card-header">
    Add details
    </div>
<div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('shares.store') }}">
          <div class="form-group">
              @csrf
              <label for="name">Name:</label>
              <input type="text" class="form-control" name="name"/>
          </div>
          <div class="form-group">
              <label for="price">Quantity :</label>
              <input type="integer" class="form-control" name="quantity"/>
          </div>
          
          <button type="submit" class="btn btn-primary">Add</button>
      </form>
</div>
</div>
@endsection
