<?php


namespace App\Repositories\Properties;


use App\Contracts\Repository\AbstractRepository;
use App\Models\Properties\ImagesProperties;

class ImagePropertyRepository extends AbstractRepository
{
    public function __construct()
    {
        $this->setModel(ImagesProperties::class);
    }
}
