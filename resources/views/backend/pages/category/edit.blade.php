@extends('backend.layout.template ')

@section('body')

  	<div class="br-pagetitle">
    	<i class="icon ion-ios-home-outline"></i>
    	<div>
      		<h4>Update Category Information</h4>
      		<p class="mg-b-0">riksmbd edit Category here.</p>
    	</div>
  	</div>

	<div class="br-pagebody">
	    <div class="row row-sm">
	      	<div class="col-sm-12 col-xl-12">

	      		<!-- Body Content Start -->
		      	<div class="card bd-0 shadow-base">
		          	<div class="d-md-flex justify-content-between pd-25">
			            <div>
			              <h6 class="tx-13 tx-uppercase tx-inverse tx-semibold tx-spacing-1">Update Category Information</h6>
			            </div>
		            </div>

			        <div class="pd-l-25 pd-r-15 pd-b-25">
			        	<form action="{{ route('category.edit', $category->id) }}" method="POST" enctype="multipart/form-data">
			        		@csrf

			        		<div class="row">
			        			<div class="col-sm-6 col-xl-6">

			        				<div class="form-group">
					        			<label>Category Name</label>
					        			<input type="text" name="name" class="form-control" value="{{ $category->name }}">
					        		</div>

					        		<div class="form-group">
					        			<label>Category | Sub-Category</label>
					        			<select class="form-control" name="is_parent">
					        				<option value="0">Please Select the Parent Category if any</option>

					        				@foreach(App\Models\Backend\Category::orderBy('name', 'asc')->where('is_parent', 0)->get() as $parentcat)

					        					<option value="{{ $parentcat->id }}" @if ($parentcat->is_parent == 0 && $category->id == $parentcat->id) selected @endif>{{ $parentcat->name }}</option>

					        					@foreach(App\Models\Backend\Category::orderBy('name', 'asc')->where('is_parent', $parentcat->id)->get() as $childcat)

					        					<option value="{{ $childcat->id }}" @if ($category->id == $childcat->id) selected @endif> - {{ $childcat->name }}</option>

					        					@endforeach
					        				@endforeach
					        			</select>
					        		</div>

									<div class="form-group">
					        			<label>Status</label>
					        			<select class="form-control" name="status">
					        				<option value="0">Please Select the status</option>
					        				<option value="1" @if($category->status == 1) selected @endif>Active</option>
					        				<option value="0" @if($category->status == 0) selected @endif>Inactive</option>
					        			</select>
					        		</div>

			        			</div>

			        			<div class="col-sm-6 col-xl-6">

			        				<div class="form-group">
					        			<label>Category Description</label>
					        			<textarea class="form-control" name="description" rows="5">{{ $category->description }}</textarea>
					        		</div>

					        		<div class="form-group">
					        			<label>Category Image</label> <br>
					        			@if ( !is_null($category->image))
								      		<img src="{{ asset('Backend/img/category') }}/{{ $category->image }}" width="40">
								      	@else
								      		No Thumbnail
								      	@endif <br><br>
					        			<input type="file" name="image" class="form-control-file">
					        		</div>

			        			</div>

			        		</div>

			        		<div class="form-group">
			        			<input type="submit" name="updateCategory" class="btn btn-primary" value="Save Changes">
			        		</div>

			        	</form>
			        </div>
		        </div>
	      		<!-- Body Content End -->
	      	</div>
	  	</div>
	</div>

@endsection