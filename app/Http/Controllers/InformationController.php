<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Profile;
use App\Models\Information;
use App\Models\User;

class InformationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user_id = Auth::user()->id;
        $informations = Information::where('id_user', $user_id)->get();
        return view('informations/index')->with('informations', $informations);
    }

    public function create()
    {
    $user = Auth::user();
    if ($user) {
        $user_id = $user->id;
        $user_id = Auth::user()->id;
        return view('Informations/create')->with('user_id', $user_id);
    } else {
        return redirect()->route('login');
    }  
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Information::create($input);
        return redirect('/')->with('flash_message', 'information Added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $information = information::find($id);
        return view('informations/show')->with('informations', $information);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $information = information::find($id);
        return view('informations/edit')->with('informations', $information);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $information = information::find($id);
        $input = $request->all();
        $Informatio->update($input);
        return redirect('/Information')->with('flash_message', 'Senha atualizada!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Information::destroy($id);
        return redirect('/Information')->with('flash_message', 'Aplicação Deletada!');
    }
}
