<?php

namespace FirebirdOData\ODataMetadata\MetadataV3\edm\TApplyExpressionType;

use FirebirdOData\ODataMetadata\IsOK;
use FirebirdOData\ODataMetadata\MetadataV3\edm\Groups\GBaseExpressionTrait;
use FirebirdOData\ODataMetadata\MetadataV3\edm\Groups\GExpressionTrait;

/**
 * Class representing ArgumentsAnonymousType.
 */
class ArgumentsAnonymousType extends IsOK
{
    use GBaseExpressionTrait, GExpressionTrait;

    public function isOK(&$msg = null)
    {
        if (!$this->isGExpressionValid($msg)) {
            return false;
        }
        return true;
    }
}
