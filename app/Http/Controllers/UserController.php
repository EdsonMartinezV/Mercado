<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function registerNewUser(Request $request){
        $newUser = $request->all();
    }

    function loginUser(Request $request){
        $user = $request->all();
    }

    function createUser(){
        return view('createUser');
    }

    function saveUser(Request $request){
        $newUser = $request->all();
    }

    function editUser($userId){
        $users = session('users');
        $user = $users[$userId];
        return view('editUser', compact('user', 'userId'));
    }

    function updateUser(Request $request, $userId){
        $users = session('users');
        $updatedUser = $request->all();
        $users[$userId] = $updatedUser;
        session(['users' => $users]);
        return redirect('/supervise/show-users');
    }

    function showUsers(){
        return view('showUsers');
    }

    function resetUserPassword($userId){
        return view('resetUserPassword', compact('userId'));
    }

    function saveUserPassword($userId){
        return redirect('/supervise/show-users');
    }

    function showUsersToManager(){
        return view('showUsersToManager');
    }
}
