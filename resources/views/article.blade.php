<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="/css/createCategory.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data">
        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        @csrf
        @method('POST')
    
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"><br>
    
        <label for="image">Image:</label>
        <input type="text" id="image" name="description"><br>
    
        <button type="submit" name="save" class="btn btn-primary buttonedit ml-2">Save</button>
    </form>
    
    
</body>
</html>