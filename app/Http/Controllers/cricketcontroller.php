<?php
namespace App\Http\Controllers;
use App\Models\countrymodell;
use Illuminate\Http\Request;
use App\Models\playermodel;

class cricketcontroller extends Controller
{
   
    public function index()
    {
        $players=playermodel::paginate(10);
        return view('playerview',compact('players')); 
    }
    public function store(Request $request)
    {
    
        $getcountryname=request('cname');
     
     
     $country=new countrymodell();
    
     $country->cname=$getcountryname;

     $country->save();
     return back();
  
    }
    public function playerstore(Request $request)
    {
    $getplayername=request('pname');
    $getcountryname=request('pcountry');
    $getplayertop=request('ptop');
     
     $player=new playermodel();
    
     $player->pname=$getplayername;
     $player->pcountry=$getcountryname;
     $player->ptop=$getplayertop;

     $player->save();
     return back();
  
    }
    public function storeg(Request $request)
    {
        $getGenre= request('cname');
        $genre=new countrymodell();
        $genre->cname=$getGenre;
        $genre->save();
        return view('index');
    }
    public function getAllGenre()
    {
        $bcategory=countrymodell::all();

        return view('index',compact('bcategory'));

    }
    
    
    public function create()
    {
        
    }
    public function createcountry()
    {
        $countrys=countrymodell::all();
        return view('country',compact('countrys'));
            
        
    }

    public function search(Request $request)
    {
        $search=$request['search']??"";
        if($search!="")
        {
            $players=playermodel::where('pname','LIKE',"%$search%")->orWhere('pcountry','LIKE',"%$search%" )->orderBy('ptop','desc')
        ->paginate(10);
        }
        else{
            $players=playermodel::paginate(10);
        }
        $players=compact('players','search');
        return view('playerview')->with($players);
    }
    public function sort()
    {
        $players=playermodel::all()->sortByDesc('ptop')->skip(0)->take(100)->values();
    
        return view('sort',compact('players'));
 
    }
    
    public function show($id)
    {
        
    }

  
    public function edit($id)
    {
       
    }

   
    public function update(Request $request, $id)
    {
       
    }

    
    public function destroy($id)
    {
        
    }
}