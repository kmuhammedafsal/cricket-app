@extends("admintheme")
@section("content")
<section style="background-color:black;" >

<div class="container">

<div class="row">

<div class="col col-12 col-sm-12 col-md-12 col-lg-12" >
<br>
<br>
<br>
<br>
<br>


<form class="d-flex" method="post" action="/playersearch" >
    
      {{csrf_field() }}
<input class="form-control me-2" type="search" placeholder="Search " aria-label="Search" name="search"  >
        <button class="btn btn-primary" type="submit">Search</button>
      </form>
      <br>
    <br>

<table class="table table table-dark" >
<tr><th scope="row">player name</th>
    <th scope="row">country</th>
    <th scope="row">top score</th>
    
   
    </tr>
    
@foreach($players as $player)

<tr class="table-primary">
   
    <td>{{$player->pname}}</td>
    <td>{{$player->pcountry}}</td>
    <td>{{$player->ptop}}</td>
    
</tr>

@endforeach
</table>
<center> <td><a href="/sort"><button class="btn btn-primary">Top score</button></a></td></center>
{!!$players->links();!!}
</div>
</div>
</div>
</section>
@endsection


