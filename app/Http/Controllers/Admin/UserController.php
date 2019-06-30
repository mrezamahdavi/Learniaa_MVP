<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\facades\Auth;
use App\User;
use App\Profile;

class UserController extends Controller
{
    public function create()
    {
        return view('admin.user.create');
    }

    public function index()
    {
        $users = User::all();
        //dd($users);
        return view('admin.user.index',compact('users'));
    }

    public function store()
    {
         $this->validate(request(),[
            'name' => 'required|min:1',
            'email' => 'required|min:1',
            'password' => 'required|min:3'
         ]);
         $user = new User();
         $user->name = request()->name;
         $user->password = bcrypt(request()->password);
         $user->email = request()->email;
         if($user->save())
         {
             $profile = new Profile();
             $profile->user_id = $user->id;
             $profile->about = 'Your About Information';
             if($profile->save())
             {
                 return redirect('admin/user')->with('success','User Created Success');
             }
         }

    }


    public function edit($id)
    {
        $user = Auth::user();

       return view('admin.user.update',compact('user'));
    }

    public function update($id)
    {
        $user = User::find($id);

        $this->validate(request(),[
            'name'=>'required|min:1',
            'email'=>'required|min:1',
            'password'=>'required|min:1',
            'image'=>''
        ]);

       if(request()->has('password'))
            {
                $password = bcrypt(request()->password);
            }
            else
             {
                $password = $user->password;
            }

            $image_name = "";

            if(request()->hasFile('image'))
            {
                $image = request()->file('image');
                $image_name = uniqid().$image->getClientOriginalName();
                $image->move(public_path('profile'),$image_name);
            }
            else
             {
                $image_name  =$user->profile->profile_image;
            }

            $user->name = request()->name;
            $user->email = request()->email;
            $user->password = $password ;

           if( $user->save())
           {

            $profile = Profile::where('user_id',$user->id)->update([

                'about' => request()->about,
                'facebook_link' => request()->facebook_link ,
                'youtube_link' => request()->youtube_link,
                'profile_image'=>$image_name
            ]);

            if($profile)
            {
               return redirect()->back()->with('success','User Profile Success');
            }

          }

    }

    // User Role

    public function editRole($role,$user_id)
    {
        $user = User::where('id',$user_id)->update([
            'is_admin' => $role
        ]);
            if($user)
            {
                return redirect()->back()->with('success','User Permission Updated');

            }
    }


}
