<?php
namespace Craft;
class GetCurrentSeasonPlugin extends BasePlugin
{
    public function getName()
    {
        return Craft::t('Get Current Season');
    }
    public function getVersion()
    {
        return '1.0';
    }
    public function getDeveloper()
    {
        return 'Akagibi';
    }
    public function getDocumentationUrl()
    {
        return 'https://github.com/akagibi/getcurrentseason';
    }
    public function getDeveloperUrl()
    {
        return 'http://www.akagibi.com/';
    }
    public function hasCpSection()
    {
        return false;
    }
}
