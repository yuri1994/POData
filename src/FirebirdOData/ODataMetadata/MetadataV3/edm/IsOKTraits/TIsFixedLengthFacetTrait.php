<?php

namespace FirebirdOData\ODataMetadata\MetadataV3\edm\IsOKTraits;

trait TIsFixedLengthFacetTrait
{
    public function isTIsFixedLengthFacetTraitValid($input)
    {
        return $input === boolval($input);
    }
}
