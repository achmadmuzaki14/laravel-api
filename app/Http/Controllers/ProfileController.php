<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $profile = Profile::where('user_id', Auth::user()->id);
        // dd($profile);
        $user = Auth::user()->id;
        return view('profile.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profile.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Profile::create([
            'address' => $request->address,
            'gender' => $request->gender,
            'dob' => $request->dob,
            'phone_number' => $request->phone_number,
            'user_id' => Auth::user()->id
        ]);
        
        // dd($request->all());
        return redirect()->to(route('product.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data = Profile::all()->where('user_id', Auth::user()->id)->first();
        return view('profile.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        // dd(Auth::user()->id);
        
        // dd($user);
        return view('profile.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profile $profile)
    {
        $data = [
            'address' => $request->address,
            'gender' => $request->gender,
            'dob' => $request->dob,
            'prhone_number' => $request->phone_number
        ];

        if($profile->update($data)){
            return view('product.index');
        } else{
            echo "data gagal update";
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
        //
    }
}
