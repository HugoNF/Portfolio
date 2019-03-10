<form id="contact-form" method="post" action="#" class="contact-form form">
    <div class="controls">
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label class="abdubdu" for="name">Votre prenom *</label>
                    <input type="text" name="name" id="name" placeholder="Entrez votre Prénom" required="required" class="form-control">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label class="abdubdu" for="surname">Votre Nom *</label>
                    <input type="text" name="surname" id="surname" placeholder="Entrez votre Nom" required="required" class="form-control">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="abdubdu" for="email">Votre email *</label>
            <input type="email" name="email" id="email" placeholder="Entrez votre email" required="required" class="form-control">
        </div>
        <div class="form-group">
            <label class="abdubdu" for="message">Votre message *</label>
            <textarea rows="4" name="message" id="message" placeholder="Entrez votre message" required="required" class="form-control"></textarea>
        </div>
        <div class="text-center">
            <input name="contact" type="submit" value="Envoyez message" class="btn btn-primary btn-block">
        </div>
    </div>
</form>

