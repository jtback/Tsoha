<!DOCTYPE HTML>
<html>
    <head>
        <title>Taloyhtiön palvelut</title>    
        </meta http-equiv="Content-Type" content="text/html; charset UTF-8">
        <link href="../css/bootstrap.css" rel="stylesheet">
        <link href="../css/bootstrap-theme.css" rel="stylesheet">
        <link href="../css/main.css" rel="stylesheet">
    </head>
    <body>
<!-- tähän kaikkien sivujen yhteistä html:ää--> 
  Tämä tulostuu pohja.php -tiedostosta. Haluat näyttää näkymän:
    <?php
        
        /*Tähän haetaan yksittäisten sivujen näkymät
        * Tallenna oikean näkymän tiedostonimi muuttujaan $sivu*/
        echo $sivu;
        require $sivu;
    ?>
    <?php if (!empty($data->virhe)): ?>
     <div class="alert alert-danger"><?php echo $data->virhe; ?></div>
    <?php endif; ?>
<!-- tähän kaikkien sivujen yhteistä html:ää-->
    </body>
</html>    
