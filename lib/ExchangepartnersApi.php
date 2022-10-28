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

use DwollaSwagger\models\ExchangePartner;
use DwollaSwagger\models\ExchangePartnerListResponse;

class ExchangepartnersApi {

  function __construct($apiClient = null) {
    if (null === $apiClient) {
      if (Configuration::$apiClient === null) {
        Configuration::$apiClient = new ApiClient(); // create a new API client if not present
      }
      $this->apiClient = Configuration::$apiClient;
    } else {
      $this->apiClient = $apiClient; // use the one provided by the user
    }

    // Authentication methods
    $this->authSettings = array('oauth2');
  }

  private $apiClient; // instance of the ApiClient

  /**
   * get the API client
   */
  public function getApiClient() {
    return $this->apiClient;
  }

  /**
   * set the API client
   */
  public function setApiClient($apiClient) {
    $this->apiClient = $apiClient;
  }

  /**
   * _list
   *
   * Get the list of exchange partners.
   *
   * @return ExchangePartnerListResponse
   */
  public function _list($headers = null) {


    // parse inputs
    $resourcePath = "/exchange-partners";
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

    if (!is_null($headers)) {
      $headerParams = array_merge($headerParams, $headers);
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

    if (!$response[1]) {
      return null;
    }

    return $response[0] == 201 ? $response[1] : $this->apiClient->deserialize($response[1], 'ExchangePartnerListResponse');
  }

  /**
   * id
   *
   * Get an exchange partner by id.
   *
   * @param string $id ID of application event to get. (required)
   * @return ExchangePartner
   */
  public function id($id, $headers = null) {

    // verify the required parameter 'id' is set
    if ($id === null) {
      throw new \InvalidArgumentException('Missing the required parameter $id when calling id');
    }


    // parse inputs
    $resourcePath = "/exchange-partners/{id}";
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

    if (!is_null($headers)) {
      $headerParams = array_merge($headerParams, $headers);
    }


    // Entire URL for ID
    if (filter_var($id, FILTER_VALIDATE_URL)) {
      $split = explode('/', $id);
      $id = end($split);
    }
    // path params
    if ($id !== null) {
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

    if (!$response[1]) {
      return null;
    }

    return $response[0] == 201 ? $response[1] : $this->apiClient->deserialize($response[1], 'ExchangePartner');
  }


}
