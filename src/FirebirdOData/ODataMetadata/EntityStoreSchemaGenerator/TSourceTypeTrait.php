<?php

namespace FirebirdOData\ODataMetadata\EntityStoreSchemaGenerator;

trait TSourceTypeTrait
{
    public function isTSourceTypeValid($string)
    {
        return 'Tables' == $string || 'Views' == $string;
    }
}
