<?php

namespace App\Http\Controllers;

use App\Donation;
use App\Http\Requests\AddUserByAdminRequest;
use App\Http\Requests\EditUserByAdminRequest;
use App\Http\Requests\UserProfileRequst;
use App\Report;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class AdminUsersController extends Controller
{
    public function index()
    {
        return view('admin.user.index');
    }
    public function create()
    {
        return view('admin.user.create');
    }
    public function store(AddUserByAdminRequest $request)
    {
        $user = new User();
        $user->create([
            'name'     =>$request->name,
            'email'   =>$request->email,
            'password'=>bcrypt($request->password),

        ]);
        return Redirect::route('users.index')->withFlashMessage('New user added Successfully');
    }
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.user.edit',compact('user'));
    }
    public function update(EditUserByAdminRequest $request, $id)
    {
        $user = User::findOrFail($id);
        //dd($request->all());
        if(trim($request->password) =='' )
        {
          //  $input = $request->except('password');
            $user->name  = $request->name;
            $user->email = $request->email;
            $user->admin = $request->admin;
            $user->update();
        }else
        {
            $user->name  = $request->name;
            $user->email = $request->email;
            $user->admin = $request->admin;
            $user->password =  bcrypt($request->password);
            $user->update();
        }
        return Redirect::route('users.index')->withFlashMessage('User had been updated Successfully');
    }
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        Donation::where('user_id',$id)->delete();
        Report::where('user_id',$id)->delete();
        $user->delete();
        return Redirect::route('users.index')->withFlashMessage('user has been removed Successfully');
    }

   /////////////// users Profile ///////////////
    public function editUserProfile()
    {
        $user = Auth::user();
        return view('user.userProfile.edit',compact('user'));
    }
    public function updateUserProfile(UserProfileRequst $request)
    {
        $user = Auth::user();

        if(trim($request->password) =='' )
        {
            $input = $request->except('password');

        }else
        {
            $input = $request->all();
        }

        $input['password'] = bcrypt($request->password);

        $user->update($input);
        return Redirect::back()->withFlashMessage('you have updated your profile information Successfully');

    }

}
