<?

include('claves.php');



if (mysql_num_rows(mysql_query("SELECT * FROM categoria_hijo WHERE cod_categoria_padre = ".$_REQUEST['cod_categoria']." ", $link)) != "0"){?>




<div style="float:left;width: 55%;"><p>&nbsp;</p></div>

<div style="float:left;width: 42%;">

	<label class="info-title">Sub Categoria<span>*</span></label>

	<select name="subcategoria"  id="subcategoria"  class="form-control unicase-form-control text-input">
		<option value="">Seleccione una subcategoria</option>

		<?

		$rsctg = mysql_query("SELECT * FROM categoria_hijo WHERE cod_categoria_padre = ".$_REQUEST['cod_categoria']." ", $link);  
		for($ictg=0;$ictg<mysql_num_rows($rsctg);$ictg++)
		{
			echo "<option value='".mysql_result($rsctg, $ictg, 'cod_categoria_hijo')." '>".mysql_result($rsctg, $ictg, 'nombre_categoria_hijo')."</option>";
		}
		?>
	</select>

</div>
<div style="float:left;width: 3%;"><p>&nbsp;</p></div>
<div style="clear:both"></div> 
<div align="center"></div>

<?}?>