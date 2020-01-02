<?php

namespace LaravelEnso\ImageTransformer\App\Exceptions;

use Illuminate\Http\UploadedFile;
use LaravelEnso\Helpers\App\Exceptions\EnsoException;

class File extends EnsoException
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
