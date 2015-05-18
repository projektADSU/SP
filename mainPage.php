<?php 
session_start(); 
?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Arimo:700' rel='stylesheet' type='text/css'>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="script.js"></script>
        <meta charset="utf-8"/>
    </head>
    <body>
        <div class="tabs">
            <ul class="tab-links">
                <?php 
                    if(isset($_SESSION["username"])):?>
                        <li><a href="#log_out">ODJAVA</a></li>
                        <li><a href="#user_profile">MOJ PROFIL</a></li>
                <?php
                    else:?>
                        <li><a href="#login">PRIJAVA</a></li>
                        <li><a href="#register">REGISTRACIJA</a></li>
                <?php
                    endif;
                ?>
                <li class="active"><a href="#main">GLAVNA STRAN</a></li>
            </ul>
            <div id="banner"></div>
            <div class="tab-content">
                <div id="main" class="tab active">
                    <ul class="search-opt">
                        <li><a href="#namesearch">Iskanje po naslovu filma</a>
                            <div class="opt" id="namesearch">
                                <input type="text" id="movieSearchBox" placeholder="Vpišite film, ki Vam je všeč" class="inputField"/>
                            </div> 
                        </li>
                        <li><a href="#browsecateg">Brskaj po žanrih</a>
                            <div class="opt" id="browsecateg">
                                <input type="checkbox" class="categories">Grozljivka <br>
                                <input type="checkbox" class="categories">Akcija <br>
                                <input type="checkbox" class="categories">Romantični film
                            </div>
                        </li>
                        <li><a href="#advancedsearch">Napredno iskanje</a>
                            <div class="opt" id="advancedsearch">
                                advancedsearch
                            </div>
                        </li>
                    </ul>
                    
                </div>
                <div id="login" class="tab">
                    <div id="userLogin">
				    <h1>Prijava</h1>
					    <div>Uporabniško ime :</div>
					    <input id="userName" name="username" type="text" class="inputField">
					    <div>Geslo :</div>
					    <input id="userPass" name="password" type="password" class="inputField">
					    <button id="loginButton" name="submit" type="button" value="PRIJAVA">PRIJAVA</button>
				    </div>
                </div>
                <div id="register" class="tab">
                    <h1>Registracija</h1>
                        <table id="tabelaR">
                            <tr><td>Uporabniško ime:</td><td><input type="text" name="username" id="username1" class="inputField"/></td></tr>
                            <tr><td>Geslo:</td><td><input type="password" name="password" id="password" class="inputField"/></td></tr>
                            <tr><td>Email:</td><td><input type="text" name="email" id="email" class="inputField"/></td></tr>
                            <tr><td>Ime:</td><td><input type="text" name="name" size="15" id="name" class="inputField"/></td></tr>
                            <tr><td>Priimek:</td><td><input type="text" name="lastname" id="lastname" size="15" class="inputField"/></td></tr>
                            <tr><td>Spol:</td><td><select name="gender" id="gender">
                            <option value="male">Moški</option>
                            <option value="female">Ženski</option></select></td></tr>
                        </table>
                    <button type="button" name="submit" value="REGISTRACIJA" id="registriraj">REGISTRACIJA</button>
                </div>
                <div id="user_profile" class="tab">
                    <div id="container">
                        <div id="content"><a>Lorem ipsum</a></div>
                        <div id="navigation">
                            <ul id="nav">
                                <li><a href="#user_profile">Moj profil</a></li>
                                <li><a href="#favs">Priljubljeni filmi</a></li>
                                <li><a href="#watched">Ogledani filmi</a></li>
                                <li><a href="#prefs">Nastavitve računa</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div id="film_profile" class="tab">
                    <div id="film_details">
                        <input type="button" value="Nazaj" id="back_to_list_button"/>
                        <input type="button" value="Gledano" id="watched_button"/>
                        <table id="ocena_filma">
                            <tr id="ocena_f">
                            <td id="1star"><img src="star.png" class="starIMG"></td>
                            <td id="2star"><img src="star.png" class="starIMG"></td>
                            <td id="3star"><img src="star.png" class="starIMG"></td>
                            <td id="4star"><img src="star.png" class="starIMG"></td>
                            <td id="5star"><img src="star.png" class="starIMG"></td>
                            </tr>
                        </table>
                        <input type="hidden" id="id_filma"/>
                        <h2 id="slo_naslov"></h2>
                        <h3 id="ang_naslov"></h3>
                        <div id="genre"></div>
                        <div id="duration"></div>
                        <div id="year"></div>
                        <div id="country"></div>
                        <div id="ocena"></div>
                        <br>
                        <div id="summary"></div>
                    </div>
                </div>
                <!--- za prikaz seznama ---->
                <div id="film_list" class="tab">
                    <input type="button" value="Nazaj" id="back_to_start_button"/>
                    <div id="vpisan_film"></div>
                    <table id="film_list_table"></table>
                </div>
            </div>
            <!----
			<div id="footer"></div>
            ----> 
        </div>
    </body>
</html>
