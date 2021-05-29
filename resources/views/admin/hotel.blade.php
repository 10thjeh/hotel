@extends('admin.template')

@section('content')
<hr>
<div class="container">
  @foreach($hotels as $hotel)
  <div class="row">
    <div class="col">
      @section('title',$hotel->nama)
      <form class="" action="index.html" method="post">
        <input type="text" name="id" value="{{$hotel->id}}" hidden> <!--please dont change me :(-->
        <div class="mb-3">
          <h2>Description</h2>
          <div class="form-floating">
            <textarea class="form-control" placeholder="" name="deskripsi" id="deskripsi" style="height: 100px" value="">{{$hotel->deskripsi}}</textarea>
          </div>
        </div>
        <div class="mb-3">
          <label for="rating" class="form-label">Rating</label>
          <input type="number" min="0" class="form-control" name="rating" id="rating" value="{{$hotel->rating}}">
        </div>
        <button type="submit" class="btn btn-primary" name="button">Update</button>
      </form>
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
  @endforeach
  <hr>
  <div class="row">
    <h2>Kamar</h2>
    <table id="example" class="table table-striped display" style="width:100%">
      <thead>
        <tr>
          <th>ID kamar</th>
          <th>Nama kamar</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        @foreach($rooms as $room)
        <tr>
          <td>{{$room->id}}</td>
          <td>{{$room->namaKamar}}</td>
          <td><a href="{{url('/admin/room/'.$room->id)}}">Action</a></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  <hr>
  <div class="row">
    <h2>Fasilitas</h2>
    <form class="" action="index.html" method="post">
      @foreach($listOfFacilities as $facility)
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="{{$facility->id}}" id="{{$facility->id}}">
        <label class="form-check-label" for="{{$facility->id}}">
          {{$facility->nama}}
        </label>
      </div>
      @endforeach
      <button type="submit" class="btn btn-primary" name="button">Update facility</button>
    </form>
  </div>
  <hr>
  <div class="row">
    <a role="button" href="#" class="btn btn-danger">Delete hotel</a>
  </div>
</div>
@endsection

@section('script')
<script type="text/javascript">
  $(document).ready(function() {
      $('#example').DataTable();
    } );
</script>
@endsection
