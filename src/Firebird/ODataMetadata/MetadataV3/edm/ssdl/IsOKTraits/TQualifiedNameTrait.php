<?php

namespace Firebird\ODataMetadata\MetadataV3\edm\ssdl\IsOKTraits;

use Firebird\ODataMetadata\xsdRestrictions;

trait TQualifiedNameTrait
{
    public function isTQualifiedNameValid($string)
    {
        if (null == $string || empty($string)) {
            return false;
        }
        return true;
    }
}
