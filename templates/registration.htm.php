<div class="col-md-12">
<h3>Registration</h3>
<p>Die Registration ist als Antrag zu betrachten. Wenn ich dich kenne, werde ich deinen Benutzer freischalten (unter Bemerkungen kannst du deine "Bewerbung" aufpeppen ;-). Du erh�ltst danach eine entsprechende Nachricht, falls du deine Mailadresse korrekt eingegeben hast.</p>
<p>&nbsp;</p>
<form name="kontakt" class="form-horizontal form-condensed" action="<?php echo getValue("phpmodule"); ?>" method="post">
<div class="form-group control-group">
	<label class="control-label col-md-offset-2 col-md-2" for="email">Nick-name</label>
	<div class="col-md-4">
	  <input type="text" class="form-control" id="nickname" name="nickname" value="<?php echo getHtmlValue("nickname"); ?>" />
	</div>
  </div>
  <div class="form-group control-group">
	<label class="control-label col-md-offset-2 col-md-2" for="email">E-Mail</label>
	<div class="col-md-4">
	  <input type="text" class="form-control" id="email" name="email" value="<?php echo getHtmlValue("email"); ?>" />
	</div>
  </div>
  <div class="form-group control-group">
	<label class="control-label col-md-offset-2 col-md-2" for="password">Passwort</label>
	<div class="col-md-4">
	  <input type="password" class="form-control" id="password" name="password" value="<?php echo getHtmlValue("password"); ?>" />
	</div>
  </div>
  <div class="form-group control-group">
	<label class="control-label col-md-offset-2 col-md-2" for="password">Passwort wiederhollen</label>
	<div class="col-md-4">
	  <input type="password" class="form-control" id="repassword" name="repassword" value="<?php echo getHtmlValue("repassword"); ?>" />
	</div>
  </div>
  <div class="form-group control-group">
	<div class="col-md-offset-4 col-md-4">
	  <button type="submit" class="btn btn-success" name="register" id="register">Register</button>
	  <a name="cancel" href="#" class="btn btn btn-warning">Abbrechen</a>
	</div>
  </div>
</form>
</div>

<div class="col-md-offset-3 col-md-4 text-center small text-muted">
    &copy;&nbsp;Copyright gibb Stdent Tim & Nelson
</div>
<?php
  $meldung = getValue("meldung");
  if (strlen($meldung) > 0) echo "<div class='col-md-offset-2 col-md-6 alert alert-danger'>$meldung</div>";
?>

