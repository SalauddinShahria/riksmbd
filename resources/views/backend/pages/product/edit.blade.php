@extends('backend.layout.template ')

@section('body')

  	<div class="br-pagetitle">
    	<i class="icon ion-ios-home-outline"></i>
    	<div>
      		<h4>Create New Product</h4>
      		<p class="mg-b-0">riksmbd add new Product here.</p>
    	</div>
  	</div>

	<div class="br-pagebody">
	    <div class="row row-sm">
	      	<div class="col-sm-12 col-xl-12">

	      		<!-- Body Content Start -->
		      	<div class="card bd-0 shadow-base">
		          	<div class="d-md-flex justify-content-between pd-25">
			            <div>
			              <h6 class="tx-13 tx-uppercase tx-inverse tx-semibold tx-spacing-1">Create New Product</h6>
			            </div>
		            </div>

			        <div class="pd-l-25 pd-r-15 pd-b-25">
			        	<form action="{{ route('product.edit', $product->id) }}" method="POST" enctype="multipart/form-data">
			        		@csrf


			        		<div class="container-fluid">
			        			<div class="row">
			        				<!-- Frist Column -->
			        				<div class="col-sm-4">

			        					<div class="form-group">
						        			<label>Product Title</label>
						        			<input type="text" name="title" class="form-control" value="{{ $product->title }}">
						        		</div>

						        		<div class="form-group">
						        			<label>Regular Price</label>
						        			<input type="text" name="regular_price" class="form-control" value="{{ $product->regular_price }}">
						        		</div>

						        		<div class="form-group">
						        			<label>Offer Price</label>
						        			<input type="text" name="offer_price" class="form-control" value="{{ $product->offer_price }}">
						        		</div>

						        		<div class="form-group">
						        			<label>Quantity</label>
						        			<input type="number" name="quantity" class="form-control" value="{{ $product->quantity }}">
						        		</div>

						        		<div class="form-group">
						        			<label>SKU Code</label>
						        			<input type="text" name="sku_code" class="form-control" value="{{ $product->sku_code }}">
						        		</div>

			        				</div>

			        				<!-- Middle Column -->
			        				<div class="col-sm-4">

			        					<div class="form-group">
						        			<label>Featured Product?</label>
						        			<select class="form-control" name="featured_item">
						        				<option value="0">Please Select the featured status</option>
						        				<option value="1" @if ($product->featured_item == 1) selected @endif>Yes Featured</option>
						        				<option value="0" @if ($product->featured_item == 0) selected @endif>Not Featured</option>
						        			</select>
						        		</div>

						        		<div class="form-group">
						        			<label>Product Brand</label>
						        			<select class="form-control" name="brand_id">
						        				<option value="0">Please Select the Product Brand</option>
						        				@foreach( $brands as $brand )
						        				<option value="{{ $brand->id }}" @if($product->brand_id == $brand->id) selected @endif>{{ $brand->name }}</option>
						        				@endforeach

						        			</select>
						        		</div>

						        		<div class="form-group">
						        			<label>Product Category</label>
						        			<select class="form-control" name="category_id">
						        				<option value="0">Please Select the Product Category</option>

						        				@foreach (App\Models\Backend\Category::orderBy('name', 'asc')->where('is_parent', 0)->get() as $parentcat)
						        				
						        					<option value="{{ $parentcat->id }}" @if($product->category_id == $parentcat->id) selected @endif>{{ $parentcat->name }}</option>

						        					@foreach (App\Models\Backend\Category::orderBy('name', 'asc')->where('is_parent', $parentcat->id)->get() as $childcat)
						        						<option value="{{ $childcat->id }}" @if($product->category_id == $childcat->id) selected @endif> -- {{ $childcat->name }}</option>
						        					@endforeach

						        				@endforeach
						        			</select>
						        		</div>

						        		<div class="form-group">
						        			<label>Product Type/Condition</label>
						        			<select class="form-control" name="product_type">
						        				<option value="0">Please Select the Product Type/Condition</option>
						        				<option value="0" @if( $product->product_type==0) selected @endif >NEW</option>
			                  					<option value="1" @if( $product->product_type==1) selected @endif >Pre-Owned</option>
						        			</select>
						        		</div>

						        		<div class="form-group">
						        			<label>Status</label>
						        			<select class="form-control" name="status">
						        				<option value="0">Please Select the status</option>
						        				<option value="1" @if ($product->status == 1) selected @endif>Active</option>
						        				<option value="0" @if ($product->status == 0) selected @endif>Inactive</option>
						        			</select>
						        		</div>


			        				</div>

			        				<!-- Last Column -->
			        				<div class="col-sm-4">
			        					
				        				<div class="form-group">
						        			<label>Product short Description</label>
						        			<textarea class="form-control" name="short_desc" rows="5">{{ $product->short_desc }}</textarea>
						        		</div>

						        		<div class="form-group">
						        			<label>Product Description</label>
						        			<textarea class="form-control" name="desc" rows="5">{{ $product->desc }}</textarea>
						        		</div>

						        		<div class="form-group">
						        			<label>Tags</label>
						        			<input type="text" name="tags" class="form-control" value="{{ $product->tags }}">
						        		</div>

			        				</div>

			        			</div>
			        		</div>

			        		<div class="container-fluid">
				        		<div class="row">
				        			<div class="col-sm-12">

				        				<div class="form-group">
						        			<label>Brand Image / Logo</label>
						        			<input type="file" name="image" class="form-control-file">
						        		</div>

				        				<div class="form-group">
						        			<input type="submit" name="addProduct" class="btn btn-primary" value="Add Product">
						        		</div>
				        			</div>
				        		</div>
				        	</div>
			        	</form>
			        </div>
		        </div>
	      		<!-- Body Content End -->
	      	</div>
	  	</div>
	</div>

@endsection