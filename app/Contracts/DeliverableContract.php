<?php

declare(strict_types=1);

namespace App\Contracts;

interface DeliverableContract
{
    public function getDataForViewingDeliverable($id);

    public function getDataForViewingTask($did, $tid): array;

    public function createNewDeliverable(array $data);
}