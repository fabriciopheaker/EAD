<?php

namespace App\Repositories;

use App\Models\Course;

class CourseRepository
{
  protected $entity;

  function __construct(Course $model)
  {
    $this->entity = $model;
  }

  function getAllCourses()
  {
    return $this->entity->get();
  }

  function getCourse(string $identify)
  {
    return $this->entity->findOrFail($identify);
  }
}
