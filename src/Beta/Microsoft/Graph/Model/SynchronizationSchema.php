<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SynchronizationSchema File
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
* SynchronizationSchema class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SynchronizationSchema extends Entity
{

     /** 
     * Gets the synchronizationRules
    * A collection of synchronization rules configured for the synchronizationJob or synchronizationTemplate.
     *
     * @return SynchronizationRule[]|null The synchronizationRules
     */
    public function getSynchronizationRules()
    {
        if (array_key_exists('synchronizationRules', $this->_propDict) && !is_null($this->_propDict['synchronizationRules'])) {
           $synchronizationRules = [];
           if (count($this->_propDict['synchronizationRules']) > 0 && is_a($this->_propDict['synchronizationRules'][0], 'SynchronizationRule')) {
              return $this->_propDict;
           }
           foreach ($this->_propDict['synchronizationRules'] as $singleValue) {
              $synchronizationRules []= new SynchronizationRule($singleValue);
           }
           $this->_propDict['synchronizationRules'] = $synchronizationRules;
           return $this->_propDict['synchronizationRules'];
        }
        return null;
    }
    
    /** 
    * Sets the synchronizationRules
    * A collection of synchronization rules configured for the synchronizationJob or synchronizationTemplate.
    *
    * @param SynchronizationRule[] $val The synchronizationRules
    *
    * @return SynchronizationSchema
    */
    public function setSynchronizationRules($val)
    {
        $this->_propDict["synchronizationRules"] = $val;
        return $this;
    }
    
    /**
    * Gets the version
    * The version of the schema, updated automatically with every schema change.
    *
    * @return string|null The version
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
    * The version of the schema, updated automatically with every schema change.
    *
    * @param string $val The version
    *
    * @return SynchronizationSchema
    */
    public function setVersion($val)
    {
        $this->_propDict["version"] = $val;
        return $this;
    }
    

     /** 
     * Gets the directories
    * Contains the collection of directories and all of their objects.
     *
     * @return DirectoryDefinition[]|null The directories
     */
    public function getDirectories()
    {
        if (array_key_exists('directories', $this->_propDict) && !is_null($this->_propDict['directories'])) {
           $directories = [];
           if (count($this->_propDict['directories']) > 0 && is_a($this->_propDict['directories'][0], 'DirectoryDefinition')) {
              return $this->_propDict;
           }
           foreach ($this->_propDict['directories'] as $singleValue) {
              $directories []= new DirectoryDefinition($singleValue);
           }
           $this->_propDict['directories'] = $directories;
           return $this->_propDict['directories'];
        }
        return null;
    }
    
    /** 
    * Sets the directories
    * Contains the collection of directories and all of their objects.
    *
    * @param DirectoryDefinition[] $val The directories
    *
    * @return SynchronizationSchema
    */
    public function setDirectories($val)
    {
        $this->_propDict["directories"] = $val;
        return $this;
    }
    
}
