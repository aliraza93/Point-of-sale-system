<?php

namespace App\Models\project\Traits;

use App\Models\hrm\Hrm;


/**
 * Class ProjectRelationship
 */
trait MileStoneRelationship
{


    public function creator()
    {
        return $this->belongsTo(Hrm::class, 'user_id', 'id')->withoutGlobalScopes();;
    }


}
