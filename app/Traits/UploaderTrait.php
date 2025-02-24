<?php
namespace App\Traits;

use App\Models\Client;
use Illuminate\Support\Facades\Storage;

trait UploaderTrait
{
    public function uploadfile($file,$path, $fileName, $oldImage = null)
    {
        $filePath = $file->storeAs($path,$fileName,'public');

        if($oldImage)
        {
           $this->deleteFile($path.$oldImage);
        }

        return $filePath;
    }

    public function deleteFile($path)
    {
        return Storage::disk('public')->delete($path);
    }
}
