<?php
namespace App\Traits;

<<<<<<< HEAD
=======
use App\Models\Client;
>>>>>>> master
use Illuminate\Support\Facades\Storage;

trait UploaderTrait
{
    public function uploadfile($file,$path, $fileName, $oldImage = null)
    {
        $filePath = $file->storeAs($path,$fileName,'public');

        if($oldImage)
        {
<<<<<<< HEAD
           $this->deletefile($path.$oldImage);
        }

        return $filePath;
    }

    public function deletefile($path)
=======
           $this->deleteFile($path.$oldImage);
        }

        // return $filePath;
    }

    public function deleteFile($path)
>>>>>>> master
    {
        return Storage::disk('public')->delete($path);
    }
}
