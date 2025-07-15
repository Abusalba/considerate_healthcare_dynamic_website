<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileRequest;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
       public function edit(Request $request)
    {
        $id = auth()->id();
        $user = User::findOrfail($id);
        return view('admin.profile', compact('user'));
    }

    public function update(ProfileRequest $request)
    {
       try {
          $requestData = $request->only('name','email');
          if(!is_null($request->password)){
             $requestData['password'] = Hash::make($request->password);
          }
           $id = auth()->id();
           User::findOrfail($id)->update($requestData);
          return $this->successResponse('Updated successfully');
          
        } catch (Exception $e) {
          return $this->errorResponse('Something went wrong.');            
        }
    }
}
