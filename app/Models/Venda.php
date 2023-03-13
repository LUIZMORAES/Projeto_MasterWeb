<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Venda extends Model
{

    protected $table = 'pedido_venda_itens';

    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_prod_item',
        'nome_produto',
        'quantidade',
        'valor_unitario',
        'valor_totalProduto',
    ];

}
