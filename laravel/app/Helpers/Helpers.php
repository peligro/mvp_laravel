<?php 
namespace App\Helpers;
use App\Models\PerfilesModulos; 
use DateTime;
class Helpers
{
  public static function moduloEnPerfil($perfiles_id, $modulos_id)
  {
    $existe=PerfilesModulos::where(['perfiles_id'=>$perfiles_id, 'modulos_id'=>$modulos_id])->count();
    if ($existe==0)
    {
      return false;
    }else{
      return true;
    }
  }
  public static function rutaActiva($paths=array(), $ruta, $posicion)
  {
    $route="";
    foreach($paths as $path)
    {
      if($path==$ruta)
      {
        $route=$ruta;
      }
    }
    if($route==$ruta)
    {
      switch ($posicion) {
        case '1':
          return "";
        break;
        case '2':
          return "show";
        break;
        case '3':
          return "active";
        break;
      }
    }else
    {
      switch ($posicion) {
        case '1':
          return "collapsed";
        break;
        case '2':
          return "";
        break;
        case '3':
          return "";
        break;
        
      }
    }
  }
  
  public static function restar_fechas($start, $end)
  {
    $start_ts = strtotime($start);
    $end_ts = strtotime($end);
    $diff = $end_ts - $start_ts;
    return round($diff / 86400);
  }
  public static function comparar_fechas_datetime( $date)
  {
    $fecha=strtotime(date("Y-m-d H:i:s"));
    $fecha2=strtotime($date);
    if($fecha2>$fecha)
    {
      return true;
    }else
    {
      return false;
    }
  }
  public static function base_path()
  {
    //return Helpers::base_domain().'/tamila/cencosud/dad_2_mn1/';
    if (!in_array($_SERVER['SERVER_PORT'], [80, 443])) {
      $port = ":" . $_SERVER['SERVER_PORT'];
    } else {
        $port = '';
    }
    return "http://" . dirname($_SERVER['SERVER_NAME'] . $port . $_SERVER['PHP_SELF']) . "/";
  }


  public static function fecha($fechaBruto, $tipo = '')
  {
    $fechaArray = explode(' ', $fechaBruto);
    $fecha = explode('-', $fechaArray[0]);
    $diaSemana = date("w", mktime(0, 0, 0, $fecha[1], $fecha[2], $fecha[0]));
    switch ($diaSemana) {
      case '1':
        $diaSemana = "Lunes";
        break;
      case '2':
        $diaSemana = "Martes";
        break;
      case '3':
        $diaSemana = "Miércoles";
        break;
      case '4':
        $diaSemana = "Jueves";
        break;
      case '5':
        $diaSemana = "Viernes";
        break;
      case '6':
        $diaSemana = "Sábado";
        break;
      case '0':
        $diaSemana = "Domingo";
        break;
    }
    switch ($fecha[1]) {
      case '01':
        $mes = "Enero";
        break;
      case '02':
        $mes = "Febrero";
        break;
      case '03':
        $mes = "Marzo";
        break;
      case '04':
        $mes = "Abril";
        break;
      case '05':
        $mes = "Mayo";
        break;
      case '06':
        $mes = "Junio";
        break;
      case '07':
        $mes = "Julio";
        break;
      case '08':
        $mes = "Agosto";
        break;
      case '09':
        $mes = "Septiembre";
        break;
      case '10':
        $mes = "Octubre";
        break;
      case '11':
        $mes = "Noviembre";
        break;
      case '12':
        $mes = "Diciembre";
        break;
    }
    switch ($tipo) {
      case 'datetime':
        $hora = explode(':', $fechaArray[1]);
        return $diaSemana . ' ' . $fecha[2] . ' de ' . $mes . ' de ' . $fecha[0] . ' a las ' . $hora[0] . ':' . $hora[1] . ':' . $hora[2] . ' ';
        break;
      case 'dte':
        return $fecha[0] . '' . $fecha[1] . '' . $fecha[2];
        break;
      default:
        return $diaSemana . ' ' . $fecha[2] . ' de ' . $mes . ' de ' . $fecha[0];
        break;
    }
  }
  public static function invierte_fecha_datepicker($date, $tipo )
  {
    
    switch($tipo)
    {
      case 'ida':
        $explode = explode('/', $date);
        return $explode[2]."-".$explode[0]."-".$explode[1];
      break;
      case 'vuelta':
        $explode = explode('-', $date);
        return $explode[1]."/".$explode[2]."/".$explode[0];
      break;
    }
    
  }
  public static function invierte_fecha_datetime($date, $tipo = '')
  {
    $fecha = explode(' ', $date);
    $explode = explode('-', $fecha[0]);
    switch ($tipo) {
      case 'datetime':
        return $explode[2] . '-' . $explode[1] . '-' . $explode[0] . ' ' . $fecha[1];
      break;
      case 'sql':
        return $explode[0] . '-' . $explode[1] . '-' . $explode[2] ;
      break;
      case 'hora':
        return  $fecha[1];
      break;
      default:
        return $explode[2] . '-' . $explode[1] . '-' . $explode[0];
      break;
    }
     
  }
  public static function agregarCeroIzquierda($numero)
  {
    if(strlen("".$numero)==1)
    {
      return "000".$numero;
    }elseif(strlen("".$numero)==2)
    {
      return "00".$numero;
    }elseif(strlen("".$numero)==3)
    {
      return "0".$numero;
    }else
    {
      return $numero;
    }
  }
  public static function obtener_edad_segun_fecha($fecha_nacimiento)
  {
      $nacimiento = new DateTime($fecha_nacimiento);
      $ahora = new DateTime(date("Y-m-d"));
      $diferencia = $ahora->diff($nacimiento);
      return $diferencia->format("%y");
  }

}
