<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Note extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'slug',
        'title',
        'note',
        'password',
    ];

    protected $encrypt = ['title','note'];

    public function setAttribute($key, $value){
        if(in_array($key, $this->encrypt)){
            $this->attributes[$key]=encrypt($value);
        }else{
            parent::setAttribute($key,$value);
        }
    }

    public function getAttribute($key){
        if(in_array($key,$this->encrypt) && !empty($this->attributes[$key])){
            return decrypt($this->attributes[$key]);
        }else{
        return parent::getAttribute($key);

        }

    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function User(){
        return $this->belongsTo(User::class);
    }
}
