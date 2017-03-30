<?php

$json = file_get_contents('http://api.kalau.web.id/api/absen?nip=14650015&tgs=2016-01-01&tge=2016-10-31');
$obj = json_decode($json);

?>

<html>
<center><table border="1" style="border-color: red;background-color: black;color: white">

	<thead>
	
		<tr>
			<td colspan="8"><center>DATA ABSESENSI MOBILE</center></td>
		</tr>
		<th>id</th>
		<th>nip</th>
		<th>latitude</th>
		<th>longitude</th>
		<th>presensi ke</th>
		<th>photo</th>
		<th>mac address</th>
		<th>created at</th>
	
	</thead>

	<tbody>
		<?php
			for ($i=0 ; $i<2; $i++){
				$link = $obj->presensi->data_absensi_mobile[$i]->photo;
				echo "<tr>
					<td> ".$obj->presensi->data_absensi_mobile[$i]->id."</td>
					<td> ".$obj->presensi->data_absensi_mobile[$i]->nip." </td>
					<td> ".$obj->presensi->data_absensi_mobile[$i]->latitude." </td>
					<td> ".$obj->presensi->data_absensi_mobile[$i]->longitude." </td>
					<td> ".$obj->presensi->data_absensi_mobile[$i]->presensi_ke." </td>
					<td> <a href='$link' target='_blank'>Foto</a></td>
					<td> ".$obj->presensi->data_absensi_mobile[$i]->macaddress." </td>
					<td> ".$obj->presensi->data_absensi_mobile[$i]->created_at." </td>
				</tr>";
			} 
		?>
	</tbody>
</table>
</center>
<br>
<center><table border="1" style="border-color: red;background-color: black;color: white">
	<thead>
		<tr>
			<td colspan="8"><center>DATA ABSENSI FINGER</center></td>
		</tr>
		<th>finger id</th>
		<th>nip</th>
		<th>tag date</th>
		<th>finger ip</th>
	</thead>
	<tbody>
	<?php
		echo "<tr>
			<td> ".$obj->presensi->data_absensi_finger[0]->finger_id."</td>
			<td> ".$obj->presensi->data_absensi_finger[0]->nip."</td>
			<td> ".$obj->presensi->data_absensi_finger[0]->tag_date."</td>
			<td> ".$obj->presensi->data_absensi_finger[0]->finger_ip."</td>
			</tr>";
	?>
	</tbody>
</table>
</center>
<br>
<center><table border="1" style="border-color: red;background-color: black;color: white">
	<thead>
		<th>LATEST UPDATE</th>
	</thead>
	<tbody>
		<tr>
			<td><?php echo $obj->presensi->latest_update; ?></td>
	</tbody>
</table>
</center>
</html>