<?php
    include_once "partials/header.php";

    // Fetching users from database 
    $current_admin_id=$_SESSION['user-id'];

    $query= "SELECT * FROM users WHERE id!=$current_admin_id";
    $users=mysqli_query($conn,$query);
?>
    
    
    <section class="dashboard">
        <div class="container dashboard_container">
            <button id="show_sidebar-btn" class="sidebar_toggle"><i class="fa-solid fa-chevron-right"></i></button>
            <button id="hide_sidebar-btn" class="sidebar_toggle"><i class="fa-solid fa-chevron-left"></i></button>
            <?php
                if(isset($_SESSION['add-user-success'])):?>
                <script>alert('<?=$_SESSION['add-user-success'];
                unset($_SESSION['add-user-success']) ?>')</script>
                <?php endif?>
            <aside>
                <ul>
                    <li>
                        <a href="add-post.php"><i class="fa-solid fa-pen"></i>
                            <h5>Add Post</h5>
                        </a>
                    </li>
                    <li>
                        <a href="dashboard.php"><i class="fa-regular fa-address-card"></i>
                            <h5>Manage Posts</h5>
                        </a>
                    </li>
                    <li>
                        <a href="add-user.php"><i class="fa-solid fa-user-plus"></i>
                            <h5>Add user</h5>
                        </a>
                    </li>
                    <li>
                        <a href="manage-users.php" class="active"><i class="fa-solid fa-user-group"></i>
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
                </ul>
            </aside>
            <main>
                <h2>Manage Users</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Username</th>
                            <th>Edit</th>
                            <th>Delete</th>
                            <th>Admin</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($user=mysqli_fetch_assoc($users)) :?>
                        <tr>
                            <td><?="{$user['Firstname']}  {$user['Lastname']}" ?></td>
                            <td><?=$user['username'] ?></td>
                            <td><a href="<?ROOT_URL ?>admin/edit-user.php?id=<?=$user['id'] ?>" class="btn sm">Edit</a></td>
                            <td><a href="<?ROOT_URL ?>admin/delete-user.php" class="btn sm danger">Delete</a></td>
                            <td>Yes</td>
                        </tr>
                        <?php endwhile?>
                    </tbody>
                </table>
            </main>
        </div>
    </section>
    
    <?php
    include_once "partials/footer.php";
?>