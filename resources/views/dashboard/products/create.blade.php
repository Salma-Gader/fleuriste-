
<x-app-layout>
  <x-validation-errors/>
  <div class="row">
  @include('dashboard.sidebar')
  <div class="col-10 col-md-9 col-lg-10 py-2">
  <form action="{{ route('products.store')}}" method="POST" enctype="multipart/form-data">  
    @csrf
    {{-- @method('POST       ') --}}
        <div>
          <label for="name">Product Name:</label>
          <input type="text" id="name" name="name" required>
        </div>
        
        <div>
          <label for="price">Price:</label>
          <input type="number" id="price" name="price" min="0" step="0.01" required>
        </div>
        <div>
          <label for="price">quantity:</label>
          <input type="number" id="quantity" name="quantity" min="0" step="0.01" required>
        </div>
        
        <div>
          <label for="category">Category:</label>
          <select id="category" name="category_id" required>
            <option value="">Select Category</option>
            @foreach($categories as $selectCategory)
            <option value="{{ $selectCategory->id }}"> {{$selectCategory->name}}</option>
            @endforeach

      
          </select>
        </div>
        <div>
          <label for="description">Description:</label>
          <textarea id="description" name="description" required></textarea>
        </div>
        <div>
          <label for="image">Product Image:</label>
          <input type="file" id="image" name="image" accept="image/*" required>
        </div>
        
        <button type="submit" name="save" class="btn btn-primary buttonedit ml-2">Save</button>
      </form>
    </div>
  </div>
    </x-app-layout>