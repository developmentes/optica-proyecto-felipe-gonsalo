<?php

namespace controllers;

use models\RecetaModel as RecetaModel;

require_once("../models/RecetaModel.php");

class IngresarRecetaControllers
{
    public $tipo_lente;
    public $esfera_oi;
    public  $esfera_od;
        public $cilindro_oi;
        public $cilindro_od;
         public $eje_oi;
         public $eje_od;
         public $prisma;
         public $base;
         public $armazon;
         public $material_cristal;
         public $tipo_cristal;
         public $distancia_pupilar;
         public $valor_lente;
          public$fecha_entrega;
         public $fecha_retiro;
          public $observacion;
         public $rut_cliente;
          public $fecha_visita_medico;
          public $rut_medico;
          public $nombre_medico;
          public $rut_usuario;
          public $estado;
  
    


    public function __construct()
    {
        $this->tipo_lente = $_POST['tipo_lente'];
        $this->esfera_oi = $_POST['esfea_oi'];
        $this->esfera_od = $_POST['esfera_od'];
        $this->cilindro_oi = $_POST['cilindro_oi'];
        $this->cilindro_od = $_POST['cilindro_od'];
        $this->eje_oi = $_POST['eje_oi'];
        $this->eje_od = $_POST['eje_od'];
        $this->prisma  = $_POST['prisma'];
        $this->base = $_POST['base'];
        $this->armazon = $_POST['armazon'];
        $this->material_cristal = $_POST['material_cristal'];
        $this->tipo_cristal = $_POST['tipo_cristal'];
        $this->distancia_pupilar = $_POST['distancia_pupilar'];
        $this->valor_lente = $_POST['valor_lente'];
        $this->fecha_entrega = $_POST['fecha_entrega'];
        $this->fecha_retiro = $_POST['fecha_retiro'];
        $this->observacion = $_POST['observacion'];
        $this->rut_cliente = $_POST['rut_cliente '];
        $this->fecha_visita_medico = $_POST['fecha_visita_medico'];
        $this->rut_medico = $_POST['rut_medico'];
        $this->nombre_medico = $_POST['nombre_medico'];
        $this->rut_usuario = $_POST['rut_usuario'];
        $this->estado = $_POST['estado'];
        
    }

    public function registrarReceta()
    {

        
        session_start();
        if ($this->rut == "" || $this->nombre == "" ) {
            $_SESSION['error1'] = "Complete la informacion";
            header("Location: ../views/crearUsuario.php");
            return;
        }
        $modelo = new RecetaModel;
        $data = ['tipo_lente' => $this->tipo_lente, 
        'esfera_oi' => $this->esfera_oi,
        'esfera_od' => $this->esfera_od ,
        'cilindro_oi' => $this->cilindro_oi,
        'clindro_od' => $this->cilindro_oi, 
        'eje_oi' => $this->eje_oi, 
        'eje_od' => $this->eje_od, 
        'prisma' => $this->prisma, 
        'base' => $this->base, 
        'armazon' => $this->armazon,
        'material_cristal' => $this->material_cristal,
        'tipo_cristal' => $this->tipo_cristal,
        'distancia_pupilar' => $this->distancia_pupilar,
        'valor_lente' => $this->valor_lente,
        'fecha_entrega' => $this->fecha_entrega,
        'fecha_retiro' => $this->fecha_retiro, 
        'observacion' => $this->observacion,
        'rut_cliente' => $this->rut_cliente,
        'fecha_visita_medico' => $this->fecha_visita_medico,
        'rut_medico' => $this->rut_medico,
        'nombre_medico' => $this->nombre_medico,
        'rut_usuario' => $this->rut_usuario,
        'estado' => $this->estado;

        $count = $modelo->insertarReceta($data);

        $_SESSION['imprimir'];

        if ($count == 1) {
            $_SESSION['receta'] = "Usuario Creado Con Éxito";
            $this->rut == "" ;
        } else {
            $_SESSION['errorReceta'] = "Hubo un error en la base de datos";
        }
        header("Location: ../views/vendedor/ingresarReceta.php");
    }
}

$obj = new IngresarRecetaControllers();
$obj->registrarReceta();