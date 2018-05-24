<div class="col-md-12">
    <h3>Galerien mit Passwortschutz</h3>
<p>Registrierte Benutzer k�nnen dir die Zugangsdaten zu ihrem Bereich geben. Ohne Benutzername und Passwort kannst du die �ffentlichen Galerien anschauen.</p>
<p>&nbsp;</p>
<form name="kontakt" class="form-horizontal form-condensed" action="<?php echo getValue("phpmodule"); ?>" method="post">
  <div class="form-group control-group">
	<label class="control-label col-md-offset-2 col-md-2" for="email" >E-Mail</label>
	<div class="col-md-4">
	  <input type="email" class="form-control" id="email" name="email" value="<?php echo getHtmlValue("email"); ?>" />
	</div>
  </div>
  <div class="form-group control-group">
	<label class="control-label col-md-offset-2 col-md-2" for="password">Passwort</label>
	<div class="col-md-4">
	  <input type="password" class="form-control" id="password" name="password" value="<?php echo getHtmlValue("password"); ?>" />
	</div>
  </div>
  <div class="form-group control-group">
	<div class="col-md-offset-4 col-md-4">
	  <button type="submit" class="btn btn-success" name="login" id="login">login</button>
	  <a name="cancel" href="#" class="btn btn btn-warning">Abbrechen</a>
	</div>
  </div>
</form>
</div>
</form>
<div class="col-md-offset-3 col-md-4 text-center small text-muted">
    &copy;&nbsp;Copyright gibb Stdent Tim & Nelson
</div>
<?php
  $meldung = getValue("meldung");
  if (strlen($meldung) > 0) echo "<div class='col-md-offset-2 col-md-6 alert alert-danger'>$meldung</div>";
?>
