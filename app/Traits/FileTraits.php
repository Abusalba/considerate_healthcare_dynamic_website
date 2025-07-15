<?php

namespace App\Traits;
use Carbon\Carbon;
use Storage;
use Exception;
trait FileTraits
{
    public static function fileUploadToFolder($file,$folder){
        try {
            $imageName = rand() . '_' . time() . '.' . $file->extension(); 
            $folder = 'uploads/'.$folder;
            $path =  $folder.'/' . $imageName;
            
            // Store the file in the public folder
            $file->move(public_path($folder), $imageName);
            
            // Return the public URL of the uploaded file
            return $path;
        } catch (\Exception $e) {
            \Log::error($e->getMessage());
            return ''; // You can return a specific value or throw an exception
        }
    }

    public static function fileUpload($file,$folder){
        try {
            $imageName = rand().''.time().'.'.$file->extension(); 
            $path = $folder.'/'.$imageName;
            Storage::disk('s3')->put($path, file_get_contents($file),'private');
            return $path;
      } catch (\Exception $e) {
          \Log::error($e->getMessage());
          return ''; // You can return a specific value or throw an exception
      }
    }

    public function fileUploadPublic($file,$folder){
        try {
              $imageName = rand().''.time().'.'.$file->extension(); 
              $path = $folder.'/'.$imageName;
              Storage::disk('s3')->put($path, file_get_contents($file),'public');
            return $path;
        } catch (\Exception $e) {
            \Log::error($e->getMessage());
            return ''; // You can return a specific value or throw an exception
        }
    }

    public function getTemporaryUrl($path){
        try {
            $disk = Storage::disk('s3');
            return ($disk->has($path)) ? $disk->temporaryUrl($path, Carbon::now()->addDays(1)) :'';  
        } catch (\Exception $e) {
            \Log::error($e->getMessage());
            return false; // You can return a specific value or throw an exception
        }
    }
    public function cdn_url($path){
        try {
            $disk = Storage::disk('s3');
            return $disk->has($path) ? $disk->url($path) : '';  
        } catch (\Exception $e) {
            \Log::error($e->getMessage());
            return '';
        }
    }
    public function deleteS3File($path) {
        try {
            $disk = Storage::disk('s3');
            return ($disk->has($path))? $disk->delete($path): true;
        } catch (\Exception $e) {
            \Log::error($e->getMessage());
            return false;
        }
    }

    public function getFileSize($file_path){
        try {
            $disk = Storage::disk('s3');
            if ($disk->exists($file_path)) {
                $sizeInBytes = $disk->size($file_path);
                $sizeInKB = $sizeInBytes / 1024; // Convert bytes to kilobytes
                return number_format((float)$sizeInKB, 2, '.', '');
            } else {
                return '';
            }
        } catch (\Exception $e) {
            \Log::error('Error getting file size: ' . $e->getMessage());
            return '';
        }
    }


}