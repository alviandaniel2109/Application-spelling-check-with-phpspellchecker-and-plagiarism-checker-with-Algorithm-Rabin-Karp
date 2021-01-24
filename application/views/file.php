<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script language="javascript" type="text/javascript">
    </script>
    <meta http-equiv="Content-Type" content="text/html;charset=ISO-8859-1" />
    <title>PHPSpellCheck Example - PHP Spell Checker User Interface API</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/bootstrap.min.css");?>">
</head>
<body>
    <h3 style="padding: 20px 10px 29px 30px;">Silahkan Lakukan Pengecekan</h3>
    <div class="form-group" style="padding: 20px 10px 10px 30px;">
        <label for="spellfield">Masukkan kalimat yang ingin di cek:</label>
        <textarea class="form-control" rows="5" style="width: 65%;" 
        id="spellfield" name="spellfield"></textarea>
    </div>
    <div class="form-group" style="padding: 0px 10px 29px 30px;">
        <button class="btn btn-primary" onclick="$('#spellfield').spellCheckInDialog()">Check Spelling</button>
    </div>
    <script type="text/javascript" src='<?php echo base_url("assets/js/jquery.min.js")?>'></script>
    <script type="text/javascript" src='<?php echo base_url("assets/JavaScriptSpellCheck/include.js")?>'></script>
    <script type="text/javascript">
        $(function() {
            $('textarea').spellAsYouType();
        })
    </script>
</body>
</html>
