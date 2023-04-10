
<x-app-layout>
<form>
    <div>
      <label for="name">Product Name:</label>
      <input type="text" id="name" name="name" required>
    </div>
    
    <div>
      <label for="price">Price:</label>
      <input type="number" id="price" name="price" min="0" step="0.01" required>
    </div>
    
    <div>
      <label for="category">Category:</label>
      <select id="category" name="category" required>
        <option value="">Select Category</option>
        @foreach ($categories as $category)
        <option value="{{$category->id}}">{{$category->name}}</option>  
        @endforeach
        
      </select>
    </div>
    
    <div>
      <label for="image">Product Image:</label>
      <input type="file" id="image" name="image" accept="image/*" required>
    </div>
    
    <button type="submit">Submit</button>
  </form>
</x-app-layout>