@extends('frontend.layout.account')

@section ('body')
<div class="breadcrumb">
   <div class="container">
      <div class="breadcrumb-inner">
         <ul class="list-inline list-unstyled">
            <li><a href="#">Home</a></li>
            <li class='active'>Shopping Cart</li>
         </ul>
      </div>
      <!-- /.breadcrumb-inner -->
   </div>
   <!-- /.container -->
</div>

<div class="body-content outer-top-xs">
   <div class="container">

      <div class="row ">
         <div class="shopping-cart checkout-page">
            <div class="col-md-12">
               <h3>Checkout</h3>
            </div>

         <div class="row">

            <div class="col-md-8">
            </div>

            <div class="col-md-4">
               <table class="table table-striped table-bordered">
                 <thead>
                   <tr>
                     <th scope="col">Image</th>
                     <th scope="col">Product Name</th>
                     <th scope="col">Price</th>
                   </tr>
                 </thead>
                 <tbody>

                  @foreach( App\Models\Frontend\Cart::totalCarts() as $item)
                   <tr>
                     <td class="checkout-page-table">
                        @if(!is_null( $item->product->image ))
                           <img src="{{ asset('Backend/img/product/' . $item->product->image) }}" alt="" width="50">
                        @else
                           No Image found.
                        @endif
                     </td>
                     <td>{{ $item->product->title }}</td>
                     <td>
                        @if(!is_null($item->product->offer_price))
                           ৳ {{ $item->product->offer_price }} BDT
                        @else
                           ৳ {{ $item->product->regular_price }} BDT
                        @endif
                     </td>
                   </tr>
                   @endforeach
                 </tbody>
               </table>

               <table class="table table-striped table-bordered">
                <tbody>
                   <tr>
                     <th>Sub Total</th>
                     <td> ৳ {{ App\Models\Frontend\Cart::totalPrice() }} BDT </td>
                  </tr>
                  <tr>
                     <th>Final Amount</th>
                     <td> ৳ {{ App\Models\Frontend\Cart::totalPrice() }} BDT </td>
                  </tr>
                 </tbody>
               </table>

               <div class="payment-option">
                  <h4>Please Select The Payment Method</h4>

                  @foreach(App\Models\Backend\payment::orderBy('priority', 'asc')->get() as $geteway)
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="{{ $geteway->slug }}" value="option{{ $geteway->id }}" checked>
                    <label class="form-check-label" for="{{ $geteway->slug }}">
                      {{ $geteway->name }}
                    </label>
                  </div>

                  @if($geteway->slug == 'bkash')
                     <div class="geteway-option {{ $geteway->slug }} hidden">
                        <h5>Please Send Money To This <strong>{{ $geteway->number }}</strong> And Insert Transaction Number Below</h5>
                        <div class="form-group">
                           <input type="text" name="transaction_id" class="form-control" placeholder="Transaction ID">
                        </div>
                     </div>
                  @elseif($geteway->slug == 'rocket')
                     <div class="geteway-option {{ $geteway->slug }} hidden">
                        <h5>Please Send Money To This <strong>{{ $geteway->number }}</strong> And Insert Transaction Number Below</h5>
                        <div class="form-group">
                           <input type="text" name="transaction_id" class="form-control" placeholder="Transaction ID">
                        </div>
                     </div>
                  @elseif($geteway->slug == 'nagad')
                     <div class="geteway-option {{ $geteway->slug }} hidden">
                        <h5>Please Send Money To This <strong>{{ $geteway->number }}</strong> And Insert Transaction Number Below</h5>
                        <div class="form-group">
                           <input type="text" name="transaction_id" class="form-control" placeholder="Transaction ID">
                        </div>
                     </div>
                  @else
                     <div class="geteway-option {{ $geteway->slug }} hidden">
                        <h5>Please Proceed the Order, Once you reveive the Products, you have to pay the amount to the delivery man.</h5>
                     </div>
                  @endif

                  @endforeach

                <!--   <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                    <label class="form-check-label" for="exampleRadios2">
                      Second default radio
                    </label>
                  </div> -->

               </div>
            </div>
         </div>
         </div>
      </div>

   </div>
</div>

@endsection