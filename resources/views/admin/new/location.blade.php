@extends('admin.template')

@section('title', 'New location')

@section('content')

<div class="container">
  <form class="" action="{{url('/admin/new/location')}}" method="post">
    @csrf
    <div class="md-3">
      <label class="form-label" for="lokasi">Lokasi baru</label>
      <input type="text" name="lokasi" id="lokasi" class="form-control" value="">
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Tambah lokasi</button>
  </form>
</div>

@endsection
