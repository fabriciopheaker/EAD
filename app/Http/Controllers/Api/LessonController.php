<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\LessonResource;
use App\Repositories\LessonRepository;
use App\Models\lesson;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    protected $repository;

    function __construct(LessonRepository $lessonrepository)
    {
        $this->repository = $lessonrepository;
    }

    public function index($moduleId)
    {
        $lessons = $this->repository->getLessonsByModulesId($moduleId);
        return LessonResource::Collection($lessons);
    }
    public function show($id)
    {
        return new LessonResource($this->repository->getLesson($id));
    }
}
