<?php

namespace LaravelLiberu\ImageTransformer\Exceptions;

use Illuminate\Http\UploadedFile;
use LaravelLiberu\Helpers\Exceptions\LiberuException;

class File extends LiberuException
{
    public static function invalid(UploadedFile $file)
    {
        return new self(__(
            'Invalid file :file', ['file' => $file->getClientOriginalName()]
        ));
    }

    public static function notSupported(UploadedFile $file)
    {
        return new self(__(
            'File type not supported for :file', ['file' => $file->getClientOriginalName()]
        ));
    }
}
