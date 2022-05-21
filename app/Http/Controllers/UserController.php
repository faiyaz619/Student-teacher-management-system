<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    private $user;
    private $users;


    public function index()
    {
        return view('admin.user.add');
    }

    public function createUser(Request $request)
    {
        User::newUser($request);
        return redirect('/add-user')->with('message','User info create successfully');

    }
    public function manageUser()
    {
        $this->users = User::all();
        return view('admin.user.manage', ['users'=>$this->users]);
    }

    public function editUser($id)
    {

        $this->user = User::find($id);
        return view('admin.user.edit',['user'=>$this->user]);
    }
    public function update(Request $request, $id)
    {
        User::updateUser($request, $id);
        return redirect('/manage-user')->with('message', 'User info updated successfully');
    }

    public function deleteUser($id)
    {
        $this->user = User::find($id);
        $this->user->delete();
        return redirect('manage-user')->with('message', 'Deleted Successfully');
    }
}
