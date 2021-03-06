<?php

namespace FirebirdOData\ODataMetadata\MetadataV3\edm\ssdl;

use FirebirdOData\ODataMetadata\IsOK;

/**
 * Class representing TConstraintType.
 *
 * XSD Type: TConstraint
 */
class TConstraintType extends IsOK
{

    /**
     * @property \FirebirdOData\ODataMetadata\MetadataV3\edm\ssdl\TDocumentationType $documentation
     */
    private $documentation = null;

    /**
     * @property \FirebirdOData\ODataMetadata\MetadataV3\edm\ssdl\TReferentialConstraintRoleElementType $principal
     */
    private $principal = null;

    /**
     * @property \FirebirdOData\ODataMetadata\MetadataV3\edm\ssdl\TReferentialConstraintRoleElementType $dependent
     */
    private $dependent = null;

    /**
     * Gets as documentation.
     *
     * @return \FirebirdOData\ODataMetadata\MetadataV3\edm\ssdl\TDocumentationType
     */
    public function getDocumentation()
    {
        return $this->documentation;
    }

    /**
     * Sets a new documentation.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV3\edm\ssdl\TDocumentationType $documentation
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
     * Gets as principal.
     *
     * @return \FirebirdOData\ODataMetadata\MetadataV3\edm\ssdl\TReferentialConstraintRoleElementType
     */
    public function getPrincipal()
    {
        return $this->principal;
    }

    /**
     * Sets a new principal.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV3\edm\ssdl\TReferentialConstraintRoleElementType $principal
     * @return self
     */
    public function setPrincipal(TReferentialConstraintRoleElementType $principal)
    {
        $msg = null;
        if (!$principal->isOK($msg)) {
            throw new \InvalidArgumentException($msg);
        }
        $this->principal = $principal;
        return $this;
    }

    /**
     * Gets as dependent.
     *
     * @return \FirebirdOData\ODataMetadata\MetadataV3\edm\ssdl\TReferentialConstraintRoleElementType
     */
    public function getDependent()
    {
        return $this->dependent;
    }

    /**
     * Sets a new dependent.
     *
     * @param  \FirebirdOData\ODataMetadata\MetadataV3\edm\ssdl\TReferentialConstraintRoleElementType $dependent
     * @return self
     */
    public function setDependent(TReferentialConstraintRoleElementType $dependent)
    {
        $msg = null;
        if (!$dependent->isOK($msg)) {
            throw new \InvalidArgumentException($msg);
        }
        $this->dependent = $dependent;
        return $this;
    }

    public function isOK(&$msg = null)
    {
        if (!$this->isObjectNullOrOK($this->documentation, $msg)) {
            return false;
        }
        if (!$this->isObjectNullOrOK($this->principal, $msg)) {
            return false;
        }
        if (!$this->isObjectNullOrOK($this->dependent, $msg)) {
            return false;
        }
        return true;
    }
}
