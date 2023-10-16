<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private const FOLDER_PATH_LOCAL = 'img/stores';
    public function index(Request $request)
    {
        
        $search = $request->search;
        $stores = Store::where('name','LIKE','%'.$request->search.'%')
            ->latest('id')
            ->paginate(8);
        return view('store.index', compact('stores', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('store.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $store = Store::create([
            'name' => $request->name,
            'slug' => $request->slug,
            'description'=>$request->description,
            'location'=>$request->location,
            'nit'=>$request->nit,
            'status'=>$request->status
        ]);
        $front_page  = $request->file('front_page');
        if ($front_page) {
            $imageName = FileStorage::upload($front_page, $front_page->getClientOriginalName(), $this::FOLDER_PATH_LOCAL);
            $store->front_page = $imageName;
            $store->save();
        }
        return redirect()->route('stores.index')->with('success', 'Categoría creada con éxito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function show(Store $store)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function edit(Store $store)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Store $store)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function destroy(Store $store)
    {
        //
    }
}
