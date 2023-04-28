<x-app-layout>
    <x-validation-errors/>
    <div class="container-fluid ">
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
            <h4 class="col  ms-5 mt-5 text-uppercase produt">Your products</h4>  
            <button class="col-4 me-3 mt-5 btn btn-dark w-auto" href="" data-bs-toggle="modal"><a href="{{ route('products.create') }}"><b>+ </b> Add products</a></button>
        </div>
    
            <div class="col py-2">
              <div class="table-responsive" style="margin-left:5rem;">
                {{-- <table  class="table table-hover table-striped" style="width:100%"> 
                  <thead>
                    <tr>
                      <th>image</th>
                      <th>Name</th>
                      <th>Description</th>
                      <th>price</th>
                      <th>quantity</th>
                    </tr>
                  </thead>
                    <tbody>
                    @foreach($products as $product)
                      <tr>
                        <td><img style="height: 8rem; width: 10rem !important;" src="/products/{{$product->image}}" class="card-img-top"   height="30"></td>
                        <td>{{$product->name}}</td>
                        <span class="inline-block text-truncate" style="max-width: 15px;">
                        <td class="inline-block text-truncate" style="max-width: 15px;">{{$product->description}}</td>

                        </span>
                        <td >${{$product->price}}</td>
                        <td >{{$product->quantity}}</td>
                        <form action="{{route('deleteproducts',$product->id) }}" method="Post">
                        <td><button href="/products/{product}"><i class="bi bi-trash"></i></button></td>
                        @csrf
                        @method('DELETE')
                        <td><a href="{{ route('dashboard.products.edit',$product->id) }}" class="show-btn">edit</a></td>
                      </form>
                      </tr>
                      @endforeach
                    </tbody>
                  </table> --}}
                  <table id="example" class="table table-striped " style="width:90%;justify-content: center;">
                    <thead>
                     
                        <tr>
                            <th>image</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Delete</th>
                            <th>Edit</th>
                        </tr>
                       
                    </thead>
                    <tbody>
                      @foreach($products as $product)
                        <tr>
                            <td><img style="height: 8rem; width: 10rem !important;" src="/products/{{$product->image}}" class="card-img-top"   height="30"></td>
                            <td>{{$product->name}}</td>
                            <td class="inline-block text-truncate" style="max-width: 15px;">{{$product->description}}</td>
                            <td>{{$product->quantity}}</td>
                           
                            <td>${{$product->price}}</td>
                            <form action="{{route('deleteproducts',$product->id) }}" method="Post">
                              <td><button href="/products/{product}"><i class="bi bi-trash" style="color: #DE5A4E"></i></button></td>
                              
                              @csrf
                              @method('DELETE')
                              <td><a href="{{ route('dashboard.products.edit',$product->id) }}" class="show-btn"><i class="bi bi-pencil-square" style="color: #46CC6B"></i></a></td>
                            </form>
                        </tr>
                        @endforeach
  
                </table>
            </div>
          </div>
            </div>
            </div>
            </div>
            @include('sweetalert::alert')
    </x-app-layout>
