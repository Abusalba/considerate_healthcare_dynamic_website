<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CommController extends Controller
{
    public function statusChange(){
        $data = '';
        $model = request()->model;
        switch ($model) {
            case "settings":
              $data = Models\Setting::find(request()->id);
              break; 
            case "training":
              $data = Models\Training::find(request()->id);
              break; 
            case "portfolio":
              $data = Models\Portfolio::find(request()->id);
              break; 
            case "request-quote":
              $data = Models\RequestQuote::find(request()->id);
              break; 
            case "career":
              $data = Models\Career::find(request()->id);
              break;
            case "faqs":
              $data = Models\Faq::find(request()->id);
              break;   
            case "blogs":
              $data = Models\Blog::find(request()->id);
              break; 
            case "testimonials":
              $data = Models\Testimonial::find(request()->id);
              break;       
        }
        if($data){
            $status = ($data->status == 1) ? 0:1;
            $msg = $status == 1 ? 'Active':'Inactive';
            $data->status = $status;
            try{
                $data->save();
                return response()->json(['success' => true,'message' => $msg.' sucessfully!'], 200);
            }catch(Exception $e){
                return response()->json(['success' => false,'message' => $e->getMessage()], 201);
            }
            
        }
        return response()->json(['success' => false,'message' => 'Record not exists!'], 201);
    }
}
