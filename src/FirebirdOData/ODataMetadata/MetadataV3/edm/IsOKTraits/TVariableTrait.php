<?php

namespace FirebirdOData\ODataMetadata\MetadataV3\edm\IsOKTraits;

trait TVariableTrait
{
    public function isTVariableValid($string)
    {
        return 'Variable' === $string;
    }
}
