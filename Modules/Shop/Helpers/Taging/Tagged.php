<?php namespace Modules\Shop\Helpers\Taging;

use Illuminate\Database\Eloquent\Model;

class Tagged extends Model {

	protected $table = 'shop_tagged';
	public $timestamps = false;
	protected $fillable = ['tag_name', 'tag_slug'];

	public function taggable() {
		return $this->morphTo();
	}

}