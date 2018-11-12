<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8" />
        <title>Mini-chat</title>
        <link rel="stylesheet" href="css/bootstrap.css">
    </head>
    <body>
        <div>

        	<form action="minichat_post.php" method="POST" class="fixed-bottom text-center p-3 mb-2 bg-primary text-white">
        		<h3> Ton nom : <?php if (isset($_SESSION['pseudo'])){ echo $_SESSION['pseudo']; } ?></h3>
            <br />
        	<br />	
            <div class="p-3 mb-2 bg-info text-white">
        		<label for="message"> Messages</label>
        		<input type="textarea" name="message" id="message" placeholder="messages" />
        		<br /><br />
        		<input type="submit" value="submit" class="col-md-3 p-3 mb-2 bg-success text-white"/>
            </div>
        	</form>
        </div>
    	<div class="text-center">
			<?php include("chat.php"); ?>
		</div>
    </body>
</html>


<?php

$allmsg = $bdd->query('SELECT * FROM chat ORDER BY id DESC');
while ($msg = $allmsg->fecth()) 
{
?>
<b><?php echo $msg['pseudo']; ?></b>
<?php
{


}
?>