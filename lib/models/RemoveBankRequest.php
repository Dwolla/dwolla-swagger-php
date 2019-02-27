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

class RemoveBankRequest implements ArrayAccess, ModelInterface {
  static $swaggerTypes = array(
      'removed' => 'boolean'
  );

  static $attributeMap = array(
      'removed' => 'removed'
  );

  
  public $removed; /* boolean */

  public function __construct(array $data = null) {
    $this->removed = $data["removed"];
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
