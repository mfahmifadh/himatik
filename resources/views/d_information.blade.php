@extends('welcome')
 
@section('title', 'CRUD BLOG')
@section('modal')
<div class="row">
 <div class="col-lg-12">
  <table class="table table-bordered table-hover">
   <thead>
    <tr>
     <th>Kategori</th>
     <td>{{ $information->heading_infor }}</td>
    </tr>
    <tr>
     <th>Judul</th>
     <td>{{ $information->date }}</td>
    </tr>
    <tr>
     <th>Tanggal</th>
     <td>{{ $information->detail_infor }}</td>
    </tr>
   </thead>
  </table>
 </div>
</div>
@endsection