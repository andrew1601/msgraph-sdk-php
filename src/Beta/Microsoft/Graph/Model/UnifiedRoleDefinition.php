<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UnifiedRoleDefinition File
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
* UnifiedRoleDefinition class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UnifiedRoleDefinition extends Entity
{
    /**
    * Gets the description
    * The description for the unifiedRoleDefinition. Read-only when isBuiltIn is true.
    *
    * @return string|null The description
    */
    public function getDescription()
    {
        if (array_key_exists("description", $this->_propDict)) {
            return $this->_propDict["description"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the description
    * The description for the unifiedRoleDefinition. Read-only when isBuiltIn is true.
    *
    * @param string $val The description
    *
    * @return UnifiedRoleDefinition
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
    * The display name for the unifiedRoleDefinition. Read-only when isBuiltIn is true. Required.  Supports $filter (eq and startsWith operators only).
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
    * The display name for the unifiedRoleDefinition. Read-only when isBuiltIn is true. Required.  Supports $filter (eq and startsWith operators only).
    *
    * @param string $val The displayName
    *
    * @return UnifiedRoleDefinition
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the isBuiltIn
    * Flag indicating if the unifiedRoleDefinition is part of the default set included with the product or custom. Read-only.  Supports $filter (eq operator only).
    *
    * @return bool|null The isBuiltIn
    */
    public function getIsBuiltIn()
    {
        if (array_key_exists("isBuiltIn", $this->_propDict)) {
            return $this->_propDict["isBuiltIn"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isBuiltIn
    * Flag indicating if the unifiedRoleDefinition is part of the default set included with the product or custom. Read-only.  Supports $filter (eq operator only).
    *
    * @param bool $val The isBuiltIn
    *
    * @return UnifiedRoleDefinition
    */
    public function setIsBuiltIn($val)
    {
        $this->_propDict["isBuiltIn"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the isEnabled
    * Flag indicating if the role is enabled for assignment. If false the role is not available for assignment. Read-only when isBuiltIn is true.
    *
    * @return bool|null The isEnabled
    */
    public function getIsEnabled()
    {
        if (array_key_exists("isEnabled", $this->_propDict)) {
            return $this->_propDict["isEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isEnabled
    * Flag indicating if the role is enabled for assignment. If false the role is not available for assignment. Read-only when isBuiltIn is true.
    *
    * @param bool $val The isEnabled
    *
    * @return UnifiedRoleDefinition
    */
    public function setIsEnabled($val)
    {
        $this->_propDict["isEnabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the resourceScopes
    * List of scopes permissions granted by the role definition apply to. Currently only / is supported. Read-only when isBuiltIn is true. DO NOT USE. This is going to be deprecated soon. Attach scope to role assignment
    *
    * @return string|null The resourceScopes
    */
    public function getResourceScopes()
    {
        if (array_key_exists("resourceScopes", $this->_propDict)) {
            return $this->_propDict["resourceScopes"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the resourceScopes
    * List of scopes permissions granted by the role definition apply to. Currently only / is supported. Read-only when isBuiltIn is true. DO NOT USE. This is going to be deprecated soon. Attach scope to role assignment
    *
    * @param string $val The resourceScopes
    *
    * @return UnifiedRoleDefinition
    */
    public function setResourceScopes($val)
    {
        $this->_propDict["resourceScopes"] = $val;
        return $this;
    }
    

     /** 
     * Gets the rolePermissions
    * List of permissions included in the role. Read-only when isBuiltIn is true. Required.
     *
     * @return UnifiedRolePermission[]|null The rolePermissions
     */
    public function getRolePermissions()
    {
        if (array_key_exists('rolePermissions', $this->_propDict) && !is_null($this->_propDict['rolePermissions'])) {
           $rolePermissions = [];
           if (count($this->_propDict['rolePermissions']) > 0 && is_a($this->_propDict['rolePermissions'][0], 'UnifiedRolePermission')) {
              return $this->_propDict;
           }
           foreach ($this->_propDict['rolePermissions'] as $singleValue) {
              $rolePermissions []= new UnifiedRolePermission($singleValue);
           }
           $this->_propDict['rolePermissions'] = $rolePermissions;
           return $this->_propDict['rolePermissions'];
        }
        return null;
    }
    
    /** 
    * Sets the rolePermissions
    * List of permissions included in the role. Read-only when isBuiltIn is true. Required.
    *
    * @param UnifiedRolePermission[] $val The rolePermissions
    *
    * @return UnifiedRoleDefinition
    */
    public function setRolePermissions($val)
    {
        $this->_propDict["rolePermissions"] = $val;
        return $this;
    }
    
    /**
    * Gets the templateId
    * Custom template identifier that can be set when isBuiltIn is false. This identifier is typically used if one needs an identifier to be the same across different directories. Read-only when isBuiltIn is true.
    *
    * @return string|null The templateId
    */
    public function getTemplateId()
    {
        if (array_key_exists("templateId", $this->_propDict)) {
            return $this->_propDict["templateId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the templateId
    * Custom template identifier that can be set when isBuiltIn is false. This identifier is typically used if one needs an identifier to be the same across different directories. Read-only when isBuiltIn is true.
    *
    * @param string $val The templateId
    *
    * @return UnifiedRoleDefinition
    */
    public function setTemplateId($val)
    {
        $this->_propDict["templateId"] = $val;
        return $this;
    }
    
    /**
    * Gets the version
    * Indicates version of the unifiedRoleDefinition. Read-only when isBuiltIn is true.
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
    * Indicates version of the unifiedRoleDefinition. Read-only when isBuiltIn is true.
    *
    * @param string $val The version
    *
    * @return UnifiedRoleDefinition
    */
    public function setVersion($val)
    {
        $this->_propDict["version"] = $val;
        return $this;
    }
    

     /** 
     * Gets the inheritsPermissionsFrom
    * Read-only collection of role definitions that the given role definition inherits from. Only Azure AD built-in roles support this attribute.
     *
     * @return UnifiedRoleDefinition[]|null The inheritsPermissionsFrom
     */
    public function getInheritsPermissionsFrom()
    {
        if (array_key_exists('inheritsPermissionsFrom', $this->_propDict) && !is_null($this->_propDict['inheritsPermissionsFrom'])) {
           $inheritsPermissionsFrom = [];
           if (count($this->_propDict['inheritsPermissionsFrom']) > 0 && is_a($this->_propDict['inheritsPermissionsFrom'][0], 'UnifiedRoleDefinition')) {
              return $this->_propDict;
           }
           foreach ($this->_propDict['inheritsPermissionsFrom'] as $singleValue) {
              $inheritsPermissionsFrom []= new UnifiedRoleDefinition($singleValue);
           }
           $this->_propDict['inheritsPermissionsFrom'] = $inheritsPermissionsFrom;
           return $this->_propDict['inheritsPermissionsFrom'];
        }
        return null;
    }
    
    /** 
    * Sets the inheritsPermissionsFrom
    * Read-only collection of role definitions that the given role definition inherits from. Only Azure AD built-in roles support this attribute.
    *
    * @param UnifiedRoleDefinition[] $val The inheritsPermissionsFrom
    *
    * @return UnifiedRoleDefinition
    */
    public function setInheritsPermissionsFrom($val)
    {
        $this->_propDict["inheritsPermissionsFrom"] = $val;
        return $this;
    }
    
}
