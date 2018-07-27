<?php

namespace Firebird\ODataMetadata\MetadataV3\edm\IsOKTraits;

trait TCollationFacetTrait
{
    public function isTCollationFacetValid($input)
    {
        return is_string($input);
    }
}
