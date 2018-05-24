<div class="container">
    <h3>Galerie hinzufügen</h3>
    <form class="form-horizontal" method="post" action="<?php echo getValue("phpmodule"); ?>" enctype="">
        <div class="component" data-html="true">
            <input name="gid" type="hidden" value="<?php echo getHtmlValue("nickname"); ?>" class="form-control">
            <div class="form-group">
                <label class="col-md-2 control-label" for="textinput">Name</label>
                <div class="col-md-6">
                    <input name="name" type="text" class="form-control" value="<?php echo getHtmlValue("nickname"); ?>" maxlength="50">
                </div>
            </div>
            <div class="form-group"><label class="col-md-2 control-label" for="textinput">Beschreibung</label>
                <div class="col-md-6"><textarea style="overflow:hidden" name="description" rows="6" maxlength="250"
                                                class="form-control" data-value="<?php echo getHtmlValue("nickname"); ?>"></textarea></div>
            </div>
            <div class="form-group">
                <div class="col-md-2 radioLabel">Format Thumbnails</div>
                <div class="col-md-6">
                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-default active" data-toggle="tooltip" title=""
                               data-original-title="Alle Thumbnails sind quadratisch, d.h. die Ränder werden abgeschnitten"><input
                                    type="radio" name="formatThumbs" autocomplete="off" checked="" value="<?php echo getHtmlValue("nickname"); ?>">quadratisch</label>
                        <label class="btn btn-default " data-toggle="tooltip" title=""
                               data-original-title="Die Thumbnails sind im Quer- oder Hoch-Format"><input type="radio"
                                                                                                          name="formatThumbs"
                                                                                                          autocomplete="off"
                                                                                                          value="<?php echo getHtmlValue("nickname"); ?>">mit
                            Rand</label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-2 radioLabel">Sortierung Bilder</div>
                <div class="col-md-6">
                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-default active" data-toggle="tooltip" title=""
                               data-original-title="Die Sortierung ist chronologisch aufsteigend"><input type="radio"
                                                                                                         name="sortorder"
                                                                                                         autocomplete="off"
                                                                                                         checked=""
                                                                                                         value="<?php echo getHtmlValue("nickname"); ?>">aufsteigend</label>
                        <label class="btn btn-default " data-toggle="tooltip" title=""
                               data-original-title="Die Sortierung ist chronologisch absteigend"><input type="radio"
                                                                                                        name="sortorder"
                                                                                                        autocomplete="off"
                                                                                                        value="<?php echo getHtmlValue("nickname"); ?>">absteigend</label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-2 radioLabel">Galerie sichtbar</div>
                <div class="col-md-6">
                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-default active" data-toggle="tooltip" title=""
                               data-original-title="Die Galerie ist nur in meinem Member-Bereich sichtbar"><input
                                    type="radio" name="public" autocomplete="off" checked="" value="<?php echo getHtmlValue("nickname"); ?>">nur für
                            mich</label>
                        <label class="btn btn-default " data-toggle="tooltip" title=""
                               data-original-title="Die Galerie kann via Adresse (Link) oder mit Benutzername/Passwort angeschaut werden"><input
                                    type="radio" name="public" autocomplete="off" value="<?php echo getHtmlValue("nickname"); ?>">via URL / Passwort</label>
                        <label class="btn btn-default " data-toggle="tooltip" title=""
                               data-original-title="Die Galerie ist im öffentlichen Bereich für alle sichtbar"><input
                                    type="radio" name="public" autocomplete="off" value="2">für alle</label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label" for="textinput">&nbsp;</label>
                <div class="col-md-6">
                    <input name="send" type="submit" class="btn btn btn-success" value="<?php echo getHtmlValue("nickname"); ?>">
                    <a name="cancel" href="/picturedb/galleries" class="btn btn btn-warning">Abbrechen</a></div>
            </div>
        </div>
    </form>
    <hr>
    <div class="list-group" id="alert-container">
    </div>
    <div class="col-md-offset-3 col-md-4 text-center small text-muted">
        &copy;&nbsp;Copyright gibb Stdent Tim & Nelson
    </div>
</div>