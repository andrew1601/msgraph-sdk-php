<?php

namespace Microsoft\Graph\Generated\Me\MailFolders\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\Me\MailFolders\Item\ChildFolders\ChildFoldersRequestBuilder;
use Microsoft\Graph\Generated\Me\MailFolders\Item\Copy\CopyRequestBuilder;
use Microsoft\Graph\Generated\Me\MailFolders\Item\MessageRules\Item\MessageRuleItemRequestBuilder;
use Microsoft\Graph\Generated\Me\MailFolders\Item\MessageRules\MessageRulesRequestBuilder;
use Microsoft\Graph\Generated\Me\MailFolders\Item\Messages\Item\MessageItemRequestBuilder;
use Microsoft\Graph\Generated\Me\MailFolders\Item\Messages\MessagesRequestBuilder;
use Microsoft\Graph\Generated\Me\MailFolders\Item\Move\MoveRequestBuilder;
use Microsoft\Graph\Generated\Me\MailFolders\Item\MultiValueExtendedProperties\Item\MultiValueLegacyExtendedPropertyItemRequestBuilder;
use Microsoft\Graph\Generated\Me\MailFolders\Item\MultiValueExtendedProperties\MultiValueExtendedPropertiesRequestBuilder;
use Microsoft\Graph\Generated\Me\MailFolders\Item\SingleValueExtendedProperties\Item\SingleValueLegacyExtendedPropertyItemRequestBuilder;
use Microsoft\Graph\Generated\Me\MailFolders\Item\SingleValueExtendedProperties\SingleValueExtendedPropertiesRequestBuilder;
use Microsoft\Graph\Generated\Models\MailFolder;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;
use Psr\Http\Message\StreamInterface;

/**
 * Provides operations to manage the mailFolders property of the microsoft.graph.user entity.
*/
class MailFolderItemRequestBuilder 
{
    /**
     * Provides operations to manage the childFolders property of the microsoft.graph.mailFolder entity.
    */
    public function childFolders(): ChildFoldersRequestBuilder {
        return new ChildFoldersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the copy method.
    */
    public function copy(): CopyRequestBuilder {
        return new CopyRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the messageRules property of the microsoft.graph.mailFolder entity.
    */
    public function messageRules(): MessageRulesRequestBuilder {
        return new MessageRulesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the messages property of the microsoft.graph.mailFolder entity.
    */
    public function messages(): MessagesRequestBuilder {
        return new MessagesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the move method.
    */
    public function move(): MoveRequestBuilder {
        return new MoveRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the multiValueExtendedProperties property of the microsoft.graph.mailFolder entity.
    */
    public function multiValueExtendedProperties(): MultiValueExtendedPropertiesRequestBuilder {
        return new MultiValueExtendedPropertiesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
    /**
     * Provides operations to manage the singleValueExtendedProperties property of the microsoft.graph.mailFolder entity.
    */
    public function singleValueExtendedProperties(): SingleValueExtendedPropertiesRequestBuilder {
        return new SingleValueExtendedPropertiesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Provides operations to manage the childFolders property of the microsoft.graph.mailFolder entity.
     * @param string $id Unique identifier of the item
     * @return \Microsoft\Graph\Generated\Me\MailFolders\Item\ChildFolders\Item\MailFolderItemRequestBuilder
    */
    public function childFoldersById(string $id): \Microsoft\Graph\Generated\Me\MailFolders\Item\ChildFolders\Item\MailFolderItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['mailFolder%2Did1'] = $id;
        return new \Microsoft\Graph\Generated\Me\MailFolders\Item\ChildFolders\Item\MailFolderItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new MailFolderItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/me/mailFolders/{mailFolder%2Did}{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property mailFolders for me
     * @param MailFolderItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function delete(?MailFolderItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendPrimitiveAsync($requestInfo, StreamInterface::class, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * The user's mail folders. Read-only. Nullable.
     * @param MailFolderItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function get(?MailFolderItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [MailFolder::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to manage the messageRules property of the microsoft.graph.mailFolder entity.
     * @param string $id Unique identifier of the item
     * @return MessageRuleItemRequestBuilder
    */
    public function messageRulesById(string $id): MessageRuleItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['messageRule%2Did'] = $id;
        return new MessageRuleItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the messages property of the microsoft.graph.mailFolder entity.
     * @param string $id Unique identifier of the item
     * @return MessageItemRequestBuilder
    */
    public function messagesById(string $id): MessageItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['message%2Did'] = $id;
        return new MessageItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the multiValueExtendedProperties property of the microsoft.graph.mailFolder entity.
     * @param string $id Unique identifier of the item
     * @return MultiValueLegacyExtendedPropertyItemRequestBuilder
    */
    public function multiValueExtendedPropertiesById(string $id): MultiValueLegacyExtendedPropertyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['multiValueLegacyExtendedProperty%2Did'] = $id;
        return new MultiValueLegacyExtendedPropertyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Update the navigation property mailFolders in me
     * @param MailFolder $body The request body
     * @param MailFolderItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function patch(MailFolder $body, ?MailFolderItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [MailFolder::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to manage the singleValueExtendedProperties property of the microsoft.graph.mailFolder entity.
     * @param string $id Unique identifier of the item
     * @return SingleValueLegacyExtendedPropertyItemRequestBuilder
    */
    public function singleValueExtendedPropertiesById(string $id): SingleValueLegacyExtendedPropertyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['singleValueLegacyExtendedProperty%2Did'] = $id;
        return new SingleValueLegacyExtendedPropertyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Delete navigation property mailFolders for me
     * @param MailFolderItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?MailFolderItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->addHeaders($requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        return $requestInfo;
    }

    /**
     * The user's mail folders. Read-only. Nullable.
     * @param MailFolderItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?MailFolderItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->addHeaders($requestConfiguration->headers);
            }
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        return $requestInfo;
    }

    /**
     * Update the navigation property mailFolders in me
     * @param MailFolder $body The request body
     * @param MailFolderItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(MailFolder $body, ?MailFolderItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->addHeaders($requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

}
