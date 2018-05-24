<div class="container">
    <h3>Galerie 'DieWelt' - Bilder hinzufügen</h3>
    <p>Es können Bilder in den Formaten .jpg und .png hinzugefügt werden.</p>
    <p>&nbsp;</p>
    <form class="form-horizontal" method="post" action="/picturedb/gallery/doAdd" enctype="multipart/form-data">
        <div class="component" data-html="true">
            <div class="form-group">
                <label class="col-md-2 control-label" for="textinput">Bild</label>
                <div class="col-md-6">
                    <input name="userpic[]" type="file" class="filestyle" value="" maxlength="" multiple="multiple" accept=".jpg, .jpeg, .png" data-icon="true" data-buttontext="&nbsp;öffnen" data-buttonname="btn-default" id="filestyle-0" tabindex="-1" style="position: absolute; clip: rect(0px, 0px, 0px, 0px);"><div class="bootstrap-filestyle input-group"><input type="text" class="form-control " placeholder="" disabled=""> <span class="group-span-filestyle input-group-btn" tabindex="0"><label for="filestyle-0" class="btn btn-default "><span style="margin-right: 3px;" class="icon-span-filestyle glyphicon glyphicon-folder-open"></span> <span class="buttonText">&nbsp;öffnen</span></label></span></div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label" for="textinput">Beschreibung</label>
                <div class="col-md-6">
                    <input name="description" type="text" class="form-control" value="" maxlength="50">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label" for="textinput">Adresse Galerie</label>
                <div class="col-md-8">
                    <input id="adresseGalerie" name="url" type="text" value="https://xn--mrggu-kva.ch/picturedb/public/setGallery/8ebfb5652285189e881c284e35a441d2/" class="form-control" readonly="">
                </div>
                <div class="col-md-1">
                    <span class="glyphicon glyphicon-copy iconCopy" data-toggle="tooltip" title="" onclick="copy2Clipboard('adresseGalerie')" data-original-title="Adresse Galerie in Zwischenablage kopieren"></span>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label" for="textinput">&nbsp;</label>
                <div class="col-md-6">
                    <input name="send" type="submit" class="btn btn btn-success" value="Speichern">
                    <a name="index" href="/picturedb/gallery" class="btn btn btn-primary">Bilderindex</a></div>
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