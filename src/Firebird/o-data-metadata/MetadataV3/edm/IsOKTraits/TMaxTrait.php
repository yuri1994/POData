<?php

namespace Firebird\ODataMetadata\MetadataV3\edm\IsOKTraits;

trait TMaxTrait
{
    public function isTMaxValid($string)
    {
        return 'Max' === $string;
    }
}
