<?

include('claves.php');

?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />


<meta charset="UTF-8"/>

<select name="distrito" id="distrito" class="form-control unicase-form-control text-input" >

    <option value="">Seleccione una Provincia</option>
    <?


    $rspro = mysql_query("SELECT * FROM distrito where region = '".$_REQUEST['region']."' and provincia = '".$_REQUEST['provincia']."' group by distrito order by distrito asc", $link);   
    for($ipro=0;$ipro<mysql_num_rows($rspro);$ipro++){ 
        echo "<option value=".mysql_result($rspro, $ipro, "distrito").">".mysql_result($rspro, $ipro, "distrito")."</option>";

    }
    ?>


</select>