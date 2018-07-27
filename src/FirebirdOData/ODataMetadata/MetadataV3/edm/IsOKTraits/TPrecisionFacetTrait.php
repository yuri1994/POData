<?php

namespace FirebirdOData\ODataMetadata\MetadataV3\edm\IsOKTraits;

use FirebirdOData\ODataMetadata\StringTraits\XSDTopLevelTrait;

trait TPrecisionFacetTrait
{
    use XSDTopLevelTrait;

    public function isTPrecisionFacetValid($string)
    {
        return $this->nonNegativeInteger($string);
    }
}
