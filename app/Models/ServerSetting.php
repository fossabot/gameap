<?php

namespace Gameap\Models;

use Illuminate\Database\Eloquent\Model;

class ServerSetting extends Model
{
    public $table = 'servers_settings';
    public $timestamps = false;
    
    public $fillable = [
        'server_id',
        'name',
        'value',
    ];

    public function server()
    {
        return $this->belongsTo(Server::class);
    }


}
