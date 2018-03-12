<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* StringKeyAttributeMappingSourceValuePair File
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
* StringKeyAttributeMappingSourceValuePair class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class StringKeyAttributeMappingSourceValuePair extends Entity
{
    /**
    * Gets the key
    *
    * @return string The key
    */
    public function getKey()
    {
        if (array_key_exists("key", $this->_propDict)) {
            return $this->_propDict["key"];
        } else {
            return null;
        }
    }

    /**
    * Sets the key
    *
    * @param string $val The value of the key
    *
    * @return StringKeyAttributeMappingSourceValuePair
    */
    public function setKey($val)
    {
        $this->_propDict["key"] = $val;
        return $this;
    }

    /**
    * Gets the value
    *
    * @return AttributeMappingSource The value
    */
    public function getValue()
    {
        if (array_key_exists("value", $this->_propDict)) {
            if (is_a($this->_propDict["value"], "Microsoft\Graph\Beta\Model\AttributeMappingSource")) {
                return $this->_propDict["value"];
            } else {
                $this->_propDict["value"] = new AttributeMappingSource($this->_propDict["value"]);
                return $this->_propDict["value"];
            }
        }
        return null;
    }

    /**
    * Sets the value
    *
    * @param AttributeMappingSource $val The value to assign to the value
    *
    * @return StringKeyAttributeMappingSourceValuePair The StringKeyAttributeMappingSourceValuePair
    */
    public function setValue($val)
    {
        $this->_propDict["value"] = $val;
         return $this;
    }
}
