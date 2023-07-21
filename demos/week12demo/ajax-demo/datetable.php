<?php
$date = new DateTime('America/Chicago');
?>
<table border="1" cellpadding="3">
<tr>
    <th>W3C Date String</th>
    <td><?php echo $date->format(DATE_W3C);?></td>
</tr>
<tr>
    <th>Day of Week</th>
    <td><?php echo $date->format('l');?></td>
</tr>
<tr>
    <th>Month</th>
    <td><?php echo $date->format('F');?></td>
</tr>
<tr>
    <th>Day</th>
    <td><?php echo $date->format('j');?></td>
</tr>
<tr>
    <th>Year</th>
    <td><?php echo $date->format('Y');?></td>
</tr>
<tr>
    <th>Time</th>
    <td><?php echo $date->format('g:i:s A');?></td>
</tr>
<tr>
    <th>Unix Epoch Seconds</th>
    <td><?php echo $date->format('U');?></td>
</tr>
</table>