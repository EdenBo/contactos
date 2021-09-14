<?php
    require_once("../config/conexion.php");
    require_once("../models/Producto.php");
    $producto = new Producto();

    switch($_GET["op"]){

        case "listar":
            $datos=$producto->get_producto();
            $data= Array();
            foreach($datos as $row){
                $sub_array = array();
                $sub_array[] = $row["contac_nombre"];
                $sub_array[] = $row["contac_apellido"];
                $sub_array[] = $row["contac_puesto_trabajo"];
                $sub_array[] = $row["contact_pais_procedencia"];
                $sub_array[] = '<button type="button" onClick="editar('.$row["contac_id"].');"class="btn btn-outline-primary btn-icon"><div><i class="fa fa-edit"></i></div></button>';
                $sub_array[] = '<button type="button" onClick="eliminar('.$row["contac_id"].');"  class="btn btn-outline-danger btn-icon"><div><i class="fa fa-trash"></i></div></button>';
                $data[]=$sub_array;
            }

            $results = array(
                "sEcho"=>1,
                "iTotalRecords"=>count($data),
                "iTotalDisplayRecords"=>count($data),
                "aaData"=>$data);
            echo json_encode($results);

            break;

        case "guardaryeditar":
           /* $datos=$producto->get_producto_x_id($_POST["contac_id"]);
            if(empty($_POST["contac_id"])){
                if(is_array($datos)==true and count($datos)==0){*/
                    $producto->insert_producto($_POST["contac_nombre"],$_POST["contac_apellido"],$_POST["contac_puesto_trabajo"],$_POST["contact_pais_procedencia"]);
                //}
            /*}else{
                $producto->update_producto($_POST["contac_id"],$_POST["contac_puesto_trabajo"],$_POST["contact_pais_procedencia"]);
            }*/
            break;

        case "mostrar":
            $datos=$producto->get_producto_x_id($_POST["contac_id"]);
            if(is_array($datos)==true and count($datos)>0){
                foreach($datos as $row){
                    $output["contac_id"] = $row["contac_id"];
                    $output["contac_nom"] = $row["contac_nom"];
                }
            }
            break;

        case "eliminar":
            $producto->delete_producto($_POST["id"]);
            break;

    }
?>
