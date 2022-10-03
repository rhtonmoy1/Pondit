<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>
    @include('frontend.layout.header')

    <div class="container my-5" style="width:900px ;" >
        <div class="row">
            <div class="col-md">
                <h2 class="text-center">Our history</h2>
                <p>
                Take the visitors on your website to a trip down memory lane, and give them an insight to the history behind your store. Here, you can show them where, how, and when you started, and everything your business has accomplished on the way. This is your chance to share your relevant milestones and achievements relating to your business in an engaging way.
                You can even choose to present your history to your viewers in the form of a timeline, which allows you to display a large amount of information in a visually engaging manner. Your customers or potential customers might be interested in seeing how you grew over the years.
                </p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body text-center">
                    <h3 class="card-title">Our Mission</h3>
                <p>
                    
                    Long gone are the days when it used to cost arm and leg to launch your own ecommerce store. These days you can find plenty of very affordable (or even free) online store builders. However, there are obviously big differences in the quality between the cheapest ecommerce store builders. On this page we list what we consider for most companies/people to be the best free or cheap ecommerce
                </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body text-center">
                    <h3 class="card-title">Our goal</h3>
                <p>
                    
                    Long gone are the days when it used to cost arm and leg to launch your own ecommerce store. These days you can find plenty of very affordable (or even free) online store builders. However, there are obviously big differences in the quality between the cheapest ecommerce store builders. On this page we list what we consider for most companies/people to be the best free or cheap ecommerce
                </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body text-center">
                    <h3 class="card-title">Our Vision</h3>
                <p>
                    
                    Long gone are the days when it used to cost arm and leg to launch your own ecommerce store. These days you can find plenty of very affordable (or even free) online store builders. However, there are obviously big differences in the quality between the cheapest ecommerce store builders. On this page we list what we consider for most companies/people to be the best free or cheap ecommerce
                </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('frontend.layout.footer')
</body>
</html>