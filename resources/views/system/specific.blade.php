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
      <h1 class="display-4 fw-normal">Specific Program Targeting System</h1>
      <p></p>
      <h2>Editing Program</h2>
    </div>
  </header>

  <main>
    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Adobe Photoshop</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">Specifications<small class="text-muted fw-light"></small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Intel i5 10th Gen Processor</li>
              <li>250GB SSD + 1TB HDD</li>
              <li>16GB RAM</li>
              <li>Nvidia GTX 1660</li>
            </ul>
            <a href = "/adobe"><button type="button"  class="w-100 btn btn-lg btn-primary">More details</button></a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Adobe Premiere Pro</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">Specifications<small class="text-muted fw-light"></small></h1>
            <ul class="list-unstyled mt-3 mb-4">
            <li>Intel i5 10th Gen Processor</li>
              <li>250GB SSD + 1TB HDD Storage</li>
              <li>16GB RAM</li>
              <li>Nvidia RTX 3060</li>
            </ul>
            <a href = "/adobePremiere"><button type="button"  class="w-100 btn btn-lg btn-primary">More details</button></a>
          </div>
        </div>
      </div>

      <p></p>
        <h2>Games</h2>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">VALORANT</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">Specifications<small class="text-muted fw-light"></small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>AMD 3000 Series Processor</li>
              <li>500GB SSD</li>
              <li>16GB RAM</li>
              <li>Nvidia GTX 1660 Super</li>
            </ul>
            <a href = "/valo"><button type="button"  class="w-100 btn btn-lg btn-primary">More details</button></a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Forza Horizon 5</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">Specifications<small class="text-muted fw-light"></small></h1>
            <ul class="list-unstyled mt-3 mb-4">
            <li>Intel i7 10th Gen Processor</li>
              <li>500GB SSD + 1TB HDD Storage</li>
              <li>32GB RAM</li>
              <li>Nvidia RTX 3070</li>
            </ul>
            <a href = "/forza"><button type="button"  class="w-100 btn btn-lg btn-primary">More details</button></a>
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
