<?php

namespace Firebird\ODataMetadata\MetadataV3\edm\ssdl;

use Firebird\ODataMetadata\IsOK;
use Firebird\ODataMetadata\MetadataV3\edm\ssdl\IsOKTraits\TUndottedIdentifierTrait;

/**
 * Class representing TAssociationType.
 *
 * XSD Type: TAssociation
 */
class TAssociationType extends IsOK
{
    use TUndottedIdentifierTrait;
    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property \Firebird\ODataMetadata\MetadataV3\edm\ssdl\TDocumentationType $documentation
     */
    private $documentation = null;

    /**
     * @property \Firebird\ODataMetadata\MetadataV3\edm\ssdl\TAssociationEndType[] $end
     */
    private $end = [];

    /**
     * @property \Firebird\ODataMetadata\MetadataV3\edm\ssdl\TConstraintType $referentialConstraint
     */
    private $referentialConstraint = null;

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
        if (!$this->isStringNotNullOrEmpty($name)) {
            $msg = 'Name cannot be null or empty';
            throw new \InvalidArgumentException($msg);
        }
        if (!$this->isTUndottedIdentifierValid($name)) {
            $msg = 'Name must be a valid TUndottedIdentifier';
            throw new \InvalidArgumentException($msg);
        }
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as documentation.
     *
     * @return \Firebird\ODataMetadata\MetadataV3\edm\ssdl\TDocumentationType
     */
    public function getDocumentation()
    {
        return $this->documentation;
    }

    /**
     * Sets a new documentation.
     *
     * @param  \Firebird\ODataMetadata\MetadataV3\edm\ssdl\TDocumentationType $documentation
     * @return self
     */
    public function setDocumentation(TDocumentationType $documentation)
    {
        $msg = null;
        if (!$documentation->isOK($msg)) {
            throw new \InvalidArgumentException($msg);
        }
        $this->documentation = $documentation;
        return $this;
    }

    /**
     * Adds as end.
     *
     * @param  \Firebird\ODataMetadata\MetadataV3\edm\ssdl\TAssociationEndType $end
     * @return self
     */
    public function addToEnd(TAssociationEndType $end)
    {
        $msg = null;
        if (!$end->isOK($msg)) {
            throw new \InvalidArgumentException($msg);
        }
        $this->end[] = $end;
        return $this;
    }

    /**
     * isset end.
     *
     * @param  scalar $index
     * @return bool
     */
    public function issetEnd($index)
    {
        return isset($this->end[$index]);
    }

    /**
     * unset end.
     *
     * @param  scalar $index
     * @return void
     */
    public function unsetEnd($index)
    {
        unset($this->end[$index]);
    }

    /**
     * Gets as end.
     *
     * @return \Firebird\ODataMetadata\MetadataV3\edm\ssdl\TAssociationEndType[]
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Sets a new end.
     *
     * @param  \Firebird\ODataMetadata\MetadataV3\edm\ssdl\TAssociationEndType[] $end
     * @return self
     */
    public function setEnd(array $end)
    {
        $msg = null;
        if (!$this->isValidArrayOK(
            $end,
            '\Firebird\ODataMetadata\MetadataV3\edm\ssdl\TAssociationEndType',
            $msg,
            2,
            2
        )
        ) {
            throw new \InvalidArgumentException($msg);
        }
        $this->end = $end;
        return $this;
    }

    /**
     * Gets as referentialConstraint.
     *
     * @return \Firebird\ODataMetadata\MetadataV3\edm\ssdl\TConstraintType
     */
    public function getReferentialConstraint()
    {
        return $this->referentialConstraint;
    }

    /**
     * Sets a new referentialConstraint.
     *
     * @param  \Firebird\ODataMetadata\MetadataV3\edm\ssdl\TConstraintType $referentialConstraint
     * @return self
     */
    public function setReferentialConstraint(TConstraintType $referentialConstraint)
    {
        $msg = null;
        if (!$referentialConstraint->isOK($msg)) {
            throw new \InvalidArgumentException($msg);
        }
        $this->referentialConstraint = $referentialConstraint;
        return $this;
    }

    public function isOK(&$msg = null)
    {
        if (!$this->isStringNotNullOrEmpty($this->name)) {
            $msg = 'Name cannot be null or empty';
            return false;
        }
        if (!$this->isTUndottedIdentifierValid($this->name)) {
            $msg = 'Name must be a valid TUndottedIdentifier';
            return false;
        }
        if (!$this->isObjectNullOrOK($this->referentialConstraint, $msg)) {
            return false;
        }
        if (!$this->isObjectNullOrOK($this->documentation, $msg)) {
            return false;
        }
        if (!$this->isValidArrayOK(
            $this->end,
            '\Firebird\ODataMetadata\MetadataV3\edm\ssdl\TAssociationEndType',
            $msg,
            2,
            2
        )
        ) {
            return false;
        }

        return true;
    }
}
