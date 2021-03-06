<?php
/**
 * Created by PhpStorm.
 * User: Doc
 * Date: 5/1/2017
 * Time: 9:19 PM.
 */
namespace FirebirdOData\ODataMetadata\MetadataV3\edm\ssdl\IsOKTraits;

trait TStoreGeneratedPatternTrait
{
    public function isTStoreGeneratedPatternValid($string)
    {
        if ('None' == $string) {
            return true;
        }
        if ('Identity' == $string) {
            return true;
        }
        if ('Computed' == $string) {
            return true;
        }
        return false;
    }
}
