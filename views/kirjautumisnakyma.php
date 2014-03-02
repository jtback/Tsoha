<div>
    <h1>Tervetuloa taloyhtiösivuille</h1>
    <ul>palvelut
        <li>palvelu1</li>
        <li>palvelu2</li>
        <li>palvelu3</li>
    </ul>    
    <form action="http://jtback.users.cs.helsinki.fi/Tsoha/kirjautuminen.php" method="POST">
        Käyttäjänimi: <input type="text" name="username" value="<?php if(($data->kayttaja))echo $data->kayttaja; ?>" />
        Salasana: <input type="password" name="password"/>
        <button type="submit">Kirjaudu</button>
    </form>
</div>
   
    



