<?php

namespace Drupal\unhabitat\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use \Drupal\Core\Entity\EntityInterface;
use \Drupal\Core\Entity\Query\EntityQueryInterface;

use Drupal\node\Entity\Node;
use Drupal\field\FieldConfigInterface;

/**
 * Provides a 'Visualization' Block.
 *
 * @Block(
 *   id = "unhabitat_visualization",
 *   admin_label = @Translation("UN Habitat Node Visualization"),
 *   category = @Translation("UN Habitat Node Visualization"),
 * )
 */
class HabitatBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return [
      '#title' => 'Visualization',
      '#markup' => $this->t('Visualization'),
    ];
  }

  static function getAllContentTypes() {
    $contentTypes = \Drupal::service('entity.manager')->
    getStorage('node_type')->loadMultiple();

    $contentTypesList = [];
    foreach ($contentTypes as $contentType) {
        $contentTypesList[$contentType->id()] = $contentType->label();
    }
   return $contentTypesList;
  }

  static function getAllNodesperType() {
    $nodeTypes = $this->getAllContentTypes();
    foreach ($node_type as $key => $value) {
      # code...
    }
  }

}
