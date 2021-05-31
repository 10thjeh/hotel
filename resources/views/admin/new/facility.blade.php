@extends('admin.template')

@section('title','New facility')

@section('content')
<div class="container">
  <div class="row">
    <div class="col">
      <h2>New Hotel Facility</h2>
      <form action="{{url('/admin/new/facility/hotel')}}" method="post">
        @csrf
        <div class="md-3">
          <label class="form-label" for="fasilitas">Fasilitas hotel</label>
          <input type="text" name="fasilitas" id="fasilitas" class="form-control" value="">
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Add</button>
      </form>
    </div>
    <div class="col">
      <h2>New Room Facility</h2>
      <form action="{{url('/admin/new/facility/room')}}" method="post">
        @csrf
        <div class="md-3">
          <label class="form-label" for="fasilitas">Fasilitas kamar</label>
          <input type="text" name="fasilitas" id="fasilitas" class="form-control" value="">
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Add</button>
      </form>
    </div>
  </div>
</div>
@endsection
