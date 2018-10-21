<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateUser;

class UserController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('users.auth.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param
     * @return \Illuminate\Http\Response
     */
    public function edit($uuid)
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
    public function update(UpdateUser $request, $uuid)
    {
        $data = [
            'name' => $request->name,
            'password' => bcrypt($request->password),
            'username' => $request->username,
            'bio' => $request->bio,
            'linkedin' => $request->linkedin,
            'facebook' => $request->facebook,
            'instagram' => $request->instagram,
            'medium' => $request->medium,
            'display_mail' => $request->display_mail,
            'activated' => true
        ];
        
        $user = auth()->user();

        $updated = $user->update($data);

        if (isset($request['avatar'])) {
            $image = $user->addMediaFromRequest('avatar')->toMediaCollection('avatars');
            
            dump($user->getFirstMediaUrl('avatars', 'thumb'));
            dump($user->getMedia('avatars'));
        }

        return redirect()->route('dashboard');
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

    public function info()
    {
        $user = auth()->user();
        return view('users.auth.info', ['user' => $user]);
    }
}
