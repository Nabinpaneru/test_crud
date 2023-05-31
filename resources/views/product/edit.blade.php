<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Laravel Crud</title>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link text-light" href="/">Products</a>
    </li>
    
  </ul>

</nav>
     @if($message = Session::get('success'))
     <div class="alert alert-success alert-block">
        <strong>{{$message}}</strong>
     </div>
     @endif
    <div class="container">
        <h1> product edit {{ $product->id}}</h1>
        <div class="row">
            <div class="col-sm-7">
                <form method="post" action="/products/{{ $product->id}}/update">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>NAME</label>
                        <input type="text" name="name" class="form-control" value="{{ old('name' ,$product->name)}}" />
                    </div>
                    <div class="form-group">
                        <label>DESCRIPTION</label>
                        <textarea type="text" name="description" class="form-control" rows="4"  placeholder="description...">{{ old('description' ,$product->description)}}</textarea>
                    </div>
                    <div class="form-group">
                        <label>IMAGE</label>
                        <input type="text" name="image" class="form-control" value="{{ old('image' ,$product->image)}}" />
                    </div>
                    <div>
                        <button type="submit" class="btn btn-dark">Submit</button>
                    </div>
                </form >
            </div>
        </div>
    </div>
    
</body>
</html>