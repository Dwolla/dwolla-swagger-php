<?php
/**
 *  Copyright 2015 SmartBear Software
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */

/**
 *
 * NOTE: This class is auto generated by the swagger code generator program. Do not edit the class manually.
 */

namespace DwollaSwagger;

class FundingsourcesApi {

  /**
   * @var ApiClient $apiClient instance of the ApiClient
   */
  private $apiClient;

  /**
   * @var array $authSettings array of authentication methods
   */
  public $authSettings;

  function __construct($apiClient = null) {
    if (null === $apiClient) {
      if (Configuration::$apiClient === null) {
        Configuration::$apiClient = new ApiClient(); // create a new API client if not present
        $this->apiClient = Configuration::$apiClient;
      }
      else
        $this->apiClient = Configuration::$apiClient; // use the default one
    } else {
      $this->apiClient = $apiClient; // use the one provided by the user
    }

    // Authentication methods
    $this->authSettings = array('oauth2');
  }


  /**
   * Returns an instance of the API Client
   *
   * @return ApiClient|null
   */
  public function getApiClient() {
    return $this->apiClient;
  }

  /**
   * Set the API client
   *
   * @param ApiClient $apiClient
   */
  public function setApiClient($apiClient) {
    $this->apiClient = $apiClient;
  }

  
  /**
   * getAccountFundingSources
   *
   * Get an account's funding sources.
   *
   * @param string $id Account id to get funding sources for. (required)
   * @param boolean $removed Filter funding sources by this value. (optional)
   * @return models\FundingSourceListResponse
   * @throws ApiException
   */
   public function getAccountFundingSources($id, $removed = null) {
      
      // verify the required parameter 'id' is set
      if ($id === null) {
        throw new \InvalidArgumentException('Missing the required parameter $id when calling getAccountFundingSources');
      }
      

      // parse inputs
      $resourcePath = "/accounts/{id}/funding-sources";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "GET";
      $httpBody = '';
      $queryParams = array();
      $headerParams = array();
      $formParams = array();
      $_header_accept = $this->apiClient->selectHeaderAccept(array('application/vnd.dwolla.v1.hal+json'));
      if (!is_null($_header_accept)) {
        $headerParams['Accept'] = $_header_accept;
      }
      $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/vnd.dwolla.v1.hal+json'));

      // query params
      if($removed !== null) {
        $queryParams['removed'] = $this->apiClient->toQueryValue($removed);
      }
      
      
      // Entire URL for ID
      if (filter_var($id, FILTER_VALIDATE_URL)) {
        $split = explode('/', $id);
        $id = end($split);
      }
      // path params
      if($id !== null) {
        $resourcePath = str_replace("{" . "id" . "}",
                                    $this->apiClient->toPathValue($id), $resourcePath);
      }
      
      

      // for model (json/xml)
      if (isset($_tempBody)) {
        $httpBody = $_tempBody; // $_tempBody is the method argument, if present
      } else if (count($formParams) > 0) {
        // for HTTP post (form)
        $httpBody = $formParams;
      }

      // make the API Call
      $response = $this->apiClient->callAPI($resourcePath, $method,
                                            $queryParams, $httpBody,
                                            $headerParams, $this->authSettings);

      if(!$response[1]) {
        return null;
      }

      return $response[0] == 201 ? $response[1] : $this->apiClient->deserialize($response[1],'FundingSourceListResponse');
  }
  
  /**
   * getCustomerFundingSources
   *
   * Get a customer's funding sources.
   *
   * @param string $id Customer id to get funding sources for. (required)
   * @param boolean $removed Filter funding sources by this value. (optional)
   * @return models\FundingSourceListResponse
   * @throws ApiException
   */
   public function getCustomerFundingSources($id, $removed = null) {
      
      // verify the required parameter 'id' is set
      if ($id === null) {
        throw new \InvalidArgumentException('Missing the required parameter $id when calling getCustomerFundingSources');
      }
      

      // parse inputs
      $resourcePath = "/customers/{id}/funding-sources";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "GET";
      $httpBody = '';
      $queryParams = array();
      $headerParams = array();
      $formParams = array();
      $_header_accept = $this->apiClient->selectHeaderAccept(array('application/vnd.dwolla.v1.hal+json'));
      if (!is_null($_header_accept)) {
        $headerParams['Accept'] = $_header_accept;
      }
      $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/vnd.dwolla.v1.hal+json'));

      // query params
      if($removed !== null) {
        $queryParams['removed'] = $this->apiClient->toQueryValue($removed);
      }
      
      
      // Entire URL for ID
      if (filter_var($id, FILTER_VALIDATE_URL)) {
        $split = explode('/', $id);
        $id = end($split);
      }
      // path params
      if($id !== null) {
        $resourcePath = str_replace("{" . "id" . "}",
                                    $this->apiClient->toPathValue($id), $resourcePath);
      }
      
      

      // for model (json/xml)
      if (isset($_tempBody)) {
        $httpBody = $_tempBody; // $_tempBody is the method argument, if present
      } else if (count($formParams) > 0) {
        // for HTTP post (form)
        $httpBody = $formParams;
      }

      // make the API Call
      $response = $this->apiClient->callAPI($resourcePath, $method,
                                            $queryParams, $httpBody,
                                            $headerParams, $this->authSettings);

      if(!$response[1]) {
        return null;
      }

      return $response[0] == 201 ? $response[1] : $this->apiClient->deserialize($response[1],'FundingSourceListResponse');
  }
  
  /**
   * createCustomerFundingSource
   *
   * Create a new funding source.
   *
   * @param models\CreateFundingSourceRequest $body Funding source to create. (required)
   * @param string $id Customer id to create funding source for. (required)
   * @return models\FundingSource
   * @throws ApiException
   */
   public function createCustomerFundingSource($body, $id) {
      
      // verify the required parameter 'id' is set
      if ($id === null) {
        throw new \InvalidArgumentException('Missing the required parameter $id when calling createCustomerFundingSource');
      }
      

      // parse inputs
      $resourcePath = "/customers/{id}/funding-sources";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "POST";
      $httpBody = '';
      $queryParams = array();
      $headerParams = array();
      $formParams = array();
      $_header_accept = $this->apiClient->selectHeaderAccept(array('application/vnd.dwolla.v1.hal+json'));
      if (!is_null($_header_accept)) {
        $headerParams['Accept'] = $_header_accept;
      }
      $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/vnd.dwolla.v1.hal+json'));

      
      
      
      // Entire URL for ID
      if (filter_var($id, FILTER_VALIDATE_URL)) {
        $split = explode('/', $id);
        $id = end($split);
      }
      // path params
      if($id !== null) {
        $resourcePath = str_replace("{" . "id" . "}",
                                    $this->apiClient->toPathValue($id), $resourcePath);
      }
      
      // body params
      $_tempBody = null;
      if (isset($body)) {
        $_tempBody = $body;
      }

      // for model (json/xml)
      if (isset($_tempBody)) {
        $httpBody = $_tempBody; // $_tempBody is the method argument, if present
      } else if (count($formParams) > 0) {
        // for HTTP post (form)
        $httpBody = $formParams;
      }

      // make the API Call
      $response = $this->apiClient->callAPI($resourcePath, $method,
                                            $queryParams, $httpBody,
                                            $headerParams, $this->authSettings);

      if(!$response[1]) {
        return null;
      }

      return $response[0] == 201 ? $response[1] : $this->apiClient->deserialize($response[1],'FundingSource');
  }
  
  /**
   * createFundingSource
   *
   * Create a new funding source.
   *
   * @param models\CreateFundingSourceRequest $body Funding source to create. (required)
   * @return models\FundingSource
   * @throws ApiException
   */
   public function createFundingSource($body) {
      

      // parse inputs
      $resourcePath = "/funding-sources";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "POST";
      $httpBody = '';
      $queryParams = array();
      $headerParams = array();
      $formParams = array();
      $_header_accept = $this->apiClient->selectHeaderAccept(array('application/vnd.dwolla.v1.hal+json'));
      if (!is_null($_header_accept)) {
        $headerParams['Accept'] = $_header_accept;
      }
      $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/vnd.dwolla.v1.hal+json'));

      
      
      
      
      // body params
      $_tempBody = null;
      if (isset($body)) {
        $_tempBody = $body;
      }

      // for model (json/xml)
      if (isset($_tempBody)) {
        $httpBody = $_tempBody; // $_tempBody is the method argument, if present
      } else if (count($formParams) > 0) {
        // for HTTP post (form)
        $httpBody = $formParams;
      }

      // make the API Call
      $response = $this->apiClient->callAPI($resourcePath, $method,
                                            $queryParams, $httpBody,
                                            $headerParams, $this->authSettings);

      if(!$response[1]) {
        return null;
      }

      return $response[0] == 201 ? $response[1] : $this->apiClient->deserialize($response[1],'FundingSource');
  }
  
  /**
   * id
   *
   * Get a funding source by id.
   *
   * @param string $id Funding source ID to get. (required)
   * @return models\FundingSource
   * @throws ApiException
   */
   public function id($id) {
      
      // verify the required parameter 'id' is set
      if ($id === null) {
        throw new \InvalidArgumentException('Missing the required parameter $id when calling id');
      }
      

      // parse inputs
      $resourcePath = "/funding-sources/{id}";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "GET";
      $httpBody = '';
      $queryParams = array();
      $headerParams = array();
      $formParams = array();
      $_header_accept = $this->apiClient->selectHeaderAccept(array('application/vnd.dwolla.v1.hal+json'));
      if (!is_null($_header_accept)) {
        $headerParams['Accept'] = $_header_accept;
      }
      $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

      
      
      
      // Entire URL for ID
      if (filter_var($id, FILTER_VALIDATE_URL)) {
        $split = explode('/', $id);
        $id = end($split);
      }
      // path params
      if($id !== null) {
        $resourcePath = str_replace("{" . "id" . "}",
                                    $this->apiClient->toPathValue($id), $resourcePath);
      }
      
      

      // for model (json/xml)
      if (isset($_tempBody)) {
        $httpBody = $_tempBody; // $_tempBody is the method argument, if present
      } else if (count($formParams) > 0) {
        // for HTTP post (form)
        $httpBody = $formParams;
      }

      // make the API Call
      $response = $this->apiClient->callAPI($resourcePath, $method,
                                            $queryParams, $httpBody,
                                            $headerParams, $this->authSettings);

      if(!$response[1]) {
        return null;
      }

      return $response[0] == 201 ? $response[1] : $this->apiClient->deserialize($response[1],'FundingSource');
  }

  /**
   * update
   *
   * Update a funding source.
   *
   * @param models\UpdateBankRequest $body request body to update a funding source (required)
   * @param string $id Funding source ID to update. (required)
   * @return models\FundingSource
   * @throws ApiException
   */
   public function update($body, $id) {

      // verify the required parameter 'id' is set
      if ($id === null) {
        throw new \InvalidArgumentException('Missing the required parameter $id when calling update');
      }


      // parse inputs
      $resourcePath = "/funding-sources/{id}";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "POST";
      $httpBody = '';
      $queryParams = array();
      $headerParams = array();
      $formParams = array();
      $_header_accept = $this->apiClient->selectHeaderAccept(array('application/vnd.dwolla.v1.hal+json'));
      if (!is_null($_header_accept)) {
        $headerParams['Accept'] = $_header_accept;
      }
      $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());




      // Entire URL for ID
      if (filter_var($id, FILTER_VALIDATE_URL)) {
        $split = explode('/', $id);
        $id = end($split);
      }
      // path params
      if($id !== null) {
        $resourcePath = str_replace("{" . "id" . "}",
                                    $this->apiClient->toPathValue($id), $resourcePath);
      }

      // body params
      $_tempBody = null;
      if (isset($body)) {
        $_tempBody = $body;
      }

      // for model (json/xml)
      if (isset($_tempBody)) {
        $httpBody = $_tempBody; // $_tempBody is the method argument, if present
      } else if (count($formParams) > 0) {
        // for HTTP post (form)
        $httpBody = $formParams;
      }

      // make the API Call
      $response = $this->apiClient->callAPI($resourcePath, $method,
                                            $queryParams, $httpBody,
                                            $headerParams, $this->authSettings);

      if(!$response[1]) {
        return null;
      }

      return $response[0] == 201 ? $response[1] : $this->apiClient->deserialize($response[1],'FundingSource');
  }

  /**
   * softDelete
   *
   * Remove a funding source.
   *
   * @param models\RemoveBankRequest $body request body to remove a funding source (required)
   * @param string $id Funding source ID to remove. (required)
   * @return models\FundingSource
   * @throws ApiException
   */
   public function softDelete($body, $id) {
      
      // verify the required parameter 'id' is set
      if ($id === null) {
        throw new \InvalidArgumentException('Missing the required parameter $id when calling softDelete');
      }
      

      // parse inputs
      $resourcePath = "/funding-sources/{id}";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "POST";
      $httpBody = '';
      $queryParams = array();
      $headerParams = array();
      $formParams = array();
      $_header_accept = $this->apiClient->selectHeaderAccept(array('application/vnd.dwolla.v1.hal+json'));
      if (!is_null($_header_accept)) {
        $headerParams['Accept'] = $_header_accept;
      }
      $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

      
      
      
      // Entire URL for ID
      if (filter_var($id, FILTER_VALIDATE_URL)) {
        $split = explode('/', $id);
        $id = end($split);
      }
      // path params
      if($id !== null) {
        $resourcePath = str_replace("{" . "id" . "}",
                                    $this->apiClient->toPathValue($id), $resourcePath);
      }
      
      // body params
      $_tempBody = null;
      if (isset($body)) {
        $_tempBody = $body;
      }

      // for model (json/xml)
      if (isset($_tempBody)) {
        $httpBody = $_tempBody; // $_tempBody is the method argument, if present
      } else if (count($formParams) > 0) {
        // for HTTP post (form)
        $httpBody = $formParams;
      }

      // make the API Call
      $response = $this->apiClient->callAPI($resourcePath, $method,
                                            $queryParams, $httpBody,
                                            $headerParams, $this->authSettings);

      if(!$response[1]) {
        return null;
      }

      return $response[0] == 201 ? $response[1] : $this->apiClient->deserialize($response[1],'FundingSource');
  }
  
  /**
   * getBalance
   *
   * Get the balance of a funding source.
   *
   * @param string $id Funding source ID to get the balance for. (required)
   * @return models\FundingSourceBalance
   * @throws ApiException
   */
   public function getBalance($id) {
      
      // verify the required parameter 'id' is set
      if ($id === null) {
        throw new \InvalidArgumentException('Missing the required parameter $id when calling getBalance');
      }
      

      // parse inputs
      $resourcePath = "/funding-sources/{id}/balance";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "GET";
      $httpBody = '';
      $queryParams = array();
      $headerParams = array();
      $formParams = array();
      $_header_accept = $this->apiClient->selectHeaderAccept(array('application/vnd.dwolla.v1.hal+json'));
      if (!is_null($_header_accept)) {
        $headerParams['Accept'] = $_header_accept;
      }
      $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

      
      
      
      // Entire URL for ID
      if (filter_var($id, FILTER_VALIDATE_URL)) {
        $split = explode('/', $id);
        $id = end($split);
      }
      // path params
      if($id !== null) {
        $resourcePath = str_replace("{" . "id" . "}",
                                    $this->apiClient->toPathValue($id), $resourcePath);
      }
      
      

      // for model (json/xml)
      if (isset($_tempBody)) {
        $httpBody = $_tempBody; // $_tempBody is the method argument, if present
      } else if (count($formParams) > 0) {
        // for HTTP post (form)
        $httpBody = $formParams;
      }

      // make the API Call
      $response = $this->apiClient->callAPI($resourcePath, $method,
                                            $queryParams, $httpBody,
                                            $headerParams, $this->authSettings);

      if(!$response[1]) {
        return null;
      }

      return $response[0] == 201 ? $response[1] : $this->apiClient->deserialize($response[1],'FundingSourceBalance');
  }
  
  /**
   * verifyMicroDepositsExist
   *
   * Verify pending verifications exist.
   *
   * @param string $id Funding source ID to check for pending validation deposits for. (required)
   * @return models\MicroDepositsInitiated
   * @throws ApiException
   */
   public function verifyMicroDepositsExist($id) {
      
      // verify the required parameter 'id' is set
      if ($id === null) {
        throw new \InvalidArgumentException('Missing the required parameter $id when calling verifyMicroDepositsExist');
      }
      

      // parse inputs
      $resourcePath = "/funding-sources/{id}/micro-deposits";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "GET";
      $httpBody = '';
      $queryParams = array();
      $headerParams = array();
      $formParams = array();
      $_header_accept = $this->apiClient->selectHeaderAccept(array('application/vnd.dwolla.v1.hal+json'));
      if (!is_null($_header_accept)) {
        $headerParams['Accept'] = $_header_accept;
      }
      $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

      
      
      
      // Entire URL for ID
      if (filter_var($id, FILTER_VALIDATE_URL)) {
        $split = explode('/', $id);
        $id = end($split);
      }
      // path params
      if($id !== null) {
        $resourcePath = str_replace("{" . "id" . "}",
                                    $this->apiClient->toPathValue($id), $resourcePath);
      }
      
      

      // for model (json/xml)
      if (isset($_tempBody)) {
        $httpBody = $_tempBody; // $_tempBody is the method argument, if present
      } else if (count($formParams) > 0) {
        // for HTTP post (form)
        $httpBody = $formParams;
      }

      // make the API Call
      $response = $this->apiClient->callAPI($resourcePath, $method,
                                            $queryParams, $httpBody,
                                            $headerParams, $this->authSettings);

      if(!$response[1]) {
        return null;
      }

      return $response[0] == 201 ? $response[1] : $this->apiClient->deserialize($response[1],'MicroDepositsInitiated');
  }
  
  /**
   * microDeposits
   *
   * Initiate or verify micro deposits for bank verification.
   *
   * @param models\VerifyMicroDepositsRequest $body Optional micro deposit amounts for verification (required)
   * @param string $id Funding source ID to initiate or verify micro deposits for. (required)
   * @return models\MicroDeposits
   * @throws ApiException
   */
   public function microDeposits($body, $id) {
      
      // verify the required parameter 'id' is set
      if ($id === null) {
        throw new \InvalidArgumentException('Missing the required parameter $id when calling microDeposits');
      }
      

      // parse inputs
      $resourcePath = "/funding-sources/{id}/micro-deposits";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "POST";
      $httpBody = '';
      $queryParams = array();
      $headerParams = array();
      $formParams = array();
      $_header_accept = $this->apiClient->selectHeaderAccept(array('application/vnd.dwolla.v1.hal+json'));
      if (!is_null($_header_accept)) {
        $headerParams['Accept'] = $_header_accept;
      }
      $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

      
      
      
      // Entire URL for ID
      if (filter_var($id, FILTER_VALIDATE_URL)) {
        $split = explode('/', $id);
        $id = end($split);
      }
      // path params
      if($id !== null) {
        $resourcePath = str_replace("{" . "id" . "}",
                                    $this->apiClient->toPathValue($id), $resourcePath);
      }
      
      // body params
      $_tempBody = null;
      if (isset($body)) {
        $_tempBody = $body;
      }

      // for model (json/xml)
      if (isset($_tempBody)) {
        $httpBody = $_tempBody; // $_tempBody is the method argument, if present
      } else if (count($formParams) > 0) {
        // for HTTP post (form)
        $httpBody = $formParams;
      }

      // make the API Call
      $response = $this->apiClient->callAPI($resourcePath, $method,
                                            $queryParams, $httpBody,
                                            $headerParams, $this->authSettings);

      if(!$response[1]) {
        return null;
      }

      return $response[0] == 201 ? $response[1] : $this->apiClient->deserialize($response[1],'MicroDeposits');
  }
  

}
