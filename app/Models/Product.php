<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Product extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

        /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'titulo_produto',
        'sku_produto',
        'preço',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getProducts(string|null $search = null)
    {
        $products = $this->where(function ($query) use ($search){
            if($search) {
                $query->where('sku_produto',$search);
                $query->orWhere('titulo_produto', 'LIKE', "%{$search}%");
            }
        })->paginate(20)();

        return $products;
    }

    public function pedidos()
    {
        return $this->hasMany(Pedido::class);
    }

}