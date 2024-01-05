<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace Google\Service\Compute;

class InstanceGroupManagerVersion extends \Google\Model
{
  public $instanceTemplate;
  public $name;
  protected $targetSizeType = FixedOrPercent::class;
  protected $targetSizeDataType = '';

  public function setInstanceTemplate($instanceTemplate)
  {
    $this->instanceTemplate = $instanceTemplate;
  }
  public function getInstanceTemplate()
  {
    return $this->instanceTemplate;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  /**
   * @param FixedOrPercent
   */
  public function setTargetSize(FixedOrPercent $targetSize)
  {
    $this->targetSize = $targetSize;
  }
  /**
   * @return FixedOrPercent
   */
  public function getTargetSize()
  {
    return $this->targetSize;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(InstanceGroupManagerVersion::class, 'Google_Service_Compute_InstanceGroupManagerVersion');
