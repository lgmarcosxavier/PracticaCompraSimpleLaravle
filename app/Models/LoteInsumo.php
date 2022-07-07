<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoteInsumo extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'lote_insumo';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_compra',
        'fecha_vencimiento',
        'id_insumo',
        'no_lote',
        'cantidad',
        'existencia',
        'precio_compra',
        'descuento',
        'subtotal',
        'estado',
    ];
}
