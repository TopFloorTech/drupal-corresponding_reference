<?php

namespace Drupal\corresponding_reference;

use Drupal\Core\Config\Entity\ConfigEntityStorageInterface;
use Drupal\Core\Entity\EntityInterface;

/**
 * Defines the interface for corresponding reference storage.
 */
interface CorrespondingReferenceStorageInterface extends ConfigEntityStorageInterface {

  /**
   * Loads the valid corresponding reference config entities for the given entity.
   *
   * @param \Drupal\Core\Entity\EntityInterface $entity
   *   The entity.
   *
   * @return \Drupal\corresponding_reference\Entity\CorrespondingReferenceInterface[]
   *   The valid corresponding references.
   */
  public function loadValid(EntityInterface $entity);
}
