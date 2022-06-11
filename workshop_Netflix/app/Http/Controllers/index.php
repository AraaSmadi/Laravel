<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Movies;
use App\Http\Requests\StoreMoviesRequest;
use App\Http\Requests\UpdateMoviesRequest;
class index extends Controller
{
    public function showall(){
        $data = movies::all();
        return view('index' , compact('data'));
    }
        public function delete($id){
            $data = movies::find($id);
            $data->delete();
            return redirect('list');

        }

        public function showdata($id){
            $movie=Movies::find($id);
            return view('update',compact('movie'));
         }
        public function update(Request $req)
        {
            $movie = Movies::find($req->id);
            $movie->movie_name = $req->name;
            $movie->movie_description= $req->description;
            $movie->movie_gener = $req->gener;
            // $movie->movie_image= $req->img->getClientOriginalName();
             $movie->movie_imag = $req->img;
            $movie->save();
            return redirect('list');
        }
        public function show($id){
            $data=Movies::find($id);
            return view('show',compact('data'));
         }
    }

