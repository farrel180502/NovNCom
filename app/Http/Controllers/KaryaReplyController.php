<?php

namespace App\Http\Controllers;

use App\Models\karya_reply;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KaryaReplyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $comment = karya_reply::create([
            'user_id' => Auth::user()->id,
            'description' => $request->content,
        ]);
        return view("partials.comment", compact("comment"));
    }

    /**
     * Display the specified resource.
     */
    public function show(karya_reply $karya_reply)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(karya_reply $karya_reply)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, karya_reply $karya_reply)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(karya_reply $karya_reply)
    {
        //
    }
}
