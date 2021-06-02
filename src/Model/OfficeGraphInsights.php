<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OfficeGraphInsights File
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
* OfficeGraphInsights class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OfficeGraphInsights extends Entity
{

     /** 
     * Gets the shared
    * Access this property from the derived type itemInsights.
     *
     * @return SharedInsight[]|null The shared
     */
    public function getShared()
    {
        if (array_key_exists('shared', $this->_propDict) && !is_null($this->_propDict['shared'])) {
           $shared = [];
           if (count($this->_propDict['shared']) > 0 && is_a($this->_propDict['shared'][0], 'SharedInsight')) {
              return $this->_propDict;
           }
           foreach ($this->_propDict['shared'] as $singleValue) {
              $shared []= new SharedInsight($singleValue);
           }
           $this->_propDict['shared'] = $shared;
           return $this->_propDict['shared'];
        }
        return null;
    }
    
    /** 
    * Sets the shared
    * Access this property from the derived type itemInsights.
    *
    * @param SharedInsight[] $val The shared
    *
    * @return OfficeGraphInsights
    */
    public function setShared($val)
    {
        $this->_propDict["shared"] = $val;
        return $this;
    }
    

     /** 
     * Gets the trending
    * Access this property from the derived type itemInsights.
     *
     * @return Trending[]|null The trending
     */
    public function getTrending()
    {
        if (array_key_exists('trending', $this->_propDict) && !is_null($this->_propDict['trending'])) {
           $trending = [];
           if (count($this->_propDict['trending']) > 0 && is_a($this->_propDict['trending'][0], 'Trending')) {
              return $this->_propDict;
           }
           foreach ($this->_propDict['trending'] as $singleValue) {
              $trending []= new Trending($singleValue);
           }
           $this->_propDict['trending'] = $trending;
           return $this->_propDict['trending'];
        }
        return null;
    }
    
    /** 
    * Sets the trending
    * Access this property from the derived type itemInsights.
    *
    * @param Trending[] $val The trending
    *
    * @return OfficeGraphInsights
    */
    public function setTrending($val)
    {
        $this->_propDict["trending"] = $val;
        return $this;
    }
    

     /** 
     * Gets the used
    * Access this property from the derived type itemInsights.
     *
     * @return UsedInsight[]|null The used
     */
    public function getUsed()
    {
        if (array_key_exists('used', $this->_propDict) && !is_null($this->_propDict['used'])) {
           $used = [];
           if (count($this->_propDict['used']) > 0 && is_a($this->_propDict['used'][0], 'UsedInsight')) {
              return $this->_propDict;
           }
           foreach ($this->_propDict['used'] as $singleValue) {
              $used []= new UsedInsight($singleValue);
           }
           $this->_propDict['used'] = $used;
           return $this->_propDict['used'];
        }
        return null;
    }
    
    /** 
    * Sets the used
    * Access this property from the derived type itemInsights.
    *
    * @param UsedInsight[] $val The used
    *
    * @return OfficeGraphInsights
    */
    public function setUsed($val)
    {
        $this->_propDict["used"] = $val;
        return $this;
    }
    
}
