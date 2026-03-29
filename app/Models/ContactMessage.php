<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactMessage extends Model
{
    //
  protected $fillable = [
    'name',
    'email',
    'phone',
    'address',
    'message'
];


 public function getPhoneAttribute($value)
    {
        if (strlen($value) == 10) {
            return substr($value, 0, 3) . '-' . substr($value, 3, 3) . '-' . substr($value, 6);
        }

        return $value;
    }
}
