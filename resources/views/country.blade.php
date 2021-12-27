@extends("admintheme")
@section("content")
<style>

 .bgnew
{
background-image:linear-gradient(rgba(0,0,0,0.9),rgba(0,0,0,0.9)),url(https://images.unsplash.com/photo-1618221941443-9ca819da798c?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=889&q=80);

height:100vh;
-webkit-background-size:cover;
background-size: cover;
background-position:center center;
}
</style>



<div class="bgnew">

<div class="container">
<div class="row">
<div class="col col-12 col-sm-6 col-md-6 col-lg-6">
<br>
<br>
<br>
<table class="table table table-dark">
<tr>
    <th scope="row">country</th>
    <th></th><th></th>
   </tr>
    
@foreach($countrys as $country)

<tr class="table-primary">
    <td>{{$country->cname}}</td>   
</tr>

@endforeach
</table>
</div>

<div class="col col-12 col-sm-6 col-md-6 col-lg-6">

<form action="/countryread" method="post">
{{csrf_field()}}
<table class="table table-borderless">
<tr>
<br>
<br>
<br>
<br>
<center><h1 style="color:white"><b>ADD COUNTRY</b></h1></center>

<td style="color:white"><b>COUNTRY NAME</b></td>
    <td><input type="text" name="cname" class="form-control"></td>
</tr>
<br>
<br>
<tr>
    <td>
   <center> <td><button class="btn btn-success">Insert</button></a></td></center>
   </td>
</tr>
</table>

</form>
</div>

</div>
</div>
</div>
@endsection