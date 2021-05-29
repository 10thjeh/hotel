@extends('admin.template')

@section('title','List of hotels')

@section('content')
<div class="container">
  <table id="example" class="table table-striped display" style="width:100%">
    <thead>
      <tr>
        <th>ID Hotel</th>
        <th>Nama Hotel</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      @foreach($hotels as $hotel)
      <tr>
        <td>{{$hotel->id}}</td>
        <td>{{$hotel->nama}}</td>
        <td><a href="{{url('admin/hotels/'.$hotel->id)}}">Action</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection

@section('script')
<script type="text/javascript">
  $(document).ready(function() {
      $('#example').DataTable();
    } );
</script>
@endsection
