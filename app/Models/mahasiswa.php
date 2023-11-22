<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class mahasiswa extends Model
{
    use HasFactory;

    protected $fillable=['nim','nama','jurusan_id'];

    protected $table= '_mhs';

public function jurusan(): BelongsTo
{
    return $this->BelongsTo(jurusan::class,'jurusan_id', 'id');
}
}
