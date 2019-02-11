<?php

namespace App\Models\tickets;

use Illuminate\Database\Eloquent\Model;

use App\Models\tickets\Attribute\ticketsAttribute;
use App\Models\tickets\Relationship\ticketsRelationship;
use App\Models\tickets\Scope\ticketsScope;

class tickets extends Model
{
    use ticketsAttribute, ticketsRelationship, ticketsScope;

    protected $table = 'tickets';

    protected $fillable = [ 'id','name','ticket','created_at','updated_at' ];
    //
}
