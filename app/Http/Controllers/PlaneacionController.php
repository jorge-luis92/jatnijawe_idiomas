<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Carrera;
use App\Escuela;
use App\Persona;
use App\Direccion;
use App\Administrativo;
use App\CodigoPostal;
use Illuminate\Support\Facades\DB;
class PlaneacionController extends Controller
{

  public function home_planeacion(){
    return view('personal_administrativo/planeacion.home_planeacion');
  }

/*INFO COORDINACION ACADEMICA*/
  public function info_coord_academica1(){

    $total_genero=DB::select ('SELECT personas.genero, COUNT(estudiantes.matricula) as total
    FROM personas, estudiantes WHERE personas.id_persona=estudiantes.id_persona AND estudiantes.modalidad="ESCOLARIZADA"
    AND estudiantes.sede="CU" GROUP BY personas.genero');
    $count_total_genero = count($total_genero);
    $total_femenino = 0;
    $total_masculino = 0;
    if ($count_total_genero > 0) {
           $total_femenino = $total_genero[0]->total;
            if ($count_total_genero == 2) {
                $total_masculino = $total_genero[1]->total;
            }
    }

    $total= $total_femenino + $total_masculino;


    $total_genero2=DB::select ('SELECT personas.genero, COUNT(estudiantes.matricula) as total
    FROM personas, estudiantes WHERE personas.id_persona=estudiantes.id_persona AND estudiantes.modalidad="SEMI ESCOLARIZADA"
    AND estudiantes.sede="CU" GROUP BY personas.genero');
    $count_total = count($total_genero2);
    $total_femenino2 = 0;
    $total_masculino2 = 0;
    if ($count_total > 0) {
           $total_femenino2 = $total_genero2[0]->total;
            if ($count_total == 2) {
                $total_masculino2 = $total_genero2[1]->total;
            }
    }
    $total2= $total_femenino2 + $total_masculino2;

    $total_inscritos_fem=$total_femenino + $total_femenino2;
    $total_inscritos_masc=$total_masculino + $total_masculino2;
    $total_general=$total_inscritos_fem + $total_inscritos_masc;

    $estudiantes_discapacidadESC=DB::select('SELECT SUM(total) as tot
    FROM (SELECT discapacidades.tipo, COUNT(estudiantes.matricula) as total
    FROM personas, estudiantes, discapacidades
    WHERE personas.id_persona=estudiantes.id_persona
    AND personas.id_persona=discapacidades.id_persona
    AND estudiantes.modalidad="ESCOLARIZADA"
    AND estudiantes.sede="CU"
    GROUP BY discapacidades.tipo) as total');
    $total_estudiantes_discapacidadESC=$estudiantes_discapacidadESC[0]->tot;

    $estudiantes_discapacidadSEMI=DB::select('SELECT SUM(total) as tot2
    FROM (SELECT discapacidades.tipo, COUNT(estudiantes.matricula) as total
    FROM personas, estudiantes, discapacidades
    WHERE personas.id_persona=estudiantes.id_persona
    AND personas.id_persona=discapacidades.id_persona
    AND estudiantes.modalidad="SEMI ESCOLARIZADA"
    AND estudiantes.sede="CU"
    GROUP BY discapacidades.tipo) as total');
    $total_estudiantes_discapacidadSEMI=$estudiantes_discapacidadSEMI[0]->tot2;

    $total_estudiantes_discapacidad=$total_estudiantes_discapacidadESC + $total_estudiantes_discapacidadSEMI;

    $estudiantes_lenguaESCO=DB::select('SELECT SUM(total) as totl1 FROM
    (SELECT lenguas.nombre_lengua, COUNT(estudiantes.matricula) as total
    FROM personas, estudiantes, lenguas
    WHERE personas.id_persona=estudiantes.id_persona
    AND personas.id_persona=lenguas.id_persona
    AND estudiantes.modalidad="ESCOLARIZADA"
    AND estudiantes.sede="CU"
    GROUP BY lenguas.nombre_lengua) as total');
    $total_estudiantes_lenguaESCO=$estudiantes_lenguaESCO[0]->totl1;

    $estudiantes_lenguaSEMI=DB::select('SELECT SUM(total) as totl2 FROM
    (SELECT lenguas.nombre_lengua, COUNT(estudiantes.matricula) as total
    FROM personas, estudiantes, lenguas
    WHERE personas.id_persona=estudiantes.id_persona
    AND personas.id_persona=lenguas.id_persona
    AND estudiantes.modalidad="SEMI ESCOLARIZADA"
    AND estudiantes.sede="CU"
    GROUP BY lenguas.nombre_lengua) as total');
    $total_estudiantes_lenguaSEMI=$estudiantes_lenguaSEMI[0]->totl2;

    $total_estudiantes_lengua=$total_estudiantes_lenguaESCO + $total_estudiantes_lenguaSEMI;

    return view('personal_administrativo/planeacion/info_departamentos/info_coord_academica.info_coord_academica1')
    ->with('total_femenino', $total_femenino)->with('total_masculino', $total_masculino )->with('total', $total)
    ->with('total_femenino2', $total_femenino2)->with('total_masculino2', $total_masculino2 )->with('total2', $total2)
    ->with('total_inscritos_masc', $total_inscritos_masc)
    ->with('total_inscritos_fem', $total_inscritos_fem)->with('total_general', $total_general)

    ->with('estudiantes_discapacidadESC', $estudiantes_discapacidadESC)
    ->with('estudiantes_discapacidadSEMI', $estudiantes_discapacidadSEMI)
    ->with('total_estudiantes_discapacidadESC',$total_estudiantes_discapacidadESC)
    ->with('total_estudiantes_discapacidadSEMI',$total_estudiantes_discapacidadSEMI)
    ->with('total_estudiantes_discapacidad',$total_estudiantes_discapacidad)

    ->with('estudiantes_lenguaESCO', $estudiantes_lenguaESCO)
    ->with('estudiantes_lenguaSEMI', $estudiantes_lenguaSEMI)
    ->with('total_estudiantes_lenguaESCO',$total_estudiantes_lenguaESCO)
    ->with('total_estudiantes_lenguaSEMI',$total_estudiantes_lenguaSEMI)
    ->with('total_estudiantes_lengua',$total_estudiantes_lengua);
}


public function info_coord_academica2(){
  //--------------------ESTUDIANTES BECADOS DEL CICLO ESCOLAR ACTUAL
  //----------MODALIDAD ESCOLARIZADA
  //------MASCULINO
  $sql = 'SELECT becas.tipo_beca, COUNT(estudiantes.matricula) as total
  FROM personas, estudiantes, becas
  WHERE personas.id_persona=estudiantes.id_persona
  AND personas.genero="M" AND estudiantes.matricula=becas.matricula
  AND estudiantes.modalidad="ESCOLARIZADA"
  AND estudiantes.sede="CU"
  AND becas.tipo_beca="t_b"
  GROUP BY becas.tipo_beca';
  $beca_query = DB::select(str_replace("t_b", "INSTITUCIONAL", $sql));
  $total_masc_I = 0;
  if(count($beca_query) > 0) {
    $total_masc_I = $beca_query[0]->total;
  }
  $beca_query = DB::select(str_replace("t_b", "FEDERAL", $sql));
  $total_masc_F = 0;
  if(count($beca_query) > 0) {
    $total_masc_F = $beca_query[0]->total;
  }
  $beca_query = DB::select(str_replace("t_b", "ESTATAL", $sql));
  $total_masc_E = 0;
  if(count($beca_query) > 0) {
    $total_masc_E = $beca_query[0]->total;
  }
  $beca_query = DB::select(str_replace("t_b", "MUNICIPAL", $sql));
  $total_masc_M = 0;
  if(count($beca_query) > 0) {
    $total_masc_M = $beca_query[0]->total;
  }
  $beca_query = DB::select(str_replace("t_b", "PARTICULAR", $sql));
  $total_masc_P = 0;
  if(count($beca_query) > 0) {
    $total_masc_P = $beca_query[0]->total;
  }
  $beca_query = DB::select(str_replace("t_b", "INTERNACIONAL", $sql));
  $total_masc_IN = 0;
  if(count($beca_query) > 0) {
  $total_masc_IN = $beca_query[0]->total;
  }

  //------FEMENINO
  $sql = 'SELECT becas.tipo_beca, COUNT(estudiantes.matricula) as total
  FROM personas, estudiantes, becas
  WHERE personas.id_persona=estudiantes.id_persona
  AND personas.genero="F" AND estudiantes.matricula=becas.matricula
  AND estudiantes.modalidad="ESCOLARIZADA"
  AND estudiantes.sede="CU"
  AND becas.tipo_beca="t_b"
  GROUP BY becas.tipo_beca';
  $beca_query = DB::select(str_replace("t_b", "INSTITUCIONAL", $sql));
  $total_fem_I = 0;
  if(count($beca_query) > 0) {
    $total_fem_I = $beca_query[0]->total;
  }
  $beca_query = DB::select(str_replace("t_b", "FEDERAL", $sql));
  $total_fem_F = 0;
  if(count($beca_query) > 0) {
    $total_fem_F = $beca_query[0]->total;
  }
  $beca_query = DB::select(str_replace("t_b", "ESTATAL", $sql));
  $total_fem_E = 0;
  if(count($beca_query) > 0) {
    $total_fem_E = $beca_query[0]->total;
  }
  $beca_query = DB::select(str_replace("t_b", "MUNICIPAL", $sql));
  $total_fem_M = 0;
  if(count($beca_query) > 0) {
    $total_fem_M = $beca_query[0]->total;
  }
  $beca_query = DB::select(str_replace("t_b", "PARTICULAR", $sql));
  $total_fem_P = 0;
  if(count($beca_query) > 0) {
    $total_fem_P = $beca_query[0]->total;
  }
  $beca_query = DB::select(str_replace("t_b", "INTERNACIONAL", $sql));
  $total_fem_IN = 0;
  if(count($beca_query) > 0) {
    $total_fem_IN = $beca_query[0]->total;
  }

  //----------MODALIDAD SEMI ESCOLARIZADA
  //------MASCULINO
  $sql = 'SELECT becas.tipo_beca, COUNT(estudiantes.matricula) as total
  FROM personas, estudiantes, becas
  WHERE personas.id_persona=estudiantes.id_persona
  AND personas.genero="M" AND estudiantes.matricula=becas.matricula
  AND estudiantes.modalidad="SEMI ESCOLARIZADA"
  AND estudiantes.sede="CU"
  AND becas.tipo_beca="t_b"
  GROUP BY becas.tipo_beca';
  $beca_query = DB::select(str_replace("t_b", "INSTITUCIONAL", $sql));
  $total_masc_I_S = 0;
  if(count($beca_query) > 0) {
    $total_masc_I_S = $beca_query[0]->total;
  }
  $beca_query = DB::select(str_replace("t_b", "FEDERAL", $sql));
  $total_masc_F_S = 0;
  if(count($beca_query) > 0) {
    $total_masc_F_S = $beca_query[0]->total;
  }
  $beca_query = DB::select(str_replace("t_b", "ESTATAL", $sql));
  $total_masc_E_S = 0;
  if(count($beca_query) > 0) {
    $total_masc_E_S = $beca_query[0]->total;
  }
  $beca_query = DB::select(str_replace("t_b", "MUNICIPAL", $sql));
  $total_masc_M_S = 0;
  if(count($beca_query) > 0) {
    $total_masc_M_S = $beca_query[0]->total;
  }
  $beca_query = DB::select(str_replace("t_b", "PARTICULAR", $sql));
  $total_masc_P_S = 0;
  if(count($beca_query) > 0) {
    $total_masc_P_S = $beca_query[0]->total;
  }
  $beca_query = DB::select(str_replace("t_b", "INTERNACIONAL", $sql));
  $total_masc_IN_S = 0;
  if(count($beca_query) > 0) {
    $total_masc_IN_S = $beca_query[0]->total;
  }

    //------FEMENINO
  $sql = 'SELECT becas.tipo_beca, COUNT(estudiantes.matricula) as total
  FROM personas, estudiantes, becas
  WHERE personas.id_persona=estudiantes.id_persona
  AND personas.genero="F" AND estudiantes.matricula=becas.matricula
  AND estudiantes.modalidad="SEMI ESCOLARIZADA"
  AND estudiantes.sede="CU"
  AND becas.tipo_beca="t_b"
  GROUP BY becas.tipo_beca';
  $beca_query = DB::select(str_replace("t_b", "INSTITUCIONAL", $sql));
  $total_fem_I_S = 0;
  if(count($beca_query) > 0) {
    $total_fem_I_S = $beca_query[0]->total;
  }
  $beca_query = DB::select(str_replace("t_b", "FEDERAL", $sql));
  $total_fem_F_S = 0;
  if(count($beca_query) > 0) {
    $total_fem_F_S = $beca_query[0]->total;
  }
  $beca_query = DB::select(str_replace("t_b", "ESTATAL", $sql));
  $total_fem_E_S = 0;
  if(count($beca_query) > 0) {
    $total_fem_E_S = $beca_query[0]->total;
  }
  $beca_query = DB::select(str_replace("t_b", "MUNICIPAL", $sql));
  $total_fem_M_S = 0;
  if(count($beca_query) > 0) {
    $total_fem_M_S = $beca_query[0]->total;
  }
  $beca_query = DB::select(str_replace("t_b", "PARTICULAR", $sql));
  $total_fem_P_S = 0;
  if(count($beca_query) > 0) {
    $total_fem_P_S = $beca_query[0]->total;
  }
  $beca_query = DB::select(str_replace("t_b", "INTERNACIONAL", $sql));
  $total_fem_IN_S = 0;
  if(count($beca_query) > 0) {
    $total_fem_IN_S = $beca_query[0]->total;
  }

  //----------MODALIDAD ESCOLARIZADA
  //------CON DISCAPACIDAD
  $sql_bd= 'SELECT becas.tipo_beca, COUNT(estudiantes.matricula) as total_query
            FROM personas, estudiantes, discapacidades, becas
            WHERE personas.id_persona=estudiantes.id_persona
            AND personas.id_persona=discapacidades.id_persona
             AND estudiantes.modalidad="ESCOLARIZADA"
            AND estudiantes.sede="CU" AND estudiantes.matricula=becas.matricula
            GROUP BY becas.tipo_beca';
 $beca_query = DB::select($sql_bd);
 $array_becas = array(
   "INSTITUCIONAL" => 0,
   "FEDERAL" => 0,
   "ESTATAL" => 0,
   "MUNICIPAL" => 0,
   "PARTICULAR" => 0,
   "INTERNACIONAL" => 0,
   "TOTAL" => 0
 );
 $tipos_becas_ESC = array(
   "INSTITUCIONAL" => 0,
   "FEDERAL" => 0,
   "ESTATAL" => 0,
   "MUNICIPAL" => 0,
   "PARTICULAR" => 0,
   "INTERNACIONAL" => 0,
   "TOTAL" => 0
 );

  for($i = 0; $i < count($beca_query); $i++) {
    $sub = $beca_query[$i]->total_query;
    $tipos_becas_ESC[$beca_query[$i]->tipo_beca] = $sub;
    $tipos_becas_ESC['TOTAL'] += $sub;
    $array_becas[$beca_query[$i]->tipo_beca] += $sub;
    $array_becas['TOTAL'] += $sub;
  }

  //----------MODALIDAD SEMI ESCOLARIZADA
  //------CON DISCAPACIDAD
  $sql_bd= 'SELECT becas.tipo_beca, COUNT(estudiantes.matricula) as total_query
            FROM personas, estudiantes, discapacidades, becas
            WHERE personas.id_persona=estudiantes.id_persona
            AND personas.id_persona=discapacidades.id_persona
             AND estudiantes.modalidad="SEMI ESCOLARIZADA"
            AND estudiantes.sede="CU" AND estudiantes.matricula=becas.matricula
            GROUP BY becas.tipo_beca';
 $beca_query = DB::select($sql_bd);
 $tipos_becas_result = array(
   "INSTITUCIONAL" => 0,
   "FEDERAL" => 0,
   "ESTATAL" => 0,
   "MUNICIPAL" => 0,
   "PARTICULAR" => 0,
   "INTERNACIONAL" => 0,
   "TOTAL" => 0
 );

  for($i = 0; $i < count($beca_query); $i++) {
    $sub = $beca_query[$i]->total_query;
    $tipos_becas_result[$beca_query[$i]->tipo_beca] = $sub;
    $tipos_becas_result['TOTAL'] += $sub;
    $array_becas[$beca_query[$i]->tipo_beca] += $sub;
    $array_becas['TOTAL'] += $sub;
  }

  //----------MODALIDAD ESCOLARIZADA
  //------HABLANTE DE LENGUA
  $sql_bl= 'SELECT becas.tipo_beca, COUNT(estudiantes.matricula) as total_query
            FROM personas, estudiantes, lenguas, becas
            WHERE personas.id_persona=estudiantes.id_persona
            AND personas.id_persona=lenguas.id_persona
             AND estudiantes.modalidad="ESCOLARIZADA"
            AND estudiantes.sede="CU" AND estudiantes.matricula=becas.matricula
            GROUP BY becas.tipo_beca';
 $beca_query = DB::select($sql_bl);
 $array_becas = array(
   "INSTITUCIONAL" => 0,
   "FEDERAL" => 0,
   "ESTATAL" => 0,
   "MUNICIPAL" => 0,
   "PARTICULAR" => 0,
   "INTERNACIONAL" => 0,
   "TOTAL" => 0
 );
 $tipos_becas_ESCL = array(
   "INSTITUCIONAL" => 0,
   "FEDERAL" => 0,
   "ESTATAL" => 0,
   "MUNICIPAL" => 0,
   "PARTICULAR" => 0,
   "INTERNACIONAL" => 0,
   "TOTAL" => 0
 );

  for($i = 0; $i < count($beca_query); $i++) {
    $sub = $beca_query[$i]->total_query;
    $tipos_becas_ESCL[$beca_query[$i]->tipo_beca] = $sub;
    $tipos_becas_ESCL['TOTAL'] += $sub;
    $array_becas[$beca_query[$i]->tipo_beca] += $sub;
    $array_becas['TOTAL'] += $sub;
  }

  //----------MODALIDAD SEMI ESCOLARIZADA
  //------HABLANTE DE LENGUA
  $sql_bl= 'SELECT becas.tipo_beca, COUNT(estudiantes.matricula) as total_query
            FROM personas, estudiantes, lenguas, becas
            WHERE personas.id_persona=estudiantes.id_persona
            AND personas.id_persona=lenguas.id_persona
            AND estudiantes.modalidad="SEMI ESCOLARIZADA"
            AND estudiantes.sede="CU"
            AND estudiantes.matricula=becas.matricula
            GROUP BY becas.tipo_beca';
 $beca_query = DB::select($sql_bl);
 $array_becas = array(
   "INSTITUCIONAL" => 0,
   "FEDERAL" => 0,
   "ESTATAL" => 0,
   "MUNICIPAL" => 0,
   "PARTICULAR" => 0,
   "INTERNACIONAL" => 0,
   "TOTAL" => 0
 );
 $tipos_becas_SEL = array(
   "INSTITUCIONAL" => 0,
   "FEDERAL" => 0,
   "ESTATAL" => 0,
   "MUNICIPAL" => 0,
   "PARTICULAR" => 0,
   "INTERNACIONAL" => 0,
   "TOTAL" => 0
 );

  for($i = 0; $i < count($beca_query); $i++) {
    $sub = $beca_query[$i]->total_query;
    $tipos_becas_SEL[$beca_query[$i]->tipo_beca] = $sub;
    $tipos_becas_SEL['TOTAL'] += $sub;
    $array_becas[$beca_query[$i]->tipo_beca] += $sub;
    $array_becas['TOTAL'] += $sub;
  }


  //----------ESTUDIANTES BECADOS TOTAL
  //------CON DISCAPACIDAD
  $sql_bd= 'SELECT becas.tipo_beca, COUNT(estudiantes.matricula) as total_query
            FROM personas, estudiantes, discapacidades, becas
            WHERE personas.id_persona=estudiantes.id_persona
            AND personas.id_persona=discapacidades.id_persona
            AND estudiantes.sede="CU" AND estudiantes.matricula=becas.matricula
            GROUP BY becas.tipo_beca';
 $beca_query = DB::select($sql_bd);
 $tipos_becas_D = array(
   "INSTITUCIONAL" => 0,
   "FEDERAL" => 0,
   "ESTATAL" => 0,
   "MUNICIPAL" => 0,
   "PARTICULAR" => 0,
   "INTERNACIONAL" => 0,
   "TOTAL" => 0
 );

  for($i = 0; $i < count($beca_query); $i++) {
    $sub = $beca_query[$i]->total_query;
    $tipos_becas_D[$beca_query[$i]->tipo_beca] = $sub;
    $tipos_becas_D['TOTAL'] += $sub;
    $array_becas[$beca_query[$i]->tipo_beca] += $sub;
    $array_becas['TOTAL'] += $sub;
  }

  //------HABLANTE DE LENGUA
  $sql_bl= 'SELECT becas.tipo_beca, COUNT(estudiantes.matricula) as total_query
            FROM personas, estudiantes, lenguas, becas
            WHERE personas.id_persona=estudiantes.id_persona
            AND personas.id_persona=lenguas.id_persona
            AND estudiantes.sede="CU"
            AND estudiantes.matricula=becas.matricula
            GROUP BY becas.tipo_beca';
 $beca_query = DB::select($sql_bl);
 $array_becas = array(
   "INSTITUCIONAL" => 0,
   "FEDERAL" => 0,
   "ESTATAL" => 0,
   "MUNICIPAL" => 0,
   "PARTICULAR" => 0,
   "INTERNACIONAL" => 0,
   "TOTAL" => 0
 );
 $tipos_becas_L = array(
   "INSTITUCIONAL" => 0,
   "FEDERAL" => 0,
   "ESTATAL" => 0,
   "MUNICIPAL" => 0,
   "PARTICULAR" => 0,
   "INTERNACIONAL" => 0,
   "TOTAL" => 0
 );

  for($i = 0; $i < count($beca_query); $i++) {
    $sub = $beca_query[$i]->total_query;
    $tipos_becas_L[$beca_query[$i]->tipo_beca] = $sub;
    $tipos_becas_L['TOTAL'] += $sub;
    $array_becas[$beca_query[$i]->tipo_beca] += $sub;
    $array_becas['TOTAL'] += $sub;
  }


  //


  return view('personal_administrativo/planeacion/info_departamentos/info_coord_academica.info_coord_academica2')
  ->with('array_becas', $array_becas) //TOTAL
  ->with('tipos_becas_ESC', $tipos_becas_ESC) //CON DISCAPACIDAD (BECADOS ESCO)
  ->with('tipos_becas_ESCL', $tipos_becas_ESCL) //HABLANTE DE LENGUA (BECADOS ESCO)
  ->with('tipos_becas_result', $tipos_becas_result) //CON DISCAPACIDAD (BECADOS SEMIMESCO)
  ->with('tipos_becas_SEL', $tipos_becas_SEL) // HABLANTE DE LENGUA  (BECADOS SEMIMESCO)
  ->with('tipos_becas_D', $tipos_becas_D) //TOTAL ESTUIANTES CON DISCAPACIDAD
  ->with('tipos_becas_L', $tipos_becas_L) //TOTAL ESTUIANTES CON BECA HABLANTE DE LENGUA

  ->with('total_masc_I', $total_masc_I)
  ->with('total_masc_F', $total_masc_F)
  ->with('total_masc_E', $total_masc_E)
  ->with('total_masc_M', $total_masc_M)
  ->with('total_masc_P', $total_masc_P)
  ->with('total_masc_IN', $total_masc_IN)
  ->with('total_masc', $total_masc_F + $total_masc_I + $total_masc_E + $total_masc_M
                      + $total_masc_P + $total_masc_IN)
  ->with('total_fem_I', $total_fem_I)
  ->with('total_fem_F', $total_fem_F)
  ->with('total_fem_E', $total_fem_E)
  ->with('total_fem_M', $total_fem_M)
  ->with('total_fem_P', $total_fem_P)
  ->with('total_fem_IN', $total_fem_IN)
  ->with('total_fem', $total_fem_F + $total_fem_I + $total_fem_E + $total_fem_M
                    + $total_fem_P + $total_fem_IN)
  ->with('total_general_I', $total_masc_I + $total_fem_I)
  ->with('total_general_F', $total_masc_F + $total_fem_F)
  ->with('total_general_E', $total_masc_E + $total_fem_E)
  ->with('total_general_M', $total_masc_M + $total_fem_M)
  ->with('total_general_P', $total_masc_P + $total_fem_P)
  ->with('total_general_IN', $total_masc_IN + $total_fem_IN)

  /*SEMI*/
  ->with('total_masc_I_S', $total_masc_I_S)
  ->with('total_masc_F_S', $total_masc_F_S)
  ->with('total_masc_E_S', $total_masc_E_S)
  ->with('total_masc_M_S', $total_masc_M_S)
  ->with('total_masc_P_S', $total_masc_P_S)
  ->with('total_masc_IN_S', $total_masc_IN_S)
  ->with('total_masc_S', $total_masc_F_S + $total_masc_I_S + $total_masc_E_S + $total_masc_M_S
                      + $total_masc_P_S + $total_masc_IN_S)
  ->with('total_fem_I_S', $total_fem_I_S)
  ->with('total_fem_F_S', $total_fem_F_S)
  ->with('total_fem_E_S', $total_fem_E_S)
  ->with('total_fem_M_S', $total_fem_M_S)
  ->with('total_fem_P_S', $total_fem_P_S)
  ->with('total_fem_IN_S', $total_fem_IN_S)
  ->with('total_fem_S', $total_fem_F_S + $total_fem_I_S + $total_fem_E_S + $total_fem_M_S
                    + $total_fem_P_S + $total_fem_IN_S)
  ->with('total_general_I_S', $total_masc_I_S + $total_fem_I_S)
  ->with('total_general_F_S', $total_masc_F_S + $total_fem_F_S)
  ->with('total_general_E_S', $total_masc_E_S + $total_fem_E_S)
  ->with('total_general_M_S', $total_masc_M_S + $total_fem_M_S)
  ->with('total_general_P_S', $total_masc_P_S + $total_fem_P_S)
  ->with('total_general_IN_S', $total_masc_IN_S + $total_fem_IN_S)

//------------TOTAL MASC Y FEMENINO
  ->with('total_masc_becas_I', $total_masc_I + $total_masc_I_S)
  ->with('total_masc_becas_F', $total_masc_F + $total_masc_F_S)
  ->with('total_masc_becas_E', $total_masc_E + $total_masc_E_S)
  ->with('total_masc_becas_M', $total_masc_M + $total_masc_M_S)
  ->with('total_masc_becas_P', $total_masc_P + $total_masc_P_S)
  ->with('total_masc_becas_IN', $total_masc_IN + $total_masc_IN_S)

  ->with('total_fem_becas_I', $total_fem_I + $total_fem_I_S)
  ->with('total_fem_becas_F', $total_fem_F + $total_fem_F_S)
  ->with('total_fem_becas_E', $total_fem_E + $total_fem_E_S)
  ->with('total_fem_becas_M', $total_fem_M + $total_fem_M_S)
  ->with('total_fem_becas_P', $total_fem_P + $total_fem_P_S)
  ->with('total_fem_becas_IN', $total_fem_IN + $total_fem_IN_S)

  ->with('total_becasMF_I', $total_masc_I + $total_masc_I_S + $total_fem_I + $total_fem_I_S)
  ->with('total_becasMF_F',$total_masc_F + $total_masc_F_S + $total_fem_F + $total_fem_F_S)
  ->with('total_becasMF_E', $total_masc_E + $total_masc_E_S + $total_fem_E + $total_fem_E_S)
  ->with('total_becasMF_M', $total_masc_M + $total_masc_M_S + $total_fem_M + $total_fem_M_S)
  ->with('total_becasMF_P', $total_masc_P + $total_masc_P_S + $total_fem_P + $total_fem_P_S)
  ->with('total_becasMF_IN', $total_masc_IN + $total_fem_IN + $total_fem_IN + $total_fem_IN_S)

  ;


  }

public function info_coord_academica3(){

    //------HABLANTE DE LENGUA MODALIDAD ESCO
$total_lenguasM=DB:: select('SELECT lenguas.nombre_lengua,
    COUNT(estudiantes.matricula) as total_lenguam
    FROM personas, estudiantes, lenguas
    WHERE personas.id_persona=estudiantes.id_persona
    AND estudiantes.sede="CU"
    AND estudiantes.modalidad="ESCOLARIZADA"
    AND personas.genero="M"
    AND personas.id_persona=lenguas.id_persona
    GROUP BY lenguas.nombre_lengua');

$total_lenguasF=DB:: select('SELECT lenguas.nombre_lengua,
    COUNT(estudiantes.matricula) as total_lengua
    FROM personas, estudiantes, lenguas
    WHERE personas.id_persona=estudiantes.id_persona
    AND estudiantes.sede="CU"
    AND estudiantes.modalidad="ESCOLARIZADA"
    AND personas.genero="F"
    AND personas.id_persona=lenguas.id_persona
    GROUP BY lenguas.nombre_lengua');

    $total_lenguasE=DB:: select('SELECT lenguas.nombre_lengua,
    COUNT(estudiantes.matricula) as total_lengua
    FROM personas, estudiantes, lenguas
    WHERE personas.id_persona=estudiantes.id_persona
    AND estudiantes.sede="CU"
    AND estudiantes.modalidad="ESCOLARIZADA"
    AND personas.id_persona=lenguas.id_persona
    GROUP BY lenguas.nombre_lengua');

$totalG_lenguas=DB::select ('SELECT personas.genero,
COUNT(estudiantes.matricula) as total
 FROM personas, estudiantes, lenguas
 WHERE personas.id_persona=estudiantes.id_persona
 AND personas.id_persona=lenguas.id_persona
 AND estudiantes.modalidad="ESCOLARIZADA"
 AND estudiantes.sede="CU"
 GROUP BY personas.genero');
 $count_totalG_lenguas = count($totalG_lenguas);
 $totalG_femeninoL = 0;
 $totalG_masculinoL = 0;
 if ($count_totalG_lenguas > 0) {
        $totalG_femeninoL = $totalG_lenguas[0]->total;
         if ($count_totalG_lenguas == 2) {
             $totalG_masculinoL = $totalG_lenguas[1]->total;
         }
 }

    $totalGLMF= $totalG_femeninoL + $totalG_masculinoL;


    //------HABLANTE DE LENGUA MODALIDAD SEMIESCO

    $total_lenguasMS=DB:: select('SELECT lenguas.nombre_lengua,
    COUNT(estudiantes.matricula) as total_lengua
    FROM personas, estudiantes, lenguas
    WHERE personas.id_persona=estudiantes.id_persona
    AND estudiantes.sede="CU"
    AND estudiantes.modalidad="SEMI ESCOLARIZADA"
    AND personas.genero="M"
    AND personas.id_persona=lenguas.id_persona
    GROUP BY lenguas.nombre_lengua');

   $total_lenguasFS=DB:: select('SELECT lenguas.nombre_lengua,
    COUNT(estudiantes.matricula) as total_lengua
    FROM personas, estudiantes, lenguas
    WHERE personas.id_persona=estudiantes.id_persona
    AND estudiantes.sede="CU"
    AND estudiantes.modalidad="SEMI ESCOLARIZADA"
    AND personas.genero="F"
    AND personas.id_persona=lenguas.id_persona
    GROUP BY lenguas.nombre_lengua');

    $total_lenguasS=DB:: select('SELECT lenguas.nombre_lengua,
     COUNT(estudiantes.matricula) as total_lengua
     FROM personas, estudiantes, lenguas
     WHERE personas.id_persona=estudiantes.id_persona
     AND estudiantes.sede="CU"
     AND estudiantes.modalidad="SEMI ESCOLARIZADA"
     AND personas.id_persona=lenguas.id_persona
     GROUP BY lenguas.nombre_lengua');


  $totalGS_lenguas=DB::select ('SELECT personas.genero,
  COUNT(estudiantes.matricula) as total
  FROM personas, estudiantes, lenguas
  WHERE personas.id_persona=estudiantes.id_persona
  AND personas.id_persona=lenguas.id_persona
  AND estudiantes.modalidad="SEMI ESCOLARIZADA"
  AND estudiantes.sede="CU"
  GROUP BY personas.genero');
  $count_totalGS_lenguas = count($totalGS_lenguas);
  $totalGS_femeninoL = 0;
  $totalGS_masculinoL = 0;
  if ($count_totalGS_lenguas > 0) {
         $totalGS_femeninoL = $totalGS_lenguas[0]->total;
          if ($count_totalGS_lenguas == 2) {
              $totalGS_masculinoL = $totalGS_lenguas[1]->total;
          }
  }


  $totalGSLMF= $totalGS_femeninoL + $totalGS_masculinoL;


  //------HABLANTE DE LENGUA GENERAL
$total_lenguasG=DB:: select('SELECT lenguas.nombre_lengua,
  COUNT(estudiantes.matricula) as total_lengua
  FROM personas, estudiantes, lenguas
  WHERE personas.id_persona=estudiantes.id_persona
  AND estudiantes.sede="CU"
  AND personas.id_persona=lenguas.id_persona
  GROUP BY lenguas.nombre_lengua');

$total_lenguasT=$totalGLMF + $totalGSLMF;

    return view('personal_administrativo/planeacion/info_departamentos/info_coord_academica.info_coord_academica3')
    //------HABLANTE DE LENGUA MODALIDAD ESCO
    ->with('total_lenguasM', $total_lenguasM)->with('total_lenguasF', $total_lenguasF)
    ->with('totalG_femeninoL', $totalG_femeninoL)->with('totalG_masculinoL', $totalG_masculinoL)
    ->with('total_lenguasE',$total_lenguasE)
    ->with('totalGLMF', $totalGLMF)
    //------HABLANTE DE LENGUA MODALIDAD SEMIESCO
    ->with('total_lenguasMS', $total_lenguasMS)->with('total_lenguasFS', $total_lenguasFS)
    ->with('totalGS_femeninoL', $totalGS_femeninoL)->with('totalGS_masculinoL', $totalGS_masculinoL)
    ->with('total_lenguasS',$total_lenguasS)
    ->with('totalGSLMF', $totalGSLMF)
    //------HABLANTE DE LENGUA GENERAL
    ->with('total_lenguasG', $total_lenguasG)
    ->with('total_lenguasT', $total_lenguasT)


    ;

  }

public function info_coord_academica4(){
//ESTUDIANTES QUE TIENEN ALGUNA ALERGIA/ENFERMEDAD ESCOLARIZADA
$total_enf_aler= ' SELECT enfermedades_alergias.tipo_enfermedadalergia,
COUNT(estudiantes.matricula) as total
FROM personas, estudiantes, enfermedades_alergias
WHERE personas.id_persona=estudiantes.id_persona
AND estudiantes.matricula=enfermedades_alergias.matricula
AND estudiantes.modalidad="ESCOLARIZADA"
AND estudiantes.sede="CU"
AND personas.genero="M"
GROUP BY enfermedades_alergias.tipo_enfermedadalergia';
  $ea_query = DB::select($total_enf_aler);
  $array_ea = array(
   "Alergia" => 0,
   "Enfermedad" => 0,
   "TOTAL" => 0
  );

  $tipos_eaM_ESC = array(
    "Alergia" => 0,
    "Enfermedad" => 0,
    "TOTAL" => 0
   );

for($i = 0; $i < count($ea_query); $i++) {
$sub = $ea_query[$i]->total;
$tipos_eaM_ESC[$ea_query[$i]->tipo_enfermedadalergia] = $sub;
$tipos_eaM_ESC['TOTAL'] += $sub;
$array_ea[$ea_query[$i]->tipo_enfermedadalergia] += $sub;
$array_ea['TOTAL'] += $sub;
}

$total_enf_alerF= ' SELECT enfermedades_alergias.tipo_enfermedadalergia,
COUNT(estudiantes.matricula) as total
FROM personas, estudiantes, enfermedades_alergias
WHERE personas.id_persona=estudiantes.id_persona
AND estudiantes.matricula=enfermedades_alergias.matricula
AND estudiantes.modalidad="ESCOLARIZADA"
AND estudiantes.sede="CU"
AND personas.genero="F"
GROUP BY enfermedades_alergias.tipo_enfermedadalergia';
$ea_query = DB::select($total_enf_alerF);
$tipos_eaF_ESC = array(
"Alergia" => 0,
"Enfermedad" => 0,
"TOTAL" => 0
);

for($i = 0; $i < count($ea_query); $i++) {
$sub = $ea_query[$i]->total;
$tipos_eaF_ESC[$ea_query[$i]->tipo_enfermedadalergia] = $sub;
$tipos_eaF_ESC['TOTAL'] += $sub;
$array_ea[$ea_query[$i]->tipo_enfermedadalergia] += $sub;
$array_ea['TOTAL'] += $sub;
}

$total_enf_alerT= ' SELECT enfermedades_alergias.tipo_enfermedadalergia,
COUNT(estudiantes.matricula) as total
FROM personas, estudiantes, enfermedades_alergias
WHERE personas.id_persona=estudiantes.id_persona
AND estudiantes.matricula=enfermedades_alergias.matricula
AND estudiantes.modalidad="ESCOLARIZADA"
AND estudiantes.sede="CU"
GROUP BY enfermedades_alergias.tipo_enfermedadalergia';
$ea_query = DB::select($total_enf_alerT);
$tipos_ea_ESC = array(
"Alergia" => 0,
"Enfermedad" => 0,
"TOTAL" => 0
);

for($i = 0; $i < count($ea_query); $i++) {
$sub = $ea_query[$i]->total;
$tipos_ea_ESC[$ea_query[$i]->tipo_enfermedadalergia] = $sub;
$tipos_ea_ESC['TOTAL'] += $sub;
$array_ea[$ea_query[$i]->tipo_enfermedadalergia] += $sub;
$array_ea['TOTAL'] += $sub;
}

//ESTUDIANTES QUE TIENEN ALGUNA ALERGIA/ENFERMEDAD SEMIESCO
$total_enf_alerSEMI= ' SELECT enfermedades_alergias.tipo_enfermedadalergia,
COUNT(estudiantes.matricula) as totalS
FROM personas, estudiantes, enfermedades_alergias
WHERE personas.id_persona=estudiantes.id_persona
AND estudiantes.matricula=enfermedades_alergias.matricula
AND estudiantes.modalidad="SEMI ESCOLARIZADA"
AND estudiantes.sede="CU"
AND personas.genero="M"
GROUP BY enfermedades_alergias.tipo_enfermedadalergia';
$ea_queryS = DB::select($total_enf_alerSEMI);
$array_eaS = array(
"Alergia" => 0,
"Enfermedad" => 0,
"TOTAL" => 0
);
$tipos_eaM_SEMI = array(
"Alergia" => 0,
"Enfermedad" => 0,
"TOTAL" => 0
);

for($i = 0; $i < count($ea_queryS); $i++) {
$sub = $ea_queryS[$i]->totalS;
$tipos_eaM_SEMI[$ea_queryS[$i]->tipo_enfermedadalergia] = $sub;
$tipos_eaM_SEMI['TOTAL'] += $sub;
$array_eaS[$ea_queryS[$i]->tipo_enfermedadalergia] += $sub;
$array_eaS['TOTAL'] += $sub;
}

$total_enf_alerFSEMI= ' SELECT enfermedades_alergias.tipo_enfermedadalergia,
COUNT(estudiantes.matricula) as totalS
FROM personas, estudiantes, enfermedades_alergias
WHERE personas.id_persona=estudiantes.id_persona
AND estudiantes.matricula=enfermedades_alergias.matricula
AND estudiantes.modalidad="SEMI ESCOLARIZADA"
AND estudiantes.sede="CU"
AND personas.genero="F"
GROUP BY enfermedades_alergias.tipo_enfermedadalergia';
$ea_queryS = DB::select($total_enf_alerFSEMI);

$tipos_eaF_SEMI = array(
"Alergia" => 0,
"Enfermedad" => 0,
"TOTAL" => 0
);

for($i = 0; $i < count($ea_queryS); $i++) {
$sub = $ea_queryS[$i]->totalS;
$tipos_eaF_SEMI[$ea_queryS[$i]->tipo_enfermedadalergia] = $sub;
$tipos_eaF_SEMI['TOTAL'] += $sub;
$array_eaS[$ea_queryS[$i]->tipo_enfermedadalergia] += $sub;
$array_eaS['TOTAL'] += $sub;
}


$total_enf_alerGSEMI= ' SELECT enfermedades_alergias.tipo_enfermedadalergia,
COUNT(estudiantes.matricula) as totalS
FROM personas, estudiantes, enfermedades_alergias
WHERE personas.id_persona=estudiantes.id_persona
AND estudiantes.matricula=enfermedades_alergias.matricula
AND estudiantes.modalidad="SEMI ESCOLARIZADA"
AND estudiantes.sede="CU"
GROUP BY enfermedades_alergias.tipo_enfermedadalergia';
$ea_queryS = DB::select($total_enf_alerGSEMI);

$tipos_eaG_SEMI = array(
"Alergia" => 0,
"Enfermedad" => 0,
"TOTAL" => 0
);

for($i = 0; $i < count($ea_queryS); $i++) {
$sub = $ea_queryS[$i]->totalS;
$tipos_eaG_SEMI[$ea_queryS[$i]->tipo_enfermedadalergia] = $sub;
$tipos_eaG_SEMI['TOTAL'] += $sub;
$array_eaS[$ea_queryS[$i]->tipo_enfermedadalergia] += $sub;
$array_eaS['TOTAL'] += $sub;
}

/*----------------------------------------------------------*/
//TOTAL DE ESTUDIANTES QUE TIENEN ALGUNA ALERGIA/ENFERMEDAD
//MASCULINO
$total_enf_alerT= ' SELECT enfermedades_alergias.tipo_enfermedadalergia,
COUNT(estudiantes.matricula) as totalT
FROM personas, estudiantes, enfermedades_alergias
WHERE personas.id_persona=estudiantes.id_persona
AND estudiantes.matricula=enfermedades_alergias.matricula
AND estudiantes.sede="CU"
AND personas.genero="M"
GROUP BY enfermedades_alergias.tipo_enfermedadalergia';
$ea_queryT = DB::select($total_enf_alerT);
$array_eaT = array(
"Alergia" => 0,
"Enfermedad" => 0,
"TOTAL" => 0
);
$tipos_eaM_T = array(
"Alergia" => 0,
"Enfermedad" => 0,
"TOTAL" => 0
);

for($i = 0; $i < count($ea_queryT); $i++) {
$sub = $ea_queryT[$i]->totalT;
$tipos_eaM_T[$ea_queryT[$i]->tipo_enfermedadalergia] = $sub;
$tipos_eaM_T['TOTAL'] += $sub;
$array_eaT[$ea_queryT[$i]->tipo_enfermedadalergia] += $sub;
$array_eaT['TOTAL'] += $sub;
}
/*----------------------------------------------------------*/
//FEMENINO
$total_enf_alerTF= ' SELECT enfermedades_alergias.tipo_enfermedadalergia,
COUNT(estudiantes.matricula) as totalT
FROM personas, estudiantes, enfermedades_alergias
WHERE personas.id_persona=estudiantes.id_persona
AND estudiantes.matricula=enfermedades_alergias.matricula
AND estudiantes.sede="CU"
AND personas.genero="F"
GROUP BY enfermedades_alergias.tipo_enfermedadalergia';
$ea_queryT = DB::select($total_enf_alerTF);

$tipos_eaM_TF = array(
"Alergia" => 0,
"Enfermedad" => 0,
"TOTAL" => 0
);

for($i = 0; $i < count($ea_queryT); $i++) {
$sub = $ea_queryT[$i]->totalT;
$tipos_eaM_TF[$ea_queryT[$i]->tipo_enfermedadalergia] = $sub;
$tipos_eaM_TF['TOTAL'] += $sub;
$array_eaT[$ea_queryT[$i]->tipo_enfermedadalergia] += $sub;
$array_eaT['TOTAL'] += $sub;
}
/*----------------------------------------------------------*/
/*----------------------------------------------------------*/
//TOTAL
$total_enf_alerTG= ' SELECT enfermedades_alergias.tipo_enfermedadalergia,
COUNT(estudiantes.matricula) as totalT
FROM personas, estudiantes, enfermedades_alergias
WHERE personas.id_persona=estudiantes.id_persona
AND estudiantes.matricula=enfermedades_alergias.matricula
AND estudiantes.sede="CU"
GROUP BY enfermedades_alergias.tipo_enfermedadalergia';
$ea_queryT = DB::select($total_enf_alerTG);

$tipos_eaM_TG = array(
"Alergia" => 0,
"Enfermedad" => 0,
"TOTAL" => 0
);

for($i = 0; $i < count($ea_queryT); $i++) {
$sub = $ea_queryT[$i]->totalT;
$tipos_eaM_TG[$ea_queryT[$i]->tipo_enfermedadalergia] = $sub;
$tipos_eaM_TG['TOTAL'] += $sub;
$array_eaT[$ea_queryT[$i]->tipo_enfermedadalergia] += $sub;
$array_eaT['TOTAL'] += $sub;
}
/*----------------------------------------------------------*/

  return view('personal_administrativo/planeacion/info_departamentos/info_coord_academica.info_coord_academica4')
  ->with('array_ea', $array_ea)
  ->with('tipos_eaM_ESC', $tipos_eaM_ESC)
  ->with('tipos_eaF_ESC', $tipos_eaF_ESC)
  ->with('tipos_ea_ESC', $tipos_ea_ESC)
  ->with('array_eaS', $array_eaS)
  ->with('tipos_eaM_SEMI', $tipos_eaM_SEMI)
  ->with('tipos_eaF_SEMI', $tipos_eaF_SEMI)
  ->with('tipos_eaG_SEMI', $tipos_eaG_SEMI)
  ->with('array_eaT', $array_eaT)
  ->with('tipos_eaM_T',$tipos_eaM_T)
  ->with('tipos_eaM_TF',$tipos_eaM_TF)
  ->with('tipos_eaM_TG',$tipos_eaM_TG);
  }
  public function info_coord_academica5(){
    //----ESTUDIANTES DE LA MODALIDAD ESCOLARIZADA QUE REALIZAN OTRAS ACTIVIDADES
    //MASCULINO
    $sql_actext= 'SELECT datos_externos.tipo_actividadexterna, COUNT(estudiantes.matricula) as total_actext
                FROM personas, estudiantes, datos_externos
                WHERE personas.id_persona=estudiantes.id_persona
                AND estudiantes.matricula=datos_externos.matricula
                AND estudiantes.modalidad="ESCOLARIZADA"
                AND estudiantes.sede="CU"
                AND personas.genero="M"
                GROUP BY datos_externos.tipo_actividadexterna';
    $act_query = DB::select($sql_actext);
    $array_act = array(
     "Laboral" => 0,
     "Escolar" => 0,
     "TOTAL" => 0
    );

    $tipos_actextM_ESC = array(
      "Laboral" => 0,
      "Escolar" => 0,
      "TOTAL" => 0
     );

    for($i = 0; $i < count($act_query); $i++) {
      $sub = $act_query[$i]->total_actext;
      $tipos_actextM_ESC[$act_query[$i]->tipo_actividadexterna] = $sub;
      $tipos_actextM_ESC['TOTAL'] += $sub;
      $array_act[$act_query[$i]->tipo_actividadexterna] += $sub;
      $array_act['TOTAL'] += $sub;
    }

    //FEMENINO
    $sql_actext= 'SELECT datos_externos.tipo_actividadexterna, COUNT(estudiantes.matricula) as total_actext
                FROM personas, estudiantes, datos_externos
                WHERE personas.id_persona=estudiantes.id_persona
                AND estudiantes.matricula=datos_externos.matricula
                AND estudiantes.modalidad="ESCOLARIZADA"
                AND estudiantes.sede="CU"
                AND personas.genero="F"
                GROUP BY datos_externos.tipo_actividadexterna';
    $act_query = DB::select($sql_actext);
    $array_act = array(
     "Laboral" => 0,
     "Escolar" => 0,
     "TOTAL" => 0
    );

    $tipos_actextF_ESC = array(
      "Laboral" => 0,
      "Escolar" => 0,
      "TOTAL" => 0
     );

    for($i = 0; $i < count($act_query); $i++) {
      $sub = $act_query[$i]->total_actext;
      $tipos_actextF_ESC[$act_query[$i]->tipo_actividadexterna] = $sub;
      $tipos_actextF_ESC['TOTAL'] += $sub;
      $array_act[$act_query[$i]->tipo_actividadexterna] += $sub;
      $array_act['TOTAL'] += $sub;
    }

    //TOTAL
    $sql_actext= 'SELECT datos_externos.tipo_actividadexterna, COUNT(estudiantes.matricula) as total_actext
                FROM personas, estudiantes, datos_externos
                WHERE personas.id_persona=estudiantes.id_persona
                AND estudiantes.matricula=datos_externos.matricula
                AND estudiantes.modalidad="ESCOLARIZADA"
                AND estudiantes.sede="CU"
                GROUP BY datos_externos.tipo_actividadexterna';
    $act_query = DB::select($sql_actext);
    $array_act = array(
     "Laboral" => 0,
     "Escolar" => 0,
     "TOTAL" => 0
    );

    $tipos_actext_ESC = array(
      "Laboral" => 0,
      "Escolar" => 0,
      "TOTAL" => 0
     );

    for($i = 0; $i < count($act_query); $i++) {
      $sub = $act_query[$i]->total_actext;
      $tipos_actext_ESC[$act_query[$i]->tipo_actividadexterna] = $sub;
      $tipos_actext_ESC['TOTAL'] += $sub;
      $array_act[$act_query[$i]->tipo_actividadexterna] += $sub;
      $array_act['TOTAL'] += $sub;
    }



  //----ESTUDIANTES DE LA MODALIDAD SEMI ESCOLARIZADA QUE REALIZAN OTRAS ACTIVIDADES
  //MASCULINO

  $sql_actextS= 'SELECT datos_externos.tipo_actividadexterna, COUNT(estudiantes.matricula) as total_actext
              FROM personas, estudiantes, datos_externos
              WHERE personas.id_persona=estudiantes.id_persona
              AND estudiantes.matricula=datos_externos.matricula
              AND estudiantes.modalidad="SEMI ESCOLARIZADA"
              AND estudiantes.sede="CU"
              AND personas.genero="M"
              GROUP BY datos_externos.tipo_actividadexterna';
  $act_query = DB::select($sql_actextS);
  $array_act = array(
   "Laboral" => 0,
   "Escolar" => 0,
   "TOTAL" => 0
  );

  $tipos_actextM_SEMI = array(
    "Laboral" => 0,
    "Escolar" => 0,
    "TOTAL" => 0
   );

  for($i = 0; $i < count($act_query); $i++) {
    $sub = $act_query[$i]->total_actext;
    $tipos_actextM_SEMI[$act_query[$i]->tipo_actividadexterna] = $sub;
    $tipos_actextM_SEMI['TOTAL'] += $sub;
    $array_act[$act_query[$i]->tipo_actividadexterna] += $sub;
    $array_act['TOTAL'] += $sub;
  }

  //FEMENINO
  $sql_actextS= 'SELECT datos_externos.tipo_actividadexterna, COUNT(estudiantes.matricula) as total_actext
              FROM personas, estudiantes, datos_externos
              WHERE personas.id_persona=estudiantes.id_persona
              AND estudiantes.matricula=datos_externos.matricula
              AND estudiantes.modalidad="SEMI ESCOLARIZADA"
              AND estudiantes.sede="CU"
              AND personas.genero="F"
              GROUP BY datos_externos.tipo_actividadexterna';
  $act_query = DB::select($sql_actextS);
  $array_act = array(
   "Laboral" => 0,
   "Escolar" => 0,
   "TOTAL" => 0
  );

  $tipos_actextF_SEMI = array(
    "Laboral" => 0,
    "Escolar" => 0,
    "TOTAL" => 0
   );

  for($i = 0; $i < count($act_query); $i++) {
    $sub = $act_query[$i]->total_actext;
    $tipos_actextF_SEMI[$act_query[$i]->tipo_actividadexterna] = $sub;
    $tipos_actextF_SEMI['TOTAL'] += $sub;
    $array_act[$act_query[$i]->tipo_actividadexterna] += $sub;
    $array_act['TOTAL'] += $sub;
  }

  //TOTAL
  $sql_actextS= 'SELECT datos_externos.tipo_actividadexterna, COUNT(estudiantes.matricula) as total_actext
              FROM personas, estudiantes, datos_externos
              WHERE personas.id_persona=estudiantes.id_persona
              AND estudiantes.matricula=datos_externos.matricula
              AND estudiantes.modalidad="SEMI ESCOLARIZADA"
              AND estudiantes.sede="CU"
              GROUP BY datos_externos.tipo_actividadexterna';
  $act_query = DB::select($sql_actextS);
  $array_act = array(
   "Laboral" => 0,
   "Escolar" => 0,
   "TOTAL" => 0
  );

  $tipos_actext_SEMI = array(
    "Laboral" => 0,
    "Escolar" => 0,
    "TOTAL" => 0
   );

  for($i = 0; $i < count($act_query); $i++) {
    $sub = $act_query[$i]->total_actext;
    $tipos_actext_SEMI[$act_query[$i]->tipo_actividadexterna] = $sub;
    $tipos_actext_SEMI['TOTAL'] += $sub;
    $array_act[$act_query[$i]->tipo_actividadexterna] += $sub;
    $array_act['TOTAL'] += $sub;
  }

  //----ESTUDIANTES QUE REALIZAN OTRAS GENERAL
  //MASCULINO

  $sql_actext_TOT= 'SELECT datos_externos.tipo_actividadexterna, COUNT(estudiantes.matricula) as total_actext
              FROM personas, estudiantes, datos_externos
              WHERE personas.id_persona=estudiantes.id_persona
              AND estudiantes.matricula=datos_externos.matricula
              AND estudiantes.sede="CU"
              AND personas.genero="M"
              GROUP BY datos_externos.tipo_actividadexterna';
  $act_query = DB::select($sql_actext_TOT);
  $array_act = array(
   "Laboral" => 0,
   "Escolar" => 0,
   "TOTAL" => 0
  );

  $tipos_actextM = array(
    "Laboral" => 0,
    "Escolar" => 0,
    "TOTAL" => 0
   );

  for($i = 0; $i < count($act_query); $i++) {
    $sub = $act_query[$i]->total_actext;
    $tipos_actextM[$act_query[$i]->tipo_actividadexterna] = $sub;
    $tipos_actextM['TOTAL'] += $sub;
    $array_act[$act_query[$i]->tipo_actividadexterna] += $sub;
    $array_act['TOTAL'] += $sub;
  }

  //FEMENINO

  $sql_actext_TOT= 'SELECT datos_externos.tipo_actividadexterna, COUNT(estudiantes.matricula) as total_actext
              FROM personas, estudiantes, datos_externos
              WHERE personas.id_persona=estudiantes.id_persona
              AND estudiantes.matricula=datos_externos.matricula
              AND estudiantes.sede="CU"
              AND personas.genero="F"
              GROUP BY datos_externos.tipo_actividadexterna';
  $act_query = DB::select($sql_actext_TOT);
  $array_act = array(
   "Laboral" => 0,
   "Escolar" => 0,
   "TOTAL" => 0
  );

  $tipos_actextF = array(
    "Laboral" => 0,
    "Escolar" => 0,
    "TOTAL" => 0
   );

  for($i = 0; $i < count($act_query); $i++) {
    $sub = $act_query[$i]->total_actext;
    $tipos_actextF[$act_query[$i]->tipo_actividadexterna] = $sub;
    $tipos_actextF['TOTAL'] += $sub;
    $array_act[$act_query[$i]->tipo_actividadexterna] += $sub;
    $array_act['TOTAL'] += $sub;
  }

  //TOTAL

  $sql_actext_TOT= 'SELECT datos_externos.tipo_actividadexterna, COUNT(estudiantes.matricula) as total_actext
              FROM personas, estudiantes, datos_externos
              WHERE personas.id_persona=estudiantes.id_persona
              AND estudiantes.matricula=datos_externos.matricula
              AND estudiantes.sede="CU"
              GROUP BY datos_externos.tipo_actividadexterna';
  $act_query = DB::select($sql_actext_TOT);
  $array_act = array(
   "Laboral" => 0,
   "Escolar" => 0,
   "TOTAL" => 0
  );

  $tipos_actext = array(
    "Laboral" => 0,
    "Escolar" => 0,
    "TOTAL" => 0
   );

  for($i = 0; $i < count($act_query); $i++) {
    $sub = $act_query[$i]->total_actext;
    $tipos_actext[$act_query[$i]->tipo_actividadexterna] = $sub;
    $tipos_actext['TOTAL'] += $sub;
    $array_act[$act_query[$i]->tipo_actividadexterna] += $sub;
    $array_act['TOTAL'] += $sub;
  }

return view('personal_administrativo/planeacion/info_departamentos/info_coord_academica.info_coord_academica5')
->with('array_act', $array_act)
->with('tipos_actextM_ESC', $tipos_actextM_ESC)
->with('tipos_actextF_ESC', $tipos_actextF_ESC)
->with('tipos_actext_ESC', $tipos_actext_ESC)

->with('tipos_actextM_SEMI', $tipos_actextM_SEMI)
->with('tipos_actextF_SEMI', $tipos_actextF_SEMI)
->with('tipos_actext_SEMI', $tipos_actext_SEMI)

->with('tipos_actextM', $tipos_actextM)
->with('tipos_actextF', $tipos_actextF)
->with('tipos_actext', $tipos_actext);
}

/*INFO FORMACION INTEGRAL */
  public function info_formacion_integral1(){
  $total_ac_ec=DB:: select('SELECT extracurriculares.nombre_ec,
  COUNT(estudiantes.matricula) as total
  FROM personas, estudiantes, extracurriculares, detalle_extracurriculares
  WHERE personas.id_persona=estudiantes.id_persona
  AND personas.genero="M"
  AND estudiantes.matricula=detalle_extracurriculares.matricula
  AND estudiantes.modalidad="SESCOLARIZADA"
  AND estudiantes.sede="CU"
  GROUP BY extracurriculares.nombre_ec');

  $total_ac_ec_T=DB:: select('SELECT extracurriculares.tipo,
  COUNT(estudiantes.matricula) as total
  FROM personas, estudiantes, extracurriculares, detalle_extracurriculares
  WHERE personas.id_persona=estudiantes.id_persona
  AND personas.genero="M"
  AND estudiantes.matricula=detalle_extracurriculares.matricula
  AND estudiantes.modalidad="SEMI ESCOLARIZADA"
  AND estudiantes.sede="CU"
  GROUP BY extracurriculares.tipo');

  $total_ac_ec_A=DB:: select('SELECT extracurriculares.area,
  COUNT(estudiantes.matricula) as total
  FROM personas, estudiantes, extracurriculares, detalle_extracurriculares
  WHERE personas.id_persona=estudiantes.id_persona
  AND personas.genero="M"
  AND estudiantes.matricula=detalle_extracurriculares.matricula
  AND estudiantes.modalidad="SEMI ESCOLARIZADA"
  AND estudiantes.sede="CU"
  GROUP BY extracurriculares.area');

  $total_ac_ec_C=DB:: select('SELECT extracurriculares.creditos,
  COUNT(estudiantes.matricula) as total
  FROM personas, estudiantes, extracurriculares, detalle_extracurriculares
  WHERE personas.id_persona=estudiantes.id_persona
  AND personas.genero="M"
  AND estudiantes.matricula=detalle_extracurriculares.matricula
  AND estudiantes.modalidad="SEMI ESCOLARIZADA"
  AND estudiantes.sede="CU"
  GROUP BY extracurriculares.creditos');


  return view('personal_administrativo/planeacion/info_departamentos/info_form_integral.info_formacion_integral1')
  ->with('total_ac_ec', $total_ac_ec)
  ->with('total_ac_ec_T', $total_ac_ec_T)
  ->with('total_ac_ec_A', $total_ac_ec_A)
  ->with('total_ac_ec_C', $total_ac_ec_C);
  }

public function gral_escuela(){
  $usuario_actuales=\Auth::user();
   if($usuario_actuales->tipo_usuario!='2'){
     return redirect()->back();
    }
  $usuario_actual=auth()->user();
  $id=$usuario_actual->id_user;

  $id_persona = DB::table('users')
  ->select('users.id_persona')
  ->join('personas', 'personas.id_persona', '=', 'users.id_persona')
  ->where('users.id_persona',$id)
  ->take(1)
  ->first();
    $id_persona= $id_persona->id_persona;
    //$id_persona= json_decode( json_encode($id_persona), true);
  $codigo = DB::table('codigos_postales')
  ->select('codigos_postales.cp', 'codigos_postales.colonia', 'codigos_postales.municipio', 'codigos_postales.estado')
  ->where('codigos_postales.cp', '=', '68120')
  ->take(1)
  ->first();
  $id_admin = DB::table('administrativos')
  ->select('administrativos.id_administrativo')
  ->where('administrativos.id_persona', $id_persona)
  ->take(1)
  ->first();
  $id_admin= $id_admin->id_administrativo;

  $escuela_r = DB::table('escuelas')
  ->select('escuelas.clave_institucion', 'escuelas.clave_escuela', 'escuelas.nombre_escuela', 'escuelas.dependencia_normativa',
           'escuelas.institucion_pertenciente', 'escuelas.pagina_web_escuela')
  ->where('escuelas.responsable', $id_admin)
  ->take(1)
  ->first();

  $id_direccions= DB::table('escuelas')
  ->select('escuelas.id_direccion')
  ->where('escuelas.responsable', $id_admin)
  ->take(1)
  ->first();
  $id_direccions= $id_direccions->id_direccion;
  //$id_direccions= json_decode( json_encode($id_direccions), true);

  $direccion_director = DB::table('direcciones')
  ->select('direcciones.vialidad_principal', 'direcciones.vialidad_derecha', 'direcciones.vialidad_izquierda', 'direcciones.vialidad_psterior',
  'direcciones.num_exterior', 'direcciones.num_interior', 'direcciones.cp', 'direcciones.localidad','direcciones.municipio',
  'direcciones.entidad_federativa', 'direcciones.asentamiento_humano')
  ->where('direcciones.id_direccion',$id_direccions)
  ->take(1)
  ->first();

  $id_directores = DB::table('escuelas')
  ->select('escuelas.director')
  ->where('escuelas.responsable', $id_admin)
  ->take(1)
  ->first();

  //$id_directores= $id_directores->id_direccion;
  $id_directores= json_decode( json_encode($id_directores), true);

  $datos_director = DB::table('personas')
  ->select('personas.nombre', 'personas.apellido_paterno', 'personas.apellido_materno')
  ->where('personas.id_persona', $id_directores)
  ->take(1)
  ->first();

  return view ('personal_administrativo/planeacion.gral_escuela')
  ->with('codego', $codigo)->with('direccion_d', $direccion_director )->with('datos_director', $datos_director)->with('datos_escuela', $escuela_r);
}



protected function crear_escuela(Request $request){
  $usuario_actuales=\Auth::user();
   if($usuario_actuales->tipo_usuario!='2'){
     return redirect()->back();
    }
  $usuario_actual=auth()->user();
  $id=$usuario_actual->id_user;

  $id_persona = DB::table('users')
  ->select('users.id_persona')
  ->join('personas', 'personas.id_persona', '=', 'users.id_persona')
  ->where('users.id_persona',$id)
  ->take(1)
  ->first();
    $id_persona= $id_persona->id_persona;


  $valor_persona = DB::table('personas')->max('id_persona');
   $data = $request;
   $id_prueba= $valor_persona*4;
//   $id_persona= json_decode( json_encode($id_persona), true);
  $result = DB::table('escuelas')->count();
  $responsable_di = DB::table('escuelas')
  ->select('escuelas.director')
  ->take(1)
  ->first();

  if($result == 0){
    $valor_direccion = DB::table('direcciones')->max('id_direccion');
    $id_direc=$valor_direccion+1;

     $direccion = new Direccion;
     $direccion->id_direccion = $id_direc;
     $direccion->vialidad_principal=$data['vialidad_principal'];
     $direccion->vialidad_derecha=$data['vialidad_derecha'];
     $direccion->vialidad_izquierda=$data['vialidad_izquierda'];
     $direccion->vialidad_psterior=$data['vialidad_psterior'];
     $direccion->num_exterior=$data['num_exterior'];
     $direccion->num_interior=$data['num_interior'];
     $direccion->cp=$data['cp'];
     $direccion->localidad=$data['localidad'];
     $direccion->municipio=$data['municipio'];
     $direccion->entidad_federativa=$data['entidad_federativa'];
     $direccion->asentamiento_humano=$data['asentamiento_humano'];
     $direccion->save();

     if($direccion->save()){
     $persona=new Persona;
     $persona->id_persona=$id_prueba;
     $persona->nombre=$data['nombre'];
     $persona->apellido_paterno=$data['apellido_paterno'];
     $persona->apellido_materno=$data['apellido_materno'];
     $persona->save();

     if($persona->save()){
       $id_admin = DB::table('administrativos')
       ->select('administrativos.id_administrativo')
       ->where('administrativos.id_persona', $id_persona)
       ->take(1)
       ->first();
       $id_admin= $id_admin->id_administrativo;

    $escuela = new Escuela;
    $escuela->clave_institucion=$data['clave_institucion'];
    $escuela->clave_escuela=$data['clave_escuela'];
    $escuela->nombre_escuela=$data['nombre_escuela'];
    $escuela->id_direccion=$id_direc;
    $escuela->dependencia_normativa=$data['dependencia_normativa'];
    $escuela->institucion_pertenciente=$data['institucion_pertenciente'];
    $escuela->director=$id_prueba;
    $escuela->pagina_web_escuela=$data['pagina_web'];
    $escuela->responsable=$id_admin;
    $escuela->save();

     if($escuela->save()){
  return redirect()->route('gral_escuela')->with('success','¡Datos registrados correctamente!');
}}}}

  else {
    $id_admin = DB::table('administrativos')
    ->select('administrativos.id_administrativo')
    ->where('administrativos.id_persona', $id_persona)
    ->take(1)
    ->first();
    $id_admin= $id_admin->id_administrativo;

    $id_directores = DB::table('escuelas')
    ->select('escuelas.director')
    ->where('escuelas.responsable', $id_admin)
    ->take(1)
    ->first();
    $id_directores= json_decode( json_encode($id_directores), true);

    DB::table('personas')
        ->where('personas.id_persona',$id_directores)
        ->update(
          ['nombre' => $data['nombre'], 'apellido_paterno' => $data['apellido_paterno'], 'apellido_materno' => $data['apellido_materno']]);

     return redirect()->route('gral_escuela')->with('success','¡Datos actualizados correctamente!');
  }
}


public function gral_carrera(){
  $usuario_actuales=\Auth::user();
   if($usuario_actuales->tipo_usuario!='2'){
     return redirect()->back();
    }
  $usuario_actual=auth()->user();
  $id=$usuario_actual->id_user;

  $result = DB::table('escuelas')->count();
   if($result == 0){
     return redirect()->route('gral_escuela')->with('error', 'Para agregar una Carrera, primero debe registrar la Escuela');

   }
   $id_persona = DB::table('users')
   ->select('users.id_persona')
   ->join('personas', 'personas.id_persona', '=', 'users.id_persona')
   ->where('users.id_persona',$id)
   ->take(1)
   ->first();
     $id_persona= $id_persona->id_persona;

   $id_admin = DB::table('administrativos')
   ->select('administrativos.id_administrativo')
   ->where('administrativos.id_persona', $id_persona)
   ->take(1)
   ->first();
   $id_admin= $id_admin->id_administrativo;

   $escuela_r = DB::table('escuelas')
   ->select('escuelas.clave_institucion', 'escuelas.clave_escuela', 'escuelas.nombre_escuela', 'escuelas.dependencia_normativa',
            'escuelas.institucion_pertenciente', 'escuelas.pagina_web_escuela')
   ->where('escuelas.responsable', $id_admin)
   ->take(1)
   ->first();
  return view ('personal_administrativo/planeacion.gral_carrera')->with('re', $result)->with('datos_escuela', $escuela_r);
}

protected function crear_carrera(Request $request){

  $usuario_actuales=\Auth::user();
   if($usuario_actuales->tipo_usuario!='2'){
     return redirect()->back();
    }
  $usuario_actual=auth()->user();
  $id=$usuario_actual->id_user;
  $data = $request;
  $id_persona = DB::table('users')
  ->select('users.id_persona')
  ->join('personas', 'personas.id_persona', '=', 'users.id_persona')
  ->where('users.id_persona',$id)
  ->take(1)
  ->first();

    $id_persona= $id_persona->id_persona;
    $id_admin = DB::table('administrativos')
    ->select('administrativos.id_administrativo')
    ->where('administrativos.id_persona', $id_persona)
    ->take(1)
    ->first();
    $id_admin= $id_admin->id_administrativo;

    $escuela_r = DB::table('escuelas')
    ->select('escuelas.clave_institucion')
    ->where('escuelas.responsable', $id_admin)
    ->take(1)
    ->first();

     $escuela_r = $escuela_r->clave_institucion;
    // $escuela_r= json_decode( json_encode($escuela_r), true);

    $carrera = new Carrera;
    $carrera->clave_carrera = $data['clave_carrera'];$id_direc;
    $carrera->clave_institucion= $escuela_r;
    $carrera->facultad='FACULTAD DE IDIOMAS';
    $carrera->carrera=$data['carrera'];
    $carrera->modalidad=$data['modalidad'];
    $carrera->save();

    if($carrera->save()){
      return redirect()->route('carreras_registradas')->with('success', 'Carrera Registrada correctamente');

    }



}

protected function info_carreras(){

     $result = DB::table('carreras')
     ->select('carreras.clave_carrera', 'carreras.clave_institucion', 'carreras.facultad', 'carreras.carrera', 'carreras.modalidad')
     ->simplePaginate(10);

  return view ('personal_administrativo/planeacion.carreras')->with('info_carrera', $result);

}
/*REPORTE Semestral*/
public function reporte_semestral(){
  return view ('personal_administrativo/planeacion/reportes/reporte_semestral.reporte_semestral');
}

/*REPORTE 911.9*/
public function reporte911_9(){
//ESTUDIANTES BECADOS DEL CICLO ESCOLAR ACTUAL
//MODALIDAD ESCOLARIZADA
//MASCULINO
  $sql_BECA_ESC= 'SELECT becas.tipo_beca, COUNT(estudiantes.matricula) as total_BECA_ESC
  FROM personas, estudiantes, becas
  WHERE personas.id_persona=estudiantes.id_persona
  AND personas.genero="M" AND estudiantes.matricula=becas.matricula
  AND estudiantes.modalidad="ESCOLARIZADA"
  AND estudiantes.sede="CU"
  GROUP BY becas.tipo_beca';
 $beca_query = DB::select($sql_BECA_ESC);
 $array_becas = array(
   "INSTITUCIONAL" => 0,
   "FEDERAL" => 0,
   "ESTATAL" => 0,
   "MUNICIPAL" => 0,
   "PARTICULAR" => 0,
   "INTERNACIONAL" => 0,
   "TOTAL" => 0
 );
 $tipos_becas_ESC_M = array(
   "INSTITUCIONAL" => 0,
   "FEDERAL" => 0,
   "ESTATAL" => 0,
   "MUNICIPAL" => 0,
   "PARTICULAR" => 0,
   "INTERNACIONAL" => 0,
   "TOTAL" => 0
 );

  for($i = 0; $i < count($beca_query); $i++) {
    $sub = $beca_query[$i]->total_BECA_ESC;
    $tipos_becas_ESC_M[$beca_query[$i]->tipo_beca] = $sub;
    $tipos_becas_ESC_M['TOTAL'] += $sub;
    $array_becas[$beca_query[$i]->tipo_beca] += $sub;
    $array_becas['TOTAL'] += $sub;
  }

  //FEMENINO
    $sql_BECA_ESC= 'SELECT becas.tipo_beca, COUNT(estudiantes.matricula) as total_BECA_ESC
    FROM personas, estudiantes, becas
    WHERE personas.id_persona=estudiantes.id_persona
    AND personas.genero="F" AND estudiantes.matricula=becas.matricula
    AND estudiantes.modalidad="ESCOLARIZADA"
    AND estudiantes.sede="CU"
    GROUP BY becas.tipo_beca';
   $beca_query = DB::select($sql_BECA_ESC);

   $tipos_becas_ESC_F = array(
     "INSTITUCIONAL" => 0,
     "FEDERAL" => 0,
     "ESTATAL" => 0,
     "MUNICIPAL" => 0,
     "PARTICULAR" => 0,
     "INTERNACIONAL" => 0,
     "TOTAL" => 0
   );

    for($i = 0; $i < count($beca_query); $i++) {
      $sub = $beca_query[$i]->total_BECA_ESC;
      $tipos_becas_ESC_F[$beca_query[$i]->tipo_beca] = $sub;
      $tipos_becas_ESC_F['TOTAL'] += $sub;
      $array_becas[$beca_query[$i]->tipo_beca] += $sub;
      $array_becas['TOTAL'] += $sub;
    }

    //GENERAL
      $sql_BECA_ESC= 'SELECT becas.tipo_beca, COUNT(estudiantes.matricula) as total_BECA_ESC
      FROM personas, estudiantes, becas
      WHERE personas.id_persona=estudiantes.id_persona
      AND estudiantes.matricula=becas.matricula
      AND estudiantes.modalidad="ESCOLARIZADA"
      AND estudiantes.sede="CU"
      GROUP BY becas.tipo_beca';
     $beca_query = DB::select($sql_BECA_ESC);

     $tipos_becas_ESC_G = array(
       "INSTITUCIONAL" => 0,
       "FEDERAL" => 0,
       "ESTATAL" => 0,
       "MUNICIPAL" => 0,
       "PARTICULAR" => 0,
       "INTERNACIONAL" => 0,
       "TOTAL" => 0
     );

      for($i = 0; $i < count($beca_query); $i++) {
        $sub = $beca_query[$i]->total_BECA_ESC;
        $tipos_becas_ESC_G[$beca_query[$i]->tipo_beca] = $sub;
        $tipos_becas_ESC_G['TOTAL'] += $sub;
        $array_becas[$beca_query[$i]->tipo_beca] += $sub;
        $array_becas['TOTAL'] += $sub;
      }

      //------CON DISCAPACIDAD
      $sql_BECA_ESC_D= 'SELECT becas.tipo_beca, COUNT(estudiantes.matricula) as total_BECA_ESC_D
                FROM personas, estudiantes, discapacidades, becas
                WHERE personas.id_persona=estudiantes.id_persona
                AND personas.id_persona=discapacidades.id_persona
                AND estudiantes.sede="CU"
                AND estudiantes.modalidad="ESCOLARIZADA"
                AND estudiantes.matricula=becas.matricula
                GROUP BY becas.tipo_beca';
     $beca_query = DB::select($sql_BECA_ESC_D);
     $tipos_becas_esco_D = array(
       "INSTITUCIONAL" => 0,
       "FEDERAL" => 0,
       "ESTATAL" => 0,
       "MUNICIPAL" => 0,
       "PARTICULAR" => 0,
       "INTERNACIONAL" => 0,
       "TOTAL" => 0
     );

      for($i = 0; $i < count($beca_query); $i++) {
        $sub = $beca_query[$i]->total_BECA_ESC_D;
        $tipos_becas_esco_D[$beca_query[$i]->tipo_beca] = $sub;
        $tipos_becas_esco_D['TOTAL'] += $sub;
        $array_becas[$beca_query[$i]->tipo_beca] += $sub;
        $array_becas['TOTAL'] += $sub;
      }

      //------HABLANTE DE LENGUA
      $sql_BECA_ESC_L= 'SELECT becas.tipo_beca, COUNT(estudiantes.matricula) as total_BECA_ESC_L
                FROM personas, estudiantes, lenguas, becas
                WHERE personas.id_persona=estudiantes.id_persona
                AND personas.id_persona=lenguas.id_persona
                AND estudiantes.sede="CU"
                AND estudiantes.modalidad="ESCOLARIZADA"
                AND estudiantes.matricula=becas.matricula
                GROUP BY becas.tipo_beca';
     $beca_query = DB::select($sql_BECA_ESC_L);

     $tipos_becas_esco_L = array(
       "INSTITUCIONAL" => 0,
       "FEDERAL" => 0,
       "ESTATAL" => 0,
       "MUNICIPAL" => 0,
       "PARTICULAR" => 0,
       "INTERNACIONAL" => 0,
       "TOTAL" => 0
     );

      for($i = 0; $i < count($beca_query); $i++) {
        $sub = $beca_query[$i]->total_BECA_ESC_L;
        $tipos_becas_esco_L[$beca_query[$i]->tipo_beca] = $sub;
        $tipos_becas_esco_L['TOTAL'] += $sub;
        $array_becas[$beca_query[$i]->tipo_beca] += $sub;
        $array_becas['TOTAL'] += $sub;
      }

//---------------------------------------------------------------------------//
//MODALIDAD SEMI ESCOLARIZADA
//MASCULINO
  $sql_BECA_SEMI= 'SELECT becas.tipo_beca, COUNT(estudiantes.matricula) as total_BECA_SEMI
  FROM personas, estudiantes, becas
  WHERE personas.id_persona=estudiantes.id_persona
  AND personas.genero="M" AND estudiantes.matricula=becas.matricula
  AND estudiantes.modalidad=" SEMI ESCOLARIZADA"
  AND estudiantes.sede="CU"
  GROUP BY becas.tipo_beca';
 $beca_query = DB::select($sql_BECA_SEMI);

 $tipos_becas_SEMI_M = array(
   "INSTITUCIONAL" => 0,
   "FEDERAL" => 0,
   "ESTATAL" => 0,
   "MUNICIPAL" => 0,
   "PARTICULAR" => 0,
   "INTERNACIONAL" => 0,
   "TOTAL" => 0
 );

  for($i = 0; $i < count($beca_query); $i++) {
    $sub = $beca_query[$i]->total_BECA_SEMI;
    $tipos_becas_SEMI_M[$beca_query[$i]->tipo_beca] = $sub;
    $tipos_becas_SEMI_M['TOTAL'] += $sub;
    $array_becas[$beca_query[$i]->tipo_beca] += $sub;
    $array_becas['TOTAL'] += $sub;
  }

  //FEMENINO
    $sql_BECA_SEMI= 'SELECT becas.tipo_beca, COUNT(estudiantes.matricula) as total_BECA_SEMI
    FROM personas, estudiantes, becas
    WHERE personas.id_persona=estudiantes.id_persona
    AND personas.genero="F" AND estudiantes.matricula=becas.matricula
    AND estudiantes.modalidad=" SEMI ESCOLARIZADA"
    AND estudiantes.sede="CU"
    GROUP BY becas.tipo_beca';
   $beca_query = DB::select($sql_BECA_SEMI);

   $tipos_becas_SEMI_F = array(
     "INSTITUCIONAL" => 0,
     "FEDERAL" => 0,
     "ESTATAL" => 0,
     "MUNICIPAL" => 0,
     "PARTICULAR" => 0,
     "INTERNACIONAL" => 0,
     "TOTAL" => 0
   );

    for($i = 0; $i < count($beca_query); $i++) {
      $sub = $beca_query[$i]->total_BECA_SEMI;
      $tipos_becas_SEMI_F[$beca_query[$i]->tipo_beca] = $sub;
      $tipos_becas_SEMI_F['TOTAL'] += $sub;
      $array_becas[$beca_query[$i]->tipo_beca] += $sub;
      $array_becas['TOTAL'] += $sub;
    }

    //GENERAL
      $sql_BECA_SEMI= 'SELECT becas.tipo_beca, COUNT(estudiantes.matricula) as total_BECA_SEMI
      FROM personas, estudiantes, becas
      WHERE personas.id_persona=estudiantes.id_persona
      AND estudiantes.matricula=becas.matricula
      AND estudiantes.modalidad="SEMI ESCOLARIZADA"
      AND estudiantes.sede="CU"
      GROUP BY becas.tipo_beca';
     $beca_query = DB::select($sql_BECA_SEMI);

     $tipos_becas_SEMI_G = array(
       "INSTITUCIONAL" => 0,
       "FEDERAL" => 0,
       "ESTATAL" => 0,
       "MUNICIPAL" => 0,
       "PARTICULAR" => 0,
       "INTERNACIONAL" => 0,
       "TOTAL" => 0
     );

      for($i = 0; $i < count($beca_query); $i++) {
        $sub = $beca_query[$i]->total_BECA_SEMI;
        $tipos_becas_SEMI_G[$beca_query[$i]->tipo_beca] = $sub;
        $tipos_becas_SEMI_G['TOTAL'] += $sub;
        $array_becas[$beca_query[$i]->tipo_beca] += $sub;
        $array_becas['TOTAL'] += $sub;
      }

      //------CON DISCAPACIDAD
      $sql_BECA_SEMI_D= 'SELECT becas.tipo_beca, COUNT(estudiantes.matricula) as total_BECA_SEMI_D
                FROM personas, estudiantes, discapacidades, becas
                WHERE personas.id_persona=estudiantes.id_persona
                AND personas.id_persona=discapacidades.id_persona
                AND estudiantes.sede="CU"
                AND estudiantes.modalidad="SEMI ESCOLARIZADA"
                AND estudiantes.matricula=becas.matricula
                GROUP BY becas.tipo_beca';
     $beca_query = DB::select($sql_BECA_SEMI_D);
     $tipos_becas_semi_D = array(
       "INSTITUCIONAL" => 0,
       "FEDERAL" => 0,
       "ESTATAL" => 0,
       "MUNICIPAL" => 0,
       "PARTICULAR" => 0,
       "INTERNACIONAL" => 0,
       "TOTAL" => 0
     );

      for($i = 0; $i < count($beca_query); $i++) {
        $sub = $beca_query[$i]->total_BECA_SEMI_D;
        $tipos_becas_semi_D[$beca_query[$i]->tipo_beca] = $sub;
        $tipos_becas_semi_D['TOTAL'] += $sub;
        $array_becas[$beca_query[$i]->tipo_beca] += $sub;
        $array_becas['TOTAL'] += $sub;
      }

      //------HABLANTE DE LENGUA
      $sql_BECA_SEMI_L= 'SELECT becas.tipo_beca, COUNT(estudiantes.matricula) as total_BECA_SEMI_L
                FROM personas, estudiantes, lenguas, becas
                WHERE personas.id_persona=estudiantes.id_persona
                AND personas.id_persona=lenguas.id_persona
                AND estudiantes.sede="CU"
                AND estudiantes.modalidad="SEMI ESCOLARIZADA"
                AND estudiantes.matricula=becas.matricula
                GROUP BY becas.tipo_beca';
     $beca_query = DB::select($sql_BECA_SEMI_L);

     $tipos_becas_semi_L = array(
       "INSTITUCIONAL" => 0,
       "FEDERAL" => 0,
       "ESTATAL" => 0,
       "MUNICIPAL" => 0,
       "PARTICULAR" => 0,
       "INTERNACIONAL" => 0,
       "TOTAL" => 0
     );

      for($i = 0; $i < count($beca_query); $i++) {
        $sub = $beca_query[$i]->total_BECA_SEMI_L;
        $tipos_becas_semi_L[$beca_query[$i]->tipo_beca] = $sub;
        $tipos_becas_semi_L['TOTAL'] += $sub;
        $array_becas[$beca_query[$i]->tipo_beca] += $sub;
        $array_becas['TOTAL'] += $sub;
      }

  return view ('personal_administrativo/planeacion/reportes/reporte911_9.reporte911_9')
  ->with('sql_BECA_ESC', $sql_BECA_ESC)
  ->with('tipos_becas_ESC_M', $tipos_becas_ESC_M)
  ->with('tipos_becas_ESC_F', $tipos_becas_ESC_F)
  ->with('tipos_becas_ESC_G', $tipos_becas_ESC_G)
  ->with('tipos_becas_esco_D', $tipos_becas_esco_D)
  ->with('tipos_becas_esco_L', $tipos_becas_esco_L)
  ->with('$sql_BECA_SEMI', $sql_BECA_SEMI)
  ->with('tipos_becas_SEMI_M', $tipos_becas_SEMI_M )
  ->with('tipos_becas_SEMI_F', $tipos_becas_SEMI_F )
  ->with('tipos_becas_SEMI_G', $tipos_becas_SEMI_G )
  ->with('tipos_becas_semi_D', $tipos_becas_semi_D )
  ->with('tipos_becas_semi_L', $tipos_becas_semi_L )
  ;
}

/*REPORTE 911.9A*/
public function reporte911_9A_0(){

  $total_genero_primerE=DB::select ('SELECT personas.genero, COUNT(estudiantes.matricula) as total
  FROM personas, estudiantes
  WHERE personas.id_persona=estudiantes.id_persona
  AND estudiantes.modalidad="ESCOLARIZADA"
  AND estudiantes.semestre="2"
  AND estudiantes.sede="CU"
  GROUP BY personas.genero');
  $total_femenino_primerE=$total_genero_primerE[0]->total;
  $total_masculino_primerE=$total_genero_primerE[1]->total;
  $total_primerE= $total_femenino_primerE + $total_masculino_primerE;

  $total_genero_primerS=DB::select ('SELECT personas.genero, COUNT(estudiantes.matricula) as total
  FROM personas, estudiantes
  WHERE personas.id_persona=estudiantes.id_persona
  AND estudiantes.modalidad="SEMI ESCOLARIZADA"
  AND estudiantes.semestre="2"
  AND estudiantes.sede="CU"
  GROUP BY personas.genero');
  $total_femenino_primerS=$total_genero_primerS[0]->total;
  $total_masculino_primerS=$total_genero_primerS[1]->total;
  $total_primerS= $total_femenino_primerS + $total_masculino_primerS;

  $total_genero_primerG=DB::select ('SELECT personas.genero, COUNT(estudiantes.matricula) as total
  FROM personas, estudiantes
  WHERE personas.id_persona=estudiantes.id_persona
  AND estudiantes.semestre="2"
  AND estudiantes.sede="CU"
  GROUP BY personas.genero');
  $total_femenino_primerG=$total_genero_primerG[0]->total;
  $total_masculino_primerG=$total_genero_primerG[1]->total;
  $total_primerG= $total_femenino_primerG + $total_masculino_primerG;
  return view ('personal_administrativo/planeacion/reportes/reporte911_9A.reporte911_9A_0')
  ->with('total_femenino_primerE', $total_femenino_primerE)
  ->with('total_masculino_primerE', $total_masculino_primerE)
  ->with('total_primerE', $total_primerE)
  ->with('total_femenino_primerS', $total_femenino_primerS)
  ->with('total_masculino_primerS', $total_masculino_primerS)
  ->with('total_primerS', $total_primerS)
  ->with('total_femenino_primerG', $total_femenino_primerG)
  ->with('total_masculino_primerG', $total_masculino_primerG)
  ->with('total_primerG', $total_primerG);
}

public function reporte911_9A_1(){
$total_inscritos_m=DB::select('SELECT SUM(total) as totm
FROM(SELECT personas.genero, COUNT(estudiantes.matricula) as total
FROM personas, estudiantes
WHERE personas.id_persona=estudiantes.id_persona
AND estudiantes.sede="CU"
AND personas.genero="M"
GROUP BY personas.genero) as total');
$total_estudiantes_inscritos_m=$total_inscritos_m[0]->totm;

$total_inscritos_f=DB::select('SELECT SUM(total) as totf
FROM(SELECT personas.genero, COUNT(estudiantes.matricula) as total
FROM personas, estudiantes
WHERE personas.id_persona=estudiantes.id_persona
AND estudiantes.sede="CU"
AND personas.genero="F"
GROUP BY personas.genero) as total');
$total_estudiantes_inscritos_f=$total_inscritos_f[0]->totf;
$total_inscritos=$total_estudiantes_inscritos_m + $total_estudiantes_inscritos_f;

$estudiantes_discapacidad=DB::select('SELECT SUM(total) as totD
FROM (SELECT discapacidades.tipo, COUNT(estudiantes.matricula) as total
FROM personas, estudiantes, discapacidades
WHERE personas.id_persona=estudiantes.id_persona
AND personas.id_persona=discapacidades.id_persona
AND estudiantes.sede="CU"
GROUP BY discapacidades.tipo) as total');
$total_estudiantes_discapacidad=$estudiantes_discapacidad[0]->totD;

$estudiantes_lengua=DB::select('SELECT SUM(total) as totL FROM
(SELECT lenguas.nombre_lengua, COUNT(estudiantes.matricula) as total
FROM personas, estudiantes, lenguas
WHERE personas.id_persona=estudiantes.id_persona
AND personas.id_persona=lenguas.id_persona
AND estudiantes.sede="CU"
GROUP BY lenguas.nombre_lengua) as total');
$total_estudiantes_lengua=$estudiantes_lengua[0]->totL;



return view ('personal_administrativo/planeacion/reportes/reporte911_9A.reporte911_9A_1')
->with('total_inscritos_m', $total_inscritos_m)
->with('total_estudiantes_inscritos_m', $total_estudiantes_inscritos_m)
->with('total_inscritos_f', $total_inscritos_f)
->with('total_estudiantes_inscritos_f', $total_estudiantes_inscritos_f)
->with('total_inscritos', $total_inscritos)
->with('estudiantes_discapacidad', $estudiantes_discapacidad)
->with('total_estudiantes_discapacidad', $total_estudiantes_discapacidad)
->with('estudiantes_lengua', $estudiantes_lengua)
->with('total_estudiantes_lengua', $total_estudiantes_lengua);
}

public function reporte911_9A_2(){
  return view ('personal_administrativo/planeacion/reportes/reporte911_9A.reporte911_9A_2');
}

public function reporte911_9A_3(){
//ESTUDIANTES INSCRITOS DEL CICLO ESCOLAR ACTUAL
//MASCULINO
  $total_inscritos_M= 'SELECT estudiantes.semestre,
  COUNT(estudiantes.matricula) as total_inscritos
  FROM personas, estudiantes
  WHERE personas.id_persona=estudiantes.id_persona
  AND estudiantes.sede="CU"
  AND personas.genero="M"
  GROUP BY estudiantes.semestre';
 $inscritos_query = DB::select($total_inscritos_M);
 $array_inscritos = array(
   "1" => 0,
   "2" => 0,
   "3" => 0,
   "4" => 0,
   "5" => 0,
   "6" => 0,
   "7" => 0,
   "8" => 0,
   "TOTAL" => 0
 );
 $inscritos_M = array(
   "1" => 0,
   "2" => 0,
   "3" => 0,
   "4" => 0,
   "5" => 0,
   "6" => 0,
   "7" => 0,
   "8" => 0,
   "TOTAL" => 0
 );

 for($i = 0; $i < count($inscritos_query); $i++) {
    $sub = $inscritos_query[$i]->total_inscritos;
    $inscritos_M[$inscritos_query[$i]->semestre] = $sub;
    $inscritos_M['TOTAL'] += $sub;
    $array_inscritos[$inscritos_query[$i]->semestre] += $sub;
    $array_inscritos['TOTAL'] += $sub;
  }

  //FEMENINO
  $total_inscritos_F= 'SELECT estudiantes.semestre,
  COUNT(estudiantes.matricula) as total_inscritos
  FROM personas, estudiantes
  WHERE personas.id_persona=estudiantes.id_persona
  AND estudiantes.sede="CU"
  AND personas.genero="F"
  GROUP BY estudiantes.semestre';
 $inscritos_query = DB::select($total_inscritos_F);

 $inscritos_F = array(
   "1" => 0,
   "2" => 0,
   "3" => 0,
   "4" => 0,
   "5" => 0,
   "6" => 0,
   "7" => 0,
   "8" => 0,
   "TOTAL" => 0
 );

 for($i = 0; $i < count($inscritos_query); $i++) {
    $sub = $inscritos_query[$i]->total_inscritos;
    $inscritos_F[$inscritos_query[$i]->semestre] = $sub;
    $inscritos_F['TOTAL'] += $sub;
    $array_inscritos[$inscritos_query[$i]->semestre] += $sub;
    $array_inscritos['TOTAL'] += $sub;
  }

  //GENERAL
  $total_inscritos_G= 'SELECT estudiantes.semestre,
  COUNT(estudiantes.matricula) as total_inscritos
  FROM personas, estudiantes
  WHERE personas.id_persona=estudiantes.id_persona
  AND estudiantes.sede="CU"
  GROUP BY estudiantes.semestre';
 $inscritos_query = DB::select($total_inscritos_G);

 $inscritos_G = array(
   "1" => 0,
   "2" => 0,
   "3" => 0,
   "4" => 0,
   "5" => 0,
   "6" => 0,
   "7" => 0,
   "8" => 0,
   "TOTAL" => 0
 );

 for($i = 0; $i < count($inscritos_query); $i++) {
    $sub = $inscritos_query[$i]->total_inscritos;
    $inscritos_G[$inscritos_query[$i]->semestre] = $sub;
    $inscritos_G['TOTAL'] += $sub;
    $array_inscritos[$inscritos_query[$i]->semestre] += $sub;
    $array_inscritos['TOTAL'] += $sub;
  }

 //CON DISCAPACIDAD
 $total_inscritos_D= 'SELECT estudiantes.semestre,
 COUNT(estudiantes.matricula) as total_inscritosD
  FROM personas, estudiantes, discapacidades
  WHERE personas.id_persona=estudiantes.id_persona
  AND personas.id_persona=discapacidades.id_persona
  AND estudiantes.sede="CU"
  GROUP BY estudiantes.semestre';
$inscritos_query = DB::select($total_inscritos_D);

$inscritos_D = array(
  "1" => 0,
  "2" => 0,
  "3" => 0,
  "4" => 0,
  "5" => 0,
  "6" => 0,
  "7" => 0,
  "8" => 0,
  "TOTAL" => 0
);

for($i = 0; $i < count($inscritos_query); $i++) {
   $sub = $inscritos_query[$i]->total_inscritosD;
   $inscritos_D[$inscritos_query[$i]->semestre] = $sub;
   $inscritos_D['TOTAL'] += $sub;
   $array_inscritos[$inscritos_query[$i]->semestre] += $sub;
   $array_inscritos['TOTAL'] += $sub;
 }

 //HABLANTE DE LENGUA
 $total_inscritos_L= 'SELECT estudiantes.semestre,
 COUNT(estudiantes.matricula) as total_inscritosL
  FROM personas, estudiantes, lenguas
  WHERE personas.id_persona=estudiantes.id_persona
  AND personas.id_persona=lenguas.id_persona
  AND estudiantes.sede="CU"
  GROUP BY estudiantes.semestre';
 $inscritos_query = DB::select($total_inscritos_L);

 $inscritos_L = array(
  "1" => 0,
  "2" => 0,
  "3" => 0,
  "4" => 0,
  "5" => 0,
  "6" => 0,
  "7" => 0,
  "8" => 0,
  "TOTAL" => 0
 );

 for($i = 0; $i < count($inscritos_query); $i++) {
   $sub = $inscritos_query[$i]->total_inscritosL;
   $inscritos_L[$inscritos_query[$i]->semestre] = $sub;
   $inscritos_L['TOTAL'] += $sub;
   $array_inscritos[$inscritos_query[$i]->semestre] += $sub;
   $array_inscritos['TOTAL'] += $sub;
 }

  return view ('personal_administrativo/planeacion/reportes/reporte911_9A.reporte911_9A_3')
  ->with('inscritos_M', $inscritos_M)
  ->with('inscritos_F', $inscritos_F)
  ->with('inscritos_G', $inscritos_G)
  ->with('inscritos_D', $inscritos_D)
  ->with('inscritos_L', $inscritos_L);
}

public function reporte911_9A_4(){
  return view ('personal_administrativo/planeacion/reportes/reporte911_9A.reporte911_9A_4');
}

public function reporte911_9A_5(){

/*//ESTUDIANTES INSCRITOS DEL CICLO ESCOLAR ACTUAL
//POR DISCAACIDAD Y GENERO
//MASCULINO
$total_dis_M= 'SELECT discapacidades.tipo, COUNT(estudiantes.matricula) as totD
FROM personas, estudiantes, discapacidades
WHERE personas.id_persona=estudiantes.id_persona
AND personas.id_persona=discapacidades.id_persona
AND estudiantes.sede="CU"
AND personas.genero="M"
GROUP BY discapacidades.tipo';
 $inscritos_dis_query = DB::select($total_dis_M);
 $array_dis_inscritos = array(
"fisica" => 0,
"intelectual" => 0,
"multiple" => 0,
"hipoacusa" => 0,
"sordera" => 0,
"visual1" => 0,
"visual2" => 0,
"psicosocial" => 0,
"lesiones" => 0,
"TOTAL" => 0
 );
 $inscritos_dis_M = array(
   "fisica" => 0,
   "intelectual" => 0,
   "multiple" => 0,
   "hipoacusa" => 0,
   "sordera" => 0,
   "visual1" => 0,
   "visual2" => 0,
   "psicosocial" => 0,
   "lesiones" => 0,
   "TOTAL" => 0
 );

 for($i = 0; $i < count($inscritos_dis_query); $i++) {
    $sub = $inscritos_dis_query[$i]->totD;
    $inscritos_dis_M[$inscritos_dis_query[$i]->tipo] = $sub;
    $inscritos_dis_M['TOTAL'] += $sub;
    $array_dis_inscritos[$inscritos_dis_query[$i]->tipo] += $sub;
    $array_dis_inscritos['TOTAL'] += $sub;
  }

//FEMENINO
$total_dis_F= 'SELECT discapacidades.tipo, COUNT(estudiantes.matricula) as totD
FROM personas, estudiantes, discapacidades
WHERE personas.id_persona=estudiantes.id_persona
AND personas.id_persona=discapacidades.id_persona
AND estudiantes.sede="CU"
AND personas.genero="F"
GROUP BY discapacidades.tipo';
 $inscritos_dis_query = DB::select($total_dis_F);
 $inscritos_dis_F = array(
   "fisica" => 0,
   "intelectual" => 0,
   "multiple" => 0,
   "hipoacusa" => 0,
   "sordera" => 0,
   "visual1" => 0,
   "visual2" => 0,
   "psicosocial" => 0,
   "lesiones" => 0,
   "TOTAL" => 0
 );

 for($i = 0; $i < count($inscritos_dis_query); $i++) {
    $sub = $inscritos_dis_query[$i]->totD;
    $inscritos_dis_F[$inscritos_dis_query[$i]->tipo] = $sub;
    $inscritos_dis_F['TOTAL'] += $sub;
    $array_dis_inscritos[$inscritos_dis_query[$i]->tipo] += $sub;
    $array_dis_inscritos['TOTAL'] += $sub;
  }

  //GENERAL
  $total_dis_G= 'SELECT discapacidades.tipo, COUNT(estudiantes.matricula) as totD
  FROM personas, estudiantes, discapacidades
  WHERE personas.id_persona=estudiantes.id_persona
  AND personas.id_persona=discapacidades.id_persona
  AND estudiantes.sede="CU"
  GROUP BY discapacidades.tipo';
   $inscritos_dis_query = DB::select($total_dis_G);
   $inscritos_dis_G = array(
     "fisica" => 0,
     "intelectual" => 0,
     "multiple" => 0,
     "hipoacusa" => 0,
     "sordera" => 0,
     "visual1" => 0,
     "visual2" => 0,
     "psicosocial" => 0,
     "lesiones" => 0,
     "TOTAL" => 0
   );

   for($i = 0; $i < count($inscritos_dis_query); $i++) {
      $sub = $inscritos_dis_query[$i]->totD;
      $inscritos_dis_G[$inscritos_dis_query[$i]->tipo] = $sub;
      $inscritos_dis_G['TOTAL'] += $sub;
      $array_dis_inscritos[$inscritos_dis_query[$i]->tipo] += $sub;
      $array_dis_inscritos['TOTAL'] += $sub;
    }

  //HABLANTE DE LENGUA
  $total_generoL=DB::select ('SELECT personas.genero,
    COUNT(estudiantes.matricula) as total
    FROM personas, estudiantes, lenguas
    WHERE personas.id_persona=estudiantes.id_persona
    AND personas.id_persona=lenguas.id_persona
    AND estudiantes.sede="CU" GROUP BY personas.genero');
  $total_femeninoL=$total_generoL[0]->total;
  $total_masculinoL=$total_generoL[1]->total;
  $totalL= $total_femeninoL + $total_masculinoL;

//con DISCAACIDAD
$total_inscritos_D=DB::select('SELECT sum(total)as tot
FROM(SELECT discapacidades.tipo, COUNT(estudiantes.matricula) as total
FROM personas, estudiantes, discapacidades
WHERE personas.id_persona=estudiantes.id_persona
AND personas.id_persona=discapacidades.id_persona
AND estudiantes.sede="CU" GROUP BY discapacidades.tipo)as total');
$total_inscritos_D=$total_inscritos_D[0]->tot;
*/
  return view ('personal_administrativo/planeacion/reportes/reporte911_9A.reporte911_9A_5')
/*  ->width('array_dis_inscritos',$array_dis_inscritos)
  ->with('inscritos_dis_M', $inscritos_dis_M)
  ->with('inscritos_dis_F', $inscritos_dis_F)
  ->with('inscritos_dis_G', $inscritos_dis_G)

  ->with('total_femeninoL', $total_femeninoL)
  ->with('total_masculinoL', $total_masculinoL)
  ->with('totalL', $totalL)
  ->with('total_inscritos_D', $total_inscritos_D)*/;
}

public function reporte911_9A_6(){
  return view ('personal_administrativo/planeacion/reportes/reporte911_9A.reporte911_9A_6');
}
/*Servicio Social y Practicas Profesionales*/
public function info_practicasp(){
  return view ('personal_administrativo/planeacion/info_departamentos.info_practicasp');
}
public function info_serviciosocial(){
  //----ESTUDIANTES QUE REALIZAN PRACTICAS PROFESIONALES
  //---MODALIDAD ESCOLARIZADA
  //MASCULINO
  $total_inscritos_SS=DB::select('SELECT SUM(total) as totSS
FROM(SELECT personas.genero, COUNT(estudiantes.matricula) as total
FROM personas, estudiantes, practicas,practicas_profesionales
WHERE personas.id_persona=estudiantes.id_persona
AND practicas.id_practicas=practicas_profesionales.id_practicas
AND estudiantes.matricula=practicas.matricula
AND estudiantes.sede="CU"
AND estudiantes.modalidad="ESCOLARIZADA"
AND personas.genero="M"
GROUP BY personas.genero) as total');
  $total_inscritos_SS=$total_inscritos_SS[0]->totSS;

  $total_inscritos_PP=DB::select('SELECT SUM(total) as totSS
  FROM(SELECT personas.genero, COUNT(estudiantes.matricula) as total
  FROM personas, estudiantes, practicas, servicio_sociales
  WHERE personas.id_persona=estudiantes.id_persona
  AND estudiantes.matricula=practicas.matricula
  AND practicas.id_practicas=servicio_sociales.id_practicas
  AND estudiantes.sede="CU"
  AND estudiantes.modalidad="ESCOLARIZADA"
  AND personas.genero="F"
  GROUP BY personas.genero) as total');
  $total_inscritos_PP=$total_inscritos_PP[0]->totSS;


  return view ('personal_administrativo/planeacion/info_departamentos.info_serviciosocial')
  ->with('total_inscritos_SS', $total_inscritos_SS)
  ->with('total_inscritos_PP', $total_inscritos_PP);
}



}
