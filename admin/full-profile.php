<?php
session_start();
include("includes/config.php");
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "hostel";
$prefix = "";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysql_select_db($mysql_database, $bd) or die("Could not select database");
?>
<script language="javascript" type="text/javascript">
function f2()
{
window.close();
}
function f3()
{
window.print(); 
}
</script>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Informacion de cliente</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="hostel.css" rel="stylesheet" type="text/css">
</head>

<body>
<table width="100%" border="0">
<?php 
		 $ret= mysql_query("SELECT * FROM registration where id = '".$_GET['id']."'");
			while($row=mysql_fetch_array($ret))
			{
			?>
			<tr>
			  <td colspan="2" align="center" class="font1">&nbsp;</td>
  </tr>
			<tr>
			  <td colspan="2" align="center" class="font1">&nbsp;</td>
  </tr>
			
			<tr>
			  <td colspan="2"  class="font"><?php echo ucfirst($row['firstName']);?> <?php echo ucfirst($row['lastName']);?>'S <span class="font1"> information &raquo;</span> </td>
  </tr>
			<tr>
			  <td colspan="2"  class="font">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		      <div align="right">Datos de registro : <span class="comb-value"><?php echo $row['postingDate'];?></span></div></td>
  </tr>
			<tr>
			  <td colspan="2"  class="heading" style="color: red;">Informacion relativa &raquo; </td>
  </tr>
			<tr>
			  <td colspan="2"  class="font1"><table width="100%" border="0">
                <tr>
                  <td width="32%" valign="top" class="heading">Habitacion numero : </td>
                  
                      <td class="comb-value1"><span class="comb-value"><?php echo $row['roomno'];?></span></td>
                    </tr>
                  <tr>
                  <td width="22%" valign="top" class="heading">Asiento : </td>
                  
                      <td class="comb-value1"><span class="comb-value"><?php echo $row['seater'];?></span></td>
                    </tr>
                  
                    <tr>
                    <td width="12%" valign="top" class="heading">Tarifas MP : </td>
                      <td class="comb-value1"><?php echo $fpm=$row['feespm'];?></td>
                    </tr>
                     <tr>
                    <td width="12%" valign="top" class="heading">servicio de comida: </td>
                      <td class="comb-value1"><?php if($row['foodstatus']==0)
{
  echo "Without Food";
}
else
{
  echo "With Food";
}
                      ;?></td>
                    </tr>
                    <tr>
                    <td width="12%" valign="top" class="heading">Quedarse de: </td>
                      <td class="comb-value1"><?php echo $row['stayfrom'];?></td>
                    </tr>
                    <tr>
                    <td width="12%" valign="top" class="heading">Duracion: </td>
                      <td class="comb-value1"><?php echo $dr=$row['duration'];?></td>
                    </tr>
                    <tr>
                    <td width="12%" valign="top" class="heading">Total a pagar: </td>
                      <td class="comb-value1">
                      <?php if($row['foodstatus']==1)
                      { 
                        $fd=2000; 
                        echo (($dr*$fpm)+$fd);
                      }
                        else
                        {
                          echo $dr*$fpm;
                        }
                      ?></td>
                    </tr>
  <tr>
   <td colspan="2" align="left"  class="heading" style="color: red;">Informacion personal &raquo; </td>
  </tr>
<tr>
<td width="12%" valign="top" class="heading">Convenio: </td>
<td class="comb-value1"><?php echo $row['course'];?></td>
</tr>

<tr>
<td width="12%" valign="top" class="heading">Registro no: </td>
<td class="comb-value1"><?php echo $row['regno'];?></td>
</tr>

<tr>
<td width="12%" valign="top" class="heading">Primer nombre: </td>
<td class="comb-value1"><?php echo $row['firstName'];?></td>
</tr>

<tr>
<td width="12%" valign="top" class="heading">Segundo nombre: </td>
<td class="comb-value1"><?php echo $row['middleName'];?></td>
</tr>

<tr>
<td width="12%" valign="top" class="heading">Apellido: </td>
<td class="comb-value1"><?php echo $row['lastName'];?></td>
</tr>

<tr>
<td width="12%" valign="top" class="heading">Genero: </td>
<td class="comb-value1"><?php echo $row['gender'];?></td>
</tr>

<tr>
<td width="12%" valign="top" class="heading">Contacto No: </td>
<td class="comb-value1"><?php echo $row['contactno'];?></td>
</tr>

<tr>
<td width="12%" valign="top" class="heading">Correo: </td>
<td class="comb-value1"><?php echo $row['emailid'];?></td>
</tr>

<tr>
<td width="12%" valign="top" class="heading">Contacto de emergencia: </td>
<td class="comb-value1"><?php echo $row['egycontactno'];?></td>
</tr>

<tr>
<td width="12%" valign="top" class="heading">Nombre de emergencia: </td>
<td class="comb-value1"><?php echo $row['guardianName'];?></td>
</tr>

<tr>
<td width="12%" valign="top" class="heading">Parentesco: </td>
<td class="comb-value1"><?php echo $row['guardianRelation'];?></td>
</tr>

<tr>
<td width="12%" valign="top" class="heading">Numero de Emergencia: </td>
<td class="comb-value1"><?php echo $row['guardianContactno'];?></td>
</tr>
<tr>
        <td colspan="2"  class="heading" style="color: red;">Direccion de Emergencia  &raquo; </td>
  </tr>
<tr>
<td width="12%" valign="top" class="heading"><Datag>Direccion</Datag>: </td>
<td class="comb-value1"><?php echo $row['corresAddress'];?></td>
</tr>

<tr>
<td width="12%" valign="top" class="heading">Region: </td>
<td class="comb-value1"><?php echo $row['corresCIty'];?></td>
</tr>

<tr>
<td width="12%" valign="top" class="heading">Comuna: </td>
<td class="comb-value1"><?php echo $row['corresState'];?></td>
</tr>

<tr>
<td width="12%" valign="top" class="heading">codigo pin: </td>
<td class="comb-value1"><?php echo $row['corresPincode'];?></td>
</tr>
<tr>
        <td colspan="2"  class="heading" style="color: red;">Direccion personal  &raquo; </td>
  </tr>
<tr>
<td width="12%" valign="top" class="heading">Direccion: </td>
<td class="comb-value1"><?php echo $row['pmntAddress'];?></td>
</tr>

<tr>
<td width="12%" valign="top" class="heading">Region: </td>
<td class="comb-value1"><?php echo $row['pmntCity'];?></td>
</tr>

<tr>
<td width="12%" valign="top" class="heading">Comuna: </td>
<td class="comb-value1"><?php echo $row['pmnatetState'];?></td>
</tr>

<tr>
<td width="12%" valign="top" class="heading">Codigo pin: </td>
<td class="comb-value1"><?php echo $row['pmntPincode'];?></td>
</tr>
<tr>
<td width="12%" valign="top" class="heading">Pais: </td>
<td class="comb-value1"><?php echo $row['pmnatetState'];?></td>
</tr>
<?php } ?>


                   
                  </table></td>
                </tr>
               
					
                  </table></td>
                </tr>
              </table></td>
  </tr>
		
           
 
	 
    </table></td>
  </tr>

  
  <tr>
    <td colspan="2" align="right" ><form id="form1" name="form1" method="post" action="">
      <table width="100%" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="14%">&nbsp;</td>
          <td width="35%" class="comb-value"><label>
            <input name="Submit" type="submit" class="txtbox4" value="Imprimir el documento " onClick="return f3();" />
          </label></td>
          <td width="3%">&nbsp;</td>
          <td width="26%"><label>
            <input name="Submit2" type="submit" class="txtbox4" value="Cerrar el documento " onClick="return f2();"  />
          </label></td>
          <td width="8%">&nbsp;</td>
          <td width="14%">&nbsp;</td>
        </tr>
      </table>
        </form>    </td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
</table>
</body>
</html>
