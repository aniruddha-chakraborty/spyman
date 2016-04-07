<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use DB;

class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'username', 'password'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    public function get_profile_data($nid) {

         return  DB::table('people')
                ->where('people.nid', '=', $nid)
                ->get();
    }

    public function get_rajuk($nid) {

        return DB::table('rajuk')
                  ->where('rajuk.nid','=',$nid)
                  ->get();
    }

    public function get_land($nid) {

        return DB::table('land')
                 ->where('land.nid','=',$nid)
                 ->get();

    }

    public function get_service($nid) {

        return DB::table('service')
                    ->where('service.nid','=',$nid)
                    ->get();

    }

    public function get_business($nid) { 

        return DB::table('business')
                    ->where('business.nid','=',$nid)
                    ->get();
    }

    public function get_brta($nid) {

        return DB::table('brta')
                    ->where('brta.nid',$nid)
                    ->get();
    }

    public function marrige($nid) {

        return DB::table('marrige')
                    ->where('people_1_nid','=',$nid)
                    ->get();

    }




}
