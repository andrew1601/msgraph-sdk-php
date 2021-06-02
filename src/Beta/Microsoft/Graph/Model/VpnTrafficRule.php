<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* VpnTrafficRule File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;
/**
* VpnTrafficRule class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class VpnTrafficRule extends Entity
{
    /**
    * Gets the appId
    * App identifier, if this traffic rule is triggered by an app.
    *
    * @return string|null The appId
    */
    public function getAppId()
    {
        if (array_key_exists("appId", $this->_propDict)) {
            return $this->_propDict["appId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the appId
    * App identifier, if this traffic rule is triggered by an app.
    *
    * @param string $val The value of the appId
    *
    * @return VpnTrafficRule
    */
    public function setAppId($val)
    {
        $this->_propDict["appId"] = $val;
        return $this;
    }

    /**
    * Gets the appType
    * App type, if this traffic rule is triggered by an app. Possible values are: none, desktop, universal.
    *
    * @return VpnTrafficRuleAppType|null The appType
    */
    public function getAppType()
    {
        if (array_key_exists("appType", $this->_propDict) && !is_null($this->_propDict["appType"])) {
     
            if (is_a($this->_propDict["appType"], "\Beta\Microsoft\Graph\Model\VpnTrafficRuleAppType")) {
                return $this->_propDict["appType"];
            } else {
                $this->_propDict["appType"] = new VpnTrafficRuleAppType($this->_propDict["appType"]);
                return $this->_propDict["appType"];
            } 
             }
        return null;
    }

    /**
    * Sets the appType
    * App type, if this traffic rule is triggered by an app. Possible values are: none, desktop, universal.
    *
    * @param VpnTrafficRuleAppType $val The value to assign to the appType
    *
    * @return VpnTrafficRule The VpnTrafficRule
    */
    public function setAppType($val)
    {
        $this->_propDict["appType"] = $val;
         return $this;
    }
    /**
    * Gets the claims
    * Claims associated with this traffic rule.
    *
    * @return string|null The claims
    */
    public function getClaims()
    {
        if (array_key_exists("claims", $this->_propDict)) {
            return $this->_propDict["claims"];
        } else {
            return null;
        }
    }

    /**
    * Sets the claims
    * Claims associated with this traffic rule.
    *
    * @param string $val The value of the claims
    *
    * @return VpnTrafficRule
    */
    public function setClaims($val)
    {
        $this->_propDict["claims"] = $val;
        return $this;
    }

    /**
    * Gets the localAddressRanges
    * Local address range. This collection can contain a maximum of 500 elements.
    *
    * @return IPv4Range[]|null The localAddressRanges
    */
    public function getLocalAddressRanges()
    {
        if (array_key_exists("localAddressRanges", $this->_propDict) && !is_null($this->_propDict["localAddressRanges"])) {
       
            if(count($this->_propDict['localAddressRanges']) === 0){
              return $this->_propDict['localAddressRanges'];
            }
            if (is_a($this->_propDict['localAddressRanges'][0], ' IPv4Range')) {
               return $this->_propDict['localAddressRanges'];
            }
            $localAddressRanges = [];
            foreach ($this->_propDict['localAddressRanges'] as $singleValue) {
               $localAddressRanges []= new IPv4Range($singleValue);
            }
            $this->_propDict['localAddressRanges'] = $localAddressRanges;
            return $this->_propDict['localAddressRanges'];
            }
        return null;
    }

    /**
    * Sets the localAddressRanges
    * Local address range. This collection can contain a maximum of 500 elements.
    *
    * @param IPv4Range[] $val The value to assign to the localAddressRanges
    *
    * @return VpnTrafficRule The VpnTrafficRule
    */
    public function setLocalAddressRanges($val)
    {
        $this->_propDict["localAddressRanges"] = $val;
         return $this;
    }

    /**
    * Gets the localPortRanges
    * Local port range can be set only when protocol is either TCP or UDP (6 or 17). This collection can contain a maximum of 500 elements.
    *
    * @return NumberRange[]|null The localPortRanges
    */
    public function getLocalPortRanges()
    {
        if (array_key_exists("localPortRanges", $this->_propDict) && !is_null($this->_propDict["localPortRanges"])) {
       
            if(count($this->_propDict['localPortRanges']) === 0){
              return $this->_propDict['localPortRanges'];
            }
            if (is_a($this->_propDict['localPortRanges'][0], ' NumberRange')) {
               return $this->_propDict['localPortRanges'];
            }
            $localPortRanges = [];
            foreach ($this->_propDict['localPortRanges'] as $singleValue) {
               $localPortRanges []= new NumberRange($singleValue);
            }
            $this->_propDict['localPortRanges'] = $localPortRanges;
            return $this->_propDict['localPortRanges'];
            }
        return null;
    }

    /**
    * Sets the localPortRanges
    * Local port range can be set only when protocol is either TCP or UDP (6 or 17). This collection can contain a maximum of 500 elements.
    *
    * @param NumberRange[] $val The value to assign to the localPortRanges
    *
    * @return VpnTrafficRule The VpnTrafficRule
    */
    public function setLocalPortRanges($val)
    {
        $this->_propDict["localPortRanges"] = $val;
         return $this;
    }
    /**
    * Gets the name
    * Name.
    *
    * @return string|null The name
    */
    public function getName()
    {
        if (array_key_exists("name", $this->_propDict)) {
            return $this->_propDict["name"];
        } else {
            return null;
        }
    }

    /**
    * Sets the name
    * Name.
    *
    * @param string $val The value of the name
    *
    * @return VpnTrafficRule
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }
    /**
    * Gets the protocols
    * Protocols (0-255). Valid values 0 to 255
    *
    * @return int|null The protocols
    */
    public function getProtocols()
    {
        if (array_key_exists("protocols", $this->_propDict)) {
            return $this->_propDict["protocols"];
        } else {
            return null;
        }
    }

    /**
    * Sets the protocols
    * Protocols (0-255). Valid values 0 to 255
    *
    * @param int $val The value of the protocols
    *
    * @return VpnTrafficRule
    */
    public function setProtocols($val)
    {
        $this->_propDict["protocols"] = $val;
        return $this;
    }

    /**
    * Gets the remoteAddressRanges
    * Remote address range. This collection can contain a maximum of 500 elements.
    *
    * @return IPv4Range[]|null The remoteAddressRanges
    */
    public function getRemoteAddressRanges()
    {
        if (array_key_exists("remoteAddressRanges", $this->_propDict) && !is_null($this->_propDict["remoteAddressRanges"])) {
       
            if(count($this->_propDict['remoteAddressRanges']) === 0){
              return $this->_propDict['remoteAddressRanges'];
            }
            if (is_a($this->_propDict['remoteAddressRanges'][0], ' IPv4Range')) {
               return $this->_propDict['remoteAddressRanges'];
            }
            $remoteAddressRanges = [];
            foreach ($this->_propDict['remoteAddressRanges'] as $singleValue) {
               $remoteAddressRanges []= new IPv4Range($singleValue);
            }
            $this->_propDict['remoteAddressRanges'] = $remoteAddressRanges;
            return $this->_propDict['remoteAddressRanges'];
            }
        return null;
    }

    /**
    * Sets the remoteAddressRanges
    * Remote address range. This collection can contain a maximum of 500 elements.
    *
    * @param IPv4Range[] $val The value to assign to the remoteAddressRanges
    *
    * @return VpnTrafficRule The VpnTrafficRule
    */
    public function setRemoteAddressRanges($val)
    {
        $this->_propDict["remoteAddressRanges"] = $val;
         return $this;
    }

    /**
    * Gets the remotePortRanges
    * Remote port range can be set only when protocol is either TCP or UDP (6 or 17). This collection can contain a maximum of 500 elements.
    *
    * @return NumberRange[]|null The remotePortRanges
    */
    public function getRemotePortRanges()
    {
        if (array_key_exists("remotePortRanges", $this->_propDict) && !is_null($this->_propDict["remotePortRanges"])) {
       
            if(count($this->_propDict['remotePortRanges']) === 0){
              return $this->_propDict['remotePortRanges'];
            }
            if (is_a($this->_propDict['remotePortRanges'][0], ' NumberRange')) {
               return $this->_propDict['remotePortRanges'];
            }
            $remotePortRanges = [];
            foreach ($this->_propDict['remotePortRanges'] as $singleValue) {
               $remotePortRanges []= new NumberRange($singleValue);
            }
            $this->_propDict['remotePortRanges'] = $remotePortRanges;
            return $this->_propDict['remotePortRanges'];
            }
        return null;
    }

    /**
    * Sets the remotePortRanges
    * Remote port range can be set only when protocol is either TCP or UDP (6 or 17). This collection can contain a maximum of 500 elements.
    *
    * @param NumberRange[] $val The value to assign to the remotePortRanges
    *
    * @return VpnTrafficRule The VpnTrafficRule
    */
    public function setRemotePortRanges($val)
    {
        $this->_propDict["remotePortRanges"] = $val;
         return $this;
    }

    /**
    * Gets the routingPolicyType
    * When app triggered, indicates whether to enable split tunneling along this route. Possible values are: none, splitTunnel, forceTunnel.
    *
    * @return VpnTrafficRuleRoutingPolicyType|null The routingPolicyType
    */
    public function getRoutingPolicyType()
    {
        if (array_key_exists("routingPolicyType", $this->_propDict) && !is_null($this->_propDict["routingPolicyType"])) {
     
            if (is_a($this->_propDict["routingPolicyType"], "\Beta\Microsoft\Graph\Model\VpnTrafficRuleRoutingPolicyType")) {
                return $this->_propDict["routingPolicyType"];
            } else {
                $this->_propDict["routingPolicyType"] = new VpnTrafficRuleRoutingPolicyType($this->_propDict["routingPolicyType"]);
                return $this->_propDict["routingPolicyType"];
            } 
             }
        return null;
    }

    /**
    * Sets the routingPolicyType
    * When app triggered, indicates whether to enable split tunneling along this route. Possible values are: none, splitTunnel, forceTunnel.
    *
    * @param VpnTrafficRuleRoutingPolicyType $val The value to assign to the routingPolicyType
    *
    * @return VpnTrafficRule The VpnTrafficRule
    */
    public function setRoutingPolicyType($val)
    {
        $this->_propDict["routingPolicyType"] = $val;
         return $this;
    }
}
