<?php

namespace Firebird\ODataMetadata\MetadataV3\edm\IsOKTraits;

use Firebird\ODataMetadata\StringTraits\XSDTopLevelTrait;

trait TSridFacetTrait
{
    use XSDTopLevelTrait, TVariableTrait;

    public function isTSridFacetValid($string)
    {
        if ($this->isTVariableValid($string)) {
            return true;
        }
        $this->nonNegativeInteger($string);
        return true;
    }
}
