<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Stage;

class StageTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Stage $Stage)
    {
        return [
            'identifier' => (int)$Stage->id,
            'name of the stage' => (string)$Stage->name,
            'order of the stage' => (int)$Stage->order,
            'belongs to board' => (int)$Stage->board_id,
            'stageCreated' => (string)$Stage->created_at,
            'stageLastChange' => (string)$Stage->updated_at,         
        ];
    }
}
