<?php

namespace App\Http\Controllers;

use File;
use Validator;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class FilmController extends Controller
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
            return view('film.index',$data);
         }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('film.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $request->file('image');
        $filename = str_random(50).".".$file->getClientOriginalExtension();
        $request['image'] = $filename;
        $validator = Validator::make($request->file(), [
			'image' => 'image|mimes:jpeg,jpg,png|max:2048'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        } else {
            $file->move('images',$filename);
        }
        
        $client = new Client([
            'base_uri' => 'http://localhost:3000',
        ]);
        
        $response = $client->request('POST','/film',[
            'form_params' => $request->input()  
        ]);

        if ($response->getStatusCode() == 200) {
            return redirect()->route('film.index');
        }
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
            return view('film.show', $data);
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
        $client = new Client([
            'base_uri' => 'http://localhost:3000',
        ]);

        $response = $client->request('GET', 'film/'.$id);
        $data['film'] = json_decode($response->getBody()->getContents());
        
        if ($response->getStatusCode() == 200) {
           return view('film.edit', $data);
        }
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
        $data = $request->except('old_image');

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = str_random(50).".".$file->getClientOriginalExtension();
            $data['image'] = $filename;
            $validator = Validator::make($request->file(), [
			    'image' => 'image|mimes:jpeg,jpg,png|max:2048'
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator->errors());
            } else {
                File::delete('images'.$request->old_image);
                $file->move('images',$filename);
            }
        }

        $client = new Client([
            'base_uri' => 'http://localhost:3000',
        ]);

        $response = $client->request('PUT','film/'.$id,[
            'form_params' => $data
        ]);
        
        if ($response->getStatusCode() == 200) {
            return redirect()->route('film.show',$id);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = new Client([
            'base_uri' => 'http://localhost:3000',
        ]);

        $response = $client->request('DELETE', 'film/'.$id);
        if ($response->getStatusCode() == 200) {
           return redirect()->route('film.index');
        }
    }
    
    public function signin(Request $request)
    {
        if ($request->username == "admin" && $request->password == "movie21") {
            return redirect()->route('film.index');
        } else {
            return redirect(url('/login'));
        }
        
    }
}
