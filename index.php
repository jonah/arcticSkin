<?php 
require_once($_SERVER['DOCUMENT_ROOT']."/common.php");
require_once($_SERVER['DOCUMENT_ROOT']."/action/includes/classes/class.action.php");
require(dirname(__FILE__)."/header.html"); 


if($_REQUEST['HTTP_HOST']=="gp.jonah.dev.ac.activistinfo.org") {
    $action = new action(716);
} else {
    $action = new action(348);
}
$action->hide_greenpeace_newsletter = true;
$action->_hideFields = array();
$action->hideAddress = true;
$action->use_phone = true;
$action->user_action_images = true;
$action->button_text = "SEND YOUR MESSAGE TO SHELL NOW!";
?>
<?php require_once($_SERVER['DOCUMENT_ROOT']."/action/html/action_form.php"); ?>
<?php require(dirname(__FILE__)."/footer.html"); ?>