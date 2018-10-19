<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ImageServiceProvider;
use Auth;
use Image;
use Hash;

class UserSettingsController extends Controller
{

    public function viewSettingsPage()
    {
    return view('settings')->withUser(Auth::user());
    }
    //
    public function upload_avatar(Request $req)
    {
      //Handle the user upload of upload_avatar
      if($req -> hasfile('avatar')){
        $avatar = $req->file('avatar');
        $filename = time() . '.' . $avatar->getClientOriginalExtension();
        Image::make($avatar)->resize(300, 300)->save(public_path('/images/uploads/avatars/' . $filename));
        $user = Auth::user();
        $user->avatar = $filename;
        $user->save();
      }
        return view('settings')->withUser(Auth::user());
    }

    public function change_password(Request $request)
    {

      $input = $request->all();
      $user = Auth::user();
      $user->password = Hash::make($input['password']);
      $user->save();

    return view('settings')->withUser(Auth::user());
    }
}
