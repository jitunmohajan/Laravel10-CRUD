<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
        <title>Laravel CRUD</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-sm bg-dark">
            <!-- Links -->
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link text-light" href="/">Products</a>
              </li>
              
            </ul>
        </nav>

        <div class="container">
            <div class="text-right">
                <a href="products/create" class="btn btn-dark mt-2">New Product</a>
            </div>

            <table class="table table-hover mt-2">
                <thead>
                  <tr>
                    <th>Sno.</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td>{{ $loop->index+1 }}</td>
                            <td>{{ $product->name }}</td>
                            <td>
                                <img src="products/{{ $product->image }}" class="rounded-circle" width="50" height="50">
                            </td>
                            <td>
                                <a href="products/{{ $product->id }}/edit" class="btn btn-dark btn-small">Edit</a>
                                {{-- <a href="products/{{ $product->id }}/delete" class="btn btn-danger btn-small">Delete</a> --}}
                                <form method="POST" action="products/{{ $product->id }}/delete" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-small">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </body>
</html>
