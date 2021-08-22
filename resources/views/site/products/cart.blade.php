@extends('layouts.site')

@section('content')

    <!-- Start Cart  -->
    <div class="cart-box-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-main table-responsive">
                        <table class="table">

                            <thead>
                            <tr>
                                <th>Images</th>
                                <th>Product Name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th>Remove</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(session()->has('success'))
                                <div class="alert alert-success"> {{ session()->get('success') }}</div>
                            @endif


                            @foreach (Cart::content() as $product)
                            <tr>

                                <td class="thumbnail-img">
                                    <a href="#">
                                        <img class="img-fluid" src="{{ $product->model->image_path }}" alt="" />
                                    </a>
                                </td>
                                <td class="name-pr">
                                    <a href="#">
                                        {{ $product->model->name }}
                                    </a>
                                </td>
                                <td class="price-pr">
                                    <p>$ {{ $product->model->price }}</p>
                                </td>
                                <td class="quantity-box"> <input type="number" class="quantity" value="{{ $product->qty }}" min="1"
                                    data-url="{{ route('web.update.cart',$product->rowId) }}" data-method="put"></td>
                                <td class="total-pr">
                                    <p>{{ $product->qty }}</p>
                                </td>
                                <td class="remove-pr">
                                    <a href="{{ route('web.destroy.cart',$product->rowId) }}">
                                        <i class="fas fa-times"></i>
                                    </a>
                                </td>

                            </tr>
                                @endforeach




                            </tbody>

                        </table>

                    </div>
                </div>
            </div>



            <div class="row my-5">
                <div class="col-lg-8 col-sm-12"></div>
                <div class="col-lg-4 col-sm-12">
                    <div class="order-box">
                        <h3>Order summary</h3>
                        <div class="d-flex">
                            <h4>Sub Total</h4>
                            <div class="ml-auto font-weight-bold">  ${{ number_format(Cart::subtotal() - session()->get('coupon')) }} </div>
                        </div>

                        <div class="d-flex">
                            <h4>Shipping Cost</h4>
                            <div class="ml-auto font-weight-bold"> Free </div>
                        </div>
                        <hr>

                        <hr>
                    </div>
                </div>
                <div class="col-12 d-flex shopping-box"><a href="#" class="ml-auto btn hvr-hover">Checkout</a> </div>
            </div>

        </div>
    </div>
    <!-- End Cart -->

@endsection
