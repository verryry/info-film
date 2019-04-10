<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client = new Client([
            'base_uri' => 'http://localhost:3000',
        ]);

        $response = $client->request('GET', 'film');
        $data['films'] = json_decode($response->getBody()->getContents());
        
         if ($response->getStatusCode() == 200) {
            return view('home.index',$data);
         }
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $client = new Client([
            'base_uri' => 'http://localhost:3000',
        ]);

        $response = $client->request('GET', 'film/'.$id);
        $data['film'] = json_decode($response->getBody()->getContents());

        if ($response->getStatusCode() == 200) {
            return view('home.show', $data);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
    public function daftar()
    {
        $client = new Client([
            'base_uri' => 'http://localhost:3000',
        ]);

        $response = $client->request('GET', 'film');
        $data['films'] = json_decode($response->getBody()->getContents());
        
         if ($response->getStatusCode() == 200) {
            return view('home.daftar',$data);
         }
    }
}
