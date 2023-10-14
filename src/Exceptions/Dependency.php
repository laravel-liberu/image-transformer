<?php

namespace LaravelLiberu\ImageTransformer\Exceptions;

use LaravelLiberu\Helpers\Exceptions\LiberuException;

class Dependency extends LiberuException
{
    public static function missing()
    {
        return new self(__(
            'Extension missing. Please install php-gd or php-imagick to use the resize function'
        ));
    }
}
