<x-app-layout>
    <x-validation-errors/>
    <div class="container-fluid d-flex flex-row">
    @include('dashboard.sidebar')

    <div class="container ">
        <h4 class="text-uppercase">Statistics</h4>
        <div class="d-flex flex-row justify-content-around">
        <div class="card" style="width: 18rem;height:12rem;">
            <div class="card-body">
              <img src="/img/categories.png" alt="" style="width: 3rem; height:3rem;" class="card-title">
              <h5 class="card-subtitle mb-2">CATEGORIES</h5>
              <p class="card-text">10</p>
            </div>
          </div>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <img src="/img/gift.png" alt="" style="width: 3rem; height:3rem;" class="card-title">
              <h6 class="card-subtitle mb-2">PRODUCTS</h6>
              <p class=" font-weight-bold">10</p>
            </div>
          </div>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <img src="/img/shopping-bag.png" alt="" style="width: 3rem; height:3rem;" class="card-title">
              <h6 class="card-subtitle mb-2">ORDERS</h6>
              <p class="card-text">10</p>
            </div>
          </div>
        </div>
        <!-- Minimal statistics section start -->




    <!-- // Minimal statistics section end -->
    </div>
    </div>

</x-app-layout>