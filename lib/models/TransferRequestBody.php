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

class TransferRequestBody implements ArrayAccess {
  static $swaggerTypes = array(
      '_links' => 'map[string,HalLink]',
      'amount' => 'Amount',
      'metadata' => 'object',
      'fees' => 'array[FacilitatorFeeRequest]',
      'clearing' => 'Clearing',
      'imad' => 'string',
      'correlation_id' => 'string',
      'ach_details' => 'object'
  );

  static $attributeMap = array(
      '_links' => '_links',
      'amount' => 'amount',
      'metadata' => 'metadata',
      'fees' => 'fees',
      'clearing' => 'clearing',
      'imad' => 'imad',
      'correlation_id' => 'correlationId',
      'ach_details' => 'object'
  );


  public $_links; /* map[string,HalLink] */
  public $amount; /* Amount */
  public $metadata; /* object */
  public $fees; /* array[FacilitatorFeeRequest] */
  public $clearing; /* Clearing */
  public $imad; /* string */
  public $correlation_id; /* string */
  public $ach_details; /* object */

  public function __construct(array $data = null) {
    $this->_links = isset($data["_links"]) ? $data["_links"] : null;
    $this->amount = isset($data["amount"]) ? $data["amount"] : null;
    $this->metadata = isset($data["metadata"]) ? $data["metadata"] : null;
    $this->fees = isset($data["fees"]) ? $data["fees"] : null;
    $this->clearing = isset($data["clearing"]) ? $data["clearing"] : null;
    $this->imad = isset($data["imad"]) ? $data["imad"] : null;
    $this->correlation_id = isset($data["correlation_id"]) ? $data["correlation_id"] : null;
    $this->ach_details = isset($data["ach_details"]) ? $data["ach_details"] : null;
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
