<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MacOSImportedPFXCertificateProfile File
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
* MacOSImportedPFXCertificateProfile class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MacOSImportedPFXCertificateProfile extends MacOSCertificateProfileBase
{
    /**
    * Gets the intendedPurpose
    * Intended Purpose of the Certificate Profile - which could be Unassigned, SmimeEncryption, SmimeSigning etc. Possible values are: unassigned, smimeEncryption, smimeSigning, vpn, wifi.
    *
    * @return IntendedPurpose|null The intendedPurpose
    */
    public function getIntendedPurpose()
    {
        if (array_key_exists("intendedPurpose", $this->_propDict) && !is_null($this->_propDict["intendedPurpose"])) {
            if (is_a($this->_propDict["intendedPurpose"], "\Beta\Microsoft\Graph\Model\IntendedPurpose")) {
                return $this->_propDict["intendedPurpose"];
            } else {
                $this->_propDict["intendedPurpose"] = new IntendedPurpose($this->_propDict["intendedPurpose"]);
                return $this->_propDict["intendedPurpose"];
            }
        }
        return null;
    }
    
    /**
    * Sets the intendedPurpose
    * Intended Purpose of the Certificate Profile - which could be Unassigned, SmimeEncryption, SmimeSigning etc. Possible values are: unassigned, smimeEncryption, smimeSigning, vpn, wifi.
    *
    * @param IntendedPurpose $val The intendedPurpose
    *
    * @return MacOSImportedPFXCertificateProfile
    */
    public function setIntendedPurpose($val)
    {
        $this->_propDict["intendedPurpose"] = $val;
        return $this;
    }
    

     /** 
     * Gets the managedDeviceCertificateStates
    * Certificate state for devices
     *
     * @return ManagedDeviceCertificateState[]|null The managedDeviceCertificateStates
     */
    public function getManagedDeviceCertificateStates()
    {
        if (array_key_exists('managedDeviceCertificateStates', $this->_propDict) && !is_null($this->_propDict['managedDeviceCertificateStates'])) {
           $managedDeviceCertificateStates = [];
           if (count($this->_propDict['managedDeviceCertificateStates']) > 0 && is_a($this->_propDict['managedDeviceCertificateStates'][0], 'ManagedDeviceCertificateState')) {
              return $this->_propDict;
           }
           foreach ($this->_propDict['managedDeviceCertificateStates'] as $singleValue) {
              $managedDeviceCertificateStates []= new ManagedDeviceCertificateState($singleValue);
           }
           $this->_propDict['managedDeviceCertificateStates'] = $managedDeviceCertificateStates;
           return $this->_propDict['managedDeviceCertificateStates'];
        }
        return null;
    }
    
    /** 
    * Sets the managedDeviceCertificateStates
    * Certificate state for devices
    *
    * @param ManagedDeviceCertificateState[] $val The managedDeviceCertificateStates
    *
    * @return MacOSImportedPFXCertificateProfile
    */
    public function setManagedDeviceCertificateStates($val)
    {
        $this->_propDict["managedDeviceCertificateStates"] = $val;
        return $this;
    }
    
}
