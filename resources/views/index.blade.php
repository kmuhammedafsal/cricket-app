@extends("admintheme")
@section("content")
<style>

 .bgnew
{
background-image:url(https://images.unsplash.com/photo-1531415074968-036ba1b575da?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2067&q=80);

height:100vh;
-webkit-background-size:cover;
background-size: cover;
background-position:center center;
}
</style>



<div class="bgnew">

<div class="container">
<div class="row">
<div class="col col-12 col-sm-10 col-md-10 col-lg-10">


<form action="/playerread" method="post" enctype="multipart/form-data">
{{csrf_field()}}
<table class="table table-borderless">
<tr>
<br>
<br>
<br>
<br>
<center><h1 style="color:white"><b>PLAYER DETAILS</b></h1></center>
<br>
<br>
    <td style="color:white"><b>player name</b></td>
    <td><input type="text" class="form-control" name="pname" required></td>
</tr>
<tr>
<td style="color:white"><b>country</b></td>
<td>
    <select name="pcountry" class="form-control" required>
            @foreach($bcategory as $bcat)
            <option>{{$bcat->cname }}</option>
            @endforeach</td>
</tr>
<tr>
    <td style="color:white"><b>top score</b></td>
    <td><input type="text" class="form-control" name="ptop" required></td>
</tr>
<tr>
    <td></td>
    <td><button class="btn btn-primary">SUBMIT</button></td>
</tr>
</table>
</form>

</div>
<div class="col"></div>

</div>
</div>
</div>
</body>
@endsection