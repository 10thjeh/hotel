@extends('admin.template')

@section('title','Detail kamar')

@section('content')
<div class="container">
  <div class="row">
    <div class="col">
      @foreach($rooms as $room)
      <form action="{{url('/admin/room/update')}}" method="post">
        @csrf
        <input type="text" name="id" value="{{$room->id}}" hidden>
        <div class="mb-3">
          <label for="namaKamar" class="form-label">Nama kamar</label>
          <input type="text" class="form-control" name="namaKamar" id="namaKamar" value="{{$room->namaKamar}}">
        </div>
        <div class="mb-3">
          <h2>Deskripsi</h2>
          <div class="form-floating">
            <textarea class="form-control" placeholder="" name="deskripsi" id="deskripsi" style="height: 100px" value="">{{$room->deskripsi}}</textarea>
          </div>
        </div>
        <div class="mb-3">
          <h2>Harga</h2>
          <input type="number" min="0" class="form-control" name="harga" id="harga" value="{{$room->harga}}">
        </div>
        <div class="mb-3">
          <h2>Qty</h2>
          <input type="number" min="0" class="form-control" name="qty" id="qty" value="{{$room->qty}}">
        </div>
        <button type="submit" class="btn btn-primary" name="button">Update</button>
        <a role="button" href="#" class="btn btn-danger">Delete</a>
      </form>
      @endforeach
    </div>
    <div class="col">
      <h2>Photos</h2>
      <ul class="list-group">
        <li class="list-group-item">An item</li>
        <li class="list-group-item">A second item</li>
        <li class="list-group-item">A third item</li>
        <li class="list-group-item">A fourth item</li>
        <li class="list-group-item">And a fifth one</li>
      </ul>
    </div>
  </div>
</div>
@endsection
