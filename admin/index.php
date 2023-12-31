<?php
    session_start();
    include_once "../partials/header.php";
?>
    
    
    <section class="dashboard">
        <div class="container dashboard_container">
            <button id="show_sidebar-btn" class="sidebar_toggle"><i class="fa-solid fa-chevron-right"></i></button>
            <button id="hide_sidebar-btn" class="sidebar_toggle"><i class="fa-solid fa-chevron-left"></i></button>
            <aside>
                <ul>
                    <li>
                        <a href="add-post.php"><i class="fa-solid fa-pen"></i>
                            <h5>Add Post</h5>
                        </a>
                    </li>
                    <li>
                        <a href="index.php" class="active"><i class="fa-regular fa-address-card"></i>
                            <h5>Manage Posts</h5>
                        </a>
                    </li>

                    <?php
                    if(isset($_SESSION['user_is_admin'])):?>
                    <li>
                        <a href="add-user.php"><i class="fa-solid fa-user-plus"></i>
                            <h5>Add user</h5>
                        </a>
                    </li>
                    <li>
                        <a href="manage-users.php"><i class="fa-solid fa-user-group"></i>
                            <h5>Manage Users</h5>
                        </a>
                    </li>
                    <li>
                        <a href="add-category.php"><i class="fa-regular fa-pen-to-square"></i>
                            <h5>Add Category</h5>
                        </a>
                    </li>
                    <li>
                        <a href="manage-categories.php"><i class="fa-solid fa-list-ul"></i></i>
                            <h5>Manage categories</h5>
                        </a>
                    </li>
                    <?php endif ?>
                </ul>
            </aside>
            <main>
                <h2>Manage Users</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                            <td>Art</td>
                            <td><a href="edit-post.php" class="btn sm">Edit</a></td>
                            <td><a href="delete-post.php" class="btn sm danger">Delete</a></td>
                        </tr>
                        <tr>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                            <td>Art</td>
                            <td><a href="edit-post.php" class="btn sm">Edit</a></td>
                            <td><a href="delete-post.php" class="btn sm danger">Delete</a></td>
                        </tr>
                        <tr>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                            <td>Art</td>
                            <td><a href="edit-post.php" class="btn sm">Edit</a></td>
                            <td><a href="delete-post.php" class="btn sm danger">Delete</a></td>
                        </tr>
                    </tbody>
                </table>
            </main>
        </div>
    </section>
    
    <?php
    include_once "partials/footer.php";
?>