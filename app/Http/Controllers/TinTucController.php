<?php

namespace App\Http\Controllers;

use App\Models\TinTuc;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
class TinTucController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tintucs = TinTuc::all();
        return view('tintuc/index', compact('tintucs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(TinTuc $tinTuc)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TinTuc $tinTuc)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TinTuc $tinTuc)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TinTuc $tinTuc)
    {
        //
    }
}
