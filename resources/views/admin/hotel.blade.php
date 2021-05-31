@extends('admin.template')

@section('content')
<div class="container">
  @foreach($hotels as $hotel)
  <div class="row">
    <div class="col">
      @section('title',$hotel->nama)
      <form action="{{url('/admin/hotels/update/d')}}" method="post">
        @csrf
        <input type="text" name="id" value="{{$hotel->id}}" hidden> <!--please dont change me :(-->
        <div class="mb-3">
          <h2>Description</h2>
          <div class="form-floating">
            <textarea class="form-control" placeholder="" name="deskripsi" id="deskripsi" style="height: 100px" value="">{{$hotel->deskripsi}}</textarea>
          </div>
        </div>
        <div class="mb-3">
          <label for="rating" class="form-label">Rating</label>
          <input type="number" min="0" max="5" class="form-control" name="rating" id="rating" value="{{$hotel->rating}}">
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
    <a role="button" href="#" class="btn btn-primary">+Kamar</a>
  </div>
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
    <div class="col">
      <h2>Fasilitas</h2>
      <form action="{{url('/admin/hotels/update/f')}}" method="post">
        @csrf
        @foreach($hotels as $hotel)
          <input type="text" name="id" value="{{$hotel->id}}" hidden>
        @endforeach
        @foreach($listOfFacilities as $facility)
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="{{$facility->nama}}" value="{{$facility->id}}" id="{{$facility->id}}" <?php if(in_array($facility->id, $hotelFacilities)) echo "checked" ?>>
            <label class="form-check-label" for="{{$facility->id}}">
              {{$facility->nama}}
            </label>
          </div>
        @endforeach
        <button type="submit" class="btn btn-primary">Update facility</button>
      </form>
    </div>
    <div class="col">
      <h2>Lokasi</h2>
      <form action="{{url('/admin/hotels/update/p')}}" method="post">
        @csrf
        <div class="mb-3">
          @foreach($hotels as $hotel)
            <input type="text" name="id" value="{{$hotel->id}}" hidden>
          @endforeach
          <select class="form-select" name="lokasi" aria-label="Default select example">
            @foreach($locations as $location)
              <option value="{{$location->idLokasi}}" <?php if($location->idLokasi == $hotelLocation) echo "selected"; ?>>{{$location->namaLokasi}}</option>
            @endforeach
          </select>
        </div>
        <button type="submit" class="btn btn-primary">Update lokasi</button>
      </form>
    </div>
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
