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

class MassPayment implements ArrayAccess, ModelInterface {
  static $swaggerTypes = array(
      '_links' => 'object',
      '_embedded' => 'object',
      'id' => 'string',
      'status' => 'string',
      'created' => 'string',
      'metadata' => 'object',
      'total' => 'object',
      'total_fees' => 'object',
      'correlation_id' => 'string'
  );

  static $attributeMap = array(
      '_links' => '_links',
      '_embedded' => '_embedded',
      'id' => 'id',
      'status' => 'status',
      'created' => 'created',
      'metadata' => 'metadata',
      'total' => 'total',
      'total_fees' => 'totalFees',
      'correlation_id' => 'correlationId'
  );

  
  public $_links; /* object */
  public $_embedded; /* object */
  public $id; /* string */
  public $status; /* string */
  public $created; /* string */
  public $metadata; /* object */
  public $total; /* object */
  public $total_fees; /* object */
  public $correlation_id; /* string */

  public function __construct(array $data = null) {
    $this->_links = isset($data["_links"]) ? $data["_links"] : null;
    $this->_embedded = isset($data["_embedded"]) ? $data["_embedded"] : null;
    $this->id = isset($data["id"]) ? $data["id"] : null;
    $this->status = isset($data["status"]) ? $data["status"] : null;
    $this->created = isset($data["created"]) ? $data["created"] : null;
    $this->metadata = isset($data["metadata"]) ? $data["metadata"] : null;
    $this->total = isset($data["total"]) ? $data["total"] : null;
    $this->total_fees = isset($data["total_fees"]) ? $data["total_fees"] : null;
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
