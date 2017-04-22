<?php
namespace common\components;

/**
 * This extension of the Request component can be used to replace parts of the 
 * requested url.
 * 
 * It has to be enabled in the 'components' area of the main configuration files
 * for the front- and backend:
 * 
 * eg: If you want to replace '/frontend/web' from the url's, put this in
 *     frontend/config.main.php in the 'components' section.
 * 
 *      'request'=>[
 *          'class' => 'common\components\Request',
 *          'web'=> '/frontend/web'
 *      ]
 * 
 *
 */
class Request extends \yii\web\Request
{
    public $web;
    public $adminUrl;

    /**
     * Takes the base url from the parent class and replaces the 'web' url that
     * you defined with an empty string:
     * 
     *  eg: the 'web' url is set to 'frontend/web'
     *      www.mydomain.com/frontend/web becomes www.mydomain.com/
     * 
     * @return  string
     */
    public function getBaseUrl()
    {
        return str_replace($this->web, '', parent::getBaseUrl()) . $this->adminUrl;
    }


    /**
     * This function ensures that www.mydomain.com/admin (without trailing slash) will not
     * throw a 404 error
     * 
     * @return  string
     */
    public function resolvePathInfo()
    {
        if ($this->getUrl() === $this->adminUrl) {
            return '';
        } else {
            return parent::resolvePathInfo();
        }
    }
}
