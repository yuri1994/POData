<?php

namespace AlgoWeb\ODataMetadata\MetadataV1\edm\ssdl;

use AlgoWeb\ODataMetadata\IsOK;

/**
 * Class representing TConstraintType.
 *
 * XSD Type: TConstraint
 */
class TConstraintType extends IsOK
{

    /**
     * @property \AlgoWeb\ODataMetadata\MetadataV1\edm\ssdl\TDocumentationType $documentation
     */
    private $documentation = null;

    /**
     * @property \AlgoWeb\ODataMetadata\MetadataV1\edm\ssdl\TReferentialConstraintRoleElementType $principal
     */
    private $principal = null;

    /**
     * @property \AlgoWeb\ODataMetadata\MetadataV1\edm\ssdl\TReferentialConstraintRoleElementType $dependent
     */
    private $dependent = null;

    /**
     * Gets as documentation.
     *
     * @return \AlgoWeb\ODataMetadata\MetadataV1\edm\ssdl\TDocumentationType
     */
    public function getDocumentation()
    {
        return $this->documentation;
    }

    /**
     * Sets a new documentation.
     *
     * @param  \AlgoWeb\ODataMetadata\MetadataV1\edm\ssdl\TDocumentationType $documentation
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
     * @return \AlgoWeb\ODataMetadata\MetadataV1\edm\ssdl\TReferentialConstraintRoleElementType
     */
    public function getPrincipal()
    {
        return $this->principal;
    }

    /**
     * Sets a new principal.
     *
     * @param  \AlgoWeb\ODataMetadata\MetadataV1\edm\ssdl\TReferentialConstraintRoleElementType $principal
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
     * @return \AlgoWeb\ODataMetadata\MetadataV1\edm\ssdl\TReferentialConstraintRoleElementType
     */
    public function getDependent()
    {
        return $this->dependent;
    }

    /**
     * Sets a new dependent.
     *
     * @param  \AlgoWeb\ODataMetadata\MetadataV1\edm\ssdl\TReferentialConstraintRoleElementType $dependent
     * @return self
     */
    public function setDependent(TReferentialConstraintRoleElementType $dependent)
    {
        $this->dependent = $dependent;
        return $this;
    }
}
