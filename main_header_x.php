<?php

error_reporting(0);

$q = mysqli_real_escape_string($con, $_GET['q']);

echo '

<div class="hd">
<table width="100%">



<td><image src="../images/logo.png" width="170" /></td>


<td align="right"><a href="../search"><image src="../images/search.png" width="40" /></a></td>




<tr></tr>


<td>
<br>
<br>
<form method="GET" action="../search">
<input type="text" class="sx" placeholder="Type search here...hit enter to search" name="q" value="'.$q.'" />
</form>
</td>

</table>

</div>
<br><br><br>
<br><br>
<button class="btn-back" onclick="window.history.go(-1)"><b>Back</b></button><br>
<br>';



?>