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

class Address implements ArrayAccess {
  static $swaggerTypes = array(
      'address1' => 'string',
      'address2' => 'string',
      'address3' => 'string',
      'city' => 'string',
      'state_province_region' => 'string',
      'country' => 'string',
      'postal_code' => 'string'
  );

  static $attributeMap = array(
      'address1' => 'address1',
      'address2' => 'address2',
      'address3' => 'address3',
      'city' => 'city',
      'state_province_region' => 'stateProvinceRegion',
      'country' => 'country',
      'postal_code' => 'postalCode'
  );


  public $address1; /* string */
  public $address2; /* string */
  public $address3; /* string */
  public $city; /* string */
  public $state_province_region; /* string */
  public $country; /* string */
  public $postal_code; /* string */

  public function __construct(array $data = null) {
    $this->address1 = isset($data["address1"]) ? $data["address1"] : null;
    $this->address2 = isset($data["address2"]) ? $data["address2"] : null;
    $this->address3 = isset($data["address3"]) ? $data["address3"] : null;
    $this->city = isset($data["city"]) ? $data["city"] : null;
    $this->state_province_region = isset($data["state_province_region"]) ? $data["state_province_region"] : null;
    $this->country = isset($data["country"]) ? $data["country"] : null;
    $this->postal_code = isset($data["postal_code"]) ? $data["postal_code"] : null;
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
