<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ApprovalWorkflowProvider File
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
* ApprovalWorkflowProvider class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ApprovalWorkflowProvider extends Entity
{
    /**
    * Gets the displayName
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
    *
    * @param string $val The displayName
    *
    * @return ApprovalWorkflowProvider
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    

     /** 
     * Gets the businessFlows
     *
     * @return BusinessFlow[]|null The businessFlows
     */
    public function getBusinessFlows()
    {
        if (array_key_exists('businessFlows', $this->_propDict) && !is_null($this->_propDict['businessFlows'])) {
           $businessFlows = [];
           if (count($this->_propDict['businessFlows']) > 0 && is_a($this->_propDict['businessFlows'][0], 'BusinessFlow')) {
              return $this->_propDict;
           }
           foreach ($this->_propDict['businessFlows'] as $singleValue) {
              $businessFlows []= new BusinessFlow($singleValue);
           }
           $this->_propDict['businessFlows'] = $businessFlows;
           return $this->_propDict['businessFlows'];
        }
        return null;
    }
    
    /** 
    * Sets the businessFlows
    *
    * @param BusinessFlow[] $val The businessFlows
    *
    * @return ApprovalWorkflowProvider
    */
    public function setBusinessFlows($val)
    {
        $this->_propDict["businessFlows"] = $val;
        return $this;
    }
    

     /** 
     * Gets the businessFlowsWithRequestsAwaitingMyDecision
     *
     * @return BusinessFlow[]|null The businessFlowsWithRequestsAwaitingMyDecision
     */
    public function getBusinessFlowsWithRequestsAwaitingMyDecision()
    {
        if (array_key_exists('businessFlowsWithRequestsAwaitingMyDecision', $this->_propDict) && !is_null($this->_propDict['businessFlowsWithRequestsAwaitingMyDecision'])) {
           $businessFlowsWithRequestsAwaitingMyDecision = [];
           if (count($this->_propDict['businessFlowsWithRequestsAwaitingMyDecision']) > 0 && is_a($this->_propDict['businessFlowsWithRequestsAwaitingMyDecision'][0], 'BusinessFlow')) {
              return $this->_propDict;
           }
           foreach ($this->_propDict['businessFlowsWithRequestsAwaitingMyDecision'] as $singleValue) {
              $businessFlowsWithRequestsAwaitingMyDecision []= new BusinessFlow($singleValue);
           }
           $this->_propDict['businessFlowsWithRequestsAwaitingMyDecision'] = $businessFlowsWithRequestsAwaitingMyDecision;
           return $this->_propDict['businessFlowsWithRequestsAwaitingMyDecision'];
        }
        return null;
    }
    
    /** 
    * Sets the businessFlowsWithRequestsAwaitingMyDecision
    *
    * @param BusinessFlow[] $val The businessFlowsWithRequestsAwaitingMyDecision
    *
    * @return ApprovalWorkflowProvider
    */
    public function setBusinessFlowsWithRequestsAwaitingMyDecision($val)
    {
        $this->_propDict["businessFlowsWithRequestsAwaitingMyDecision"] = $val;
        return $this;
    }
    

     /** 
     * Gets the policyTemplates
     *
     * @return GovernancePolicyTemplate[]|null The policyTemplates
     */
    public function getPolicyTemplates()
    {
        if (array_key_exists('policyTemplates', $this->_propDict) && !is_null($this->_propDict['policyTemplates'])) {
           $policyTemplates = [];
           if (count($this->_propDict['policyTemplates']) > 0 && is_a($this->_propDict['policyTemplates'][0], 'GovernancePolicyTemplate')) {
              return $this->_propDict;
           }
           foreach ($this->_propDict['policyTemplates'] as $singleValue) {
              $policyTemplates []= new GovernancePolicyTemplate($singleValue);
           }
           $this->_propDict['policyTemplates'] = $policyTemplates;
           return $this->_propDict['policyTemplates'];
        }
        return null;
    }
    
    /** 
    * Sets the policyTemplates
    *
    * @param GovernancePolicyTemplate[] $val The policyTemplates
    *
    * @return ApprovalWorkflowProvider
    */
    public function setPolicyTemplates($val)
    {
        $this->_propDict["policyTemplates"] = $val;
        return $this;
    }
    
}
