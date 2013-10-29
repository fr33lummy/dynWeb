<!DOCTYPE html>
<html>
<body>
<h2>Voertuig</h2>

<form action="index.php?action=register" method="POST">
    <p>Kleur: <input type="text" class="form-control" name="kleur" id="kleur"
                     value="<?php echo $this->_object->getColor(); ?>"></p>
    <?php echo $this->_statusMessage['kleur']; ?>
    <p>Merk: <input type="text" class="form-control" name="merk" id="merk"
                    value="<?php echo $this->_object->getBrand(); ?>"></p>
    <?php echo $this->_statusMessage['merk']; ?>

    <button type="submit">Bewaar</button>
</form>
</body>
</html>