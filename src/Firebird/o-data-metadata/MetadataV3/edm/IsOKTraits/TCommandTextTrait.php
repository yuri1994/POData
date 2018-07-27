<?php

namespace Firebird\ODataMetadata\MetadataV3\edm\IsOKTraits;

use Firebird\ODataMetadata\StringTraits\XMLStringTrait;

trait TCommandTextTrait
{
    use XMLStringTrait;

    public function isTCommandTextValid($string)
    {
        if (!is_string($string)) {
            $msg = 'Input must be a string: ' . get_class($this);
            throw new \InvalidArgumentException($msg);
        }
        return true;
    }
}
