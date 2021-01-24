<!doctype html>
<html style="height:100%">

<head>
    <meta charSet="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="apple-touch-icon" sizes="57x57" href="https://denali-static.grammarly.com/files/314a46858a0485d4e21c68c1ff5a2925/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="60x60" href="https://denali-static.grammarly.com/files/cd000a5df721847ffd83883f79145fdb/apple-touch-icon-60x60.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="https://denali-static.grammarly.com/files/29fd64599ca13e3ec96f04ef171f4b17/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="https://denali-static.grammarly.com/files/16a85e931b118f71891602594a21c1f8/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="https://denali-static.grammarly.com/files/8bf9099588d8b7ce7200e30ece857309/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="https://denali-static.grammarly.com/files/ca67819de0910001064cd9cf9629bee5/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="https://denali-static.grammarly.com/files/1f6a8f07d40ad4319a0631dedac0a015/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="https://denali-static.grammarly.com/files/18d3f1a477fff966c71e6f83102baef7/apple-touch-icon-152x152.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="https://denali-static.grammarly.com/files/0e2129cbf5157f48f60114f52098523a/favicon-16x16.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="https://denali-static.grammarly.com/files/a95f666ac4aabad5748d75749d58597e/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="96x96" href="https://denali-static.grammarly.com/files/0df453ee17b349fc8df12bcf9266ec74/favicon-96x96.png" />
    <link rel="icon" type="image/png" sizes="160x160" href="https://denali-static.grammarly.com/files/41391fb28fe27ad5e3fad9e015b05f83/favicon-160x160.png" />
    <link rel="icon" type="image/png" sizes="192x192" href="https://denali-static.grammarly.com/files/2d3312be629176edbace41f5d80a17a6/favicon-192x192.png" />
    <link rel="icon" type="image/x-icon" href="https://denali-static.grammarly.com/files/8aec804902f973999d26307c10a87d3d/favicon.ico" />
    <meta name="msapplication-TileColor" content="#da532c" />
    <meta name="msapplication-TileImage" content="https://denali-static.grammarly.com/files/1f6a8f07d40ad4319a0631dedac0a015/mstile-144x144.png" />
    <meta name="application-name" content="Grammarly" />
    <title>CekKARYA.MU</title>
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/backend.css" />
</head>

<body style="height:100%" class="editorTs">
<div id="page" style="height:100%">
    <div class="_b198bc-main fs-hide">
       <textarea name="spellfield" id="spellfield" cols="28" rows="4">Any Number of Text areas can habe Contextual and ..
	</textarea>

	<?php
		include_once APPPATH."libraries/phpspellcheck/include.php";

		$mySpell = new SpellCheckButton();
		$mySpell->InstallationPath = "/phpspellcheck/";
		$mySpell->Fields = "ALL";
		echo $mySpell->SpellImageButton();

		$mySpell = new SpellAsYouType();
		$mySpell->InstallationPath = "/phpspellcheck/";
		$mySpell->Fields = "ALL";
		echo $mySpell->Activate();
	?>
    </div>
</div>
</script>
<script src="https://denali-static.grammarly.com/js/6759e04c26d13945cf3c/manifest.js?env=prod" crossOrigin="anonymous"></script>
<script src="https://denali-static.grammarly.com/js/4f0304bdfc9e4fa4cbfa/vendor.js?env=prod" crossOrigin="anonymous"></script>
<script src="https://denali-static.grammarly.com/js/2d1354cfef706cf38a29/main.js?env=prod" crossOrigin="anonymous"></script>
</body>

</html>