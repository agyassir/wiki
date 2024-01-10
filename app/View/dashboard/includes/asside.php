<aside class="col-md-2 bg-dark text-light p-4 aside">
                <ul class="list-unstyled">
                   
                    <li> <i class="fa-solid fa-chart-simple"></i> <a href="#">Dashboard</a></li>
                    <?php
                    switch ($_SESSION['role_id']){
                        case 1:
                            ?>


                    <li><a href="./admin/getAllUser">Users</a></li>
                   
                    <li><a href="../user/AgetTags">tags</a></li>
                    <li><a href="#">categories</a></li>
                    <li><a href="#">wikis</a></li>
                    <li><a href="#">authors</a></li>

                  
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