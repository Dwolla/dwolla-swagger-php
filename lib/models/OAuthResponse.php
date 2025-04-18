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
 *
 * NOTE: This class is auto generated by the swagger code generator program. Do not edit the class manually.
 *
 */

namespace DwollaSwagger\models;

use \ArrayAccess;

class OAuthResponse implements ArrayAccess {
  static $swaggerTypes = array(
      '_links' => 'map[string,HalLink]',
      'access_token' => 'string',
      'expires_in' => 'double',
      'refresh_token' => 'string',
      'refresh_expires_in' => 'double',
      'token_type' => 'string',
      'scope' => 'string'
  );

  static $attributeMap = array(
      '_links' => '_links',
      'access_token' => 'access_token',
      'expires_in' => 'expires_in',
      'refresh_token' => 'refresh_token',
      'refresh_expires_in' => 'refresh_expires_in',
      'token_type' => 'token_type',
      'scope' => 'scope'
  );

  
  public $_links; /* map[string,HalLink] */
  public $access_token; /* string */
  public $expires_in; /* double */
  public $refresh_token; /* string */
  public $refresh_expires_in; /* double */
  public $token_type; /* string */
  public $scope; /* string */

  public function __construct(array $data = null) {
    $this->_links = isset($data["_links"]) ? $data["_links"] : null;
    $this->access_token = isset($data["access_token"]) ? $data["access_token"] : null;
    $this->expires_in = isset($data["expires_in"]) ? $data["expires_in"] : null;
    $this->refresh_token = isset($data["refresh_token"]) ? $data["refresh_token"] : null;
    $this->refresh_expires_in = isset($data["refresh_expires_in"]) ? $data["refresh_expires_in"] : null;
    $this->token_type = isset($data["token_type"]) ? $data["token_type"] : null;
    $this->scope = isset($data["scope"]) ? $data["scope"] : null;
  }

  #[\ReturnTypeWillChange]
    public function offsetExists($offset) {
    return isset($this->$offset);
  }

  #[\ReturnTypeWillChange]
    public function offsetGet($offset) {
    return $this->$offset;
  }

  #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value) {
    $this->$offset = $value;
  }

  #[\ReturnTypeWillChange]
    public function offsetUnset($offset) {
    unset($this->$offset);
  }
}
