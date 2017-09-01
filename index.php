<?php
include("layout.php");
layout::pageTop("Home Page");
?>
<table class="responstable">
<tr>
<th>Event Name</th>
<th>Time</th>
<th>Location</th>
<th>Respond</th>
</tr>
<tr>
<td>Convocation</td>
<td>2017-09-01 10:00</td>
<td>Metheny Fieldhouse</td>
<td><input type="checkbox" /></td>
<tr>
<tr>
<td>Tech Center Meeting</td>
<td>2017-09-02 08:00</td>
<td>SE 122</td>
<td><input type="checkbox" /></td>
</tr>
</table>
<?php
layout::pageBottom();
?>