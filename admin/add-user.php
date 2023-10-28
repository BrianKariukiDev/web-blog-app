<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog site</title>
    <link rel="stylesheet" href="style.css">
    <style src="index.js" defer></style>
    <link rel="stylesheet" href="fontawesome-free-6.4.2-web/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <script src="main.js" defer></script>
</head>
<body>
    <nav>
        <div class="container nav_container">
            <a href="index.html" class="nav_logo">INCOGNITO</a>
            <ul class="nav_items">
                <li><a href="blog.html">Blog</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="services.html">Services</a></li>
                <li><a href="contact.html">Contact</a></li>
                <!-- <li><a href="signin.html">Signin</a></li> -->
                <li class="nav_profile">
                    <div class="avatar">
                        <img src="images/avatar1.jpg" alt="">
                    </div>
                    <ul>
                        <li><a href="dashboard.html">Dashboard</a></li>
                        <li><a href="logout.html">Log out</a></li>
                    </ul>
                </li>
            </ul>
                    <button id="open_nav-btn"><i class="fa-solid fa-bars"></i></button>
                    <button id="close_nav-btn"><i class="fa-solid fa-xmark"></i></button>
        </div>
    </nav>
    <!-- NAV END -->

    <section class="form_section">
        <div class="container form_section-container">
            <h2>Add User</h2>
            <div class="alert_message error">
                <p>This is an error message</p>
            </div>
            <form action="" enctype="multipart/form-data">
                <input type="text" placeholder="First Name">
                <input type="text" placeholder="Last Name">
                <input type="text" placeholder="User Name">
                <input type="email" placeholder="Email">
                <input type="password" placeholder="Create Password">
                <input type="password" placeholder="Confirm Password">
                <select name="" id="">
                    <option value="0">Author</option>
                    <option value="1">Admin</option>
                </select>
                <div class="form_control">
                    <label for="avatar"></label>
                    <input type="file" id="avatar">
                </div>
                <button type="submit" class="btn">Sign Up</button>
            </form>
        </div>
    </section>


    
 <footer>
        <div class="footer_socials">
            <a href="https://youtube.com" target="_blank"><i class="fa-brands fa-youtube"></i></a>
            <a href="https://facebook.com" target="_blank"><i class="fa-brands fa-facebook"></i></a>
            <a href="https://instagram.com" target="_blank"><i class="fa-brands fa-instagram"></i></a>
            <a href="https://linkedn.com" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
            <a href="https://twitter.com" target="_blank"><i class="fa-brands fa-twitter"></i></a>
        </div>
        <div class="container footer_container">
            <article>
                <h4>categories</h4>
                <ul>
                    <li><a href="">Art</a></li>
                    <li><a href="">Wild Life</a></li>
                    <li><a href="">Travel</a></li>
                    <li><a href="">Science and Technology</a></li>
                    <li><a href="">Music</a></li>
                    <li><a href="">Food</a></li>
                </ul>
            </article>
            <article>
                <h4>Support</h4>
                <ul>
                    <li><a href="">Online Support</a></li>
                    <li><a href="">Call Numbers</a></li>
                    <li><a href="">Emails</a></li>
                    <li><a href="">Social Support</a></li>
                    <li><a href="">Location</a></li>
                </ul>
            </article>
            <article>
                <h4>Blog</h4>
                <ul>
                    <li><a href="">Safety</a></li>
                    <li><a href="">Repair</a></li>
                    <li><a href="">Recent</a></li>
                    <li><a href="">Popular</a></li>
                    <li><a href="">Categories</a></li>
                </ul>
            </article>
            <article>
                <h4>Permalinks</h4>
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Blog</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Services</a></li>
                    <li><a href="">Contact</a></li>
                </ul>
            </article>
        </div>
        <div class="footer_copyright">
            <small>Copyright &copy; Incognito</small>
        </div>
    </footer>
</body>
</html>