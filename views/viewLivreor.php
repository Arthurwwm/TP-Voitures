<h1>Signez Notre livre d'or</h1>
<form method="POST" id="livreOr">
    <input type="text" name="pseudo" id="pseudo" placeholder="pseudo" required="required">
    <textarea name="message" id="message" cols="30" rows="10" placeholder="Laissez nous un message" required="required"></textarea>
    <select name="note" id="note" required="required">
        <option value="">**Note**</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
    </select>
    <button value="submit" name="action">Envoyer</button>
</form>
<div id='zoneMsg'>
<?php
    foreach($messages as $message){
        echo "<div class='msgLivre'><h3><img src='public/icons/iconeUser.png' class='iconeUser'>".$message['pseudo']."</h3><span>".$message['dateEnvoi']." note : ".$message['note']."</span><p>".$message['message']."</p></div>";
    }
?>
</div>
<?php if($nbPages>1){ ?>
<p>Page
<?php 

    for($i=1;$i<=$nbPages;$i++){
        echo '<a href="?action=livreor&page='.$i.'" class="lienPages">'.$i.'</a>..';
    } 
}

?>
</p>