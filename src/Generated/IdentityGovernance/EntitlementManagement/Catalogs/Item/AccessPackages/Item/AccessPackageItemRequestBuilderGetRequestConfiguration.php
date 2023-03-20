<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement\Catalogs\Item\AccessPackages\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AccessPackageItemRequestBuilderGetRequestConfiguration 
{
    /**
     * @var array<string, array<string>|string>|null $headers Request headers
    */
    public ?array $headers = null;
    
    /**
     * @var array<RequestOption>|null $options Request options
    */
    public ?array $options = null;
    
    /**
     * @var AccessPackageItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AccessPackageItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new AccessPackageItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AccessPackageItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AccessPackageItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new AccessPackageItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return AccessPackageItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): AccessPackageItemRequestBuilderGetQueryParameters {
        return new AccessPackageItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
