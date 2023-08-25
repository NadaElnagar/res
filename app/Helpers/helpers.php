<?php

use Illuminate\Support\Facades\Storage;



if (!function_exists('un_link_image')) {

    function un_link_image($table, $image)
    {
        $path = storage_path("/app/public/" . $table);
        $image_path = $path . '/' . $image;
        if (file_exists($image_path)) {
            Storage::delete($image_path);
            // @unlink($image_path);
        }
    }
}

if (!function_exists('getImagePath')) {

    function getImagePath($table,$image)
    {
       return asset('public/storage/'.$table.'/'.$image);
    }


}

if (!function_exists('uploadImage')) {
    function uploadImage($table, $image)
    {
        try {
            // Generate a unique filename
        $imageName = uniqid() . '.' . $image->getClientOriginalExtension();

            // Store the file in the storage folder
             $path = $image->storeAs( 'public/'.$table.'/', $imageName);

            // Return the filename
            return $imageName;

        } catch (\Exception $exception) {
            return $exception;
        }
    }
}
