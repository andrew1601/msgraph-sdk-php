<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TeamCreatedEventMessageDetail File
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
* TeamCreatedEventMessageDetail class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TeamCreatedEventMessageDetail extends EventMessageDetail
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    */
    public function __construct()
    {
        $this->setODataType("#microsoft.graph.teamCreatedEventMessageDetail");
    }


    /**
    * Gets the initiator
    *
    * @return IdentitySet|null The initiator
    */
    public function getInitiator()
    {
        if (array_key_exists("initiator", $this->_propDict) && !is_null($this->_propDict["initiator"])) {
     
            if (is_a($this->_propDict["initiator"], "\Beta\Microsoft\Graph\Model\IdentitySet")) {
                return $this->_propDict["initiator"];
            } else {
                $this->_propDict["initiator"] = new IdentitySet($this->_propDict["initiator"]);
                return $this->_propDict["initiator"];
            } 
             }
        return null;
    }

    /**
    * Sets the initiator
    *
    * @param IdentitySet $val The value to assign to the initiator
    *
    * @return TeamCreatedEventMessageDetail The TeamCreatedEventMessageDetail
    */
    public function setInitiator($val)
    {
        $this->_propDict["initiator"] = $val;
         return $this;
    }
    /**
    * Gets the teamDescription
    *
    * @return string|null The teamDescription
    */
    public function getTeamDescription()
    {
        if (array_key_exists("teamDescription", $this->_propDict)) {
            return $this->_propDict["teamDescription"];
        } else {
            return null;
        }
    }

    /**
    * Sets the teamDescription
    *
    * @param string $val The value of the teamDescription
    *
    * @return TeamCreatedEventMessageDetail
    */
    public function setTeamDescription($val)
    {
        $this->_propDict["teamDescription"] = $val;
        return $this;
    }
    /**
    * Gets the teamDisplayName
    *
    * @return string|null The teamDisplayName
    */
    public function getTeamDisplayName()
    {
        if (array_key_exists("teamDisplayName", $this->_propDict)) {
            return $this->_propDict["teamDisplayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the teamDisplayName
    *
    * @param string $val The value of the teamDisplayName
    *
    * @return TeamCreatedEventMessageDetail
    */
    public function setTeamDisplayName($val)
    {
        $this->_propDict["teamDisplayName"] = $val;
        return $this;
    }
    /**
    * Gets the teamId
    *
    * @return string|null The teamId
    */
    public function getTeamId()
    {
        if (array_key_exists("teamId", $this->_propDict)) {
            return $this->_propDict["teamId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the teamId
    *
    * @param string $val The value of the teamId
    *
    * @return TeamCreatedEventMessageDetail
    */
    public function setTeamId($val)
    {
        $this->_propDict["teamId"] = $val;
        return $this;
    }
}
