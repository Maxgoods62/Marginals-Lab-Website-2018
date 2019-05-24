
<?php
include_once ("languagesystem.php");
$page = $language[$_SESSION['language']]['ContactUsTitle'] . " - ";
$description = $language[$_SESSION['language']]['ContactUsDescription'];
$keywords= $language[$_SESSION['language']]['ContactUsKeywords'];

$pagecontatcus = true;

include('header.php'); ?>
<div id="page">
    <div id="divImgFullscreenContactUs" class="divImgFullscreen">

    </div>

<div class="container">

    <div id="contentcontactus">
        <section>
            <div class="container">
                <div class="row">

                    <div class="col-md-8 col-xs-12">
                        <a name="info"></a>
                        <h1 class="resize"><?php echo $language[$_SESSION['language']]['ContactUsTitle']; ?></h1><br>

                        <?php

                        if (isset($_GET['operation'])) {
                            $operation = htmlspecialchars($_GET['operation']);

                            if ($operation == "success") {
                                ?>
                                <div class="alert alert-success">
                                    <?php echo $language[$_SESSION['language']]['ContactUsControlSuccess']; ?> <br>
                                </div>
                                 <?php
                            }
                            else if ($operation == "error" && isset($_GET['errortype'])) {
                                $errortype = htmlspecialchars($_GET['errortype']);
                                $errorcontatus = "Error";

                                if ($errortype == "ext") {
                                    $errorcontatus = $language[$_SESSION['language']]['ContactUsControlErrorExt'];

                                    $fichername = htmlspecialchars($_GET['filename']);

                                    $errorcontatus .= " " .$fichername;

                                } else  if ($errortype == "lourd") {
                                    $errorcontatus = $language[$_SESSION['language']]['ContactUsControlErrorLourd'];

                                    $fichername = htmlspecialchars($_GET['filename']);

                                    $errorcontatus .= " " .$fichername;

                                } else if ($errortype == "error") {
                                    $errorcontatus = $language[$_SESSION['language']]['ContactUsControlErrorDoc'];
                                } else if ($errortype == "captcha")  {
                                    $errorcontatus = $language[$_SESSION['language']]['ContactUsControlErrorCaptcha'];
                                }

                                ?>
                                <div class="alert alert-danger">
                                   <?php echo $errorcontatus; ?> <br>
                                    <?php echo $language[$_SESSION['language']]['ContactUsControlErrorRetry']; ?> <br>
                                </div>
                                <?php
                            }
                        }

                        ?>

                        <form class="needs-validation novalidate" method="post" action="sendmailprocess.php" enctype="multipart/form-data">
                            <div class="form-group row" id="nameForm">
                                <label for="firstname" class="col-sm-12" id="nametext"><?php echo $language[$_SESSION['language']]['ContactUsName']; ?>*</label>

                                <input type="text" class="form-control col-sm-6 col-xs-12" id="firstname" name="firstname" aria-describedby="firstnameHelp" required>
                                <input type="text" class="form-control col-sm-6 col-xs-12" id="lastname" name="lastname" aria-describedby="lastnameHelp" required>

                                <small id="firstnameHelp" class="form-text text-muted col-sm-6 col-xs-12 "><?php echo $language[$_SESSION['language']]['ContactUsFirstName']; ?></small>
                                <small id="lastnameHelp" class="form-text text-muted col-sm-6 col-xs-12"><?php echo $language[$_SESSION['language']]['ContactUsLastName']; ?></small>
                            </div>

                            <div class="form-group row">
                                <label for="mail"><?php echo $language[$_SESSION['language']]['ContactUsMail']; ?>*</label>
                                <input type="email" class="form-control" id="mail" name="mail" required>
                            </div>

                            <div class="form-group row">
                                <label for="Categorie"><?php echo $language[$_SESSION['language']]['ContactUsCategorie']; ?>*</label>
                                <select class="form-control" id="Categorie" name="Categorie" required>
                                    <option value=""><?php echo $language[$_SESSION['language']]['ContactUsCategorieBase']; ?></option>
                                    <option value="1"><?php echo $language[$_SESSION['language']]['ContactUsCategorie1']; ?></option>
                                    <option value="2"><?php echo $language[$_SESSION['language']]['ContactUsCategorie2']; ?></option>
                                    <option value="3"><?php echo $language[$_SESSION['language']]['ContactUsCategorie3']; ?></option>
                                    <option value="4"><?php echo $language[$_SESSION['language']]['ContactUsCategorie4']; ?></option>
                                    <option value="other"><?php echo $language[$_SESSION['language']]['ContactUsCategorieOther']; ?></option>
                                </select>
                            </div>

                            <div class="form-group row">
                                <label for="subject"><?php echo $language[$_SESSION['language']]['ContactUsSubject']; ?>*</label>
                                <input type="text" class="form-control" id="subject" name="subject" required>
                            </div>

                            <div class="form-group row">
                                <label for="Message"><?php echo $language[$_SESSION['language']]['ContactUsMessage']; ?>*</label>
                                <textarea class="form-control" id="Message" name="Message" rows="3" required></textarea>
                            </div>

                            <label for="fichier[]"><?php echo $language[$_SESSION['language']]['ContactUsFormFormFile']; ?> (Extensions valides : png, jpg, gif, pdf, rar, zip, txt, doc | max 10 Mo) :</label>
                            <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                            <input type="file" name="fichier[]" id="fichier[]" class="col-sm-12 col-xs-12 margincentered" multiple/><br><br>


                            <div class="g-recaptcha margincentered" data-sitekey="6LfkLlEUAAAAAGAkPO_ThY0fZgb6SesqnDssaeDx"></div>

                            <input type="hidden" name="language" id="language" value="<?php echo htmlspecialchars($_SESSION['language']); ?>"/>

                            <div>
                                <input type="checkbox" id="rgpd" name="rgpd" required>
                                <label for="rgpd" style="display: inline;">En soumettant ce formulaire, j'accepte que les informations saisies dans ce formulaire soient exploitées pour permettre de me recontacter.</label>
                            </div>

                        <div class="col-md-12 text-center">
                                <button type="submit" class="btn" id="submitcontactus"><?php echo $language[$_SESSION['language']]['ContactUsSubmit']; ?></button>
                            </div>
                        </form>
                        <br><br>
                    </div>

                    <div class="col-md-4 col-xs-12" id="contactustext">
                        <div>
                            <p id="subtext"><?php echo $language[$_SESSION['language']]['ContactUsText']; ?></p>
                            <p> <a href="tel:0638405162"><?php echo $language[$_SESSION['language']]['ContactUsTel1']; ?> </a></p>
                            <p> <a href="tel:0673119640"><?php echo $language[$_SESSION['language']]['ContactUsTel2']; ?></p> </a>
                        </div>
                    </div
                </div>

            </div>
            <!--end of container-->
        </section>
    </div>

</div>
</div>

<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>
<?php

include_once ("footer.php");

?>
