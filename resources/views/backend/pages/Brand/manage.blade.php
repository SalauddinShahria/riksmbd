@extends('backend.layout.template ')

@section('body')

  	<div class="br-pagetitle">
    	<i class="icon ion-ios-home-outline"></i>
    	<div>
      		<h4>Manage All Brands</h4>
      		<p class="mg-b-0">riksmbd all brands here.</p>
    	</div>
  	</div>

	<div class="br-pagebody">
	    <div class="row row-sm">
	      	<div class="col-sm-12 col-xl-12">

	      		<!-- Body Content Start -->
		      	<div class="card bd-0 shadow-base">
		          	<div class="d-md-flex justify-content-between pd-25">
			            <div>
			              <h6 class="tx-13 tx-uppercase tx-inverse tx-semibold tx-spacing-1">Manage All Brands</h6>
			            </div>
		            </div>

			        <div class="pd-l-25 pd-r-15 pd-b-25">
			        	<div class="bd bd-gray-300 rounded table-responsive">
			          		<!-- Table Start -->
			          		<table id="managetble" class="table table-bordered table-colored table-purple table-striped">
							  <thead class="thead-colored thead-purple">
							    <tr>
							      <th scope="col">#Sl.</th>
							      <th scope="col">Image</th>
							      <th scope="col">Name</th>
							      <th scope="col">Slug</th>
							      <th scope="col">Description</th>
							      <th scope="col">Is Featured</th>
							      <th scope="col">Status</th>
							      <th scope="col">Action</th>
							    </tr>
							  </thead>
							  <tbody>
							  	@php $i = 1 @endphp
								@foreach ($brands as $brand)
								    <tr>
								      <th scope="row">{{ $i }}</th>
								      <td>
								      	@if ( !is_null($brand->image))
								      		<img src="{{ asset('Backend/img/brand') }}/{{ $brand->image }}" width="40">
								      	@else
								      		No Thumbnail
								      	@endif
								      </td>
								      <td>{{ $brand->name }}</td>
								      <td>{{ $brand->slug }}</td>
								      <td>{{ $brand->description }}</td>
								      <td>
								      	@if ($brand->is_featured == 1)
								      		<span class="badge badge-success">Yes</span>
								      	@else
								      		<span class="badge badge-warning">No</span>
								      	@endif
								      </td>
								      <td>
								      	@if ($brand->status == 1)
								      		<span class="badge badge-success">Active</span>
								      	@else
								      		<span class="badge badge-danger">Inactive</span>
								      	@endif
								      </td>
								      <td>
								      	<div class="action-btn">
								      		<ul>
								      			<li><a href=""><i class="fa fa-edit"></i></a></li>
								      			<li><a href=""><i class="fa fa-trash"></i></a></li>
								      		</ul>
								      	</div>
								      </td>
								    </tr>
								  	@php $i++ @endphp
								 @endforeach

							  </tbody>
							</table>
			          		<!-- Table End -->
			          	</div>
			        </div>
		        </div>
	      		<!-- Body Content End -->
	      	</div>
	  	</div>
	</div>

@endsection