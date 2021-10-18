@extends('backend.layout.template ')

@section('body')

  	<div class="br-pagetitle">
    	<i class="icon ion-ios-home-outline"></i>
    	<div>
      		<h4>Manage All Slider</h4>
      		<p class="mg-b-0">riksmbd all Slider here.</p>
    	</div>
  	</div>

	<div class="br-pagebody">
	    <div class="row row-sm">
	      	<div class="col-sm-12 col-xl-12">

	      		<!-- Body Content Start -->
		      	<div class="card bd-0 shadow-base">
		          	<div class="d-md-flex justify-content-between pd-25">
			            <div>
			              <h6 class="tx-13 tx-uppercase tx-inverse tx-semibold tx-spacing-1">Manage All Slider</h6>
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
							      <th scope="col">Title</th>
							      <th scope="col">Sub Title</th>
							      <th scope="col">Description</th>
							      <th scope="col">Button Text</th>
							      <th scope="col">Button URL</th>
							      <th scope="col">Action</th>
							    </tr>
							  </thead>
							  <tbody>
							  	@php $i = 1 @endphp
								@foreach ($sliders as $slider)
								    <tr>
								      <th scope="row">{{ $i }}</th>
								      <td>
								      	@if ( !is_null($slider->image))
								      		<img src="{{ asset('Backend/img/slider') }}/{{ $slider->image }}" width="40">
								      	@else
								      		No Thumbnail
								      	@endif
								      </td>
								      <td>{{ $slider->title }}</td>
								      <td>{{ $slider->subtitle }}</td>
								      <td>{{ $slider->button_text }}</td>
								      <td>{{ $slider->button_url }}</td>
								      <td>{{ $slider->description }}</td>
								      <td>
								      	<div class="action-btn">
								      		<ul>
								      			<li><a href="{{ route('slider.edit', $slider->id) }}"><i class="fa fa-edit"></i></a></li>
								      			<li><a href="" data-toggle="modal" data-target="#deleteSlider{{ $slider->id }}"><i class="fa fa-trash"></i></a></li>
								      		</ul>
								      		<!--- Delete Modal Start --->
											<div class="modal fade" id="deleteSlider{{ $slider->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
											  <div class="modal-dialog" role="document">
											    <div class="modal-content">
											      <div class="modal-header">
											        <h5 class="modal-title" id="exampleModalLabel">Do you want to Delete the '{{ $slider->name }}' Slider?</h5>
											        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
											          <span aria-hidden="true">&times;</span>
											        </button>
											      </div>
											      <div class="modal-body">
											        <p>This '{{ $slider->name }}' slider will be permanently deleted from the database. If you want, you can keep the ‘status’ ’inactive’ without deleting it. So that you can turn on later. Otherwise delete permanently.</p>
											      </div>
											      <div class="modal-footer">
											      	<form action="{{ route('slider.destroy', $slider->id) }}" method="POST">
											      		@csrf
												      	<div class="modal-btn">
												      		<ul>
												      			<li><input type="submit" name="delete" class="btn btn-danger" value="Delete"></li>
												      			<li><button type="button" class="btn btn-primary" data-dismiss="modal">Cancle</button></li>
												      		</ul>
												      	</div>
												     </form>
											      </div>
											    </div>
											  </div>
											</div>
								      		<!--- Delete Modal End --->
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