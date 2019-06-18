<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CaaSErrorBase File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;
/**
* CaaSErrorBase class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class CaaSErrorBase extends Entity
{
    /**
    * Gets the code
    *
    * @return string The code
    */
    public function getCode()
    {
        if (array_key_exists("code", $this->_propDict)) {
            return $this->_propDict["code"];
        } else {
            return null;
        }
    }

    /**
    * Sets the code
    *
    * @param string $val The value of the code
    *
    * @return CaaSErrorBase
    */
    public function setCode($val)
    {
        $this->_propDict["code"] = $val;
        return $this;
    }
    /**
    * Gets the message
    *
    * @return string The message
    */
    public function getMessage()
    {
        if (array_key_exists("message", $this->_propDict)) {
            return $this->_propDict["message"];
        } else {
            return null;
        }
    }

    /**
    * Sets the message
    *
    * @param string $val The value of the message
    *
    * @return CaaSErrorBase
    */
    public function setMessage($val)
    {
        $this->_propDict["message"] = $val;
        return $this;
    }
    /**
    * Gets the target
    *
    * @return string The target
    */
    public function getTarget()
    {
        if (array_key_exists("target", $this->_propDict)) {
            return $this->_propDict["target"];
        } else {
            return null;
        }
    }

    /**
    * Sets the target
    *
    * @param string $val The value of the target
    *
    * @return CaaSErrorBase
    */
    public function setTarget($val)
    {
        $this->_propDict["target"] = $val;
        return $this;
    }

    /**
    * Gets the innerError
    *
    * @return CaasInnerError The innerError
    */
    public function getInnerError()
    {
        if (array_key_exists("innerError", $this->_propDict)) {
            if (is_a($this->_propDict["innerError"], "Microsoft\Graph\Beta\Model\CaasInnerError")) {
                return $this->_propDict["innerError"];
            } else {
                $this->_propDict["innerError"] = new CaasInnerError($this->_propDict["innerError"]);
                return $this->_propDict["innerError"];
            }
        }
        return null;
    }

    /**
    * Sets the innerError
    *
    * @param CaasInnerError $val The value to assign to the innerError
    *
    * @return CaaSErrorBase The CaaSErrorBase
    */
    public function setInnerError($val)
    {
        $this->_propDict["innerError"] = $val;
         return $this;
    }
}
