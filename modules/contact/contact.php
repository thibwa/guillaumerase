<div class="blog-header"style="margin-top: 20px">
    <h1 class="blog-title">Contact</h1>
    <p class="lead blog-description">
        N'hésitez-pas à me contacter en envoyant un mail à <a href="mailto:wavreille.thibaut@gmail.com" id="MailSite" target="_blank">wavreille.thibaut@gmail.com</a> 
		ou en remplissant le formulaire ci-dessous.
    </p>
</div>

<?php
    if($_POST["name"] != "" && $_POST["email"] != ""){
         $to = "wavreille.thibaut@gmail.com";
         $subject = "Guillaume Rase - contact mail - ".$_POST["name"];
         $header = "From: ".$_POST["email"]."\n";
         $header.= "Reply-to: ".$_POST["email"]."\n";
         $body = $_POST["message"];

         if (mail($to, $subject, $body, $header)) {
 ?>
            <div id="notification" class="alert alert-success">
                Le message a bien été envoyé.
            </div>
<?php
         } else {
         ?>
            <div id="notification" class="alert alert-danger">
                Erreur dans l'envoie du message.<br/>
                Veuillez, tout d'abord, vérifier les informations que vous avez rentrées.<br/>
                En cas de répitions de cette erreur, veuillez contacter l'administrateur par mail :
                <strong><a href="mailto:wavreille.thibaut@gmail.com" id="MailSite" target="_blank">Wavreille Thibaut</a></strong>
            </div>
<?php
        }
     }
?>

<div class="row">
    <div class="col-sm-12 blog-main">
        <form id="contact" method="post" class="form" role="form" onsubmit="return verifForm(this)">
            <div class="row">
                <div class="col-xs-6 col-md-6 form-group">
                    <input class="form-control" id="name" name="name" placeholder="Name" onblur="verifName(this)" type="text" required
                           autofocus/>
                </div>
                <div class="col-xs-6 col-md-6 form-group">
                    <input class="form-control" id="email" name="email" placeholder="Email" onblur="verifMail(this)" type="email" required/>
                </div>
            </div>
            <textarea class="form-control" id="message" name="message" placeholder="Message" rows="5"></textarea>
            <br/>

            <div class="row">
                <div class="col-xs-12 col-md-12 form-group">
                    <button class="btn btn-primary pull-right" type="submit">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>