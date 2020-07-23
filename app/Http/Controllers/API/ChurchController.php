<?php

namespace App\Http\Controllers\API;

use App\ChurchService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ChurchController extends Controller
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

        Log::warning($request);
        $churchService = new ChurchService;
        $churchService->name = $request->name;
        $churchService->phone = $request->name;
        $churchService->gender =
            $request->gender;
        $churchService->location =
            $request->location;
        $churchService->yob
            = $request->yob;
        $churchService->seatnumber
            = $request->seatnumber;

        $churchService->save();
        // Log::warning($request);
        return array("message" => 'success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ChurchService  $churchService
     * @return \Illuminate\Http\Response
     */
    public function show(ChurchService $churchService)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ChurchService  $churchService
     * @return \Illuminate\Http\Response
     */
    public function edit(ChurchService $churchService)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ChurchService  $churchService
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ChurchService $churchService)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ChurchService  $churchService
     * @return \Illuminate\Http\Response
     */
    public function destroy(ChurchService $churchService)
    {
        //
    }
}
