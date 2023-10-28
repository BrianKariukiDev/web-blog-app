<?php
    include_once "partials/header.php";
?>

    <section class="form_section">
        <div class="container form_section-container">
            <h2>Edit Post</h2>
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
                    <label for="thumbnail">Change Thumbnail</label>
                    <input type="file">
                </div>
                <button type="submit" class="btn">Edit Post</button>
            </form>
        </div>
    </section>


    
    <?php
    include_once "partials/footer.php";
?>