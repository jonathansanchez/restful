<?php

/**
 * @file
 * Contains \Drupal\restful_example\Plugin\resource\Articles__1_0.
 */

namespace Drupal\restful_example\Plugin\resource;

use Drupal\restful\Plugin\resource\ResourceEntity;
use Drupal\restful\Plugin\resource\ResourceInterface;

/**
 * Class Articles
 * @package Drupal\restful\Plugin\resource
 *
 * @Resource(
 *   name = "articles:1.0",
 *   resource = "articles",
 *   label = "Articles",
 *   description = "Export the article content type with cookie authentication.",
 *   authenticationTypes = TRUE,
 *   authenticationOptional = TRUE,
 *   dataProvider = {
 *     "entityType": "node",
 *     "bundles": {
 *       "article"
 *     },
 *   },
 *   majorVersion = 1,
 *   minorVersion = 0
 * )
 */
class Articles__1_0 extends ResourceEntity implements ResourceInterface {

  /**
   * {@inheritdoc}
   */
  protected function publicFields() {
    return array(
      'id' => array(
        'property' => 'nid',
      ),
      'label' => array(
        'wrapper_method' => 'label',
        'wrapper_method_on_entity' => TRUE,
      ),
      'self' => array(
        'callback' => array($this, 'getEntitySelf'),
      ),
      'tags' => array(
        'property' => 'field_tags',
        'resource' => array(
          'name' => 'tags',
          'majorVersion' => 1,
          'minorVersion' => 0,
        ),
      ),
      'status' => array(
        'property' => 'status',
      ),
    );
  }

}
