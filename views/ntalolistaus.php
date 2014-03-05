<div>
    <h1>Kaikki talot</h1>
    
    <?php foreach($data->talot as $talo): ?> 
        <div class="Talo">      <!--tyylitiedosto? -->
            Talon nimi
            <?php echo $talo->getNimi(); ?>
            </div>
            
        
    
    <form action="./kirjautuminen.php" method="get">

    <button type="submit" value="submit">Kirjaudu ulos</button>
  
    </form>   
    
</div>
