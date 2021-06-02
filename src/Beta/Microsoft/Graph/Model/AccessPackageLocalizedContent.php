<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AccessPackageLocalizedContent File
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
* AccessPackageLocalizedContent class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AccessPackageLocalizedContent extends Entity
{
    /**
    * Gets the defaultText
    * The fallback string, which is used when a requested localization is not available. Required.
    *
    * @return string|null The defaultText
    */
    public function getDefaultText()
    {
        if (array_key_exists("defaultText", $this->_propDict)) {
            return $this->_propDict["defaultText"];
        } else {
            return null;
        }
    }

    /**
    * Sets the defaultText
    * The fallback string, which is used when a requested localization is not available. Required.
    *
    * @param string $val The value of the defaultText
    *
    * @return AccessPackageLocalizedContent
    */
    public function setDefaultText($val)
    {
        $this->_propDict["defaultText"] = $val;
        return $this;
    }

    /**
    * Gets the localizedTexts
    * Content represented in a format for a specific locale.
    *
    * @return AccessPackageLocalizedText[]|null The localizedTexts
    */
    public function getLocalizedTexts()
    {
        if (array_key_exists("localizedTexts", $this->_propDict) && !is_null($this->_propDict["localizedTexts"])) {
       
            if(count($this->_propDict['localizedTexts']) === 0){
              return $this->_propDict['localizedTexts'];
            }
            if (is_a($this->_propDict['localizedTexts'][0], ' AccessPackageLocalizedText')) {
               return $this->_propDict['localizedTexts'];
            }
            $localizedTexts = [];
            foreach ($this->_propDict['localizedTexts'] as $singleValue) {
               $localizedTexts []= new AccessPackageLocalizedText($singleValue);
            }
            $this->_propDict['localizedTexts'] = $localizedTexts;
            return $this->_propDict['localizedTexts'];
            }
        return null;
    }

    /**
    * Sets the localizedTexts
    * Content represented in a format for a specific locale.
    *
    * @param AccessPackageLocalizedText[] $val The value to assign to the localizedTexts
    *
    * @return AccessPackageLocalizedContent The AccessPackageLocalizedContent
    */
    public function setLocalizedTexts($val)
    {
        $this->_propDict["localizedTexts"] = $val;
         return $this;
    }
}
