@extends('layouts.AdminNavbar')

@section('content')
<title>Add/Delete medicine</title>
<style type="text/css">
    body{
        background-image: url(3.jpg);
        
        background-size: cover;
        background-position: center center;
        background-attachment: fixed;
    }
    
    #ui label,h1{
        color: #fff;
    }
    </style>
     <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <div id="ui">
<form action="/AdminPages.delete" method="Post" enctype="multipart/form-data">
    {{csrf_field()}}
    
    <div class="row">
        <div class="col-lg-6">
           <div class="form-group">
                <label for="title">Product Name</label>
                <input type="text" class="form-control" id="Product_name" name="Product_name">
       </div>
    </div>
</div>
       <div class="row">
           <div class="col-lg-6">
                <div class="form-group">
                     <label for="title">Product Price</label>
                        <input type="number" class="form-control" id="price" name="price">
       </div>
    </div>
</div>
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                 <label for="title">Product image</label>
                  <input type="file" class="form-control" id="image" name="image">
       </div>
    </div>
</div>
    <button type="submit" class="btn btn-primary">submit</button>
</form>
@endsection
