<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>

@include('frontend.layout.header')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="sass/style.css">
    <title>Product Details</title>
</head>
<body>

    <!-- Product Details -->
<section class="product-details">
    <div class="container ">
        <div class="row mt-3 mb-5">
            <div class="col-md-5">
                <img  src="{{ asset('assets/image/'.$products->product_picture)}}" width="100%" id="largeImg" alt="">
                <div class="row mt-2 small">
                    <div class="col-md-3 sm">
                        <img class="small-img " src="{{ asset('assets/image/bag1.jpg') }}" alt="">
                    </div>
                    <div class="col-md-3 sm">
                        <img class="small-img" src="{{ asset('assets/image/bag2.jpg') }}" alt="">
                    </div>
                    <div class="col-md-3 sm">
                        <img class="small-img" src="{{ asset('assets/image/bag3.jpg') }}" alt="">
                    </div>
                    <div class="col-md-3 sm">
                        <img class="small-img" src="{{ asset('assets/image/bag4.jpg') }}" alt="">
                    </div>
                </div>

            </div>
            <div class="col-md-7 mt-4">
                <h1>{{ $products->product_name }}</h1>
                <h4>{{ $products->product_price }} Tk</h4>
                  <select name="" id="">
                    <option value="">Size</option>
                    <option value="">XL</option>
                    <option value="">L</option>
                    <option value="">M</option>
                    <option value="">SM</option>
                  </select>
                  <input type="number" value="1">
                  <a href="" class="btn">Buy Now</a>
                  <h3>Product Details</h3>
                  <p>{{ $products->product_details}}</p>

            </div>
        </div>
    </div>
</section>
  <!-- Related Product -->
  <!-- <section class="featured-product mb-2">
    <div class="container">
      <div class="featured-product-title text-center mt-5 mb-5">
        <h2>Related Product</h2>
      </div>
     <div class="product responsive d-flex">
      <div class="card mb-2">

        <img class="p-img card-img-top " src="image/fashion1.jpg" alt="">

        <div class="card-body text-center">

          <h4>Perfume</h4>
          <a href="product-details.html" class="buy-btn btn">Buy Now</a>
        </div>
      </div>
      <div class="card">
        <img class="p-img card-img-top" src="image/fashion2.jpg" alt="">
        <div class="card-body text-center">

          <h4>Perfume</h4>
          <a href="" class="buy-btn btn">Buy Now</a>
        </div>
      </div>
      <div class="card">

        <img class="p-img card-img-top" src="image/fashion3.jpg" alt="">

        <div class="card-body text-center">

          <h4>Perfume</h4>
          <a href="" class="buy-btn btn">Buy Now</a>
        </div>
      </div>
      <div class="card">
        <img class="p-img card-img-top" src="image/fashion4.jpg" alt="">
        <div class="card-body text-center">

          <h4>Perfume</h4>
          <a href="" class="buy-btn btn">Buy Now</a>
        </div>
      </div>



    </div>
    </div>

  </section> -->
  <!-- Related Product End -->
 <!-- JS for product Details page -->
    <script>
        var largeImg = document.getElementById("largeImg");
        var smallImg = document.getElementsByClassName("small-img");
        smallImg[0].onclick = function()
        {
            largeImg.src = smallImg[0].src;
        }
        smallImg[1].onclick = function()
        {
            largeImg.src = smallImg[1].src;
        }
        smallImg[2].onclick = function()
        {
            largeImg.src = smallImg[2].src;
        }
        smallImg[3].onclick = function()
        {
            largeImg.src = smallImg[3].src;
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

@include('frontend.layout.footer')
</body>
</html>
