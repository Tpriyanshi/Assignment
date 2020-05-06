<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="formstyle.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="http://code.jquery.com/jquery-3.5.0.min.js"></script>
        <script>
            $(document).ready(function () {

            });
        </script>
    </head>
    <body>
        <div class="wrapper">
            <div class="Header">
                <table>
                    <tr>
                        <td><img src="imge/logo_design_1496.png" height="150px" width="100px" alt="logo"></td>
                        <td><h1 style="color: #594f8d; font-size: 40px; text-align: center;">brighterKid</h1></td>
                    </tr>
                </table>
            </div>
            <div class="Navbar">
                <a href="https://www.facebook.com"><i class="fa fa-facebook-official"  aria-hidden="true" style="font-size: 40px; color: blue; align-items: center;"></i></a>
                <a href="https://web.whatsapp.com/"><i class="fa fa-whatsapp" aria-hidden="true" style="font-size: 40px; color: green;"></i></a>
                <a href="https://twitter.com/"><i class="fa fa-twitter" aria-hidden="true" style="font-size: 40px; color: #589ee8;"></i></a>
                <a  href="https://instagram.com/"><i class="fa fa-instagram" aria-hidden="true" style="font-size: 40px; color: #ef51bc;"></i></a>
                <a href=""><i class="fa fa-google-plus-official" aria-hidden="true" style="font-size: 40px; color: red;"></i></a>
            </div>
            <div class="container">
                <div class="left-section">
                    <ul>
                        <li><a href="#" onclick="openWeb(event, 'Home')" id="defaultOpen"><i class="fa fa-home" aria-hidden="true" ></i>Home</a></li>
                        <li><a href="#" onclick="openWeb(event, 'About')"><i class="fa fa-address-card" aria-hidden="true" ></i>About</a></li>
                        <li><a href="#" onclick="openWeb(event, 'Courses')"><i class="fa fa-graduation-cap" aria-hidden="true" ></i>Courses</a></li>
                        <li><a href="#" onclick="openWeb(event, 'Contact')"><i class="fa fa-address-book" aria-hidden="true" ></i>Contact</a></li>
                        <li><a href="#" onclick="openWeb(event, 'Map')"><i class="fa fa-map-marker" aria-hidden="true" ></i>Map</a></li>
                    </ul>
                </div>

                <div id="Home" class="tabcontent" style="background-image: url(imge/kids.jpg); background-repeat: no-repeat; background-size: auto; background-size: cover;">

                </div>

                <div id="About" class="tabcontent">
                    <h1 style="font: cursive; color:#594f8d;  font-size: 40px;">Why brighterKid?</h1>
                    <br>
                    <br>
                    <p style="font-size: 20px;">Sangam University brings you a host of special features that translate into greater opportunities. This makes the environment more conducive to learning, helping the students absorb the concepts and form insights better.</p><br><br>
                    <ol  style="font-size: 20px;">
                        <li>Strong interaction with industry creating a conglomeration of academic knowledge and practical exposure throughout the learning process.</li>
                        <li>Constant effort towards international collaborations to conduct exchange programs and workshops for the students, bringing on a global touch.</li>
                        <li>A congenial academic environment that promotes the learning and growing process. Scholarships for needy and meritorious students.</li>
                        <li>Alumni Association for past students to share platform and experiences with present students.</li>
                    </ol>
                </div>

                <div id="Courses" class="tabcontent" style="overflow: scroll; overflow-x: hidden;">
                    <h1 style="color: #594f8d;  font-size: 40px; font: cursive;">Our Courses</h1>
                    <a href="#tech"><img src="imge/tech.jpg" alt="technology" height="250px" width="250px"></a>
                    <a href="#music"><img src="imge/music.jpg" alt="music" height="250px" width="250px"></a>
                    <a href="#art"><img src="imge/art.jpg" alt="art" height="250px" width="250px"></a>
                    <br>
                    <br>
                    <p id="tech">
                    <h1 style="color: #594f8d;  font-size: 25px;"><i class="fa fa-desktop" aria-hidden="true"></i>Technology</h1><br>
                    <ul><li><a href="#">Kids Coding -Introduction to HTML, CSS and JavaScript</a></li>
                        <li><a href="#">Hello! Programming with Python for Kids and Beginners</a></li>
                        <li><a href="#">Kids Coding – Beginners CSS</a></li>
                        <li><a href="#">Kids Coding – Beginner HTML</a></li>
                        <li><a href="#">Learn Scratch 2.0 for Kids</a></li>
                        <li><a href="#">Blender Animation for Kids</a></li>
                        <li><a href="#">Game Development and Coding for Children</a></li>
                        <li><a href="#">Programming for Kids</a></li>
                        <li><a href="#">Computer Science For Kids</a></li>
                        <li><a href="#">Kids Coding with Scratch</a></li>
                        <li><a href="#">Teach Your Kids to Code: Learn Python Programming at Any Age</a></li>
                        <li><a href="#">Learn to Create Professional Websites from a Kid</a></li>
                        <li><a href="#">Publish Your TicTacToe iPhone Game without coding. For Kids</a></li>
                    </ul></p><br>
                    <p id="music"><h1 style="color: #594f8d;  font-size: 25px;"><i class="fa fa-music" aria-hidden="true"></i>Music</h1><br>
                    <ul style="list-style-type: circle;">
                        <li><a href="#">Easy Piano for Kids – Complete Beginner Piano Course</a></li>
                        <li><a href="#">Piano for Kids: Developing Your Child's Creative Abilities</a></li>
                        <li><a href="#">How to Play Djembe Drum & Rhythm. Level</a> </li>
                        <li><a href="#">Piano With Willie: Jazz Kids</a></li>
                        <li><a href="#">Kid's Beginner Ukulele Course</a></li>
                    </ul></p><br>
                    <p id="art"><h1 style="color: #594f8d;  font-size: 25px; "><i class="fa fa-paint-brush" aria-hidden="true"></i>Art</h1><br>
                    <ul>
                        <li><a href="#">Drawing for Kids: How to Draw Step-by-Step Interactive Art</a></li>
                        <li><a href="#">Art for Kids and Beginners: Learn to Paint Acrylic Paintings</a></li>
                        <li><a href="#">Art for Kids: Learn How to Draw & Paint Animals in Acrylic</a></li>
                        <li><a href="#">Art for Kids & Beginners: Drawing and Watercolor Painting</a></li>
                        <li><a href="#">Watercolor Painting for Children</a></li>
                        <li><a href="#">Building Kids Confidence Through Drawing: Art for Children</a></li>
                        <li><a href="#">Art School for Kids</a></li>
                        <li><a href="#">Oil Pastel Painting: Art Projects and Techniques for Kids</a></li>
                        <li><a href="#">Drawing for Kids: Learn How to Draw Cartoons Step-by-Step</a></li>
                        <li><a href="#">How To Draw Cute Cartoon Animal Faces</a></li>
                    </ul></p><br>
                </div>
                <div id="Contact" class="tabcontent">
                    <div style="text-align:center">
                        <h1 style="color: #594f8d;  font-size: 25px;">Contact Us</h1>
                        <p>Swing by for a cup of coffee, or leave us a message:</p>
                    </div>
                    <div class="row">
                        <div class="column">
                            <img src="imge/bg.jpg" height="500px" width="450px">
                        </div>
                        <div class="column">
                            <form action="/action_page.php">
                                <label for="fname">First Name</label>
                                <input type="text" id="fname" name="firstname" placeholder="Your name..">
                                <label for="lname">Last Name</label>
                                <input type="text" id="lname" name="lastname" placeholder="Your last name..">
                                <label for="country">Country</label>
                                <select id="country" name="country">
                                    <option value="australia">Australia</option>
                                    <option value="canada">Canada</option>
                                    <option value="usa">USA</option>
                                </select>
                                <label for="subject">Subject</label>
                                <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
                                <input type="submit" value="Submit">
                            </form>
                        </div>
                    </div>
                </div>

                <div id="Map" class="tabcontent">
                    <h1 style="color: #594f8d;  font-size: 40px; font: cursive;">Our Location</h1>
                    <img src="imge/map.jpg" alt="map" height="550px" width="950px">
                </div>
            </div>
            <div class="footer">
                <i class="fa fa-facebook-official"  aria-hidden="true" style="font-size: 40px; color: blue; align-items: center;"></i>
                <i class="fa fa-whatsapp" aria-hidden="true" style="font-size: 40px; color: green;"></i>
                <i class="fa fa-twitter" aria-hidden="true" style="font-size: 40px; color: #589ee8;"></i>
                <i class="fa fa-instagram" aria-hidden="true" style="font-size: 40px; color: #ef51bc; "></i>
                <i class="fa fa-google-plus-official" aria-hidden="true" style="font-size: 40px; color: red;"></i>
            </div>
        </div>
        <script>
            function openWeb(evt, evtName) {
                var i, tabcontent, tablinks;
                tabcontent = document.getElementsByClassName("tabcontent");
                for (i = 0; i < tabcontent.length; i++) {
                    tabcontent[i].style.display = "none";
                }
                tablinks = document.getElementsByClassName("tablinks");
                for (i = 0; i < tablinks.length; i++) {
                    tablinks[i].className = tablinks[i].className.replace(" active", "");
                }
                document.getElementById(evtName).style.display = "block";
                evt.currentTarget.className += " active";
            }

            // Get the element with id="defaultOpen" and click on it
            document.getElementById("defaultOpen").click();
        </script>
        <?php
        // put your code here
        ?>
    </body>
</html>