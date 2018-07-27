<?php

namespace Firebird\ODataMetadata\MetadataV3\edm;

use Firebird\ODataMetadata\IsOK;
use Firebird\ODataMetadata\MetadataV3\edm\Groups\GEmptyElementExtensibilityTrait;
use Firebird\ODataMetadata\MetadataV3\edm\Groups\TFunctionImportParameterAttributesTrait;

/**
 * Class representing TFunctionImportParameterType.
 *
 * XSD Type: TFunctionImportParameter
 */
class TFunctionImportParameterType extends IsOK
{
    use GEmptyElementExtensibilityTrait, TFunctionImportParameterAttributesTrait;
    
    public function isOK(&$msg = null)
    {
        if (!$this->isExtensibilityElementOK($msg)) {
            return false;
        }
        if (!$this->isTFunctionImportParameterAttributesValid($msg)) {
            return false;
        }
        return true;
    }
}
