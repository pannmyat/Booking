<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class companyprofile extends Model
{	
	
    public $fillable = ['name','title','address','contactno','email','logo'];
    
}
