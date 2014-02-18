<!DOCTYPE HTML>
<html>
<!-- tähän kaikkien sivujen yhteistä html:ää--> 
  haluat näyttää näkymän:
    <?php
        /*Tähän haetaan yksittäisten sivujen näkymät
        * Tallenna oikean näkymän tiedostonimi muuttujaan $sivu*/
        echo $sivu;
        require 'views/'.$sivu;
    ?>
    <?php if (!empty($data->virhe)): ?>
     <div class="alert alert-danger"><?php echo $data->virhe; ?></div>
    <?php endif; ?>
<!-- tähän kaikkien sivujen yhteistä html:ää-->
</html>    
