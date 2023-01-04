<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Desktop Decision Support System</title>



  @extends('layouts\app')


  @section('content')
  <style>


.container {
  max-width: 960px;
}

.pricing-header {
  max-width: 700px;
}

.col {
  margin-left: 175px;
  margin-bottom: 50px;

}

  </style>


    <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
      <h1 class="display-4 fw-normal">Budget Targeting System</h1>
      <p class="fs-5 text-muted"></p>
    </div>
  </header>

  <main>
    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Low Budget Range</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">RM 1500<small class="text-muted fw-light"> approximately</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>AMD 3000 Series Processor</li>
              <li>1TB HDD Storage</li>
              <li>8GB RAM</li>
              <li>Nvidia GT 1030</li>
            </ul>
            <a href = "/lowBudget"><button type="button"  class="w-100 btn btn-lg btn-primary">More details</button></a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Medium Budget Range</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">RM 3000<small class="text-muted fw-light"> approximately</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Intel i5 10th Gen Processor</li>
              <li>250GB SSD + 1TB HDD Storage</li>
              <li>16GB RAM</li>
              <li>Nvidia RTX 3060</li>
            </ul>
            <a href = "/mediumBudget"><button type="button"  class="w-100 btn btn-lg btn-primary">More details</button></a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Medium-High Range Budget</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">RM 4500<small class="text-muted fw-light"> approximately</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>AMD 5000 Series Processor</li>
              <li>500GB SSD + 1TB HDD Storage</li>
              <li>16GB RAM</li>
              <li>Nvidia RTX 3070</li>
            </ul>
            <a href = "/mediumHighBudget"><button type="button"  class="w-100 btn btn-lg btn-primary">More details</button></a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">High Range Budget</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">RM 6000<small class="text-muted fw-light"> approximately</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Intel i7 10th Gen Processor</li>
              <li>500GB SSD + 1TB HDD Storage</li>
              <li>32GB RAM</li>
              <li>Nvidia RTX 3070</li>
            </ul>
            <a href = "/highBudget"><button type="button"  class="w-100 btn btn-lg btn-primary">More details</button></a>
          </div>
        </div>
      </div>
    </div>

    


  <!-- FOOTER -->
  <footer class="container">
    <p>&copy; 2022 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
  </footer>
</main>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>

@endsection
