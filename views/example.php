
<h1><?php echo $data['titre'];?></h1>

<ul style="background-color: gray;display:flex; justify-content: space-around;">
<?php foreach ($data['utilisateurs'] as $user) { ?>
    <li style="background-color:white;">
        <h2><?php echo $user['nom']; ?> </h2>
        <p><?php echo $user['email']; ?> </p>
    </li>
    <?php }?>
</ul>
<?php 


?>