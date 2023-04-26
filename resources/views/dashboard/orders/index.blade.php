<x-app-layout>

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
            <h1 class="col fw-bold ms-3 mt-5">ALL ORDERS</h1>  
        </div>
    
            <div class="col py-2">
              <div class="table-responsive">
                <table class="table table-hover"> 
                    <tbody>
                     @foreach ($orders as $order)
                      <tr>
                        <td>{{$order->user->name}}</td>
                        <td>{{$order->address}}</td>
                        <span class="inline-block text-truncate" style="max-width: 15px;">
                        <td >{{$order->phone}}</td>
                        <td >{{$order->status}}</td>
                        <td >{{$order->payment_method}}</td>
                        </span>

                        <td><!-- Button trigger modal -->
                            <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal" data-toggle="modal" data-target="#order-modal" data-order-id="{{ $order->id }}"
                                onclick="getOrder( {{  $order->id  }} );">
                              Launch demo modal
                            </button>                            
                            <!-- Modal -->

                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                                <div class="modal-body">

                                  <form action="{{route('orders.update',$order->id)}}" method="POST">
                                    @csrf
                                    @method('PUT')
                                          <label for="">Order Statut</label>
                                          <input type="text" name="statut" id="orderStatusInput_id">
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                          <button type="submit" class="btn btn-primary">Save changes</button>
                                        </div>
                                  </form>
                               </div>

                             </div>

                          </div>
                        </div>
                          </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
            </div>
          </div>
            </div>
            </div>
  
    </x-app-layout>
