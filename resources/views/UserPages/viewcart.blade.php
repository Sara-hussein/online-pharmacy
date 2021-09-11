@extends('layouts.UserNavbar')
@section('content')
<style type="">
  body{
      background:url(bg_1.jpg  )no-repeat ;
      background-size: cover;
}
table {

    font-family: Helvetica, Arial, sans-serif; /* Nicer font */
    width: 640px;
    padding:50px;
    margin: 150px;
     box-shadow:0 8px 15px 0 rgba(0,0,0,.24),0 17px 50px 0 rgba(0,0,0,.19);
    margin-left:auto;margin-right:auto;
    border-radius:20px;
}

td, th {  height: 30px; } /* Make cells a bit taller */

th {
    text-align: center;
    font-weight: bold; /* Make sure they're bold */
}

td {

    text-align: center; /* Center our text */
}

.button{
     width: 80px;
    height: 40px;
    background: #3498db;
    border-radius: 10px;
    margin:14px auto;
    display: block;
    font-family: "montsterrat",sans-serif;
    font-size: 16px;
    border: none;
    color: white;
   }
</style>
<table>
<tr>


    <th>PRODUC_TNAME</th>
    <th>PRICE</th>
    <th>DELETE</th>
</tr>

<tr>
    @foreach($Cart as $prod)
    <td>{{$prod->Prod_Name}}</td>
    <td>{{$prod->Prod_Price}}</td>
    <td> <img  height="150" width="150" src ="{{asset('product/'.$prod->Prod_img)}}" /></td>
    <td><a href="/delete/{{$prod->id}}"><button class="button">DELETE</button></a></td>
    <td></td>
</tr>
 @endforeach

</table>
@endsection
