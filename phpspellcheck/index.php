<textarea name="spellfield" id="spellfield" cols="28" rows="4">Any Number of Text areas can habe Contextual and ..
</textarea>

<?php
require "include.php";  //edit this path if necessary

$mySpell = new SpellCheckButton();
$mySpell->InstallationPath = "/phpspellcheck/";
$mySpell->Fields = "ALL";
echo $mySpell->SpellImageButton();

$mySpell = new SpellAsYouType();
$mySpell->InstallationPath = "/phpspellcheck/";
$mySpell->Fields = "ALL";
echo $mySpell->Activate();
?>

