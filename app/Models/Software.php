<?php

namespace App\Models;

use App\Http\Helpers\HumanReadable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Spatie\Tags\HasTags;


class Software extends Model
{
    use HasFactory;
    use HasTags;

    protected $fillable = [
        'file_name',
        'uuid',
        'description',
        'file_size',
        'file_extension',
        'mime_type',
    ];




}
