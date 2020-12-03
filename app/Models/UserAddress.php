<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model
{
    //
    protected $fillable=[
        'province',
        'city',
        'district',
        'address',
        'zip',
        'contact_name',
        'contact_phone',
        'last_used_ad'
    ];
    protected $dates = ['last_used_at'];

    public function user(){
        return $this->belongsTo(User::class);
    }
    //访问器，改变原来返回值的格式或数据的
    public function getFullAddressAttribute(){
        return "{$this->provice}{$this->city}{$this->district}{$this->address}";
    }
}
