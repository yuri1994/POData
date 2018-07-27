<?php

namespace Firebird\ODataMetadata\MetadataV3\edm;

use Firebird\ODataMetadata\IsOK;
use Firebird\ODataMetadata\MetadataV3\edm\Groups\GBaseExpressionTrait;
use Firebird\ODataMetadata\MetadataV3\edm\Groups\GExpressionTrait;

/**
 * Class representing TCollectionExpressionType.
 *
 * XSD Type: TCollectionExpression
 */
class TCollectionExpressionType extends IsOK
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
