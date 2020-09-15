<?php

    $parameters = array();
    if((!empty($_POST["sex"]))&&(!empty($_POST["age"])&&(!empty($_POST["name"]))&&(!is_numeric($_POST["name"])))) {
        $parameters = $_POST;
    }
    else {
        header("Location:".$_SERVER["HTTP_REFERER"]);
    }
    

 /*    if(is_numeric($parameters["name"])) {
        header("Location:".$_SERVER["HTTP_REFERER"]);
    }
    if(empty($parameters["name"])||empty($parameters["age"]||empty($_POST["sex"]))) {
        header("Location:".$_SERVER["HTTP_REFERER"]);
    } */

?>

<table summary="La persona cargada">
    <caption>La persona cargada</caption>
    <thead>
        <tr>
          <th>
                 Name
          </th>
          <th>
                  Edad
          </th>
          <th>
               Sex
          </th>
    </thead>
    <tbody>
    <tr>
        <td>
            <?php echo $parameters["name"]?>
        </td>
        <td>
            <?php echo $parameters["age"]?>
        </td>
        <td>
            <?php echo $parameters["sex"]?>
        </td>
    </tr>
    </tbody>

</table>

<style>
    caption {
        font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        color: black;

    }
    table {
    table-layout: fixed;
    width: 100%;
    border-collapse: collapse;
    border: 1px solid orangered;
    font-family: Arial;    
}
    td,th {
        padding: 10px;
        text-align: center;
        border-right: 1px solid orangered;
    }

    th, tfoot {
        background-color: lightsalmon;
        
    }
</style>