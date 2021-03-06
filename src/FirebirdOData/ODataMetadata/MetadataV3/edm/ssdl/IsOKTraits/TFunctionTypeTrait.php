<?php

namespace FirebirdOData\ODataMetadata\MetadataV3\edm\ssdl\IsOKTraits;

use FirebirdOData\ODataMetadata\xsdRestrictions;

trait TFunctionTypeTrait
{
    use TQualifiedNameTrait, xsdRestrictions;

    public function isTFunctionTypeValid($string)
    {
        if (!$this->isTQualifiedNameValid($string)) {
            return false;
        }
        $regex = '/Collection\([^ \t]{1,}(\.[^ \t]{1,}){0,}\)/';
        return $this->matchesRegexPattern($regex, $string);
    }
}
