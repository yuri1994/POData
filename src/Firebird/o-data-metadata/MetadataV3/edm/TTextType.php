<?php

namespace Firebird\ODataMetadata\MetadataV3\edm;

use Firebird\ODataMetadata\IsOK;

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
