<?php

namespace AlgoWeb\ODataMetadata\MetadataV2\edm;

use AlgoWeb\ODataMetadata\IsOK;

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
     * @property \AlgoWeb\ODataMetadata\MetadataV2\edm\TDocumentationType $documentation
     */
    private $documentation = null;

    /**
     * @property \AlgoWeb\ODataMetadata\MetadataV2\edm\TAssociationEndType[] $end
     */
    private $end = array();

    /**
     * @property \AlgoWeb\ODataMetadata\MetadataV2\edm\TConstraintType $referentialConstraint
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
     * @return \AlgoWeb\ODataMetadata\MetadataV2\edm\TDocumentationType
     */
    public function getDocumentation()
    {
        return $this->documentation;
    }

    /**
     * Sets a new documentation.
     *
     * @param  \AlgoWeb\ODataMetadata\MetadataV2\edm\TDocumentationType $documentation
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
     * @param  \AlgoWeb\ODataMetadata\MetadataV2\edm\TAssociationEndType $end
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
     * @return \AlgoWeb\ODataMetadata\MetadataV2\edm\TAssociationEndType[]
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Sets a new end.
     *
     * @param  \AlgoWeb\ODataMetadata\MetadataV2\edm\TAssociationEndType[] $end
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
     * @return \AlgoWeb\ODataMetadata\MetadataV2\edm\TConstraintType
     */
    public function getReferentialConstraint()
    {
        return $this->referentialConstraint;
    }

    /**
     * Sets a new referentialConstraint.
     *
     * @param  \AlgoWeb\ODataMetadata\MetadataV2\edm\TConstraintType $referentialConstraint
     * @return self
     */
    public function setReferentialConstraint(TConstraintType $referentialConstraint)
    {
        $this->referentialConstraint = $referentialConstraint;
        return $this;
    }
}
