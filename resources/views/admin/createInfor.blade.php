@extends('admin.app')

@section('content')

<div id="content-wrapper">
	<div class="container">
		<div class="card mb-3">
			<div class="card-header">
    	<i class="fas fa-chart-area"></i>
	 		Buat Informasi Baru</div>
 	 	<div class="card-body">   
	    <form method="POST" action="{{ url('admin/createInformation') }}">
	    	{{ csrf_field() }}
		  <div class="form-row">
		    <div class="form-group col-md-6">
		      <label for="inputEmail4">Heading Information</label>
		      <input type="text" class="form-control" name="heading_infor" placeholder="Heading">
		    </div>
		    <div class="form-group col-md-6">
		      <label for="inputPassword4">Date</label>
		      <input type="date" class="form-control" name="date" placeholder="MM/DD/YYYY">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="inputAddress2">Detail Information</label>
		    <textarea class="form-control" placeholder="Informasi Detail" name="detail_infor"></textarea>
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
    </div>
   <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
  </div>
 </div>
</div>


@endsection