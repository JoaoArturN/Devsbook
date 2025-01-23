<?php

namespace App\Http\Controllers;

use App\Models\Friend;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    private function calcUsers($iduser)
    {

        $user = User::find($iduser);

        $count = [];

        $count['followed'] = $user->followers->count();
        $count['following'] = $user->following->count();

        return $count;

    }

    public function renderperfil($id)
    {

        $userProfile = User::with('detail', 'post.comment.user')->find($id);

        if (! $userProfile) {
            return redirect()->back()->with('error', 'User not found');
        }

        $checkFollow = Friend::where('follower_id', Auth::user()->id)->where('followed_id', $userProfile->id)->first();

        $count = $this->calcUsers($id);

        $users = $userProfile->following;

        return view('profile.profile', ['userProfile' => $userProfile, 'checkFollow' => $checkFollow, 'count' => $count, 'users' => $users]);
    }

    public function followuser($id)
    {

        $user = User::with('detail', 'post.comment.user')->find($id);

        if ($user->id != Auth::user()->id) {

            $isFollowing = Friend::where('follower_id', Auth::user()->id)->where('followed_id', $user->id)->first(); // verifica se o usuário já segue

            if (! $isFollowing) {
                Friend::create([
                    'follower_id' => Auth::user()->id,
                    'followed_id' => $user->id,
                ]);
            }

        }

        return redirect()->route('renderperfil', ['id' => $user->id]);

    }

    public function unfollowuser($id)
    {

        $user = User::with('detail', 'post.comment.user')->find($id);

        if ($user->id != Auth::user()->id) {

            $follow = Friend::where('follower_id', Auth::user()->id)->where('followed_id', $user->id)->first();
            $follow->delete();

        }

        return redirect()->route('renderperfil', ['id' => $user->id]);

    }

    public function renderfriends($id)
    {

        $userProfile = User::with('detail', 'post.comment.user')->find($id);

        if (! $userProfile) {
            return redirect()->back()->with('error', 'User not found');
        }

        $checkFollow = Friend::where('follower_id', Auth::user()->id)->where('followed_id', $userProfile->id)->first();

        $count = $this->calcUsers($id);

        return view('profile.friends', ['userProfile' => $userProfile, 'checkFollow' => $checkFollow, 'count' => $count]);
    }

    public function renderphotos($id)
    {

        $userProfile = User::with('detail', 'post.comment.user')->find($id);

        if (! $userProfile) {
            return redirect()->back()->with('error', 'User not found');
        }

        $checkFollow = Friend::where('follower_id', Auth::user()->id)->where('followed_id', $userProfile->id)->first();

        $count = $this->calcUsers($id);

        return view('profile.photos', ['userProfile' => $userProfile, 'checkFollow' => $checkFollow, 'count' => $count]);

    }

    public function renderconfig()
    {

        $userProfile = User::with('detail')->find(Auth::user()->id);

        return view('profile.config', ['userProfile' => $userProfile]);
    }

    public function edituser(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'city' => 'required|string',
            'work' => 'required',
            'birthdate' => 'required|date',
        ]);

        $user = User::find(Auth::user()->id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->detail->city = $request->city;
        $user->detail->work = $request->work;
        $user->detail->birthdate = $request->birthdate;
        $user->save();
        $user->detail->save();

        return redirect()->route('renderconfig')->with('success', 'Você atualizou seus dados');
    }
}
