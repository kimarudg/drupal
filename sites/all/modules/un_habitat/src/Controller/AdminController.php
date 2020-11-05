<?php
/**
@file
Contains \Drupal\unhabitat\Controller\AdminController.
 */

namespace Drupal\unhabitat\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Url;
use Drupal\unhabitat\UnHabitatStorage;

class AdminController extends ControllerBase {

function contentOriginal() {
  $url = Url::fromRoute('count_list');
  //$add_link = ;
  $add_link = '<p>' . \Drupal::l(t('Content Details '), $url) . '</p>';

  // Table header
  $header = array( 'id' => t('Id'), 'count' => t('count'), );

  $rows = array();
  foreach(UnHabitatStorage::getAllNodes() as $id=>$content) {
    // Row with attributes on the row and some of its cells.
    $rows[] = array( 'data' => array($id, $content->name) );
   }

   $table = array( '#type' => 'table', '#header' => $header, '#rows' => $rows, '#attributes' => array( 'id' => 'students-table', ), );
   return $add_link . drupal_render($table);
 }

  public function content1() {
    return array(
      '#type' => 'markup',
      '#markup' => t('Hello World'),
    );
  }

  function content() {
    $url = Url::fromRoute('students_add');
    //$add_link = ;
    $add_link = '<p>' . \Drupal::l(t('New Student'), $url) . '</p>';

    $text = array(
      '#type' => 'markup',
      '#markup' => $add_link,
    );

    // Table header.
    $header = array(
      'id' => t('Id'),
      'name' => t('Sudent name'),
      'gender' => t('Gender'),
      'faculty_number' => t('Faculty number'),
      'operations' => t('Delete'),
    );
    $rows = array();
    foreach (StudentsStorage::getAll() as $id => $content) {
      // Row with attributes on the row and some of its cells.
      $editUrl = Url::fromRoute('students_edit', array('id' => $id));
      $deleteUrl = Url::fromRoute('students_delete', array('id' => $id));

      $rows[] = array(
        'data' => array(
          \Drupal::l($id, $editUrl),
          $content->name, $content->gender, $content->faculty_number,
          \Drupal::l('Delete', $deleteUrl)
        ),
      );
    }
    $table = array(
      '#type' => 'table',
      '#header' => $header,
      '#rows' => $rows,
      '#attributes' => array(
        'id' => 'students-table',
      ),
    );
    //return $add_link . ($table);
    return array(
      $text,
      $table,
    );
  }
}
