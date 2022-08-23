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
use DwollaSwagger\interfaces\ModelInterface;

class UpdateCustomer implements ArrayAccess, ModelInterface {
  static $swaggerTypes = array(
      'first_name' => 'string',
      'last_name' => 'string',
      'email' => 'string',
      'ip_address' => 'string',
      'type' => 'string',
      'status' => 'string',
      'address1' => 'string',
      'address2' => 'string',
      'city' => 'string',
      'state' => 'string',
      'postal_code' => 'string',
      'date_of_birth' => 'string',
      'ssn' => 'string',
      'phone' => 'string',
      'business_name' => 'string',
      'business_type' => 'string',
      'business_classification' => 'string',
      'ein' => 'string',
      'doing_business_as' => 'string',
      'website' => 'string',
      'controller' => 'object',
      'correlation_id' => 'string'
  );

  static $attributeMap = array(
      'first_name' => 'firstName',
      'last_name' => 'lastName',
      'email' => 'email',
      'ip_address' => 'ipAddress',
      'type' => 'type',
      'status' => 'status',
      'address1' => 'address1',
      'address2' => 'address2',
      'city' => 'city',
      'state' => 'state',
      'postal_code' => 'postalCode',
      'date_of_birth' => 'dateOfBirth',
      'ssn' => 'ssn',
      'phone' => 'phone',
      'business_name' => 'businessName',
      'business_type' => 'businessType',
      'business_classification' => 'businessClassification',
      'ein' => 'ein',
      'doing_business_as' => 'doingBusinessAs',
      'website' => 'website',
      'controller' => 'controller',
      'correlation_id' => 'correlationId'
  );


  public $first_name; /* string */
  public $last_name; /* string */
  public $email; /* string */
  public $ip_address; /* string */
  public $type; /* string */
  public $status; /* string */
  public $address1; /* string */
  public $address2; /* string */
  public $city; /* string */
  public $state; /* string */
  public $postal_code; /* string */
  public $date_of_birth; /* string */
  public $ssn; /* string */
  public $phone; /* string */
  public $business_name; /* string */
  public $business_type; /* string */
  public $business_classification; /* string */
  public $ein; /* string */
  public $doing_business_as; /* string */
  public $website; /* string */
  public $controller; /* object */
  public $correlation_id; /* string */

  public function __construct(array $data = null) {
    $this->first_name = isset($data["first_name"]) ? $data["first_name"] : null;
    $this->last_name = isset($data["last_name"]) ? $data["last_name"] : null;
    $this->email = isset($data["email"]) ? $data["email"] : null;
    $this->ip_address = isset($data["ip_address"]) ? $data["ip_address"] : null;
    $this->type = isset($data["type"]) ? $data["type"] : null;
    $this->status = isset($data["status"]) ? $data["status"] : null;
    $this->address1 = isset($data["address1"]) ? $data["address1"] : null;
    $this->address2 = isset($data["address2"]) ? $data["address2"] : null;
    $this->city = isset($data["city"]) ? $data["city"] : null;
    $this->state = isset($data["state"]) ? $data["state"] : null;
    $this->postal_code = isset($data["postal_code"]) ? $data["postal_code"] : null;
    $this->date_of_birth = isset($data["date_of_birth"]) ? $data["date_of_birth"] : null;
    $this->ssn = isset($data["ssn"]) ? $data["ssn"] : null;
    $this->phone = isset($data["phone"]) ? $data["phone"] : null;
    $this->business_name = isset($data["business_name"]) ? $data["business_name"] : null;
    $this->business_type = isset($data["business_type"]) ? $data["business_type"] : null;
    $this->business_classification = isset($data["business_classification"]) ? $data["business_classification"] : null;
    $this->ein = isset($data["ein"]) ? $data["ein"] : null;
    $this->doing_business_as = isset($data["doing_business_as"]) ? $data["doing_business_as"] : null;
    $this->website = isset($data["website"]) ? $data["website"] : null;
    $this->controller = isset($data["controller"]) ? $data["controller"] : null;
    $this->correlation_id = isset($data["correlation_id"]) ? $data["correlation_id"] : null;
  }

  /**
   * @return array static $swaggerTypes swagger types
   */
  public static function getSwaggerTypes()
  {
    return self::$swaggerTypes;
  }

  /**
   * @return array static $attributeMap attribute map
   */
  public static function getAttributeMap()
  {
    return self::$attributeMap;
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
