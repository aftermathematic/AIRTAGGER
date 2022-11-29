<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FaqCat extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function faqItems()
    { 
  
        return $this->hasMany(FaqItem::class);
    }
}
