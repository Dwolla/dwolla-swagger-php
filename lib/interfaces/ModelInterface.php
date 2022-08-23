<?php
/**
 * Created by Chris Piggott.
 * User: cpiggott
 * Date: 2019-02-27
 * Time: 15:30
 */

namespace DwollaSwagger\interfaces;


interface ModelInterface
{
  /**
   * @return array Get Swagger Types
   */
  static function getSwaggerTypes();

  /**
   * @return array Get array of attributes
   */
  static function getAttributeMap();

  public function offsetExists($offset);
  public function offsetGet($offset);
  public function offsetSet($offset, $value);
  public function offsetUnset($offset);
}