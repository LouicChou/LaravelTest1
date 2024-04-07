<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\Console\Command\DumpCompletionCommand;

class Address extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class, 'u_id');
    }
}
