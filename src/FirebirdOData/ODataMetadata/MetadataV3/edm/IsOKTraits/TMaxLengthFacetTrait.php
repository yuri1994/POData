<?php

namespace FirebirdOData\ODataMetadata\MetadataV3\edm\IsOKTraits;

use FirebirdOData\ODataMetadata\StringTraits\XSDTopLevelTrait;

trait TMaxLengthFacetTrait
{
    use TMaxTrait, XSDTopLevelTrait;

    public function isTMaxLengthFacetValid($string)
    {
        if ($this->isTMaxValid($string)) {
            return true;
        }
        return $this->nonNegativeInteger($string);
    }
}
