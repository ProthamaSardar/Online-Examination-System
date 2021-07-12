<style type="text/css">
body {
	margin-left: 0px;
	margin-top: 0px;
}

</style>

    <td width="10%">
     <img border="0" src="exam.png" width="100%" height="350" align="right"></td>
  </tr>
</table>

  <Table width="100%">
  <tr>
  <td>
  <?php @$_SESSION['login']; 
  error_reporting(1);
  ?>
  </td>
    <td>
	<?php
	if(isset($_SESSION['login']))
	{
	 echo "<div align=\"right\"><strong><a href=\"signout.php\"></a></strong></div>";
	 }
	 else
	 {
	 	echo "&nbsp;";
	 }
	?>
	</td>
	
  </tr>
  
</table>
