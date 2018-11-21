<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MailCollab extends Model
{
    //
	protected $fillable = ['email',
                        
                          'fromName', 
                          'link_address'];

    /**
     * Get the user that owns the widget.
     */
    public function user()
    {

        return $this->belongsTo('App\User');
    }

}
