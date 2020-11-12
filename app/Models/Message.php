<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use PhpParser\Builder;

class Message extends Model
{
  protected $fillable= ['name','email','message'];



  //ou bien dans app\scopes\DataScopable.php de type trait not class et on met ici use DataScopable
public function scopeTwoMonthsOld(Builder $query){

    $query->where('created_at','<=',Carbon::parse('2 month ago'))->delete();

}
}
