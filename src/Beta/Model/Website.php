<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Website File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;
/**
* Website class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class Website extends Entity
{

    /**
    * Gets the type
    * Possible values are: other, home, work, blog, profile.
    *
    * @return WebsiteType The type
    */
    public function getType()
    {
        if (array_key_exists("type", $this->_propDict)) {
            if (is_a($this->_propDict["type"], "Microsoft\Graph\Beta\Model\WebsiteType")) {
                return $this->_propDict["type"];
            } else {
                $this->_propDict["type"] = new WebsiteType($this->_propDict["type"]);
                return $this->_propDict["type"];
            }
        }
        return null;
    }

    /**
    * Sets the type
    * Possible values are: other, home, work, blog, profile.
    *
    * @param WebsiteType $val The value to assign to the type
    *
    * @return Website The Website
    */
    public function setType($val)
    {
        $this->_propDict["type"] = $val;
         return $this;
    }
    /**
    * Gets the address
    * The URL of the website.
    *
    * @return string The address
    */
    public function getAddress()
    {
        if (array_key_exists("address", $this->_propDict)) {
            return $this->_propDict["address"];
        } else {
            return null;
        }
    }

    /**
    * Sets the address
    * The URL of the website.
    *
    * @param string $val The value of the address
    *
    * @return Website
    */
    public function setAddress($val)
    {
        $this->_propDict["address"] = $val;
        return $this;
    }
    /**
    * Gets the displayName
    * The display name of the web site.
    *
    * @return string The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the displayName
    * The display name of the web site.
    *
    * @param string $val The value of the displayName
    *
    * @return Website
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
}
