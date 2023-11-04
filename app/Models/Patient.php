<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class Patient extends Model implements Authenticatable
{
    use AuthenticableTrait;

    use HasFactory;
    protected $table = 'patients';
    protected $fillable = ['name', 'email_id','patient_id', 'mobile_no', 'profile_image'];
}