<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;

use App\Http\Requests;
use Intervention\Image\Facades\Image;

class FileController extends Controller
{
    public static function uploadImg($image, $path, $alt = null)
    {
        self::mkFolder($path);

        $filename = rand(0, 999) . time() . '.' . $image->getClientOriginalExtension();
        self::makeImg($image, $path . $filename);
        //save LINK to file_table
        $imageFile = new File([
            'link' => $filename,
            'alt' => $alt
        ]);
        $imageFile->save();

        return $imageFile;
    }

    public static function uploadTwoSizeImg($image, $path, $width, $height)
    {
        self::mkFolder($path);

        $filename = rand(0, 999) . time() . '.' . $image->getClientOriginalExtension();
        self::makeImg($image, $path . $filename);
        self::makeImg($image, $path . 'thumb_' . $filename, $width, $height);

        //save LINK to file_table
        $imageFile = new File([
            'link' => $filename
        ]);
        $imageFile->save();

        return $imageFile;
    }

    public static function updateImg($image, $id, $path, $width = null, $height = null)
    {
        self::mkFolder($path);

        $filename = rand(0, 999) . time() . '.' . $image->getClientOriginalExtension();

        $oldImage = File::find($id);
        if ($oldImage == null) {
            if ($width != null || $height != null) {
                $newImgId = self::uploadTwoSizeImg($image, $path, $width, $height);
            } else {
                $newImgId = self::uploadImg($image, $path);
            }

            return $newImgId;
        }
        $location = $path . $oldImage->link;
        $locationThumb = $path . 'thumb_' . $oldImage->link;

        if (file_exists($path . 'thumb_' . $oldImage->link)) {
            self::makeImg($image, $path . 'thumb_' . $oldImage->link, $width, $height);
        }
        $oldImage->link = $filename;
        $oldImage->save();

        self::makeImg($image, $location);

        rename($location, $path . $filename);
        if (file_exists($locationThumb)) {
            rename($locationThumb, $path . 'thumb_' . $filename);
        }


        return true;
    }

    public static function deleteImg($id, $path)
    {
        $fileToRemove = File::find($id);
        $fullPath = $path . $fileToRemove->link;

        if (file_exists($fullPath)) {
            unlink($fullPath);
        }
        if (file_exists($path . 'thumb_' . $fileToRemove->link)) {
            unlink($path . 'thumb_' . $fileToRemove->link);
        }

        $fileToRemove->delete();

        return true;
    }

    private static function makeImg($image, $location, $width = null, $height = null)
    {
        $newImg = Image::make($image);

        if ($width != null || $height != null) {
            $newImg->fit($width, $height);
        }
        $newImg->save($location);

        return true;
    }

    private static function mkFolder($path)
    {
        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }
        return true;
    }

}
