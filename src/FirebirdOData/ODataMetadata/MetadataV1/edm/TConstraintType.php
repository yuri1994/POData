<?php

namespace FirebirdOData\ODataMetadata\MetadataV1\edm;

use FirebirdOData\ODataMetadata\IsOK;

/**
 * Class representing TConstraintType.
 *
 * XSD Type: TConstraint
 */
class TConstraintType extends IsOK
{

    /**
     * @property \FirebirdOData\ODataMetadata\MetadataV1\edm\TDocumentationType $documentation
     */
    private $documentation = null;

    /**
     * @property \FirebirdOData\ODataMetadata\MetadataV1\edm\TReferentialConstraintRoleElementType $principal
     */
    private $principal = null;

    /**
     * @property \FirebirdOData\ODataMetadata\MetadataV1\edm\TReferentialConstraintRoleElementType $dependent
     */
    private $dependent = null;

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

    /**
     * Gets as principal.
     *
     * @return \FirebirdOData\ODataMetadata\MetadataV1\edm\TReferentialConstraintRoleElementType
     */
    public function getPrincipal()
    {
        return $this->principal;
    }

    /**
     * Sets a new principal.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV1\edm\TReferentialConstraintRoleElementType $principal
     * @return self
     */
    public function setPrincipal(TReferentialConstraintRoleElementType $principal)
    {
        $this->principal = $principal;
        return $this;
    }

    /**
     * Gets as dependent.
     *
     * @return \FirebirdOData\ODataMetadata\MetadataV1\edm\TReferentialConstraintRoleElementType
     */
    public function getDependent()
    {
        return $this->dependent;
    }

    /**
     * Sets a new dependent.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV1\edm\TReferentialConstraintRoleElementType $dependent
     * @return self
     */
    public function setDependent(TReferentialConstraintRoleElementType $dependent)
    {
        $this->dependent = $dependent;
        return $this;
    }
}
