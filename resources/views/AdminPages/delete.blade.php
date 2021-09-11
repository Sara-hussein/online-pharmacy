   @extends('layouts.AdminNavbar')
@section('content')
<head><head>
    <link href="delete.css" rel="stylesheet">

</head>
  </head>

<title>Add/Delete medicine</title>

  
  <body>     
  <table class="blueTable">
<thead>
<tr>

<th>Product_name</th>
<th>price</th>

<th>DELETE_BUTTON</th>
</tr>
</thead>

<tbody>
	@foreach($products as $prod)
	<tr>
	<th>{{$prod->Product_name}}</th>
     <th>{{$prod->price}}</th>
     
     <td><a href="/deleteproduct/{{$prod->id}}"><button>delete</button></a></td>

   </tr>
   @endforeach
</tbody>
</table>
</div>

</body>
</html>
@endsection