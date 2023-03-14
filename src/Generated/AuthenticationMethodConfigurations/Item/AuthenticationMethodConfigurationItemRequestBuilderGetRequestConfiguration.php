<?php

namespace Microsoft\Graph\Generated\AuthenticationMethodConfigurations\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AuthenticationMethodConfigurationItemRequestBuilderGetRequestConfiguration 
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
     * @var AuthenticationMethodConfigurationItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AuthenticationMethodConfigurationItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new AuthenticationMethodConfigurationItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return AuthenticationMethodConfigurationItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): AuthenticationMethodConfigurationItemRequestBuilderGetQueryParameters {
        return new AuthenticationMethodConfigurationItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new AuthenticationMethodConfigurationItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AuthenticationMethodConfigurationItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AuthenticationMethodConfigurationItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
