<?php
    include_once "./partials/header.php";
?>

    <section class="form_section">
        <div class="container form_section-container">
            <h2>Add Post</h2>
            <div class="alert_message error">
                <p>This is an error message</p>
            </div>
            <form action="" enctype="multipart/form-data">
                <input type="text" placeholder="Title">
                <select name="" id="">
                    <option value="1">Travel</option>
                    <option value="1">Travel</option>
                    <option value="1">Travel</option>
                    <option value="1">Travel</option>
                </select>
                <textarea name="" id="" rows="10" placeholder="Body"></textarea>
                <div class="form_control inline">
                    <input type="checkbox" id="is_featured" checked="checked">
                    <label for="is_featured">featured</label>
                </div>
                <div class="form_control">
                    <label for="thumbnail">Add Thumbnail</label>
                    <input type="file">
                </div>
                <button type="submit" class="btn">Add Post</button>
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