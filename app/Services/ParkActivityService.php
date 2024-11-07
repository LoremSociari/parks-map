<?php

namespace App\Services;

use App\Models\ParkActivity;
use App\Services\BaseService;

class ParkActivityService extends BaseService{
    public function __construct(ParkActivity $model) {
        $this->model = $model;
    }
}