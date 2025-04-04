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

class UpdateOwnerRequest implements ArrayAccess {
  static $swaggerTypes = array(
      'first_name' => 'string',
      'last_name' => 'string',
      'ssn' => 'string',
      'date_of_birth' => 'string',
      'address' => 'Address',
      'passport' => 'Passport'
  );

  static $attributeMap = array(
      'first_name' => 'firstName',
      'last_name' => 'lastName',
      'ssn' => 'ssn',
      'date_of_birth' => 'dateOfBirth',
      'address' => 'address',
      'passport' => 'passport'
  );


  public $first_name; /* string */
  public $last_name; /* string */
  public $ssn; /* string */
  public $date_of_birth; /* string */
  public $address; /* Address */
  public $passport; /* Passport */

  public function __construct(array $data = null) {
    $this->first_name = isset($data["first_name"]) ? $data["first_name"] : null;
    $this->last_name = isset($data["last_name"]) ? $data["last_name"] : null;
    $this->ssn = isset($data["ssn"]) ? $data["ssn"] : null;
    $this->date_of_birth = isset($data["date_of_birth"]) ? $data["date_of_birth"] : null;
    $this->address = isset($data["address"]) ? $data["address"] : null;
    $this->passport = isset($data["passport"]) ? $data["passport"] : null;
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
