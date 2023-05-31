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
     
    <div class="container">
        <div class="text-right">
            <a href="product/create" class="btn btn-dark mt-2" > New Product </a>  
        </div>
        <h1>product</h1>
    </div>
    <div class="container">
    <table class="table table-hover">
    <thead>
      <tr>
        <th>Sno.</th>
        <th>Name</th>
        <th>Description</th>
        <th>image</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($products as $product )
      <tr>
        <td>{{ $loop->index +1 }}</td>
        <td>{{ $product->name }}</td>
        <td>{{ $product->description }}</td>
        <td>{{ $product->image }}</td>
        <td>
          <a href="products/{{ $product-> id }}/edit" class="btn btn-dark btn-sm ">edit</a>
          <a href="products/{{ $product-> id }}/delete" class="btn btn-danger btn-sm ">delete</a>
        </td>
      </tr>
      @endforeach
      
    </tbody>
  </table>
    </div>
    
</body>
</html>