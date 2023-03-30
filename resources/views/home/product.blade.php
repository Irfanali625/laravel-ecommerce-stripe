<section class="product_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                Our <span>products</span>
            </h2>
        </div>
        <div class="row">
            @foreach ($products as $product)
                <div class="col-sm-6 col-md-4 col-lg-4">
                    <div class="box">
                        <div class="option_container">
                            <div class="options">
                                <a href="{{ url('product_details', $product->id) }}" class="option1">
                                    Product Details
                                </a>
                                <div class="col-lg-12 mt-3 d-flex justify-content-center">
                                    <form action="{{ url('add_cart', $product->id) }}" method="post">
                                        @csrf
                                        <div class="d-flex">
                                            <div>
                                                <input type="number" name="quantity" id="quantity" min="1"
                                                    style="width: 100px; height: 50px;" required>
                                            </div>
                                            <div>
                                                <input type="submit" name="" id="" value="Add to Cart"
                                                    class="">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="img-box">
                            <img src="{{ asset('images/products') }}/{{ $product->image }}" alt="">
                        </div>
                        <div class="detail-box">
                            <h5>
                                {{ $product->title }}
                            </h5>
                            @if ($product->discount_price != null)
                                <h6 style="color: red">
                                    Discount
                                    <br>
                                    ${{ $product->discount_price }}
                                </h6>
                                <h6 style="text-decoration: line-through; color:blue">
                                    Price
                                    <br>
                                    ${{ $product->price }}
                                </h6>
                            @else
                                <h6 style="color: blue">
                                    Price
                                    <br>
                                    ${{ $product->price }}
                                </h6>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="d-flex justify-content-center my-3">
        {{ $products->links() }}
    </div>
    </div>
</section>
