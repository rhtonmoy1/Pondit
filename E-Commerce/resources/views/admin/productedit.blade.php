<x-master>

<div class="row my-5">
    <h3 class="fs-4 mb-3">Edit Product</h3>
    <div class="col">



    <form action="{{ route('productlist.update', $products->id)}}" method="post">
        @csrf
        @method('patch')
            <div class="mb-3">
                <label for="name" class="form-label">Product Name</label>
                <input type="text"  name="product_name" class="form-control" id="name" value="{{ $products->product_name }}" aria-describedby="emailHelp">

            </div>
            <div class="mb-3">
                <label for="price"  class="form-label">Product Price</label>
                <input type="number" name="product_price" class="form-control" id="price" value="{{ $products->product_price }}" aria-describedby="emailHelp">

            </div>
            <div class="mb-3">
                <label for="details"  class="form-label">Product Details</label>
                <input type="text" name="product_details" class="form-control" id="details" value="{{ $products->product_details }}" aria-describedby="emailHelp">

            </div>
            <div class="mb-3">
                <label for="picture"  class="form-label">Product Picture</label>
                <input type="file" name="product_picture" class="form-control" id="picture" aria-describedby="emailHelp">

            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
    </form>



    </div>
</div>
</x-master>
