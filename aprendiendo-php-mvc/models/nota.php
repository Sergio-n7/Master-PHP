<?php

require_once 'ModeloBase.php';

class Nota extends ModeloBase
{

    public $usuario_id;
    public $titulo;
    public $descripcion;

    //Heredar el constructor parent
    public function __construct()
    {
        parent::__construct();
    }

    public function getUsuario_id()
    {
        return $this->usuario_id;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function getDescripcion()
    {
        return $this->descripcion;
    }

    public function setUsuario_id($usuario_id): void
    {
        $this->usuario_id = $usuario_id;
    }

    public function setTitulo($titulo): void
    {
        $this->titulo = $titulo;
    }

    public function setDescripcion($descripcion): void
    {
        $this->descripcion = $descripcion;
    }

    public function guardar()
    {
        $sql = "INSERT INTO notas(usuario_id, titulo, descripcion, fecha) VALUES ({$this->usuario_id}, '{$this->titulo}', '{$this->descripcion}', CURDATE())";
        #CURDATE()->pasa automáticamente la fecha. Los valores string hay que ponerlos entre '' ademas de {}

        $guardado = $this->db->query($sql);

        return $guardado;
    }
}