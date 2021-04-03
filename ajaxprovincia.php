<?



include('claves.php');
?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />


<meta charset="UTF-8"/>


<select name="provincia" id="provincia" class="form-control unicase-form-control text-input" onchange="buscar_distrito()">

    <option value="">Seleccione una Provincia</option>
    <?


    $rspro = mysql_query("SELECT * FROM distrito where region = '".$_REQUEST['region']."' group by provincia order by provincia asc", $link);   
    for($ipro=0;$ipro<mysql_num_rows($rspro);$ipro++){ 
        echo "<option value='".mysql_result($rspro, $ipro, "provincia")."'>".mysql_result($rspro, $ipro, "provincia")."</option>";

    }
    ?>

</select>