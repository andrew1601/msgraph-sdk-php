<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsInformationProtectionProxiedDomainCollection File
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
* WindowsInformationProtectionProxiedDomainCollection class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WindowsInformationProtectionProxiedDomainCollection extends Entity
{
    /**
    * Gets the displayName
    * Display name
    *
    * @return string|null The displayName
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
    * Display name
    *
    * @param string $val The value of the displayName
    *
    * @return WindowsInformationProtectionProxiedDomainCollection
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the proxiedDomains
    * Collection of proxied domains
    *
    * @return ProxiedDomain[]|null The proxiedDomains
    */
    public function getProxiedDomains()
    {
        if (array_key_exists("proxiedDomains", $this->_propDict) && !is_null($this->_propDict["proxiedDomains"])) {
       
            if(count($this->_propDict['proxiedDomains']) === 0){
              return $this->_propDict['proxiedDomains'];
            }
            if (is_a($this->_propDict['proxiedDomains'][0], ' ProxiedDomain')) {
               return $this->_propDict['proxiedDomains'];
            }
            $proxiedDomains = [];
            foreach ($this->_propDict['proxiedDomains'] as $singleValue) {
               $proxiedDomains []= new ProxiedDomain($singleValue);
            }
            $this->_propDict['proxiedDomains'] = $proxiedDomains;
            return $this->_propDict['proxiedDomains'];
            }
        return null;
    }

    /**
    * Sets the proxiedDomains
    * Collection of proxied domains
    *
    * @param ProxiedDomain[] $val The value to assign to the proxiedDomains
    *
    * @return WindowsInformationProtectionProxiedDomainCollection The WindowsInformationProtectionProxiedDomainCollection
    */
    public function setProxiedDomains($val)
    {
        $this->_propDict["proxiedDomains"] = $val;
         return $this;
    }
}
