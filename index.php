<?php
    // Message Vars for CSS Classes
    $msg = '';
    $msgClass = '';

    // Check for Submit
    if(filter_has_var(INPUT_POST, "submit")) {
        // Get Form Data
        $name = $_POST['your-name'];
        $email = $_POST['your-mail'];
        $message = $_POST['your-message'];

        // Check required Fields
        if (!empty($name) && !empty($email) && !empty($message)) {
            // Passed
            // Check Email
            if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
                // Failed
                $msg = 'Geben Sie eine gültige Email Adresse ein!';
                $msgClass = "message_failed";
            } else {
                // Passed
                // Recipient Email (Webhost contact)
                $toEmail = 'office@florian-drums.com';
                $subject = 'Kontaktanfrage von ' .$name;
                $body = '<h2>Kontaktanfrage</h2>
                        <h4>Name</h4><p>'.$name.'</p>
                        <h4>Email</h4><p>'.$email.'</p>
                        <h4>Nachricht</h4><p>'.$message.'</p>';

                    // Email Headers
                    $headers = "MIME-Version: 1.0" ."\r\n";
                    $headers .= "Content-Type:text/html; charset=UTF-8" . "\r\n";
                    
                    // Additional Headers
                    $headers .= "From: " .$name. "<".$email.">". "\r\n";

                    if(mail($toEmail, $subject, $body, $headers)) {
                        // Email Sent
                        $msg = 'Ihre Nachricht wurde erfolgreich versendet!';
                        $msgClass = "message_sent";
                        // clear the form data after being sent
                        $_POST = array();
                    } else {
                        // Failed
                        $msg = 'Ihre Nachricht konnte nicht versendet werden!';
                        $msgClass = "message_failed";
                    }
            } 
        } else {
            // Failed
            $msg = "Bitte füllen Sie alle Felder aus!";
            $msgClass = "message_failed";
        }
    }
?>



<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Florian Stöger | Drummer | Teacher</title>
</head>
<body>
    
    <header>
        <div id="mobile_wrapper">
            <div id="pic_1">
                <h1 id="title_1"><span>Florian Stöger</span></h1>
                <h2 id="title_2"><span>Musician | Drummer | Teacher</span></h2>    
            </div>
        </div>
        <nav>
            <ul>
                <li>
                    <a class="navlink" href="#home_anchor">Home</a>
                </li>
                <li>
                    <a class="navlink" href="#about_anchor">Über mich</a>
                </li>
                <li>
                    <a class="navlink" href="#pictures_anchor">Bilder</a>
                </li>
                <li>
                    <a class="navlink" href="#unterricht_anchor">Unterricht</a>
                </li>
                <li>
                    <a class="navlink" href="media.html">Media</a>
                </li>
                <li>
                    <a class="navlink" href="#kontakt_anchor">Kontakt</a>
                </li>
                <li><a href="https://www.facebook.com/florian.stoger.146" target="_blank" class="fb_link"><img src="Images/fb.png" alt="facebook" title="facebook"></a></li>
            </ul> 
            <div id="burger">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
        </nav>
    </header>
    <main>
        <div id="top_btn">
            <img src="Images/top_btn.svg" alt="nach oben" title="top">
        </div>
        <section class="anchor" id="home">
            <a id="home_anchor"> </a>
            <div class="section_head_cnt">
                <img src="Images/Sticks4.JPG" alt="Schlagzeugsticks" title="Wilkommen">
                <h1 id="head_1" class="section_headline">Willkommen auf meiner Homepage!</h1>
            </div>
            <div id="flo_pic"></div>
            <article class="anchor" id="about">
                <a id="about_anchor"> </a>
                <div id="article_1">
                    <div class="article_pic_cnt">
                        <img src="Images/me.png" alt="Florian Stöger" title="Florian Stöger">
                    </div>
                    <div id="about_p">
                        <h3>Mag art. Florian Stöger - Drums/Percussion</h3><br>
                        <ul>
                            <li>1992 bis 1999: Schlagzeugunterricht an der Landesmusikschule Gaspoltshofen bei Manfred Krenmair und Bernhard Berger.</li>
                            <li>2000: Schlagzeugunterricht an der Landesmusikschule Gunskirchen bei Manfred Krenmair.</li>
                            <li>2001 bis 2003: Klavierunterricht und Gehörbildung bei Martin Gasselsberger.</li>
                            <li>2003 bis 2004: Lehrgang Schlagzeug der Popularmusik an der Universität für Musik u. darstellende Kunst Wien.</li>
                            <li>Oktober 2004: Studium IGP (Instrumentalgesangspädagogik) mit Hauptfach Schlagzeug und Percussion der Popularmusik und Schwerpunkt Klassisches Schlagwerk an der Universität für Musik u. darstellende Kunst Wien. Unterricht bei Manfred Krenmair, Fritz Ozmec und Oliver Madas.</li>
                            <li>September/Oktober 2010: Auslandsaufenthalt in den USA in Los Angeles – Privatunterricht bei Bernard Galane und Gaststudent am Musicians Institute in Hollywood.</li>
                            <li>Jänner 2012: Abschluss des IGP Studiums mit Auszeichnung – Verleihung des akademischen Grades „Bachelor of Arts“.</li>
                            <li>März 2012: IGP - Masterstudium an der Universität für Musik u. darstellenden Kunst Wien. Unterricht bei Fritz Ozmec und Mario Lackner.</li>
                            <li>Juni 2016: Abschluss des IGP Masterstudiums mit Auszeichnung - Verleihung des akademischen Grades "Magister Artium".</li>
                            <li>Privatunterricht und Masterclasses bei: Thomas Lang, Jojo Mayer, Bernard Galane, Dave Elitch, Gorden Campbell.</li>
                        </ul><br>
                    </div>
                </div>
                <div id="article_2">
                    <div class="article_pic_cnt">
                        <img src="Images/me1.jpg" alt="Florian Stöger" title="Florian Stöger">
                    </div>
                    <div id="musik_p">
                        <h3>Musikalische Tätigkeit</h3><br>
                        <ul>
                            <li>2004 bis 2006: Mitglied der Pop/Rock Coverband „Racers“</li>
                            <li>2005 bis 2006: Schlagzeuger der Backingband von Daniel Küblböck (bekannt aus der deutschen TV – Castingshow „Deutschland sucht den Superstar“) – „Liebe Nation“ Tour durch Deutschland</li>
                            <li>2006: Albumproduktion der Band Siegall.</li>
                            <li>2007 bis Februar 2009: Mitglied der Pop/Rock Coverband „Streetlife“</li>
                            <li>Seit Februar 2009 Mitglied der Show- und Galaband „Starmix“ (120 Auftritte pro Jahr in Deutschland, Österreich, Schweiz, Italien) <a href="http://www.starmix.at" target="_blank">www.starmix.at</a></li>
                            <li>2009 bis 2010: Albumproduktion der Band Troebinger – 2011 Albumrelease in Österreich.</li>
                            <li>2010 Musikvideoproduktion der Singleauskopplung „Wolkenbruch“ – regelmäßige Austrahlung auf GoTV</li>
                            <li>Weitere Künstler/Bands:<br>Julian Heidrich, Katharina Aigner, Agnes Milewski, Marcin Suder, Inspirational Corner, Big Band der Universität für Musik u. darst. Kunst Wien.</li>
                        </ul><br>
                    </div>
                </div>
                <div id="article_3">
                    <h3>Unterrichtstätigkeit</h3><br>
                    <ul>
                        <li>Musikschulverband Waidhofen an der Ybbs</li>
                        <li>VHS Heiligenstadt</li>
                        <li>Musikschule Polyhymnia </li>
                        <li>Privatunterricht</li>
                    </ul>
                </div>
            </article>
        </section>
        <section class="anchor" id="pictures">
            <a id="pictures_anchor"> </a>
            <div class="section_head_cnt">
                <img src="Images/Sticks4.JPG" alt="Schlagzeugsticks" title="Bilder">
                <h1 id="head_2" class="section_headline">Bilder</h1>
            </div>
            <div id="pic_section">
                <div id="grid_cnt">
                    <div><img src="Images/18.jpg" alt="live on stage" title="Starmix-Liveband"></div>
                    <div><img src="Images/5.jpg" alt="live on stage" title="Starmix-Liveband"></div>
                    <div><img src="Images/6.jpg" alt="live on stage" title="Starmix-Liveband"></div>
                    <div><img src="Images/14.jpg" alt="live on stage" title="Starmix-Liveband"></div>
                    <div><img src="Images/16.jpg" alt="live on stage" title="Starmix-Liveband"></div>
                    <div><img src="Images/19.jpg" alt="live on stage" title="Starmix-Liveband"></div>
                    <div><img src="Images/9.jpg" alt="live on stage" title="Starmix-Liveband"></div>
                    <div><img src="Images/17.jpg" alt="live on stage" title="Starmix-Liveband"></div>
                    <div><img src="Images/3.jpg" alt="live on stage" title="Starmix-Liveband"></div>
                    <div><img src="Images/15.jpg" alt="live on stage" title="Starmix-Liveband"></div>
                    <div><img src="Images/333.jpg" alt="live on stage" title="Starmix-Liveband"></div>
                    <div><img src="Images/10.jpg" alt="live on stage" title="Starmix-Liveband"></div> 
                </div>
            </div>
            <div id="modal">
                <div id="modal_cnt">
                    <div id="modal_window">
                        <div class="modal_pic">
                            <div class="info">Bild 1 von 12</div>
                        </div>
                        <div class="modal_pic">
                            <div class="info">Bild 2 von 12</div>
                        </div>
                        <div class="modal_pic">
                            <div class="info">Bild 3 von 12</div>
                        </div>
                        <div class="modal_pic">
                            <div class="info">Bild 4 von 12</div>
                        </div>
                        <div class="modal_pic">
                            <div class="info">Bild 5 von 12</div>
                        </div>
                        <div class="modal_pic">
                            <div class="info">Bild 6 von 12</div>
                        </div>
                        <div class="modal_pic">
                            <div class="info">Bild 7 von 12</div>
                        </div>
                        <div class="modal_pic">
                            <div class="info">Bild 8 von 12</div>
                        </div>
                        <div class="modal_pic">
                            <div class="info">Bild 9 von 12</div>
                        </div>
                        <div class="modal_pic">
                            <div class="info">Bild 10 von 12</div>
                        </div>
                        <div class="modal_pic">
                            <div class="info">Bild 11 von 12</div>
                        </div>
                        <div class="modal_pic">
                            <div class="info">Bild 12 von 12</div>
                        </div>
                    </div>
                    <div id="next_button">
                            <img src="Images/arrow-next.png" alt="nächstes Bild" title="nächstes Bild">
                        </div>
                        <div id="prev_button">
                            <img src="Images/arrow-prev.png" alt="vorheriges Bild" title="vorheriges Bild">
                        </div>
                        <div id="exit_btn">
                            <img src="Images/exit.svg" alt="exit" title="exit">
                        </div>
                        <div id="play_button">
                            <img src="Images/play-button.png" alt="Slideshow" title="Starte Slideshow">
                        </div>
                 </div>
            </div>
        </section>
        <section class="anchor" id="unterricht">
            <div class="mobile_section">
                <a id="unterricht_anchor"> </a>
                <div class="section_head_cnt">
                    <img src="Images/Sticks4.JPG" alt="Schlagzeugsticks" title="Schlagzeugunterricht">
                    <h1 id="head_3" class="section_headline">Schlagzeugunterricht</h1>
                </div>
            </div>
            <div id="drumsetoverhead_pic">
                <div>
                    <p>Individuelles Unterrichtskonzept</p>
                </div>
                <div>
                    <p>Für Kinder, Jugendliche und Erwachsene</p>
                </div>
                <div>
                    <p>Zentral im 1. Bezirk in Wien</p>
                </div>
            </div>
            <div id="article_cnt">
                <article id="konzept">   
                    <div id="slideshow">
                        <span><strong>Mein Unterrichtsraum:</strong></span>
                        <figure>
                            <div>
                                <img src="Images/slide1.JPG" alt="Proberaum" title="Proberaum">
                                <div class="info_slide">Mein Probe- und Unterrichtsraum im 1. Bezirk</div>
                            </div>
                            <div>
                                <img src="Images/slide2.JPG" alt="Schlagzeug" title="DW Schlagzeug">
                                <div class="info_slide">DW - Collector Series Schlagzeug für Pop/Rock</div>
                            </div>
                            <div>
                                <img src="Images/slide3.JPG" alt="Schlagzeug" title="Galane Jazz Schlagzeug">
                                <div class="info_slide">Galane Jazz Schlagzeug</div>
                            </div>
                            <div>
                                <img src="Images/slide4.JPG" alt="Recording Interface" title="Recording">
                                <div class="info_slide">Recording Equipment für Schlagzeugaufnahmen</div>
                            </div>
                            <div>
                                <img src="Images/slide5.JPG" alt="Focusrite 18i20 Interface" title="Focusrite 18i20">
                                <div class="info_slide">2x Focusrite 18i20 Audiointerface</div>
                            </div>
                            <div>
                                <img src="Images/slide1.JPG" alt="Proberaum" title="Proberaum">
                                <div class="info_slide">Mein Probe- und Unterrichtsraum im 1. Bezirk</div>
                            </div>
                        </figure>
                    </div>
                    <div id="konzept_cnt">
                        <h2>Mein Unterrichtskonzept:</h2><br>
                        <p>In meiner bisherigen Laufbahn als Schlagzeuglehrer habe ich vor allem gelernt, dass jeder Schüler anders ist. Das heißt jeder hat unterschiedliche Stärken sowie Schwächen und jeder hat auch sein eigenes Lerntempo. Auch der Zugang zum Instrument oder generell zur Musik ist bei jedem Schüler unterschiedlich!<br><br>
                            Das Wichtigste beim Schlagzeug spielen:<br> Es sollte Spaß machen! Ohne Spaß entsteht keine Motivation! Und Motivation möchte ich fördern! <br>Ich versuche mit jedem Schüler gemeinsam Ziele zu setzen. Durch die Erstellung eines individuellen Unterrichtskonzeptes versuche ich diese Ziele zu erreichen, ohne den Schüler über- oder unterzufordern. <br><br>
                            Ein wichtiger Teil meines Unterrichtes ist das Spielen mit Musik! Das ist auch das was am meisten Spaß macht! Ich versuche sobald wie möglich, erste einfache Songs mit den Schülern zu spielen. <br>Dafür verwende ich sogenannte Playalongs (Musikstücke ohne Schlagzeug) zu denen die Schüler dazu spielen! In meinem Proberaum können auch Audio-Aufnahmen erstellt werden! Zur Selbstreflexion ist dies immer sehr hilfreich! Themen, die immer wieder im Unterricht vorkommen (Anfänger sowie Fortgeschrittene):<br><br>
                        </p>    
                            <ul>
                                <li>Haltung</li>
                                <li>Handtechnik, Fusstechnik</li>
                                <li>Unabhängigkeit/Koordination</li>
                                <li>Grooves & Fills, verschiedene Stilistiken</li>
                                <li>Timing, Feeling, Spielen mit Metronom</li>
                                <li>Playalongs</li>
                                <li>Improvisation </li>
                                <li>Sound</li>
                                <li>richtiges Üben</li>
                            </ul>
                    </div>
                </article>
                <article id="faq">
                    <div id="faq_cnt">
                        <h2>Häufig gestellte Fragen:</h2><br>
                        <h4>Ab welchem Alter macht Schlagzeugunterricht Sinn?</h4><br>
                        <p>Ich unterrichte Kinder ab ca. 7Jahren! Für jüngere Kinder macht meistens musikalische Früherziehung mehr Sinn als Instrumentalunterricht! <br>Am besten einfach mal eine kostenlose Schnupperstunde buchen!<br><br>
                        </p>
                        <h4>Brauche ich ein eigenes Instrument?</h4><br>
                        <p>Ein eigenes Instrument ist auf jeden Fall empfehlenswert! Ganz am Anfang reicht jedoch auch eine Übungstrommel oder Übungspad (nahezu lautlose Trommel zum Üben) und ein Paar Schlagzeugsticks. Da das Schlagzeug sehr laut sein kann, ist das Spielen abseits eines Proberaums zum Beispiel in einer Wohnung fast nicht möglich! 
                        </p><br>
                        <p>Für die Lösung dieses Problems gibt es mehrere Möglichkeiten:</p><br>
                        <ul>
                            <li>ein elektronisches Schlagzeug</li>
                            <li>spezielle dämpfende Felle sowie lautlose Becken (Zildjian L80)</li>
                            <li>günstige Proberäume inklusive Instrument speziell zum Üben gemietet</li>
                        </ul><br>
                        <h4>Sind musikalische Vorkenntnisse notwendig?</h4><br>
                        <p>Nein, es sind keine Vorkennnisse notwendig!</p><br>
                        <h4>Wo findet der Unterricht statt?</h4><br>
                        <p>Der Unterricht findet in meinem top ausgestatteten Proberaum im 1. Bezirk in der Walfischgasse statt! <br><br>
                        <div>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2659.175274631174!2d16.369328615651348!3d48.20323977922879!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476d079c51764fcb%3A0x67db6e5feb2d7d55!2sWalfischgasse+6%2C+1010+Wien!5e0!3m2!1sde!2sat!4v1557615262903!5m2!1sde!2sat" style="border:0" allowfullscreen>
                            </iframe>
                        </div>
                    </div>
                </article>
                <article id="preise">
                    <h2>Preise:</h2><br>
                    <p>Ich halte grundsätzlich 30 Minuten oder 55 Minuten lange Unterrichtseinheiten! <br>Besonders für Kinder, die gerade anfangen, ist eine 30 Minuten lange Einheit am besten.<br><br>
                    </p>
                    <h5>30 Minuten Einheit:</h5><br>
                    <ul>
                        <li>einmalig und flexibel: 30€</li>
                        <li>5er Block bestehend aus 5 Einheiten: 140€ (28€/Einheit)</li>
                        <li>10er Block bestehend aus 10 Einheiten: 260€ (26€/Einheit)</li>
                    </ul><br>
                    <h5>55 Minuten Einheit:</h5><br>
                    <ul>
                        <li>einmalig und flexibel: 40€</li>
                        <li>5er Block bestehend aus 5 Einheiten: 190€ (38€/Einheit)</li>
                        <li>10er Block bestehend aus 10 Einheiten: 360€ (36€/Einheit)</li>
                    </ul><br>
                    <p><strong>Zum Kennenlernen biete ich eine kostenlose Schnupperstunde (30 Minuten) an!</strong></p>
                </article>
            </div>
        </section>
        <section class="anchor" id="kontakt">
            <a id="kontakt_anchor"> </a>
            <div class="section_head_cnt">
                <img src="Images/Sticks4.JPG" alt="Schlagzeugsticks" title="Kontakt">
                <h1 id="head_4" class="section_headline">Kontakt</h1>
            </div>    
            <div id="form_cnt">
                <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                    <?php if($msg != ''): ?>
                        <div class="message_sent <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
                    <?php endif; ?>
                    <div class="input">
                        <label for="name">Name:*</label>
                        <input id="name" name="your-name" type="text" size="40" placeholder="Ihr Name" value="<?php echo isset($_POST['your-name']) ? $name : '';?>">
                    </div>
                    <div class="input">
                        <label for="e-mail">E-Mail:*</label>
                        <input id="e-mail" name="your-mail" type="text" size="40" placeholder="Ihre E-Mail Adresse" value="<?php echo isset($_POST['your-mail']) ? $email : ''; ?>">
                    </div>
                    <div class="input">
                        <label for="message">Nachricht:*</label>
                        <textarea id="message" name="your-message" cols="40" rows="10" placeholder="Ihre Nachricht"><?php echo isset($_POST['your-message']) ? $message : ''; ?></textarea>
                    </div>
                    <div>
                        <input id="submit" name="submit" value="Formular senden" type="submit">
                    </div>
                </form>
            </div>
        </section>
    </main>
    <footer>
        <div id="footer_cnt">&copy; Copyright 2019 | Florian Stöger | All Rights Reserved | <a href="Data.html">DATENSCHUTZ</a> | <a href="impressum.html">IMPRESSUM</a></div>
        <a href="https://www.facebook.com/florian.stoger.146" target="_blank" class="fb_link"><img src="Images/fb.png" alt="facebook" title="facebook"></a>
    </footer>
<script src="main.js"></script>
</body>
</html>