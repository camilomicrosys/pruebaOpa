<?php
namespace App\Models;

use CodeIgniter\Model;

class Excursionunomodel extends Model
{

    
    public function insertarElementos($datos){
    $query=$this->db->query("INSERT INTO elementos (id_session,peso,calorias,elemento)VALUES ('$datos[0]','$datos[1]','$datos[2]','$datos[3]')");
    return $this->db->insertID();
    }


  

    public function totalElementos($id_session)
    {
        $dato = $this->db->query("SELECT * FROM elementos where id_session='$id_session'");
        return $dato->getResult();
    }

    public function eliminarDatosSession($id_session){
        $query = $this->db->query("DELETE  FROM elementos where id_session='$id_session'");
    }
}