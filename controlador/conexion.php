<?php
 //variable conexion
function conectar() {
    $conn= mysqli_connect ("localhost","root","","bd_zoologico"); 
    /*if(!$conn){
        die("No puede conectarse ".mysqli_error());
    }
    else{
        echo "";
    }*/
    return $conn; 
}
function validarUsuario($usu,$pass,$conn){
    $sql="select * from usuarios where nomusu='$usu' and passusu='$pass'";
    $res= mysqli_query($conn, $sql);
    $cantFila = mysqli_num_rows($res);
    return $cantFila; 
}
function agregarCliente($codc,$nomc,$cor,$tel,$dni,$conn){
    $sql="insert into cliente values('$codc','$nomc','$cor','$tel','$dni')";   
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}
//Tabla entrada
//método para agregar registros
function agregarEntrada($cod,$pre,$can,$fec,$codc,$conn){
    $sql="insert into entrada values('$cod','$pre','$can','$fec','$codc')";   
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}
//método para eliminar registros 
function eliminarEntrada($cod,$conn){
    $sql="delete from entrada where entcod='$cod'";   
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}

//método para buscar registro
function buscarEntrada($cod,$conn){
    $sql="select pre,can,fec,clicod from entrada where entcod='$cod'";
    $res= mysqli_query($conn, $sql);
    $vec=array();
    if(mysqli_num_rows($res)>0){
        $vec= mysqli_fetch_array($res);
    }
    return $vec; 
}
function buscarCliente($codc,$conn){
    $sql="select clinom,clicor,clitel,clidni from cliente where clicod='$codc'";
    $res= mysqli_query($conn, $sql);
    $vec=array();
    if(mysqli_num_rows($res)>0){
        $vec= mysqli_fetch_array($res);
    }
    return $vec; 
}
    
//método para actualizar registros sin foto
function actualizarEntrada($cod,$pre,$can,$fec,$codc,$conn){
    $sql="update entrada set pre='$pre', can='$can', fec='$fec', clicod='$codc' where entcod='$cod'"; 
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}

function listarCliente($conn){
    $sql="select clicod,clinom,clicor,clitel,clidni from cliente";
    $res= mysqli_query($conn, $sql);
    $vec=array();
    while($f= mysqli_fetch_array($res))  
        $vec[]=$f;
    return $vec;
}
//método para listar registros
function listarEntrada($conn){
    $sql="select entcod, pre, can, fec, clicod from entrada";
    $res= mysqli_query($conn, $sql);
    $vec=array();
    while($f= mysqli_fetch_array($res))  
        $vec[]=$f;
    return $vec;
}

//TABLA PRODUCTO
//método para agreegar registros
function agregarProducto($cod,$nom,$pre,$fot,$cli,$conn){
    $sql="insert into producto values('$cod','$nom','$pre','$fot','$cli')";   
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}
function agregarReclamo($ai,$doc,$nrodoc,$nom,$ape,$cel,$correo,$coment,$conn){
    $sql="insert into reclamos values('$ai','$doc','$nrodoc','$nom','$ape','$cel','$correo','$coment')";   
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}
 //método para eliminar registros
function eliminarProducto($cod,$conn){
    $sql="delete from producto where codpro='$cod'";    
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}
 //método para actualizar todos los campos de la tabla
function actualizarTodoProducto($cod,$nom,$pre,$fot,$cli,$conn){
    $sql="update producto set nompro='$nom', prepro='$pre', fotpro='$fot', codtip='$cli' where 
codpro='$cod'";
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}
 //método para actualizar registros sin foto
function actualizarProducto($cod,$nom,$pre,$cli,$conn){
    $sql="update producto set nompro='$nom', prepro='$pre', codtip='$cli' where 
codpro='$cod'"; 
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}
 //método para buscar registro
function buscarProducto($cod,$conn){
    $sql="select nompro, prepro, fotpro, codtip from producto where codpro='$cod'";
    $res= mysqli_query($conn, $sql);
    $vec=array();
    if(mysqli_num_rows($res)>0){
        $vec= mysqli_fetch_array($res);
    }
    return $vec; 
}
    
//método para listar registros
function listarProducto($conn){
    $sql="select codpro, nompro, prepro, fotpro, codtip from producto"; 
    $res= mysqli_query($conn, $sql);
    $vec=array();
    while($f= mysqli_fetch_array($res))  
        $vec[]=$f;
    return $vec;
}
//método para listar registros ascendentemente
function listarProductoFiltro($conn,$codf){

    if ($codf === 'menor') {
        $sql="select codpro, nompro, prepro, fotpro, codtip from producto order by 3 asc"; 
    } else if ($codf === 'mayor') {
        $sql="select codpro, nompro, prepro, fotpro, codtip from producto order by 3 desc"; 
    } else if ($codf === 'az') {
        $sql="select codpro, nompro, prepro, fotpro, codtip from producto order by 2 asc"; 
    } else if ($codf === 'za') {
        $sql="select codpro, nompro, prepro, fotpro, codtip from producto order by 2 desc"; 
    } else {
        $sql="select codpro, nompro, prepro, fotpro, codtip from producto where codtip='$codf'";
    }
    
    $res= mysqli_query($conn, $sql);
    $vec=array();
    while($f= mysqli_fetch_array($res))  
        $vec[]=$f;
    return $vec;
}

//Tabla tipo 
//método para agreegar registros
function agregarTipo($cod,$nom,$conn){
    $sql="insert into tipo values('$cod','$nom')";   
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}
//método para eliminar registros 
function eliminarTipo($cod,$conn){
    $sql="delete from tipo where codtip='$cod'";   
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}
//método para actualizar registros sin foto
function actualizarTipo($cod,$nom,$conn){
    $sql="update tipo set nomtip='$nom' where codtip='$cod'"; 
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}
//método para buscar registro
function buscarTipo($cod,$conn){
    $sql="select nomtip from tipo where codtip='$cod'";
    $res= mysqli_query($conn, $sql);
    $vec=array();
    if(mysqli_num_rows($res)>0){
        $vec= mysqli_fetch_array($res);
    }
    return $vec; 
}
    
//método para listar registros
function listarTipo($conn){
    $sql="select codtip, nomtip from tipo";
    $res= mysqli_query($conn, $sql);
    $vec=array();
    while($f= mysqli_fetch_array($res))  
        $vec[]=$f;
    return $vec;
}

?>