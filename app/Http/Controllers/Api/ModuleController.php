<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\ModuleResource;
use App\Repositories\ModuleRepository;


class ModuleController extends Controller
{
    protected $repository;

    function __construct(ModuleRepository $modulerepository)
    {
        $this->repository = $modulerepository;
    }

    public function index($courseId)
    {
        $modules = $this->repository->getModulesByCourseId($courseId);
        return ModuleResource::Collection($modules);
    }
}
