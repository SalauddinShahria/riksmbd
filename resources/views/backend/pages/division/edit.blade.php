@extends('backend.layout.template ')

@section('body')

  	<div class="br-pagetitle">
    	<i class="icon ion-ios-home-outline"></i>
    	<div>
      		<h4>Update Division</h4>
      		<p class="mg-b-0">riksmbd Division here.</p>
    	</div>
  	</div>

	<div class="br-pagebody">
	    <div class="row row-sm">
	      	<div class="col-sm-12 col-xl-12">

	      		<!-- Body Content Start -->
		      	<div class="card bd-0 shadow-base">
		          	<div class="d-md-flex justify-content-between pd-25">
			            <div>
			              <h6 class="tx-13 tx-uppercase tx-inverse tx-semibold tx-spacing-1">Update Division</h6>
			            </div>
		            </div>

			        <div class="pd-l-25 pd-r-15 pd-b-25">
			        	<form action="{{ route('division.update', $division->id) }}" method="POST" enctype="multipart/form-data">
			        		@csrf

			        		<div class="row">
			        			<div class="col-sm-6 col-xl-6">

			        				<div class="form-group">
					        			<label>Division Name</label>
					        			<input type="text" name="name" class="form-control" autocomplete="off" required="required" value="{{ $division->name }}">
					        		</div>

			        			</div>

			        			<div class="col-sm-3 col-xl-3">

					        		<div class="form-group">
					        			<label>Division Priority No.</label>
					        			<input type="number" name="priority" class="form-control" value="{{ $division->priority }}">
					        		</div>
			        			</div>

			        		</div>

			        		<div class="form-group">
			        			<input type="submit" name="updateDivision" class="btn btn-primary" value="Save Changes">
			        		</div>

			        	</form>
			        </div>
		        </div>
	      		<!-- Body Content End -->
	      	</div>
	  	</div>
	</div>

@endsection