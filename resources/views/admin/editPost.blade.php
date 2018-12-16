@extends('admin.app')

@section('content')

<div id="content-wrapper">
	<div class="container">
		<div class="card mb-3">
			<div class="card-header">
    	<i class="fas fa-chart-area"></i>
	 		Ubah Post</div>
 	 	<div class="card-body">
 	 	@foreach($post as $data)   
	   	<form method="POST" action="{{ url('admin/updatePost', $data['id']) }}" enctype="multipart/form-data">
	    	{{ csrf_field() }}
		  <div class="form-row">
		    <div class="form-group col-md-6">
		      <label for="inputEmail4">Judul</label>
		      <input type="text" class="form-control" name="title" value="{{ $data->title}}">
		    </div>
		    <div class="form-group col-md-6">
		      <label for="inputPassword4">Upload Gambar</label>
		      <input type="file" class="form-control" name="filename">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="inputAddress2">Konten</label>
		    <textarea class="form-control" name="konten">{{ $data->konten}}</textarea>
		  </div>
		  <div class="form-group">
		    <div class="form-check">
		      <input class="form-check-input" type="checkbox" id="gridCheck">
		      <label class="form-check-label" for="gridCheck">
		        Check me out
		      </label>
		    </div>
		  </div>
		  <button type="submit" class="btn btn-primary">Update</button>
		</form>
		@endforeach
    </div>
   <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
  </div>
 </div>
</div>


@endsection