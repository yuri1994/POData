<?php

namespace FirebirdOData\ODataMetadata\MetadataV3\edm\IsOKTraits;

trait TIsUnicodeFacetTrait
{
    public function isTIsUnicodeFacetTraitValid($input)
    {
        return $input === boolval($input);
    }
}
