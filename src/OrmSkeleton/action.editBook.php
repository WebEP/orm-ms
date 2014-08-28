<?php

if (!function_exists("cmsms")) exit;

if(!empty($params['book_id'])){
	//Let's retrieve our book !
	$book = OrmCore::findById(new BookSkeleton(), $params['book_id']);
	$action = "Edition";
	if($book == null){
		// We create a new one
		$book = new BookSkeleton();
		$action = "Creation";
	}
} else {
	// We create a new one
	$book = new BookSkeleton();
	$action = "Creation";
}

$formStart = $this->CreateFormStart($id, 'editBookSave');
$submit = $this->CreateInputSubmit($id, 'submit', 'submit');
$return = $this->CreateLink($id, 'defaultadmin', $returnid, 'cancel',null,null,null,null,"class='pageback ui-state-default ui-corner-all'" );

$error = '';
if(!empty($params['error'])) {
	$error = "<h2 style='color:#FF0000;'>".$params['error']."</h2>";
}

?>
<h2><?php echo $action; ?> of a BookSkeleton</h2>

<?php echo $error ?>
<?php echo $formStart; ?>
	<input type='hidden' name='<?php echo $id; ?>book_id' value='<?php echo $this->securize($book->get('book_id')); ?>' />
	<label for='title'>Title : </label><input type='text' name='<?php echo $id; ?>title' value='<?php echo $this->securize($book->get('title')); ?>' /><br/>
	<label for='description'>Description : </label><textarea name='<?php echo $id; ?>description' ><?php echo $this->securize($book->get('description')); ?></textarea><br/>
	<label for='uuid'>UUID : </label><input type='text' name='<?php echo $id; ?>uuid' value='<?php echo $this->securize($book->get('uuid')); ?>' /> example : <?php echo OrmCore::generateUUID(); ?><br/>
	<?php echo $submit; echo $return; ?>
</form>