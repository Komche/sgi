<?php

class HttpRequest
{
    /**
     * default controller class
     */
    const CONTROLLER_CLASSNAME = 'Table';

    /**
     * position of controller
     */
    protected $controllerkey = 0;
    protected $apikey = 1;

    /**
     * site base url
     */
    protected $baseUrl;

    /**
     * current controller class name
     */
    protected $controllerClassName;

    /**
     * list of all parameters $_GET and $_POST
     */
    protected $parameters;

    public function __construct()
    {
        // set defaults
        $this->controllerClassName = self::CONTROLLER_CLASSNAME;
    }

    public function setBaseUrl($url)
    {
        $this->baseUrl = $url;
        return $this;
    }

    public function setParameters($params)
    {
        $this->parameters = $params;
        return $this;
    }

    public function getParameters()
    {
        if ($this->parameters == null) {
            $this->parameters = array();
        }
        return $this->parameters;
    }

    public function getControllerClassName()
    {
        return $this->controllerClassName;
    }

    /**
     * get value of $_GET or $_POST. $_POST override the same parameter in $_GET
     * 
     * @param type $name
     * @param type $default
     * @param type $filter
     * @return type 
     */
    public function getParam($name, $default = null)
    {
        if (isset($this->parameters[$name])) {
            return $this->parameters[$name];
        }
        return $default;
    }

    public function getRequestUri()
    {
        if (!isset($_SERVER['REQUEST_URI'])) {
            return '';
        }

        $uri = $_SERVER['REQUEST_URI'];
        $uri = trim(str_replace($this->baseUrl, '', $uri), '/');

        return $uri;
    }

    public function createRequest()
    {
        $uri = $this->getRequestUri();

        // Uri parts
        $uriParts = explode('/', $uri);

        // if we are in index page
        if (!isset($uriParts[$this->controllerkey])) {
            return $this;
        }

        // format the controller class name
        $this->controllerClassName = $this->formatControllerName($uriParts[$this->controllerkey]);

        // remove controller name from uri
        unset($uriParts[$this->controllerkey]);

        // if ($_SERVER["SERVER_NAME"] == 'localhost') {
        //     // remove apikey name from uri
            unset($uriParts[$this->apikey]);
        // }

        // if there are no parameters left
        if (empty($uriParts)) {
            return $this;
        }


        // print_r($uriParts); die;
        // find and setup parameters starting from $_GET to $_POST
        foreach ($uriParts as $key => $value) {
            if ($value == 'object') {
                $this->parameters['table_1'] = next($uriParts);
            } elseif ($value == $this->parameters['table_1']) {
                $this->parameters['property_1'] = next($uriParts);
            } elseif ($value == $this->parameters[ 'property_1']) {
                $this->parameters['val_1'] = next($uriParts);
            }
        }

        // now add $_POST data
        if ($_POST) {
            foreach ($_POST as $postKey => $postData) {
                $this->parameters[$postKey] = $postData;
            }
        }

        return $this;
    }

    /**
     * word seperator is '-'
     * convert the string from dash seperator to camel case
     * 
     * @param type $unformatted
     * @return type 
     */
    protected function formatControllerName($unformatted)
    {
        if (strpos($unformatted, '-') !== false) {
            $formattedName = array_map('ucwords', explode('-', $unformatted));
            $formattedName = join('', $formattedName);
        } else {
            // string is one word
            $formattedName = ucwords($unformatted);
        }

        // if the string starts with number
        if (is_numeric(substr($formattedName, 0, 1))) {
            $part = $part == $this->controllerkey ? 'controller' : 'action';
            throw new Exception('Incorrect ' . $part . ' name "' . $formattedName . '".');
        }
        return ltrim($formattedName, '_');
    }
}