<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('admin.user.index');
    }
    public function add()
    {
        return view('admin.user.add');
    }
    public function leader_board()
    {
        return view('admin.user.leaderboard');
    }
    public function show_profile(){
        return view('admin.user_profile.profile');
    }
    public function  show_team(){
        return view('admin.user_profile.team');
    }
    public function  show_projects(){
        return view('admin.user_profile.projects');
    }
    public function  show_connection(){
        return view('admin.user_profile.connection');
    }
    public function  show_my_profile(){
        return view('admin.user_profile.my_profile');
    }
}
