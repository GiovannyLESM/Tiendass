<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Producto
 *
 * @property $id
 * @property $categoria_id
 * @property $brand_id
 * @property $name
 * @property $slug
 * @property $details
 * @property $price
 * @property $shipping_cost
 * @property $description
 * @property $image
 * @property $visible
 * @property $created_at
 * @property $updated_at
 *
 * @property Categoria $categoria
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Producto extends Model
{
    
    static $rules = [
		'categoria_id' => 'required',
		'brand_id' => 'required',
		'name' => 'required',
		'slug' => 'required',
		'price' => 'required',
		'shipping_cost' => 'required',
		'description' => 'required',
		'image' => 'required',
		'visible' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['categoria_id','brand_id','name','slug','details','price','shipping_cost','description','image','visible'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function categoria()
    {
        return $this->hasOne('App\Models\Categoria', 'id', 'categoria_id');
    }
    

}
