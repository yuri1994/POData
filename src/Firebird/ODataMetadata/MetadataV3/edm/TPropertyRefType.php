<?php

namespace Firebird\ODataMetadata\MetadataV3\edm;

use Firebird\ODataMetadata\IsOK;
use Firebird\ODataMetadata\IsOKTraits\IsOKToolboxTrait;
use Firebird\ODataMetadata\MetadataV3\edm\IsOKTraits\TSimpleIdentifierTrait;

/**
 * Class representing TPropertyRefType.
 *
 * XSD Type: TPropertyRef
 */
class TPropertyRefType extends IsOK
{
    use IsOKToolboxTrait, TSimpleIdentifierTrait;
    /**
     * @property string $name
     */
    private $name = null;

    /**
     * Gets as name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name.
     *
     * @param  string $name
     * @return self
     */
    public function setName($name)
    {
        if (!$this->isTSimpleIdentifierValid($name)) {
            $msg = 'Name must be a valid TSimpleIdentifierValid';
            throw new \InvalidArgumentException($msg);
        }
        $this->name = $name;
        return $this;
    }

    public function isOK(&$msg = null)
    {
        if (!$this->isTSimpleIdentifierValid($this->name)) {
            $msg = 'Name must be a valid TSimpleIdentifierValid';
            return false;
        }
        return true;
    }
}
