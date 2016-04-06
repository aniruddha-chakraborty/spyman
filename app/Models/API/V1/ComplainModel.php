<?php

namespace App\Models\API\V1;

use DB;
use Illuminate\Database\Eloquent\Model;

class ComplainModel extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'complain';

    public function getComplainInfo($token_id)
    {
        $query = DB::table($this->table);
        $query->select('status', 'completed_date');
        $query->where('token_id', $token_id);
        $result = $query->first();

        return $result;
    }
}
