<?php

namespace Firebird\ODataMetadata\MetadataV3\edm;

use Firebird\ODataMetadata\IsOK;

/**
 * Class representing TXmlOrTextType.
 *
 * This type allows pretty much any content
 * XSD Type: TXmlOrText
 */
class TXmlOrTextType extends IsOK
{
    public function isOK(&$msg = null)
    {
        return true;
    }
}
