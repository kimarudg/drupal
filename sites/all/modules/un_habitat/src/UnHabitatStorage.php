<?php

namespace Drupal\unhabitat;
// use \Drupal\Core\Entity\EntityInterface;
// use \Drupal\Core\Entity\Query\EntityQueryInterface;

// use Drupal\node\Entity\Node;
// use Drupal\field\FieldConfigInterface;


class UnHabitatStorage {

  static function getAllNodes() {
    // $result = db_query('SELECT * FROM {students}')->fetchAllAssoc('id');
    // return $result;
    $nids = $this->entityTypeManager->getStorage('node')->getQuery()->condition('type','my_custom_type')->execute();
    return $nids;
  }

  static function getAllContentTypes() {
    $contentTypes = \Drupal::service('entity.manager')->
    getStorage('node_type')->loadMultiple();

    $contentTypesList = [];
    foreach ($contentTypes as $contentType) {
        $contentTypesList[$contentType->id()] = $contentType->label();
    }
    print_r($contentTypesList);
  }

}
