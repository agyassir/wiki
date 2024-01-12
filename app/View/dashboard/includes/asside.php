<aside class="col-md-2 bg-dark text-light p-4 aside" style="height: 125vh">
                <ul class="list-unstyled">
                   
                    <li> <i class="fa-solid fa-chart-simple"></i> <a href="#">Dashboard</a></li>
                    <?php
                    switch ($_SESSION['role_id']){
                        case 1:
                            ?>


                    <li><a href="../user/getUsers">users</a></li>
                   
                    <li><a href="../user/AgetTags">tags</a></li>
                    <li><a href="../user/Acategories">categories</a></li>
                    <li><a href="../user/AgetAllwiki">wikis</a></li>
                    <li><a href="../user/archive">archive</a></li>

                  
                  <?php
                    break;
                        case 2:?>
                    <li><a href="?uri=">MyWikis</a></li>
                    <?php
                    break;
                    }
                    ?>
                </ul>

 </aside>