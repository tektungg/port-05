<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class PoorFamilyModel extends Model
{
    use HasFactory;
    protected $table = 'keluargakurangmampu';
    protected $guarded = [''];

    public function family(): HasOne
    {
        return $this->hasOne(ResidentModel::class, 'noKK', 'noKK');
    }
}