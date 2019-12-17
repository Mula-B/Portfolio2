

<!DOCTYPE html>
<html lang="nl">
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel=stylesheet href="pf.css">
<title>Mijn Portfolio Website!</title>

</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
<div id="fade">
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="homepf.php">Home</a></li>
        <li><a href="overmezelf.php">Over Mij</a></li>
        <li><a href="programmeren.php">Portfolio</a></li>
        <li class="active"><a href="contact.php">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron">
  <div class="container text-center">
    <h1>Contact</h1>
	<br>
	<section id="contact" class="content-section text-center">
        <div class="contact-section">
            <div class="container">

              <p>Neem gerust contact met mij op om vragen te stellen of om opmerkingen te melden</p>
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  <form class="form-horizontal" method="post" action="mailer.php">
                    <div class="form-group">
                      <label>Naam</label>
                      <input name="name" type="text" class="form-control" id="exampleInputName2" placeholder="Naam">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail2">Email</label>
                      <input name="email" type="email" class="form-control" id="exampleInputEmail2" placeholder="voorbeeld@voorbeeld.nl">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputsubject2">Onderwerp</label>
                      <input name="subject" type="text" class="form-control" placeholder="Onderwerp">
                    </div>
                    <div class="form-group ">
                      <label for="exampleInputText">Uw bericht</label>
                     <textarea  name="comment" class="form-control" placeholder="Uw tekst"></textarea>
                    </div>
                    <button type="submit" class="btn btn-default">Verstuur bericht</button>
		                  </form>


                  <hr>
                    <h3>Social Media</h3>
                  <ul class="list-inline banner-social-buttons">
                    <li><a href="https://www.instagram.com/tristan.0224/" class="btn btn-default btn-lg"><i class="fa fa-instagram"> <span class="network-name">Instagram</span></i></a></li>
                    <li><a href="https://www.facebook.com/TristanHallensleben" class="btn btn-default btn-lg"><i class="fa fa-facebook"> <span class="network-name">Facebook</span></i></a></li>
                   </ul>
                </div>
              </div>
            </div>
        </div>
      </section>
  </div>
</div>
</div>

</body>
</html>
