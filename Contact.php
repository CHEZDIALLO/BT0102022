<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="https://fonts.googleapis.com/css?family=Oswald:700|Patua+One|Roboto+Condensed:700" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<section id="contact" class="content-section text-center">
<?php
    include("header.php");
    ?>
        <div class="contact-section">
            <div class="container">
              <h2>Contactez-Nous !</h2> <br>
              <p>N'hésitéz pas à nous suivre nos différentes pages de réseaux sociaux.</p>
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  <form class="form-horizontal">
                    <div class="form-group">
                      <label for="exampleInputName2">Prénom et Nom</label>
                      <input type="text" class="form-control" id="exampleInputName2" placeholder="Souleymane Diallo">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail2">Email</label>
                      <input type="email" class="form-control" id="exampleInputEmail2" placeholder="example@gmail.com">
                    </div>
                    <div class="form-group ">
                      <label for="exampleInputText">Votre Message</label>
                     <textarea  class="form-control" placeholder="Bonjour"></textarea> 
                    </div>
                    <button type="submit" class="btn btn-default">Envoyer </button>
                  </form>

                  <hr>
                    <h3>Nos Réseaux sociaux</h3>
                  <ul class="list-inline banner-social-buttons">
                    <li><a href="#" class="btn btn-default btn-lg"><i class="fa fa-twitter"> <span class="network-name">Twitter</span></i></a></li>
                    <li><a href="www.facebook.com/cdialloboutique" class="btn btn-default btn-lg"><i class="fa fa-facebook"> <span class="network-name">Facebook</span></i></a></li>
                    <li><a href="#" class="btn btn-default btn-lg"><i class="fa fa-youtube-play"> <span class="network-name">Youtube</span></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
        </div>
      </section>
      
<?php
    include("footer.php");
    ?>