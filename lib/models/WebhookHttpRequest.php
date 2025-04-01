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

class WebhookHttpRequest implements ArrayAccess {
  static $swaggerTypes = array(
      'timestamp' => 'DateTime',
      'url' => 'string',
      'headers' => 'array[WebhookHeader]',
      'body' => 'string'
  );

  static $attributeMap = array(
      'timestamp' => 'timestamp',
      'url' => 'url',
      'headers' => 'headers',
      'body' => 'body'
  );

  
  public $timestamp; /* DateTime */
  public $url; /* string */
  public $headers; /* array[WebhookHeader] */
  public $body; /* string */

  public function __construct(array $data = null) {
    $this->timestamp = isset($data["timestamp"]) ? $data["timestamp"] : null;
    $this->url = isset($data["url"]) ? $data["url"] : null;
    $this->headers = isset($data["headers"]) ? $data["headers"] : null;
    $this->body = isset($data["body"]) ? $data["body"] : null;
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
