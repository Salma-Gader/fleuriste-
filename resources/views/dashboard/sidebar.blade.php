<div class="sidebar col-auto col-md-2 col-xl-2 px-sm-2 px-0 shadow">
    <div class=" d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
        <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <span class="fs-5 d-none d-sm-inline mb-5"></span>
        </a>
        <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
            <li class="nav-item">
                <a href="{{route('landing_page')}}" class="nav-link align-middle px-0 text-dark">
                    <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                </a>
            </li>
            <hr>
            <li>
                <a href="/dashboard" data-bs-toggle="collapse" class="nav-link px-0 align-middle text-dark">
                    <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Dashboard</span> </a>
            </li>
            <hr>
            <li>
                <a href="{{route('orders.index')}}" class="nav-link px-0 align-middle text-dark">
                    <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Orders</span></a>
            </li>
            <hr>
            <li>
                <a href="{{route('getcategories')}}" data-bs-toggle="collapse" class="nav-link px-0 align-middle text-dark">
                    <i class="fs-4 bi-bootstrap"></i> <span class="ms-1 d-none d-sm-inline"><!-- Add category button -->
                        <button id="add-category-button">Add Category</button>
                        
                        <!-- Pop-up form -->
                        <div class="popup-form">
                          <form id="category-form">
                            <h2>Add Category</h2>
                            <label for="category-name">Name:</label>
                            <input type="text" id="category-name" required>
                            <label for="category-description">Description:</label>
                            <textarea id="category-description"></textarea>
                            <div class="buttons">
                              <button type="submit">Add</button>
                              <button type="button" id="cancel-button">Cancel</button>
                            </div>
                          </form>
                        </div>
                        
                        <!-- Sidebar -->
                        <ul id="sidebar">
                          <!-- Categories will be added here dynamically -->
                        </ul>
                        </span></a>
            </li>
            <hr>
            <li>
                <a href="/dashboard" class="nav-link px-0 align-middle text-dark">
                    <i class="fs-4 bi-grid"></i> <span class="ms-1 d-none d-sm-inline">Products</span> </a>
            </li>
            <hr>
            <li>
                <a href="#" class="nav-link px-0 align-middle text-dark">
                    <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Customers</span> </a>
            </li>
        </ul>
        <hr>
        
    </div>
</div>