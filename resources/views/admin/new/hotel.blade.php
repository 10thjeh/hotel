@extends('admin.template')

@section('title', 'New hotel')

@section('content')
<div class="container">
  <form action="{{url('/admin/new/hotel')}}" method="post">
    @csrf
    <div class="mb-3">
      <label for="nama" class="form-label">Nama Hotel</label>
      <input type="text" class="form-control" name="nama" id="nama">
    </div>
    <div class="mb-3">
      <label for="rating" class="form-label">Rating</label>
      <input type="number" min="0" max="5" class="form-control" name="rating" id="rating">
    </div>
    <div class="mb-3">
      <h2>Location</h2>
      <select class="form-select" name="lokasi" aria-label="Default select example">
        @foreach($locations as $location)
          <option value="{{$location->idLokasi}}">{{$location->namaLokasi}}</option>
        @endforeach
      </select>
    </div>
    <div class="mb-3">
      <h2>Description</h2>
      <div class="form-floating">
        <textarea class="form-control" placeholder="" name="deskripsi" id="deskripsi" style="height: 100px" value=""></textarea>
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Add new hotel</button>
  </form>
</div>
@endsection
