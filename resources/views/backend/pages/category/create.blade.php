@extends('backend.layout.template ')

@section('body')

  	<div class="br-pagetitle">
    	<i class="icon ion-ios-home-outline"></i>
    	<div>
      		<h4>Create New Cagetory</h4>
      		<p class="mg-b-0">riksmbd add new Cagetory here.</p>
    	</div>
  	</div>

	<div class="br-pagebody">
	    <div class="row row-sm">
	      	<div class="col-sm-12 col-xl-12">

	      		<!-- Body Content Start -->
		      	<div class="card bd-0 shadow-base">
		          	<div class="d-md-flex justify-content-between pd-25">
			            <div>
			              <h6 class="tx-13 tx-uppercase tx-inverse tx-semibold tx-spacing-1">Create New Cagetory</h6>
			            </div>
		            </div>

			        <div class="pd-l-25 pd-r-15 pd-b-25">
			        	<form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
			        		@csrf

			        		<div class="row">
			        			<div class="col-sm-6 col-xl-6">

			        				<div class="form-group">
					        			<label>Category Name</label>
					        			<input type="text" name="name" class="form-control">
					        		</div>

					        		<div class="form-group">
					        			<label>Category | Sub-Category</label>
					        			<select class="form-control" name="is_parent">
					        				<option value="0">Please Select the Category</option>
					        				<option value="1">Primary Category</option>
					        				<option value="0">Sub-Category</option>
					        			</select>
					        		</div>

									<div class="form-group">
					        			<label>Status</label>
					        			<select class="form-control" name="status">
					        				<option value="0">Please Select the status</option>
					        				<option value="1">Active</option>
					        				<option value="0">Inactive</option>
					        			</select>
					        		</div>

			        			</div>

			        			<div class="col-sm-6 col-xl-6">

			        				<div class="form-group">
					        			<label>Category Description</label>
					        			<textarea class="form-control" name="description" rows="5"></textarea>
					        		</div>

					        		<div class="form-group">
					        			<label>Category Image</label>
					        			<input type="file" name="image" class="form-control-file">
					        		</div>

			        			</div>

			        		</div>

			        		<div class="form-group">
			        			<input type="submit" name="addCategory" class="btn btn-primary" value="Add Cagetory">
			        		</div>

			        	</form>
			        </div>
		        </div>
	      		<!-- Body Content End -->
	      	</div>
	  	</div>
	</div>

@endsection