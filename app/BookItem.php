<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookItem extends Model
{
	protected $table = 'book_items';
	protected $fillable = ['book_id', 'created_at', 'updated_at'];
}
