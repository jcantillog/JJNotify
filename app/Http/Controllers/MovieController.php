<?php

namespace JJNotify\Http\Controllers;

use Illuminate\Http\Request;
use JJNotify\Genre;
use JJNotify\Movie;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use JJNotify\Http\Requests\PeliculaRequest;
use JJNotify\Http\Requests\PeliculaUpdateRequest;

class MovieController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('admin', ['only'=>['edit','create']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movie::Movies();
        $movies = Movie::paginate(3);
        return view('pelicula.index',compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $genres = Genre::all()->pluck('genre','id');
        return view('pelicula.create',compact('genres'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PeliculaRequest $request)
    {
        Movie::create($request->all());
        Session::flash('message', 'Película registrada correctamente.');
        return Redirect::to('/pelicula');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $movie = Movie::find($id);
        Controller::notFound($movie);
        $genres = Genre::all()->pluck('genre','id');
        return view('pelicula.edit',['movie'=>$movie,'genres'=>$genres]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PeliculaUpdateRequest $request, $id)
    {
        $movie = Movie::find($id);
        $movie->fill($request->all());
        $movie->save();
        Session::flash('message','Pelicula editada correctamente');
        return Redirect::to('/pelicula');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $movie = Movie::find($id);
        $movie->delete();
        \Storage::delete($movie->path);
        Session::flash('message','Pelicula eliminada correctamente');
        return Redirect::to('/pelicula');
    }
}
