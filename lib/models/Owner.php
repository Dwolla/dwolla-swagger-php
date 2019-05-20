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

class Owner implements ArrayAccess {
  static $swaggerTypes = array(
      '_links' => 'map[string,HalLink]',
      'id' => 'string',
      'first_name' => 'string',
      'last_name' => 'string',
      'address' => 'Address',
      'verification_status' => 'string',
      '_embedded' => 'map[string,Number]',
      'created' => 'string'
  );

  static $attributeMap = array(
      '_links' => '_links',
      'id' => 'id',
      'first_name' => 'firstName',
      'last_name' => 'lastName',
      'address' => 'address',
      'verification_status' => 'verificationStatus',
      '_embedded' => '_embedded',
      'created' => 'created'
  );


  public $_links; /* map[string,HalLink] */
  public $id; /* string */
  public $first_name; /* string */
  public $last_name; /* string */
  public $address; /* Address */
  public $verification_status; /* string */
  public $_embedded; /* map[string,Number] */
  public $created; /* string */

  public function __construct(array $data = null) {
    $this->_links = $data["_links"];
    $this->id = $data["id"];
    $this->first_name = $data["first_name"];
    $this->last_name = $data["last_name"];
    $this->address = $data["address"];
    $this->verification_status = $data["verification_status"];
    $this->_embedded = $data["_embedded"];
    $this->created = $data["created"];
  }

  public function offsetExists($offset) {
    return isset($this->$offset);
  }

  public function offsetGet($offset) {
    return $this->$offset;
  }

  public function offsetSet($offset, $value) {
    $this->$offset = $value;
  }

  public function offsetUnset($offset) {
    unset($this->$offset);
  }
}
