<?php

namespace FirebirdOData\ODataMetadata\MetadataV3\edm;

use FirebirdOData\ODataMetadata\IsOK;
use FirebirdOData\ODataMetadata\IsOKTraits\IsOKToolboxTrait;
use FirebirdOData\ODataMetadata\MetadataV3\edm\Groups\GBaseExpressionTrait;
use FirebirdOData\ODataMetadata\MetadataV3\edm\Groups\GExpressionTrait;
use FirebirdOData\ODataMetadata\MetadataV3\edm\IsOKTraits\TSimpleIdentifierTrait;

/**
 * Class representing TPropertyReferenceExpressionType.
 *
 * XSD Type: TPropertyReferenceExpression
 */
class TPropertyReferenceExpressionType extends IsOK
{
    use GBaseExpressionTrait, GExpressionTrait, TSimpleIdentifierTrait;
    /**
     * @property string $property
     */
    private $property = null;

    public function __construct()
    {
        $this->gExpressionMaximum = 1;
        $this->gExpressionMinimum = 1;
    }

    /**
     * Gets as property.
     *
     * @return string
     */
    public function getProperty()
    {
        return $this->property;
    }

    /**
     * Sets a new property.
     *
     * @param  string $property
     * @return self
     */
    public function setProperty($property)
    {
        if (!$this->isTSimpleIdentifierValid($property)) {
            $msg = 'Property must be a valid TSimpleIdentifier';
            throw new \InvalidArgumentException($msg);
        }
        $this->property = $property;
        return $this;
    }

    public function isOK(&$msg = null)
    {
        if (!$this->isTSimpleIdentifierValid($this->property)) {
            $msg = 'Property must be a valid TSimpleIdentifier';
            return false;
        }
        if (!$this->isGExpressionValid($msg)) {
            return false;
        }
        return true;
    }
}
