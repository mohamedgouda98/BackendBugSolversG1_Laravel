<?php
namespace App\Traits;

use Illuminate\Support\Facades\Storage;

trait UploaderTrait
{
    public function uploadfile($file,$path, $fileName, $oldImage = null)
    {
        $filePath = $file->storeAs($path,$fileName,'public');

        if($oldImage)
        {
           $this->deletefile($path.$oldImage);
        }

        return $filePath;
    }

    public function deletefile($path)
    {
        return Storage::disk('public')->delete($path);
    }
}
