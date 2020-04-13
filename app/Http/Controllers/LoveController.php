<?php

namespace App\Http\Controllers;

use App\Love;
use Illuminate\Http\Request;

class LoveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Love::store(
        //     request() -> validate([
        //   'name_1'=> ['required','max:255'],
        //   'name_2'=> ['required','max:255']
        //     ],
        //     [
        //         'name_1.required' => 'You have to choose the file!',
        //         'name_2.required' => 'You have to choose type of the file!',
        //      ]);

        Love::create(
            request()->validate([
                'name_1' => ['required','max:255'],
                'name_2' => ['required','max:255'],
            ],
            [
                'name_1.required' => 'You have to Enter Your name',
                'name_2.required' => 'You have to Enter Your Crush name'
            ]));

            return view("result");
   }

    /**
     * Display the specified resource.
     *
     * @param  \App\Love  $love
     * @return \Illuminate\Http\Response
     */
    public function show(Love $love)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Love  $love
     * @return \Illuminate\Http\Response
     */
    public function edit(Love $love)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Love  $love
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Love $love)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Love  $love
     * @return \Illuminate\Http\Response
     */
    public function destroy(Love $love)
    {
        //
    }
}
