<?php
    require 'consulta.php';
    // Adquiriendo la variable que queremos para modificar  
    // $generar_tabla = $_POST['mitabla'];
    if($tabla == 'registro_usuario')
    {
?>
    <table border="1">
    <thead>
        <td>Clave_R</td>
        <td>Nombre</td>
        <td>Edad</td>
        <td>Telefono</td>
        <td>Direccion</td>
        <td>Correo</td>
    </thead>
    <tbody>
        <?php
            foreach($ejecuta as $tabla_cosultada)
            {
        ?>
        <tr>
            <td> <?php echo $tabla_cosultada['Cve_R']; ?> </td>
            <td> <?php echo $tabla_cosultada['Nombre']; ?> </td>
            <td> <?php echo $tabla_cosultada['Edad']; ?> </td>
            <td> <?php echo $tabla_cosultada['Telefono']; ?> </td>
            <td> <?php echo $tabla_cosultada['Direccion']; ?> </td>
            <td> <?php echo $tabla_cosultada['correo']; ?> </td>
        </tr>
        <?php
            }
        ?>
    </tbody>
    </table>
<?PHP
    }
?>
<!-- Generando la tabla LUGAR -->
<?php
    // $generar_tabla = $_POST['mitabla'];
    if($tabla == 'lugar')
    {
?>
    <table border="1">
    <thead>
        <td>Codigo_L</td>
        <td>Nombre_L</td>
        <td>Descripcion_L</td>
        <td>Precio</td>
    </thead>
    <tbody>
        <?php
            foreach($ejecuta as $tabla_cosultada)
            {
        ?>
        <tr>
            <td> <?php echo $tabla_cosultada['Codigo_L']; ?> </td>
            <td> <?php echo $tabla_cosultada['Nombre_L']; ?> </td>
            <td> <?php echo $tabla_cosultada['Descripcion_L']; ?> </td>
            <td> <?php echo $tabla_cosultada['Precio']; ?> </td>
        </tr>
        <?php
            }
        ?>
    </tbody>
    </table>
<?PHP
    }
?>
<!-- Generando la tabla PAQUETE -->
<?php
    // $generar_tabla = $_POST['mitabla'];
    if($tabla == 'paquete')
    {
?>
    <table border="1">
    <thead>
        <td>Clave_P</td>
        <td>Nombre_P</td>
        <td>Precio</td>
        <td>Codigo_L1</td>
        <td>Cve_R2</td>
        <td>Fecha</td>
        <td>No_Personas</td>
    </thead>
    <tbody>
        <?php
            foreach($ejecuta as $tabla_cosultada)
            {
        ?>
        <tr>
            <td> <?php echo $tabla_cosultada['Clave_P']; ?> </td>
            <td> <?php echo $tabla_cosultada['Nombre_P']; ?> </td>
            <td> <?php echo $tabla_cosultada['Precio']; ?> </td>
            <td> <?php echo $tabla_cosultada['Codigo_L1']; ?> </td>
            <td> <?php echo $tabla_cosultada['Cve_R2']; ?> </td>
            <td> <?php echo $tabla_cosultada['Fecha']; ?> </td>
            <td> <?php echo $tabla_cosultada['No_Personas']; ?> </td>
        </tr>
        <?php
            }
        ?>
    </tbody>
    </table>
<?PHP
    }
?>
