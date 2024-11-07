<?php

namespace App\Services;

use App\Models\ParkImage;
use App\Services\BaseService;

class ParkImageService extends BaseService{
    public function __construct(ParkImage $model) {
        $this->model = $model;
    }
}