<?php

namespace FirebirdOData\ODataMetadata\MetadataV1\edm\EntityContainer\AssociationSetAnonymousType;

use FirebirdOData\ODataMetadata\IsOK;
use FirebirdOData\ODataMetadata\MetadataV1\edm\TDocumentationType;

/**
 * Class representing EndAnonymousType.
 */
class EndAnonymousType extends IsOK
{

    /**
     * @property string $role
     */
    private $role = null;

    /**
     * @property string $entitySet
     */
    private $entitySet = null;

    /**
     * @property \FirebirdOData\ODataMetadata\MetadataV1\edm\TDocumentationType $documentation
     */
    private $documentation = null;

    /**
     * Gets as role.
     *
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Sets a new role.
     *
     * @param  string $role
     * @return self
     */
    public function setRole($role)
    {
        $this->role = $role;
        return $this;
    }

    /**
     * Gets as entitySet.
     *
     * @return string
     */
    public function getEntitySet()
    {
        return $this->entitySet;
    }

    /**
     * Sets a new entitySet.
     *
     * @param  string $entitySet
     * @return self
     */
    public function setEntitySet($entitySet)
    {
        $this->entitySet = $entitySet;
        return $this;
    }

    /**
     * Gets as documentation.
     *
     * @return \FirebirdOData\ODataMetadata\MetadataV1\edm\TDocumentationType
     */
    public function getDocumentation()
    {
        return $this->documentation;
    }

    /**
     * Sets a new documentation.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV1\edm\TDocumentationType $documentation
     * @return self
     */
    public function setDocumentation(TDocumentationType $documentation)
    {
        $this->documentation = $documentation;
        return $this;
    }
}
