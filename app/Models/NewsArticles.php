<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsArticles extends Model
{
    protected $table = 'webtext';
    public const CREATED_AT = 'CreDate';
    public const UPDATED_AT = 'ModDate';
    protected $primaryKey = 'TextNo';
}
