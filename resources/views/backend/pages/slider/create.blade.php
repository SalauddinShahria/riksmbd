@extends('backend.layout.template ')

@section('body')

  	<div class="br-pagetitle">
    	<i class="icon ion-ios-home-outline"></i>
    	<div>
      		<h4>Create New Slider</h4>
      		<p class="mg-b-0">riksmbd add new Home Slider here.</p>
    	</div>
  	</div>

	<div class="br-pagebody">
	    <div class="row row-sm">
	      	<div class="col-sm-12 col-xl-12">

	      		<!-- Body Content Start -->
		      	<div class="card bd-0 shadow-base">
		          	<div class="d-md-flex justify-content-between pd-25">
			            <div>
			              <h6 class="tx-13 tx-uppercase tx-inverse tx-semibold tx-spacing-1">Create New Slider</h6>
			            </div>
		            </div>

			        <div class="pd-l-25 pd-r-15 pd-b-25">
			        	<form action="{{ route('slider.store') }}" method="POST" enctype="multipart/form-data">
			        		@csrf

			        		<div class="row">
			        			<div class="col-sm-6 col-xl-6">

			        				<div class="form-group">
					        			<label>Slider Title</label>
					        			<input type="text" name="title" class="form-control">
					        		</div>

					        		<div class="form-group">
					        			<label>Slider Sub Title</label>
					        			<input type="text" name="subtitle" class="form-control">
					        		</div>

					        		<div class="form-group">
					        			<label>Slider Button Text</label>
					        			<input type="text" name="button_text" class="form-control">
					        		</div>

					        		<div class="form-group">
					        			<label>Slider Button URL</label>
					        			<input type="text" name="button_url" class="form-control">
					        		</div>

			        			</div>

			        			<div class="col-sm-6 col-xl-6">

			        				<div class="form-group">
					        			<label>Slider Description</label>
					        			<textarea class="form-control" name="description" rows="10"></textarea>
					        		</div>

					        		<div class="form-group">
					        			<label>Slider Image</label>
					        			<input type="file" name="image" class="form-control-file">
					        		</div>

			        			</div>

			        		</div>

			        		<div class="form-group">
			        			<input type="submit" name="addSlider" class="btn btn-primary" value="Add New Slider">
			        		</div>

			        	</form>
			        </div>
		        </div>
	      		<!-- Body Content End -->
	      	</div>
	  	</div>
	</div>

@endsection