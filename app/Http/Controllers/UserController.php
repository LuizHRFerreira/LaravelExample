<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\UserDataTable;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class UserController extends Controller
{
    public function index(UserDataTable $dataTable) 
    {
        return $dataTable->render('users.index');
    }

    public function profile()
    {
        $user = \Auth::user();
        return view('users.profile', compact('user'));
    }

    public function update(Request $request)
    {
        \DB::beginTransaction();
        

        try {
            $user = User::find(request()->user_id);
            $user->name = $request->name;
            $user->email = $request->email;

            if($request->password) {
                $user->password = Hash::make($request->password);
            }
            if ($request->hasFile('photo')) {

                if($user->photo) {
                    Storage::delete($user->photo);
                }

                $photo = $request->file('photo');
                $photoName = time() . '.' . $photo->getClientOriginalExtension();
                $path = $photo->storeAs('users/photo', $photoName);
                $user->photo = $path;
            }

            if($request->delete == 'on') {
                if($user->photo) {
                    Storage::delete($user->photo);
                    $user->photo = null;
                }
            } 
            $user->save();

        }catch(\Exception $e){
            dd($e);
            \DB::rollBack();
            Session::flash('error', trans('message.error_on_update'));
            return redirect()->back();
        }

        \DB::commit();

        Session::flash('success', trans('message.success_on_update'));
        return redirect()->back();
    }
}
