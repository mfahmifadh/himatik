@extends('admin.app')

@section('content')

<div id="content-wrapper">
	<div class="container">
		<div class="card mb-3">
			<div class="card-header">
    	<i class="fas fa-chart-area"></i>
	 		Create Information</div>
 	 	<div class="card-body">   
 	 	@foreach($information as $data)
	    <form method="post" action="{{ url('admin/updateInfor', $data['id']) }}">
	    	{{ csrf_field() }}
		  <div class="form-row">
		    <div class="form-group col-md-6">
		      <label for="inputEmail4">Heading Information</label>
		      <input type="text" class="form-control" name="heading_infor" value="{{ $data['heading_infor'] }}">
		    </div>
		    <div class="form-group col-md-6">
		      <label for="inputPassword4">Date</label>
		      <input type="date" class="form-control" name="date" value="{{ $data['date'] }}">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="inputAddress2">Detail Information</label>
		    <textarea class="form-control" name="detail_infor">{{ $data['detail_infor'] }}</textarea>
		  </div>
		  
		  <div class="form-group">
		    <div class="form-check">
		      <input class="form-check-input" type="checkbox" id="gridCheck">
		      <label class="form-check-label" for="gridCheck">
		        Check me out
		      </label>
		    </div>
		  </div>
		  <button type="submit" class="btn btn-primary">Create</button>
		</form>
		@endforeach
    </div>
   <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
  </div>
 </div>
</div>


@endsection