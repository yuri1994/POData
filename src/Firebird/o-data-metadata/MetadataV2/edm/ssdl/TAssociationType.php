<?php

namespace Firebird\ODataMetadata\MetadataV2\edm\ssdl;

use Firebird\ODataMetadata\IsOK;

/**
 * Class representing TAssociationType.
 *
 * XSD Type: TAssociation
 */
class TAssociationType extends IsOK
{

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property \Firebird\ODataMetadata\MetadataV2\edm\ssdl\TDocumentationType $documentation
     */
    private $documentation = null;

    /**
     * @property \Firebird\ODataMetadata\MetadataV2\edm\ssdl\TAssociationEndType[] $end
     */
    private $end = array();

    /**
     * @property \Firebird\ODataMetadata\MetadataV2\edm\ssdl\TConstraintType $referentialConstraint
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
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as documentation.
     *
     * @return \Firebird\ODataMetadata\MetadataV2\edm\ssdl\TDocumentationType
     */
    public function getDocumentation()
    {
        return $this->documentation;
    }

    /**
     * Sets a new documentation.
     *
     * @param  \Firebird\ODataMetadata\MetadataV2\edm\ssdl\TDocumentationType $documentation
     * @return self
     */
    public function setDocumentation(TDocumentationType $documentation)
    {
        $this->documentation = $documentation;
        return $this;
    }

    /**
     * Adds as end.
     *
     * @param  \Firebird\ODataMetadata\MetadataV2\edm\ssdl\TAssociationEndType $end
     * @return self
     */
    public function addToEnd(TAssociationEndType $end)
    {
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
     * @return \Firebird\ODataMetadata\MetadataV2\edm\ssdl\TAssociationEndType[]
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Sets a new end.
     *
     * @param  \Firebird\ODataMetadata\MetadataV2\edm\ssdl\TAssociationEndType[] $end
     * @return self
     */
    public function setEnd(array $end)
    {
        $this->end = $end;
        return $this;
    }

    /**
     * Gets as referentialConstraint.
     *
     * @return \Firebird\ODataMetadata\MetadataV2\edm\ssdl\TConstraintType
     */
    public function getReferentialConstraint()
    {
        return $this->referentialConstraint;
    }

    /**
     * Sets a new referentialConstraint.
     *
     * @param  \Firebird\ODataMetadata\MetadataV2\edm\ssdl\TConstraintType $referentialConstraint
     * @return self
     */
    public function setReferentialConstraint(TConstraintType $referentialConstraint)
    {
        $this->referentialConstraint = $referentialConstraint;
        return $this;
    }
}
