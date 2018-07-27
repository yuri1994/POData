<?php

namespace FirebirdOData\ODataMetadata\MetadataV3\edm\IsOKTraits;

use FirebirdOData\ODataMetadata\StringTraits\XSDTopLevelTrait;

trait TScaleFacetTrait
{
    use XSDTopLevelTrait;

    public function isTScaleFacetValid($string)
    {
        return $this->nonNegativeInteger($string);
    }
}
