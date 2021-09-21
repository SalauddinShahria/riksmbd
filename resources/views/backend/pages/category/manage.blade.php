@extends('backend.layout.template ')

@section('body')

  	<div class="br-pagetitle">
    	<i class="icon ion-ios-home-outline"></i>
    	<div>
      		<h4>Manage All Categories</h4>
      		<p class="mg-b-0">riksmbd all Category here.</p>
    	</div>
  	</div>

	<div class="br-pagebody">
	    <div class="row row-sm">
	      	<div class="col-sm-12 col-xl-12">

	      		<!-- Body Content Start -->
		      	<div class="card bd-0 shadow-base">
		          	<div class="d-md-flex justify-content-between pd-25">
			            <div>
			              <h6 class="tx-13 tx-uppercase tx-inverse tx-semibold tx-spacing-1">Manage All Categories</h6>
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
							      <!-- <th scope="col">Slug</th>
							      <th scope="col">Description</th> -->
							      <th scope="col">Category | Sub-Category</th>
							      <th scope="col">Status</th>
							      <th scope="col">Action</th>
							    </tr>
							  </thead>
							  <tbody>
							  	@php $i = 1 @endphp
								@foreach ($categories as $category)
								    @if($category->is_parent == 0)
								    <tr>
								      <th scope="row">{{ $i }}</th>
								      <td>
								      	@if ( !is_null($category->image))
								      		<img src="{{ asset('Backend/img/category') }}/{{ $category->image }}" width="40">
								      	@else
								      		No Thumbnail
								      	@endif
								      </td>
								      <td>{{ $category->name }}</td>
								      <!-- <td>{{ $category->slug }}</td>
								      <td>{{ $category->description }}</td> -->
								      <td>
								      	@if ($category->is_parent == 0)
								      		<span class="badge badge-info">Primary</span>
								      	@else
								      		<span class="badge badge-warning">{{ $category->parent->name }}</span>
								      	@endif
								      </td>
								      <td>
								      	@if ($category->status == 1)
								      		<span class="badge badge-success">Active</span>
								      	@else
								      		<span class="badge badge-danger">Inactive</span>
								      	@endif
								      </td>
								      <td>
								      	<div class="action-btn">
								      		<ul>
								      			<li><a href="{{ route('category.edit', $category->id) }}"><i class="fa fa-edit"></i></a></li>
								      			<li><a href="" data-toggle="modal" data-target="#deleteCategory{{ $category->id }}"><i class="fa fa-trash"></i></a></li>
								      		</ul>
								      		<!--- Delete Modal Start --->
											<div class="modal fade" id="deleteCategory{{ $category->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
											  <div class="modal-dialog" role="document">
											    <div class="modal-content">
											      <div class="modal-header">
											        <h5 class="modal-title" id="exampleModalLabel">Do you want to Delete the '{{ $category->name }}' Category?</h5>
											        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
											          <span aria-hidden="true">&times;</span>
											        </button>
											      </div>
											      <div class="modal-body">
											        <p>This '{{ $category->name }}' category will be permanently deleted from the database. If you want, you can keep the ‘status’ ’inactive’ without deleting it. So that you can turn on later. Otherwise delete permanently.</p>
											      </div>
											      <div class="modal-footer">
											      	<form action="{{ route('category.destroy', $category->id) }}" method="POST">
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

								    @foreach(App\Models\Backend\Category::orderBy('name', 'asc')->where('is_parent', $category->id)->get() as $subcat)
								    	<!-- Sub Category item Start -->
								    	<tr>
									      <th scope="row">{{ $i }}</th>
									      <td>
									      	@if ( !is_null($subcat->image))
									      		<img src="{{ asset('Backend/img/category') }}/{{ $subcat->image }}" width="40">
									      	@else
									      		No Thumbnail
									      	@endif
									      </td>
									      <td>- {{ $subcat->name }}</td>
									      <!-- <td>{{ $subcat->slug }}</td>
									      <td>{{ $subcat->description }}</td> -->
									      <td>
									      	<span class="badge badge-warning">{{ $subcat->parent->name }}</span>
									      </td>
									      <td>
									      	@if ($subcat->status == 1)
									      		<span class="badge badge-success">Active</span>
									      	@else
									      		<span class="badge badge-danger">Inactive</span>
									      	@endif
									      </td>
									      <td>
									      	<div class="action-btn">
									      		<ul>
									      			<li><a href="{{ route('category.edit', $subcat->id) }}"><i class="fa fa-edit"></i></a></li>
									      			<li><a href="" data-toggle="modal" data-target="#deleteCategory{{ $subcat->id }}"><i class="fa fa-trash"></i></a></li>
									      		</ul>
									      		<!--- Delete Modal Start --->
												<div class="modal fade" id="deleteCategory{{ $subcat->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
												  <div class="modal-dialog" role="document">
												    <div class="modal-content">
												      <div class="modal-header">
												        <h5 class="modal-title" id="exampleModalLabel">Do you want to Delete the '{{ $subcat->name }}' Sub-Category?</h5>
												        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
												          <span aria-hidden="true">&times;</span>
												        </button>
												      </div>
												      <div class="modal-body">
												        <p>This '{{ $subcat->name }}' sub-category will be permanently deleted from the database. If you want, you can keep the ‘status’ ’inactive’ without deleting it. So that you can turn on later. Otherwise delete permanently.</p>
												      </div>
												      <div class="modal-footer">
												      	<form action="{{ route('category.destroy', $subcat->id) }}" method="POST">
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
								    	<!-- Sub Category item End -->
								    @endforeach

								    @endif

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