<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement\Assignments\Item\AssignmentPolicy;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AssignmentPolicyRequestBuilderGetRequestConfiguration 
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
     * @var AssignmentPolicyRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AssignmentPolicyRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new assignmentPolicyRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AssignmentPolicyRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AssignmentPolicyRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new assignmentPolicyRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return AssignmentPolicyRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): AssignmentPolicyRequestBuilderGetQueryParameters {
        return new AssignmentPolicyRequestBuilderGetQueryParameters($expand, $select);
    }

}
