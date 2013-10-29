<!DOCTYPE html>
<html>
<body>
<a href="index.php?action=home">Home</a>
<a href="index.php?action=new">Nieuwe registratie</a>
<br/>
<br/>
<table>
    <th>Kleur</th>
    <th>Merk</th>
    <?php foreach ($this->_vehicles as $vehicle) { ?>
        <tr>
            <td><?php echo $vehicle->getColor(); ?></td>
            <td><?php echo $vehicle->getBrand(); ?></td>
        </tr>
    <?php } ?>
</table>
</body>
</html>