<?php

namespace App\Repositories;

use App\Models\Lesson;

class LessonRepository
{
  protected $entity;

  function __construct(Lesson $model)
  {
    $this->entity = $model;
  }

  function getLessonsByModulesId(string $modulesId)
  {
    return $this->entity
      ->where('module_id', $modulesId)
      ->get();
  }

  function getLesson(string $identify)
  {
    return $this->entity->findOrFail($identify);
  }
}
