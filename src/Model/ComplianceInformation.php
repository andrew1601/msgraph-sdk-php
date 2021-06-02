<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ComplianceInformation File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;
/**
* ComplianceInformation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ComplianceInformation extends Entity
{

    /**
    * Gets the certificationControls
    * Collection of the certification controls associated with certification
    *
    * @return CertificationControl[]|null The certificationControls
    */
    public function getCertificationControls()
    {
        if (array_key_exists("certificationControls", $this->_propDict) && !is_null($this->_propDict["certificationControls"])) {
       
            if(count($this->_propDict['certificationControls']) === 0){
              return $this->_propDict['certificationControls'];
            }
            if (is_a($this->_propDict['certificationControls'][0], ' CertificationControl')) {
               return $this->_propDict['certificationControls'];
            }
            $certificationControls = [];
            foreach ($this->_propDict['certificationControls'] as $singleValue) {
               $certificationControls []= new CertificationControl($singleValue);
            }
            $this->_propDict['certificationControls'] = $certificationControls;
            return $this->_propDict['certificationControls'];
            }
        return null;
    }

    /**
    * Sets the certificationControls
    * Collection of the certification controls associated with certification
    *
    * @param CertificationControl[] $val The value to assign to the certificationControls
    *
    * @return ComplianceInformation The ComplianceInformation
    */
    public function setCertificationControls($val)
    {
        $this->_propDict["certificationControls"] = $val;
         return $this;
    }
    /**
    * Gets the certificationName
    * Compliance certification name (for example, ISO 27018:2014, GDPR, FedRAMP, NIST 800-171)
    *
    * @return string|null The certificationName
    */
    public function getCertificationName()
    {
        if (array_key_exists("certificationName", $this->_propDict)) {
            return $this->_propDict["certificationName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the certificationName
    * Compliance certification name (for example, ISO 27018:2014, GDPR, FedRAMP, NIST 800-171)
    *
    * @param string $val The value of the certificationName
    *
    * @return ComplianceInformation
    */
    public function setCertificationName($val)
    {
        $this->_propDict["certificationName"] = $val;
        return $this;
    }
}
