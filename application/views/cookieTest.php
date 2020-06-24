saved cookie is <?= $cookie; ?></br>
<?php

if($cookie=='canada')
{

?>
<a href="<?= base_url();?>welcome/deletecookie?country=india">Change Country</a>
<?php
}
elseif($cookie=='india')
{
	?>
<a href="<?= base_url();?>welcome/deletecookie?country=canada">Change Country</a>
	<?php
}
?>