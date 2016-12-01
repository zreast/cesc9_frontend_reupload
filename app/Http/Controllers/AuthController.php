<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use Socialite;
use Input;
use App\Applicant;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AuthController extends Controller
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
    public function show($id)
    {
        //
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

    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')
            ->scopes(['email'])
            ->redirect();
    }

    public function handleFacebookCallback()
    {
        try {
            $user = Socialite::driver('facebook')->user();
        } catch (Exception $e) {
            return redirect('auth/facebook');
        }

        $authUser = $this->findOrCreateUser($user);
        Auth::login($authUser, true);
        session()->put('facebookID', $user->id);
        // create blade for dashboard
        return redirect()->route('student.index');
    }

    public function get_redirect_final_target($url)
    {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_NOBODY, 1);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); // follow redirects
        curl_setopt($ch, CURLOPT_AUTOREFERER, 1); // set referer on redirect
        curl_exec($ch);
        $target = curl_getinfo($ch, CURLINFO_EFFECTIVE_URL);
        curl_close($ch);
        if ($target)
            return $target;
        return false;
    }

    private function findOrCreateUser($facebookUser)
    {
        $facebookID = $facebookUser->id;
        $authUser   = User::where('facebook', $facebookID)->first();
 
        if ($authUser) {
            return $authUser;
        }

        if ($facebookUser->user["gender"] == "male") {
            $gender = 0;
            $prefix = "นาย";
        } else {
            $gender = 1;
            $prefix = "นางสาว";
        }

        // Store profile picture to database 
        $picFacebookURL = $this->get_redirect_final_target($facebookUser->avatar_original);
        
        Applicant::create([
            'firstname'     => $facebookUser->user["first_name"],
            'lastname'      => $facebookUser->user["last_name"],
            'email'         => $facebookUser->email,
            'gender'        => $gender,
            'facebook'      => $facebookID,
            'pic'           => $picFacebookURL,
            'prefix'        => $prefix,
            'status'        => '3'
        ]);

        return User::create([
            'name'          => $facebookUser->name,
            'email'         => $facebookUser->email,
            'facebook'      => $facebookID,
            'username'      => 'fb-'.$facebookID
        ]);
    }

    public function getLogout()
    {
        Auth::logout();
        return redirect('/');
    }
}
