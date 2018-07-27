<?php

namespace Firebird\ODataMetadata\MetadataV3\edm\IsOKTraits;

use Firebird\ODataMetadata\StringTraits\XSDTopLevelTrait;

trait TScaleFacetTrait
{
    use XSDTopLevelTrait;

    public function isTScaleFacetValid($string)
    {
        return $this->nonNegativeInteger($string);
    }
}
