<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CourseResource;

use App\Models\Course;
use App\Repositories\CourseRepository;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    protected $repository;

    function __construct(CourseRepository $courserepository)
    {
        $this->repository = $courserepository;
    }

    public function index()
    {
        return CourseResource::Collection($this->repository->getAllCourses());
    }
    public function show($id)
    {
        return new CourseResource($this->repository->getCourse($id));
    }
}
