<?php

namespace FirebirdOData\ODataMetadata\MetadataV3\edm;

use FirebirdOData\ODataMetadata\IsOK;

/**
 * Class representing TTextType.
 *
 * XSD Type: TText
 */
class TTextType extends IsOK
{
    public function isOK(&$msg = null)
    {
        return true;
    }
}
