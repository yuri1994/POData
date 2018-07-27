<?php

namespace Firebird\ODataMetadata\MetadataV3\edm\IsOKTraits;

use Firebird\ODataMetadata\StringTraits\XSDTopLevelTrait;

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
