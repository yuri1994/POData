<?php

namespace Firebird\ODataMetadata\MetadataV3\edm\IsOKTraits;

use Firebird\ODataMetadata\StringTraits\XSDTopLevelTrait;

trait TPrecisionFacetTrait
{
    use XSDTopLevelTrait;

    public function isTPrecisionFacetValid($string)
    {
        return $this->nonNegativeInteger($string);
    }
}
