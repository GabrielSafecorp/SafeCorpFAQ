<?php

namespace App\Http\Controllers;

use App\Module;
use App\Article;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        //Falta fazer metodo Popular
        //$populares = Article::take(5)->orderByDesc('CAMPO')get();

        $populares = Article::take(5)->get();
        $novos = Article::take(5)->latest()->get();
        $modules =  Module::all();       

       return view('welcome', compact(['populares', 'novos', 'modules']));
    }

    public function index()
    {
        $modules =  Module::all();       
        //$articles =  Article::where('modules_id', '=', $module->id)->take(5)->get();      
        $articles =  Article::all();

        return view('modules.index', compact(['articles', 'modules']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('modules.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function show(Module $module)
    {
        
        $modules =  Module::all();       
        $count =   Module::all()->Count();       
        $articles =  Article::all(); 

        //articlesMenu = Precisa do Metodo Popular!
        $articlesMenu =  Article::take(10)->get();      

        return view('modules.show', compact(['articles', 'modules', 'module', 'articlesMenu', 'count']));
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function edit(Module $module)
    {
        return view('modules.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Module $module)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function destroy(Module $module)
    {
        //
    }
}
