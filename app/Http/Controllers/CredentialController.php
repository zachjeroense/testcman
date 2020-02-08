<?php

namespace App\Http\Controllers;

use App\Credential;
use Illuminate\Http\Request;

class CredentialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $credentials = Credential::all();

        return view('credentials.index', compact('credentials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $credential = new Credential();

        return view('credentials.create', compact('credential'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Credential::create($this->validateRequest());

        return redirect('credentials');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Credential  $credential
     * @return \Illuminate\Http\Response
     */
    public function show(Credential $credential)
    {
        return view('credentials.show', compact('credential'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Credential  $credential
     * @return \Illuminate\Http\Response
     */
    public function edit(Credential $credential)
    {
        return view('credentials.edit', compact('credential'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Credential  $credential
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Credential $credential)
    {
        $credential->update($this->validateRequest());

        return redirect('credentials');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Credential  $credential
     * @return \Illuminate\Http\Response
     */
    public function destroy(Credential $credential)
    {
        $credential->delete();

        return redirect('credentials');
    }

    public function validateRequest()
    {
        return request()->validate([
            'description'   => 'required',
            'loginName'     => 'required',
            'loginPassword' => 'required',
        ]);
    }
}
