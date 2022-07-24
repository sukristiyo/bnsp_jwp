<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mbkm extends Model
{
    use HasFactory;

    protected $table = "mbkm";

    public function registration_file()
    {
        return $this->hasOne(RegistrationFile::class, "mbkm_id");
    }

    public function courses()
    {
        return $this->hasMany(Course::class, "mbkm_id");
    }
}
