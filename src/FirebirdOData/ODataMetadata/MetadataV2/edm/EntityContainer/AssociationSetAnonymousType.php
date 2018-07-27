<?php

namespace FirebirdOData\ODataMetadata\MetadataV2\edm\EntityContainer;

use FirebirdOData\ODataMetadata\IsOK;
use FirebirdOData\ODataMetadata\MetadataV2\edm\EntityContainer\AssociationSetAnonymousType\EndAnonymousType;
use FirebirdOData\ODataMetadata\MetadataV2\edm\TDocumentationType;

/**
 * Class representing AssociationSetAnonymousType.
 */
class AssociationSetAnonymousType extends IsOK
{

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property string $association
     */
    private $association = null;

    /**
     * @property \FirebirdOData\ODataMetadata\MetadataV2\edm\TDocumentationType $documentation
     */
    private $documentation = null;

    /**
     * @property
     * \FirebirdOData\OData\ODataMetadata\MetadataV2\edm\EntityContainer\AssociationSetAnonymousType\EndAnonymousType[]
     * $end
     */
    private $end = array();

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
     * Gets as association.
     *
     * @return string
     */
    public function getAssociation()
    {
        return $this->association;
    }

    /**
     * Sets a new association.
     *
     * @param  string $association
     * @return self
     */
    public function setAssociation($association)
    {
        $this->association = $association;
        return $this;
    }

    /**
     * Gets as documentation.
     *
     * @return \FirebirdOData\ODataMetadata\MetadataV2\edm\TDocumentationType
     */
    public function getDocumentation()
    {
        return $this->documentation;
    }

    /**
     * Sets a new documentation.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV2\edm\TDocumentationType $documentation
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
     * @param
     * \FirebirdOData\OData\ODataMetadata\MetadataV2\edm\EntityContainer\AssociationSetAnonymousType\EndAnonymousType
     * $end
     * @return self
     */
    public function addToEnd(EndAnonymousType $end)
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
     * @return
     * \FirebirdOData\OData\ODataMetadata\MetadataV2\edm\EntityContainer\AssociationSetAnonymousType\EndAnonymousType[]
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Sets a new end.
     *
     * @param
     * \FirebirdOData\OData\ODataMetadata\MetadataV2\edm\EntityContainer\AssociationSetAnonymousType\EndAnonymousType[]
     * $end
     * @return self
     */
    public function setEnd(array $end)
    {
        $this->end = $end;
        return $this;
    }
}
