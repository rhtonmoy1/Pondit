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

<div class="container py-5">
    <div class="text-center"><h2>contact Us</h2></div>
    <div class="row justify-content-center">
        
        <div class="col-md-8">
        
<!-- Bootstrap 5 starter form -->
<form id="contactForm">

  <!-- Name input -->
  <div class="mb-3">
    <label class="form-label" for="name">Name</label>
    <input class="form-control" id="name" type="text" placeholder="Name" />
  </div>

  <!-- Email address input -->
  <div class="mb-3">
    <label class="form-label" for="emailAddress">Email Address</label>
    <input class="form-control" id="emailAddress" type="email" placeholder="Email Address" />
  </div>

  <!-- Message input -->
  <div class="mb-3">
    <label class="form-label" for="message">Message</label>
    <textarea class="form-control" id="message" type="text" placeholder="Message" style="height: 10rem;"></textarea>
  </div>

  <!-- Form submit button -->
  <div class="d-grid">
    <button class="btn  btn-lg" type="submit">Submit</button>
  </div>

</form>

</div>
        </div>
    </div>
@include('frontend.layout.footer')
</body>
</html>