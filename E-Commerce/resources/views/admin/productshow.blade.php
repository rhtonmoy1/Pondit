<x-master>

    <div class="row my-5">
        <h3 class="fs-4 mb-3">Product Details</h3>
        <div class="col-md-6">
            <h5>Product Name : {{ $products->product_name }}</h5>
            <p>Product Price : {{ $products->product_price }}</p>
            <p>Product Details : {{ $products->product_details }}</p>
            <p>Product Color : {{ $products->product_color }}</p>
            <p>Product Size : {{ $products->product_size }}</p>


        </div>
        <div class="col-md-6">
            <img src="{{ asset('assets/image/'.$products->product_picture)}}" alt="" style="width: 500px">

        </div>
    </div>
    </x-master>
