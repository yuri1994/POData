<?php
/**
 * Created by PhpStorm.
 * User: Doc
 * Date: 5/1/2017
 * Time: 9:09 PM.
 */
namespace FirebirdOData\ODataMetadata\MetadataV3\edm\ssdl\IsOKTraits;

use FirebirdOData\ODataMetadata\xsdRestrictions;

trait TUndottedIdentifierTrait
{
    use xsdRestrictions;

    public function isTUndottedIdentifierValid($string)
    {
        // no periods
        $regex = '/[^.]{1,}/';
        return $this->matchesRegexPattern($regex, $string);
    }
}
