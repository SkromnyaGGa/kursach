
<html lang="en">
<head>
    <title>Escape plan</title>
    <meta charset="utf-8">
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<?php require_once("navigation.php")?>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox" id="">
        <div class="item active">
            <img src="images/jodie-walton-thm-jF3JR3w-unsplash.jpg" alt="New York">
            <div class="carousel-caption">
                <h3>New York</h3>
                <p>The atmosphere in New York is lorem ipsum.</p>
            </div>
        </div>

        <div class="item">
            <img src="images/mark-pan4ratte-3u9mAxdRAfA-unsplash.jpg" alt="Chicago">
            <div class="carousel-caption">
                <h3>Chicago</h3>
                <p>Thank you, Chicago - A night we won't forget.</p>
            </div>
        </div>

        <div class="item">
            <img src="images/yvette-de-wit-NYrVisodQ2M-unsplash.jpg" alt="Los Angeles">
            <div class="carousel-caption">
                <h3>LA</h3>
                <p>Even though the traffic was a mess, we had the best time.</p>
            </div>
        </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div class="container text-center" id="band">
    <h3>Escape Plan</h3>
    <p><em>We love music!</em></p>
    <p>We have created a fictional band website. Lorem ipsum..</p>
    <br>
</div>

<div class="row">
    <div class="col-sm-4">
        <p class="text-center"><strong>Name</strong></p><br>
        <a href="#demo" data-toggle="collapse">
            <img src="bandmember.jpg" class="img-circle person" alt="Random Name">
        </a>
        <div id="demo" class="collapse">
            <p>Guitarist and Lead Vocalist</p>
            <p>Loves long walks on the beach</p>
            <p>Member since 1988</p>
        </div>
    </div>
    <div class="col-sm-4">
        <p class="text-center"><strong>Name</strong></p><br>
        <a href="#demo2" data-toggle="collapse">
            <img src="bandmember.jpg" class="img-circle person" alt="Random Name">
        </a>
        <div id="demo2" class="collapse">
            <p>Drummer</p>
            <p>Loves drummin'</p>
            <p>Member since 1988</p>
        </div>
    </div>
    <div class="col-sm-4">
        <p class="text-center"><strong>Name</strong></p><br>
        <a href="#demo3" data-toggle="collapse">
            <img src="bandmember.jpg" class="img-circle person" alt="Random Name">
        </a>
        <div id="demo3" class="collapse">
            <p>Bass player</p>
            <p>Loves math</p>
            <p>Member since 2005</p>
        </div>
    </div>
</div>



<div class="bg-1" id="tour">
    <div class="container">
        <h3 class="text-center">TOUR DATES</h3>
        <p class="text-center">Lorem ipsum we'll play you some music.<br> Remember to book your tickets!</p>

        <ul class="list-group">
            <li class="list-group-item">September <span class="label label-danger">Sold Out!</span></li>
            <li class="list-group-item">October <span class="label label-danger">Sold Out!</span></li>
            <li class="list-group-item">November <span class="badge">3</span></li>
        </ul>
    </div>
    <div class="row text-center">
        <div class="col-sm-4">
            <div class="thumbnail">
                <img src="paris.jpg" alt="Paris">
                <p><strong>Paris</strong></p>
                <p>Fri. 27 November 2015</p>
                <button class="btn" data-toggle="modal" data-target="#myModal">Buy Tickets</button>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="thumbnail">
                <img src="newyork.jpg" alt="New York">
                <p><strong>New York</strong></p>
                <p>Sat. 28 November 2015</p>
                <button class="btn" data-toggle="modal" data-target="#myModal">Buy Tickets</button>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="thumbnail">
                <img src="sanfran.jpg" alt="San Francisco">
                <p><strong>San Francisco</strong></p>
                <p>Sun. 29 November 2015</p>
                <button class="btn" data-toggle="modal" data-target="#myModal">Buy Tickets</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h4><span class="glyphicon glyphicon-lock"></span> Tickets</h4>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="form-group">
                        <label for="psw"><span class="glyphicon glyphicon-shopping-cart"></span> Tickets, $23 per person</label>
                        <input type="number" class="form-control" id="psw" placeholder="How many?">
                    </div>
                    <div class="form-group">
                        <label for="username"><span class="glyphicon glyphicon-user"></span> Send To</label>
                        <input type="text" class="form-control" id="username" placeholder="Enter email">
                    </div>
                    <button type="submit" class="btn btn-block">Pay
                        <span class="glyphicon glyphicon-ok"></span>
                    </button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
                    <span class="glyphicon glyphicon-remove"></span> Cancel
                </button>
                <p>Need <a href="#">help?</a></p>
            </div>
        </div>
    </div>
</div>

<div class="container" id="contact">
    <h3 class="text-center">Contact</h3>
    <p class="text-center"><em>We love our fans!</em></p>
    <div class="row test">
        <div class="col-md-4">
            <p>Fan? Drop a note.</p>
            <p><span class="glyphicon glyphicon-map-marker"></span>Chicago, US</p>
            <p><span class="glyphicon glyphicon-phone"></span>Phone: +00 1515151515</p>
            <p><span class="glyphicon glyphicon-envelope"></span>Email: mail@mail.com</p>
        </div>
        <div class="col-md-8">
            <div class="row">
                <div class="col-sm-6 form-group">
                    <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
                </div>
                <div class="col-sm-6 form-group">
                    <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                </div>
            </div>
            <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
            <div class="row">
                <div class="col-md-12 form-group">
                    <button class="btn pull-right" type="submit">Send</button>
                </div>
            </div>
        </div>
    </div>
</div>

<h3 class="text-center">From The Blog</h3>
<ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#menu">Mike</a></li>
    <li><a data-toggle="tab" href="#menu1">Chandler</a></li>
    <li><a data-toggle="tab" href="#menu2">Peter</a></li>
</ul>

<div class="tab-content">
    <div id="menu" class="tab-pane fade in active">
        <h2>Mike Ross, Manager</h2>
        <p>Man, we've been on the road for some time now. Looking forward to lorem ipsum.</p>
    </div>
    <div id="menu1" class="tab-pane fade">
        <h2>Chandler Bing, Guitarist</h2>
        <p>Always a pleasure people! Hope you enjoyed it as much as I did. Could I BE.. any more pleased?</p>
    </div>
    <div id="menu2" class="tab-pane fade">
        <h2>Peter Griffin, Bass player</h2>
        <p>I mean, sometimes I enjoy the show, but other times I enjoy other things.</p>
    </div>
</div>

<iframe src="https://storage.googleapis.com/maps-solutions-y9l0fdavlh/locator-plus/d6yr/locator-plus.html"
        width="100%" height="400px"
        style="border:0;"
        loading="lazy">
</iframe>

<?php require_once("footer.php")?>

<?php require_once("links.php")?>

</body>
</html>