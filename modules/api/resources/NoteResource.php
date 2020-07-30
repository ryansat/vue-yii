<?php
namespace app\modules\api\resources;


use app\models\Note;

/**
 * Class NoteResource
 *
 * @author Fajar Stria <ryansat46@gmail.com>
 * @package app\modules\api\resources
 */
class NoteResource extends Note
{
  public function fields()
  {
      return [
          'title', 'body', 'created_at', 'updated_at', 'created_by'
      ];
  }
}