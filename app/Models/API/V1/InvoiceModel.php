<?php

namespace App\Models\API\V1;

use DB;
use Illuminate\Database\Eloquent\Model;

class InvoiceModel extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'invoice';

    public function getInvoiceInfo($token_id)
    {
        $query = DB::table($this->table);
        $query->select('product_cost', 'total_vat', 'total_amount', 'token_id', 'created_at');
        $query->where('token_id', $token_id);
        $result = $query->first();

        return $result;
    }
}
