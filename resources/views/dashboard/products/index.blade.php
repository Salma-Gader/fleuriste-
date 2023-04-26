<x-app-layout>
    <x-validation-errors/>
    <div class="container-fluid">
        <div class="row">
          @include('dashboard.sidebar')
          <div class="col-10 col-md-9 col-lg-10 py-2">
        <div class="container">
            <!-- Minimal statistics section start -->
        <div class="row ">
            <div class="col-12 mt-3 mb-1">
            <h4 class="text-uppercase">Statistics</h4>
            </div>
        
        <div class="d-flex flex-row justify-content-around">
            <div class="card" style="width: 18rem;height:12rem;">
                <div class="card-body">
                  <img src="/img/categories.png" alt="" style="width: 3rem; height:3rem;" class="card-title">
                  <h5 class="card-subtitle mb-2">CATEGORIES</h5>
                  <p class="card-text">{{$CategorytCount}}</p>
                </div>
              </div>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <img src="/img/gift.png" alt="" style="width: 3rem; height:3rem;" class="card-title">
                  <h6 class="card-subtitle mb-2">PRODUCTS</h6>
                  <p class=" font-weight-bold">{{$ProductCount}}</p>
                </div>
              </div>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <img src="/img/shopping-bag.png" alt="" style="width: 3rem; height:3rem;" class="card-title">
                  <h6 class="card-subtitle mb-2">ORDERS</h6>
                  <p class="card-text">{{$OrderCount}}</p>
                </div>
              </div>
            </div>
        </div>
        <!-- // Minimal statistics section end -->
        </div>
        {{-- all products --}}



        <div class="row items-center me-0">
            <h1 class="col fw-bold ms-3 mt-5">Your products</h1>  
            <button class="col-4 me-3 mt-5 btn btn-dark w-auto" href="" data-bs-toggle="modal"><a href="{{ route('products.create') }}"><b>+ </b> Add products</a></button>
        </div>
    
            <div class="col py-2">
              <div class="table-responsive">
                <table class="table table-hover"> 
                    <tbody>
                    @foreach($products as $product)
                      <tr>
                        <td><img style="height: 8rem; width: 10rem !important;" src="/products/{{$product->image}}" class="card-img-top"   height="30"></td>
                        <td>{{$product->name}}</td>
                        <span class="inline-block text-truncate" style="max-width: 15px;">
                        <td >{{$product->description}}</td>
                        <td >${{$product->price}}</td>
                        <td >{{$product->quantity}}</td>
                        </span>
                        <form action="{{route('deleteproducts',$product->id) }}" method="Post">
                        <td><button href="/products/{product}"><i class="bi bi-trash"></i></button></td>
                        @csrf
                        @method('DELETE')
                        <td><a href="{{ route('dashboard.products.edit',$product->id) }}" class="show-btn">edit</a></td>
                      </form>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
            </div>
          </div>
            </div>
            </div>
    </x-app-layout>
