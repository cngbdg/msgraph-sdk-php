<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceConfigurationState File
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
* DeviceConfigurationState class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class DeviceConfigurationState extends Entity
{

     /** 
     * Gets the settingStates
    * Not yet documented
     *
     * @return array The settingStates
     */
    public function getSettingStates()
    {
        if (array_key_exists("settingStates", $this->_propDict)) {
           return $this->_propDict["settingStates"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the settingStates
    * Not yet documented
    *
    * @param DeviceConfigurationSettingState $val The settingStates
    *
    * @return DeviceConfigurationState
    */
    public function setSettingStates($val)
    {
		$this->_propDict["settingStates"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
    * The name of the policy for this policyBase
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
    * The name of the policy for this policyBase
    *
    * @param string $val The displayName
    *
    * @return DeviceConfigurationState
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the version
    * The version of the policy
    *
    * @return int The version
    */
    public function getVersion()
    {
        if (array_key_exists("version", $this->_propDict)) {
            return $this->_propDict["version"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the version
    * The version of the policy
    *
    * @param int $val The version
    *
    * @return DeviceConfigurationState
    */
    public function setVersion($val)
    {
        $this->_propDict["version"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the platformType
    * Platform type that the policy applies to Possible values are: android, iOS, macOS, windowsPhone81, windows81AndLater, windows10AndLater, all.
    *
    * @return PolicyPlatformType The platformType
    */
    public function getPlatformType()
    {
        if (array_key_exists("platformType", $this->_propDict)) {
            if (is_a($this->_propDict["platformType"], "Microsoft\Graph\Beta\Model\PolicyPlatformType")) {
                return $this->_propDict["platformType"];
            } else {
                $this->_propDict["platformType"] = new PolicyPlatformType($this->_propDict["platformType"]);
                return $this->_propDict["platformType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the platformType
    * Platform type that the policy applies to Possible values are: android, iOS, macOS, windowsPhone81, windows81AndLater, windows10AndLater, all.
    *
    * @param PolicyPlatformType $val The platformType
    *
    * @return DeviceConfigurationState
    */
    public function setPlatformType($val)
    {
        $this->_propDict["platformType"] = $val;
        return $this;
    }
    
    /**
    * Gets the state
    * The compliance state of the policy Possible values are: unknown, notApplicable, compliant, remediated, nonCompliant, error, conflict.
    *
    * @return ComplianceStatus The state
    */
    public function getState()
    {
        if (array_key_exists("state", $this->_propDict)) {
            if (is_a($this->_propDict["state"], "Microsoft\Graph\Beta\Model\ComplianceStatus")) {
                return $this->_propDict["state"];
            } else {
                $this->_propDict["state"] = new ComplianceStatus($this->_propDict["state"]);
                return $this->_propDict["state"];
            }
        }
        return null;
    }
    
    /**
    * Sets the state
    * The compliance state of the policy Possible values are: unknown, notApplicable, compliant, remediated, nonCompliant, error, conflict.
    *
    * @param ComplianceStatus $val The state
    *
    * @return DeviceConfigurationState
    */
    public function setState($val)
    {
        $this->_propDict["state"] = $val;
        return $this;
    }
    
    /**
    * Gets the settingCount
    * Count of how many setting a policy holds
    *
    * @return int The settingCount
    */
    public function getSettingCount()
    {
        if (array_key_exists("settingCount", $this->_propDict)) {
            return $this->_propDict["settingCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the settingCount
    * Count of how many setting a policy holds
    *
    * @param int $val The settingCount
    *
    * @return DeviceConfigurationState
    */
    public function setSettingCount($val)
    {
        $this->_propDict["settingCount"] = intval($val);
        return $this;
    }
    
}