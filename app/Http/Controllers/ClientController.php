<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::all(); // SELECT pasirenka visus irasus is lenteles Authors
        return view("client.index", ["clients"=>$clients]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("client.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $client = new Client;

        //DB stulpelio pavadinimas(name) = input laukelio vardas(client_name)
        $client->name = $request->client_name;
        $client->surname = $request->client_surname;
        $client->username = $request->client_username;
        $client->company_id = $request->client_company_id;
        $client->image_url = $request->client_image_url;

        $client->save(); // insert komada i duomenu baze

        return redirect()->route("client.index"); // redirect tas pats kas header:location
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        return view("client.show", ["client"=>$client]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        return view("client.edit", ["client"=>$client]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        //DB stulpelio pavadinimas(name) = input laukelio vardas(author_name)
        $client->name = $request->client_name;
        $client->surname = $request->client_surname;
        $client->username = $request->client_username;
        $client->company_id = $request->client_company_id;
        $client->image_url = $request->client_image_url;

        $client->save(); // atlieka update komanda

        return redirect()->route("client.index"); // redirect tas pats kas header:location
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        $client->delete();
        return redirect()->route("client.index");
    }
}
