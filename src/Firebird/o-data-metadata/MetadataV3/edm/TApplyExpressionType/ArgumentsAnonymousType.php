<?php

namespace Firebird\ODataMetadata\MetadataV3\edm\TApplyExpressionType;

use Firebird\ODataMetadata\IsOK;
use Firebird\ODataMetadata\MetadataV3\edm\Groups\GBaseExpressionTrait;
use Firebird\ODataMetadata\MetadataV3\edm\Groups\GExpressionTrait;

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
