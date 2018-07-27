<?php

namespace FirebirdOData\ODataMetadata\MetadataV3\edm;

use FirebirdOData\ODataMetadata\IsOK;

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
