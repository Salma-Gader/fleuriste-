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
        </div>
        <div class="row">
            <div class="col-md-3 col-xl-3 col-sm-10 col-12 mb-2 p-0">
                <div class="card row">
                    <div class="text-center">
                        <i class="bi bi-list-ul"></i>
                        <h3>156</h3>
                        <p>Comments</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-xl-3 col-sm-10 col-12 mb-2 p-0">
                <div class="card row">
                    <div class="text-center">
                        <i class="bi bi-list-ul"></i>
                        <h3>156</h3>
                        <p>Comments</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-xl-3 col-sm-10 col-12 mb-2 p-0">
                <div class="card row">
                    <div class="text-center">
                        <i class="bi bi-list-ul"></i>
                        <h3>156</h3>
                        <p>Comments</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-xl-3 col-sm-10 col-12 mb-2 p-0">
                <div class="card row">
                    <div class="text-center">
                        <i class="bi bi-list-ul"></i>
                        <h3>156</h3>
                        <p>Comments</p>
                    </div>
                </div>
            </div>
                
        </div>


        <!-- // Minimal statistics section end -->
        </div>
        {{-- all products --}}

        <div class="row items-center me-0">
            <h1 class="col fw-bold ms-3 mt-5">Your Products</h1>  
            <button class="col-4 me-3 mt-5 btn btn-dark w-auto" href="" data-bs-toggle="modal"><a href="{{ url('add') }}"><b>+ </b> Add Product</a></button>
        </div>
    
            <div class="col py-2">
              <div class="table-responsive">
                <table class="table table-hover"> 
                    <tbody>
                      <tr>
                        <td><img style="height: 8rem; width: 10rem !important;" src="" class="card-img-top"   height="30"></td>
                        <td>ghjkkl</td>
                        <span class="inline-block text-truncate" style="max-width: 15px;">
                        <td >hjjkp</td>
                        </span>
                        <td>hjjop^p</td>
                        <td><a href="#" class="show-btn">show</a></td>
                      </tr>
                    </tbody>
                  </table>
            </div>
          </div>
            </div>
            </div>
</x-app-layout>
