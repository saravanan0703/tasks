<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!DOCTPE html>
<html>
<head>
<title>View Student Records</title>
</head>
<body>
<table class="table table-striped">
  <tr>
  <td>Id</td>
  <td>Name</td>
  <td>Price</td>
  <td>Action</td>
  </tr>
@foreach ($products as $product)
<tr>
  <td>{{ $product->id }}</td>
  <td>{{ $product->name }}</td>
  <td>{{ $product->price }}</td>
  <td><a href="{{ url('/products/' . $product->id . '/show') }}" class="btn btn-info btn-md">View Detail</a>
  </td>
</tr>
@endforeach
</table>
</body>
</html>