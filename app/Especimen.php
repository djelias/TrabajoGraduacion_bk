<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Especimen extends Model
{
    protected $fillable = ['idEspecie', 'cantidad', 'caracteristicas','codigoEspecimen','colector','fechaColecta','habitat','horaSecuenciacion1','idTaxonomia','latitud','longitud','peso','tamano','tecnicaRecoleccion','tipoMuestra'];
    protected $dates = ['created_at','updated_at'];

    public function scopeNombre($query, $codigoEspecimen)
	{
		return $query->where('codigoEspecimen', 'LIKE', "%$codigoEspecimen%");
	}
   
  public function Taxonomia(){
    return $this->belongsTo('App\Taxonomia', 'idTaxonomia');
   }

  public function Especie(){
    return $this->belongsTo('App\Especie', 'idEspecie');
   }

   public function Genero(){
    return $this->belongsTo('App\Genero', 'idGenero');
   }

  public function Familia(){
    return $this->belongsTo('App\Familia', 'idFamilia');
   }
   public function Orden(){
    return $this->belongsTo('App\Orden', 'idOrden');
   }

  public function Clase(){
    return $this->belongsTo('App\Clase', 'idClase');
   }

    public function Filum(){
    return $this->belongsTo('App\Filum', 'idFilum');
   }

	public function Reino(){
    return $this->belongsTo('App\Reino', 'idReino');
   }

	public function Dominio(){
    return $this->belongsTo('App\Dominio', 'idDominio');
}
}