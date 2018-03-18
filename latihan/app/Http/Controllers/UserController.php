<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;

Class UserController extends Controller
{
    protected $user;

    public function __construct(UserModel $user)
    {
      $this->user =$user;
    }

    public function register(Request $request)
    {
      $user = [
        "name" => $request->name,
        "email" => $request->email,
        "password" => md5($request->password)
      ];

      // UserModel::save{$user}; use this if _construct() does not exist
      $user = $this->user->create($user);

      if ($user)
      {
        return redirect('/all');
      }
      else
      {
        return redirect('/hello');
      }
    }

    public function all()
    {
      $users = $this->user->all();
      return view("all")->with('users',$users);
    }

    public function find($id)
    {
      $user = $this->user->find($id); // 1st Method
      // $user = $this->user->where("id","=",$id); // 2nd Method

      return $user;
    }

    public function updateForm($id)
    {
      $user = $this->user->find($id);
      return view("update")->with('users',$user);
    }

    public function update(Request $request, $id)
    {
      $query = $this->user->find($id);
      // textbox result
      $name = $request->name;
      $email = $request->email;
      $password = md5($request->password);
      // changes save
      $query->name = $name;
      $query->email = $email;
      $query->password = $password;
      // query update
      $update = $query->save();
      return redirect('/all');
    }

    public function delete($id)
    {
      $user = $this->user->where('id',$id)->delete();
      return redirect('/all');
    }
}
 ?>
