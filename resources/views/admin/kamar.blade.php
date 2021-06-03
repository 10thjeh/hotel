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
        <a role="button" href="{{url('/admin/delete/room/'.$room->id)}}" class="btn btn-danger">Delete</a>
      </form>
      @endforeach
    </div>
    <div class="col">
      <h2>Photos</h2>
      @if(count($photos) == 0)
      <p>If you seeing this message, you need to add photos</p>
      @endif
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          @foreach($photos as $photo)
          <div class="carousel-item @if($loop->first) active @endif">
            <img src="{{url('image/room/'.$photo->foto)}}" class="d-block w-100" height="300px">
            <div class="carousel-caption d-none d-md-block">
              <a href="{{url('/admin/delete/room/image/'.$photo->foto)}}" class="btn btn-danger" role="button">Delete</a>
            </div>
          </div>
          @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <p>*Images can be stretched for admin display purposes, the original dimensions are not changed</p>
      <form action="{{url('/admin/room/image')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="id" value="{{$room->id}}" hidden>
        <div class="mb-3">
          <input type="file" accept="image/*" name="gambar" id="gambar">
        </div>
        <button type="submit" class="btn btn-primary" name="button">Add</button>
      </form>
    </div>
  </div>
  <hr>
  <div class="row">
    <div class="col">
      <h2>Fasilitas</h2>
      <form action="{{url('/admin/room/update/f')}}" method="post">
        @csrf
        @foreach($rooms as $room)
          <input type="text" name="id" value="{{$room->id}}" hidden>
        @endforeach
        @foreach($listOfFacilities as $facility)
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="{{$facility->nama}}" value="{{$facility->id}}" id="{{$facility->id}}" <?php if(in_array($facility->id, $roomFacilities)) echo "checked" ?>>
            <label class="form-check-label" for="{{$facility->id}}">
              {{$facility->nama}}
            </label>
          </div>
        @endforeach
        <button type="submit" class="btn btn-primary">Update facility</button>
      </form>
    </div>
    <div class="col">
      <h2>Akomodasi</h2>
      <form action="{{url('/admin/room/accomodation')}}" method="post">
        @csrf
        <input type="text" name="id" value="{{$room->id}}" hidden>
        <div class="mb-3">
          <h2>Orang</h2>
          <input type="number" min="0" class="form-control" name="orang" id="orang" value="{{$room->orang}}">
        </div>
        <div class="mb-3">
          <h2>Tempat tidur</h2>
          <input type="number" min="0" class="form-control" name="tempatTidur" id="tempatTidur" value="{{$room->kasur}}">
        </div>
        <div class="mb-3">
          <h2>Kamar mandi</h2>
          <input type="number" min="0" class="form-control" name="kamarMandi" id="kamarMandi" value="{{$room->kamarMandi}}">
        </div>
        <input type="submit" class="btn btn-primary" value="Update">
      </form>
    </div>
  </div>
</div>
@endsection
