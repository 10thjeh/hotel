@extends('admin.template')

@foreach($hotels as $hotel)
  @section('title', 'New room for '.$hotel->nama)
@endforeach

@section('content')
<div class="container">
  <form action="{{url('/admin/new/room')}}" method="post">
    @csrf
    <input type="text" name="idHotel" value="{{$id}}" hidden>
    <div class="mb-3">
      <label for="nama" class="form-label">Nama kamar</label>
      <input type="text" class="form-control" name="nama" id="nama">
    </div>
    <div class="mb-3">
      <label for="deskripsi" class="form-label">Deskripsi</label>
      <div class="form-floating">
        <textarea class="form-control" placeholder="" name="deskripsi" id="deskripsi" style="height: 100px" value=""></textarea>
      </div>
    </div>
    <div class="mb-3">
      <label for="harga" class="form-label">Harga kamar</label>
      <input type="number" min="0" class="form-control" name="harga" id="harga" value="">
    </div>
    <div class="mb-3">
      <label for="qty" class="form-label">Qty kamar</label>
      <input type="number" min="0" class="form-control" name="qty" id="qty" value="">
    </div>
    <button type="submit" class="btn btn-primary" name="button">Confirm</button>
  </form>
</div>
@endsection
