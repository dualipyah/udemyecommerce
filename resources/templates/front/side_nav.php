<div class="col-md-3">
    <p class="lead">Shop Name</p>
    <div class="list-group">
        <?php
        //  $query = "SELECT * FROM categories";
         // $send_query = mysqli_query($connection, $query);
        //     while ($row = mysqli_fetch_array($send_query)) {
        //       if(!$send_query){
        //         die();
        //       }
        //       else{
        //         if(mysqli_num_rows($send_query ) > 0 ){
        //           echo ($row['cat_title']) ;
        //           echo "<a href='' class='list-group-item'>{$row['cat_title']}</a> ";
        //         }else{
        //           echo "No results";
        //         }
        //     }
        // }
          
        $query = "SELECT * FROM categories";
        $send_query = mysqli_query($connection, $query);
          if(!$send_query){
            die("Query Failed sidenav". mysqli_error($connection));
          }
            while ($row = mysqli_fetch_array($send_query)){
              echo "<a href='' class='list-group-item'>{$row['cat_title']}</a> ";
            }


        ?>

      
    </div>
</div>

