<?php

$siteName = strpos($_SERVER['SERVER_NAME'], 'charlieabeling') === 0
	? 'Charlie Abeling'
	: 'Chuck Fairy';

?>

<!DOCTYPE html>

<html>

    <head>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">

        <title>Chuck Fairy : Charlie Abeling Software Engineer</title>

        <link rel="stylesheet" href="plugin/bootstrap/dist/css/bootstrap.min.css">

        <link rel="stylesheet" href="plugin/font-awesome/css/font-awesome.min.css">

        <link rel="stylesheet" href="css/main.css?site=20170">

    </head>


    <body>

        <div id="main">

            <div id="opening"></div>

            <div id="fairy-talk">

                <div class="hidden-md hidden-lg topbar">

                    <div class="pull-right hamburger relativer" style="z-index: 10">

                        <div class="btn-group" style="z-index: 10">

                            <a data-toggle="dropdown" class="btn btn-primary"><i class="fa fa-bars"></i></a>

                            <a href="http://github.com/chuckfairy" class="btn btn-primary" target="_blank"><i class="fa fa-github"></i></a>
                            <a href="https://www.linkedin.com/in/charlie-abeling-1627a095" class="btn btn-primary" target="_blank"><i class="fa fa-linkedin"></i></a>
                            <a href="mailto:charlieabeling@gmail.com" class="btn btn-primary"><i class="fa fa-envelope-o"></i></a>

                            <ul class="dropdown-menu nav-dropdown nav-mobile">

                                <a href="#tab-info" data-toggle="tab"><i class="fa fa-info-circle"></i> Info</a>
                                <a href="#tab-code" data-toggle="tab"><i class="fa fa-code"></i> Code</a>
                                <a href="#tab-music" data-toggle="tab"><i class="fa fa-music"></i> Music</a>
                                <a download="Chuckfairy_Resume_2017.pdf" href="assets/Resume_2017.pdf"><i class="fa fa-file-text-o"></i> Resume</a>

                            </ul>

                        </div>

                    </div>

					<h1><?php echo $siteName; ?></h1>

                </div>

                <div class="row">

                    <div class="col-md-9">

                        <div id="info-space" class="tab-content">

                            <div id="tab-info" class="cf-container tab-pane active">

                                <div class="text-center">

                                    <img class="my-picture" src="https://avatars2.githubusercontent.com/u/7469548?v=3&amp;s=460">

                                </div>

                                <br>

                                <p>I am a 23 year old artist, designer, developer, composer, and overall pretty cool guy. The life I live is one of dedication and creation. I specialize in programming web development in the regions of backend as well as frontend and love to create web applications and sites. I am a constantly evolving man in a perpetually evolving world. Please click the links above or use the sidebar to view my work, thoughts, and code. Have a nice day!</p>

                                <h2>My Mission</h2>

                                <p>To spread peace, love, unity, and respect throughout the world through myself and an employment that caters to the user experience and the greater good. To create works of art that resonate positivity to the world. And to leave the things better then when I found it.</p>

                                <h2>You need more don't you?</h2>

                                <p>Click some of the links to the right or below.</p>

                                <div class="text-center">

                                    <div class="btn-group">

                                        <a href="http://github.com/chuckfairy" class="btn btn-primary"><i class="fa fa-github"></i> Github</a>
                                        <a href="https://www.linkedin.com/in/charlie-abeling-1627a095" class="btn btn-primary"><i class="fa fa-linkedin"></i> LinkedIn</a>
                                        <a href="mailto:charlieabeling@gmail.com" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Email</a>

                                    </div>

                                </div>

                            </div>

                            <div id="tab-code" class="cf-container tab-pane">

                                <!-- ACDelco Garage -->
                                <div class="portfolioBlock">

                                    <div>
                                        <h2>ACDelco Game Garage Pinball</h2>
                                        <p>Game sweepstakes</p>
                                    </div>

                                    <div class="row">

                                        <div class="col-md-5">

                                            <img class="img-responsive" src="assets/portfolio/pinball.png">

                                        </div>

                                        <div class="col-md-7">

                                            <p>Through my employer <a href="http://synmp.com">Synergy Marketing Partners</a>. I created a WebGL Pinball game for their ACDelco Game Garage Sweepstakes.</p>

                                            <a href="http://acdelcogarage.com" class="btn btn-primary" target="_blank">
                                                <i class="fa fa-globe"></i> View site
                                            </a>

                                        </div>

                                    </div>

                                </div>

                                <!-- ACDelco Garage -->
                                <div class="portfolioBlock">

                                    <div>
                                        <h2>ACDelco Game Garage Bowling</h2>
                                        <p>Game sweepstakes</p>
                                    </div>

                                    <div class="row">

                                        <div class="col-md-5">

                                            <img class="img-responsive" src="assets/portfolio/bowling.jpg">

                                        </div>

                                        <div class="col-md-7">

                                            <p>Through my employer <a href="http://synmp.com">Synergy Marketing Partners</a>. I created a WebGL Bowling game for their ACDelco Game Garage Sweepstakes.</p>

                                            <a href="http://acdelcogarage.com" class="btn btn-primary" target="_blank">
                                                <i class="fa fa-globe"></i> View site
                                            </a>

                                        </div>

                                    </div>

                                </div>

                                <!-- Orzabal -->

                                <div class="portfolioBlock">

                                    <span>
                                        <h2>Orzabal</h2>
                                        <p>Meta Audio Synth App</p>
                                    </span>

                                    <div class="row">

                                        <div class="col-md-5">

                                            <img class="img-responsive" src="assets/portfolio/Orzabal.png">

                                        </div>

                                        <div class="col-md-7">

                                            <p>Orzabal is a musical synth I created in C++. This project was meant to be a patchbay like instrument to which I could load numerous other instruments as a single entity synth. Currently builds for linux and works fairly well on the Raspberry Pi. This project uses the <a href="http://jackaudio.org" target="_blank">JACK Audio Connection Toolkit</a> as an audio server and will load <a href="http://lv2plug.in/" target="_blank">LV2</a> audio plugins and instruments. GUI uses <a href="http://qt.io" target="_blank">Qt.</a></p>

                                            <a href="http://github.com/chuckfairy/Orzabal" class="btn btn-primary" target="_blank">
                                                <i class="fa fa-github"></i> Github
                                            </a>

                                        </div>

                                    </div>

                                </div>


                                <!-- node-webcam -->

                                <div class="portfolioBlock">

                                    <span>
                                        <h2>node-webcam</h2>
                                        <p>Nodejs Cross Platform Webcam Usage</p>
                                    </span>

                                    <div class="row">

                                        <div class="col-md-5">

                                            <img class="img-responsive" src="assets/portfolio/node-webcam-logo.png">

                                        </div>

                                        <div class="col-md-7">

                                            <p>node-webcam is a Nodejs library for using your webcam to capture photos. It can use various program drivers and also comes with a C++ program for windows.</p>
                                            <a href="http://github.com/chuckfairy/node-webcam" class="btn btn-primary" target="_blank">
                                                <i class="fa fa-github"></i> Github
                                            </a>
                                            <a href="https://www.npmjs.com/package/node-webcam" class="btn btn-primary" target="_blank">
                                                <i class="fa fa-cloud"></i> NPM
                                            </a>

                                        </div>

                                    </div>

                                </div>

                                <!-- Nigel Mack -->
                                <div class="portfolioBlock">

                                    <div>
                                        <h2>Nigel Mack</h2>
                                        <p>Chicago Blues Triple Threat</p>
                                    </div>

                                    <div class="row">

                                        <div class="col-md-5">

                                            <img class="img-responsive" src="assets/portfolio/nigelmack.jpg">

                                        </div>

                                        <div class="col-md-7">

                                            <p>I met through Nigel a few years ago and was commissioned by him to revamp his wordpress site. I am happy to see how this site has developed and it is a pleasure working with him.</p>

                                            <a href="http://nigelmack.com" class="btn btn-primary" target="_blank">
                                                <i class="fa fa-globe"></i>  View site
                                            </a>

                                        </div>

                                    </div>

                                </div>

                                <!-- Vanilla QR -->
                                <div class="portfolioBlock">

                                    <span>
                                        <h2>VanillaQR.js</h2>
                                        <p>The galaxies most resilient JavaScript QR code generator</p>
                                    </span>

                                    <div class="row">

                                        <div class="col-md-5">

                                            <img class="img-responsive" src="assets/portfolio/VanillaQR.png">

                                        </div>

                                        <div class="col-md-7">

                                            <p>VanillaQR.js is a small javascript file for creating qr codes on the fly using the HTML7 Canvas element. Only 30kb and 10kb compressed it is meant to be an extra lightweight way to create and output QR codes. VanillaQR.js can output a variety of image formats including png, jpg, and bmp.</p>

                                            <a href="http://chuckfairy.com/VanillaQR.js/creator" class="btn btn-primary" target="_blank">
                                                <i class="fa fa-qrcode"></i> QR Creator
                                            </a>
                                            <a href="http://github.com/chuckfairy/VanillaQR.js" class="btn btn-primary" target="_blank">
                                                <i class="fa fa-github"></i> Github
                                            </a>

                                        </div>

                                    </div>

                                </div>

                                <!-- Game Three -->
                                <div class="portfolioBlock">

                                    <span>
                                        <h2>Three #</h2>
                                        <p>A Web-GL 3D game and physics engine</p>
                                    </span>

                                    <div class="row">

                                        <div class="col-md-5">

                                            <img class="img-responsive" src="assets/portfolio/threes.jpg">

                                        </div>

                                        <div class="col-md-7">

                                            <p>Three # is a current project I work on invovling Web-GL, and physics to create a full featured JavaScript game framework. Based on top of <a href="http://threejs.org">Three.js</a> and <a href="http://cannonjs.org">Cannon.js</a>, Game Three offers numerous loading of 3D file formats and makes animating those 3D objects very easy.</p>

                                            <a href="http://chuckfairy.com/threes/examples/" class="btn btn-primary" target="_blank">
                                                <i class="fa fa-globe"></i> View demos
                                            </a>
                                            <a href="http://chuckfairy.com/threes/examples/physics/collisions.html" class="btn btn-primary" target="_blank">
                                                <i class="fa fa-globe"></i> Physics Demo
                                            </a>
                                            <a href="http://github.com/chuckfairy/threesharpjs" class="btn btn-primary" target="_blank">
                                                <i class="fa fa-github"></i> Github
                                            </a>

                                        </div>

                                    </div>

                                </div>

                                <!-- Cryptallica -->
                                <div class="portfolioBlock">

                                    <div>
                                        <h2>Cryptallica</h2>
                                        <p>Heavy Metal Cryptocurrency</p>
                                    </div>

                                    <div class="row">

                                        <div class="col-md-5">

                                            <img class="img-responsive" src="assets/portfolio/cryptallica_logo.png">

                                        </div>

                                        <div class="col-md-7">

                                            <p>Cryptallica is a project I started to get invovled with the emerging world of Cryptocurrencies such as Bitcoin, Litecoin, and etc... Currently Cryptallica has two software packages. The Cryptallica Wallet is a multi-purpose PHP application based around cryptocurrency use. Using the Bitcoin JSON-RPC API spec and Modularly written, this wallet allows for the use of sending, recieving, and scanning and importing cryptocurrency QR codes with numerously tested coins all in your browser. The Cryptallica Donator is an easily embeddable JavaScript widget that will show your cryptocurrency address for people to donate or send coins to you.</p>


                                            <a href="http://github.com/cryptallica" class="btn btn-primary" target="_blank">
                                               <i class="fa fa-github"></i> Github
                                            </a>
                                            <a href="https://imgur.com/a/HguCy" class="btn btn-primary" target="_blank">
                                               <i class="fa fa-picture-o"></i> Pictures
                                            </a>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div id="tab-music" class="cf-container tab-pane">

                                <h2>Music Section</h2>

                                <p>Coming soon</p>

                            </div>

                        </div>

                    </div>

                    <div class="col-md-3 sidebar hidden-sm hidden-xs" style="padding-left: 10px">

                        <div class="text-center">

							<h1><?php echo $siteName; ?></h1>

                            <p class="courier" style="font-size: 1.2em; padding-bottom: 10px;">Peace, Love, Technology</p>

                            <div class="btn-group">

                                <a href="http://github.com/chuckfairy" class="btn btn-primary" target="_blank"><i class="fa fa-github"></i></a>
                                <a href="https://www.linkedin.com/in/charlie-abeling-1627a095" class="btn btn-primary" target="_blank"><i class="fa fa-linkedin"></i></a>
                                <a href="mailto:charlieabeling@gmail.com" class="btn btn-primary"><i class="fa fa-envelope-o"></i></a>

                            </div>

                        </div>

                        <div id="page-links">

                            <ul class="nav nav-tabs" role="tablist">

                                <li role="presentation" class="active">
                                    <a href="#tab-info" data-toggle="tab"><i class="fa fa-info-circle"></i> Info</a>
                                </li>

                                <li role="presentation">
                                    <a href="#tab-code" data-toggle="tab"><i class="fa fa-code"></i> Code</a>
                                </li>

                                <li role="presentation">
                                    <a href="#tab-music" data-toggle="tab"><i class="fa fa-music"></i> Music</a>
                                </li>

                                <li role="presentation">

                                    <a href="mailto:charlieabeling@gmail.com"><i class="fa fa-envelope-o"></i> Contact</a>

                                    <div class="form-group relativer">

                                        <a data-toggle="dropdown"><i class="fa fa-file-text-o"></i> Resume</a>

                                        <ul class="dropdown-menu">

                                            <li><a download="Chuckfairy_Resume_2017.pdf" href="assets/Resume_2017.pdf">PDF</a></li>
                                            <li><a download="Chuckfairy_Resume_2017.docx" href="assets/Resume_2017.docx">DOC</a></li>
                                            <li><a download="Chuckfairy_Resume_2017.odt" href="assets/Resume_2017.odt">ODT</a></li>

                                        </ul>

                                    </div>

                                </li>

                            </ul>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!--JS LIBS-->

        <script src="plugin/jquery/dist/jquery.min.js"></script>

        <script src="plugin/bootstrap/dist/js/bootstrap.min.js"></script>

        <script src="js/Main.js"></script>

    </body>

</html>