<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AppMetadata File
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
* AppMetadata class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AppMetadata extends Entity
{

    /**
    * Gets the data
    *
    * @return AppMetadataEntry[]|null The data
    */
    public function getData()
    {
        if (array_key_exists("data", $this->_propDict) && !is_null($this->_propDict["data"])) {
       
            if(count($this->_propDict['data']) === 0){
              return $this->_propDict['data'];
            }
            if (is_a($this->_propDict['data'][0], ' AppMetadataEntry')) {
               return $this->_propDict['data'];
            }
            $data = [];
            foreach ($this->_propDict['data'] as $singleValue) {
               $data []= new AppMetadataEntry($singleValue);
            }
            $this->_propDict['data'] = $data;
            return $this->_propDict['data'];
            }
        return null;
    }

    /**
    * Sets the data
    *
    * @param AppMetadataEntry[] $val The value to assign to the data
    *
    * @return AppMetadata The AppMetadata
    */
    public function setData($val)
    {
        $this->_propDict["data"] = $val;
         return $this;
    }
    /**
    * Gets the version
    *
    * @return int|null The version
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
    *
    * @param int $val The value of the version
    *
    * @return AppMetadata
    */
    public function setVersion($val)
    {
        $this->_propDict["version"] = $val;
        return $this;
    }
}
