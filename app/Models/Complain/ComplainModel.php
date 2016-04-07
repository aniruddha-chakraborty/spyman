<?php

namespace App\Models\Complain;

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

    /**
     * Get all of the complain info
     *
     * @return resource
     */
    public function getAllComplainInfo()
    {
        $query = DB::table($this->table);
        $query->select('*');
        $result = $query->paginate(5);

        return $result;
    }

    /**
     * Get all of the complain info
     *
     * @return resource
     */
    public function getInprocessComplain()
    {
        $query = DB::table($this->table);
        $query->select('*');
        $query->where('status', 'processing');
        $result = $query->paginate(20);

        return $result;
    }

    /**
     * Get all of the complain info
     *
     * @return resource
     */
    public function getInComplainInfo()
    {
        $query = DB::table($this->table);
        $query->select('*');
        $query->where('status', 'incomplete');
        $result = $query->paginate(20);

        return $result;
    }

    /**
     * Get all of the complain info
     *
     * @return resource
     */
    public function getAllCompletedComplain()
    {
        $query = DB::table($this->table);
        $query->select('*');
        $query->where('status', 'completed');
        $result = $query->paginate(20);

        return $result;
    }

    /**
     * Get the individual complain by token id
     *
     * @param $token_id
     * @return mixed
     */
    public function getComplainInfo($token_id)
    {
        $query = DB::table($this->table);
        $query->select('status', 'completed_date');
        $query->where('token_id', $token_id);
        $result = $query->first();

        return $result;
    }
}
