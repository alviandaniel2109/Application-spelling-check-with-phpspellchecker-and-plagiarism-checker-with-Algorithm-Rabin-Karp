<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=ISO-8859-1" />
<title>PHPSpellCheck Example - PHP Spell Checker User Interface API</title>
</head>
<body>
<form id="form1" name="form1" action="">
<?php if ($_GET['spellfield'] == '') { ?>
<textarea name="spellfield"  id="spellfield" cols="50" rows="20">
</textarea><br/>
<?php } else { ?>
<textarea name="spellfield"  id="spellfield" cols="50" rows="20">
<?php echo $_GET['spellfield']; ?>
</textarea><br/>
<?php } ?>


<?php
	require "../include.php";
	$mySpell = new SpellCheckButton();
	$mySpell->CaseSensitive = true;
    $mySpell->CheckGrammar = true;
  	$mySpell->CheckInSitu = false;
	$mySpell->Fields = "ALL"; 
    $mySpell->FormToSubmit="form1";
    $mySpell->IgnoreAllCaps = true;
    $mySpell->IgnoreNumeric = true;
    $mySpell->InstallationPath = "../";
    $mySpell->Language = "English (International)";
    $mySpell->UserInterfaceLanguage="en";
    $mySpell->ShowSummaryScreen = false;
    $mySpell->Class = "AnyCustomCSSClass";
    $mySpell->CSSTheme= "classic";
    $mySpell->Image= "themes/buttons/spellicon.gif";
    $mySpell->ImageRollOver = "themes/buttons/spelliconover.gif";
    $mySpell->MeaningProvider = "http://www.thefreedictionary.com/{word}";
    $mySpell->SettingsFile = "default-settings";
    $mySpell->ShowMeanings = true;
    $mySpell->Strict = true;
    $mySpell->Style ="border:1px dotted black; margin:7px; font-size:22px;";
    $mySpell->Text = "Click Here to Spell Check";
    $mySpell-> UndoLimit = 999;
    $mySpell-> WindowMode="modal";
   	//$mySpell->HideButton ("btnAddToDict");
	//echo $mySpell->SpellImageButton();
	//echo $mySpell->SpellLink();
	//	echo("<p><em>My ID in Javascript is:".$mySpell->ID. " <br/>A full runtime Javascript API allows runtime commands and events to be fired.</em><p>");
	
	echo $mySpell->SpellButton();
?>


<?php
 
	$mySpell = new SpellAsYouType();
	$mySpell->CaseSensitive = true;
    $mySpell->CheckGrammar = true;
  	$mySpell->CheckInSitu = false;
	$mySpell->Fields = "ALL"; 
    $mySpell->FormToSubmit="form1";
    $mySpell->IgnoreAllCaps = true;
    $mySpell->IgnoreNumeric = true;
    $mySpell->InstallationPath = "../";
    $mySpell->Language = "English (International)";
    $mySpell->UserInterfaceLanguage="en";
    $mySpell->CSSTheme= "classic";
    $mySpell->SettingsFile = "default-settings";
    $mySpell->Strict = true;
    $mySpell->Delay = 300;
//	$mySpell->HideButton ("menuAddToDict");
   

	echo $mySpell->Activate();
?>
 </form>
</body>
</html>
