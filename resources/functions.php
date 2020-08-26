<?
//helper functions
function redirect($location){
    header("Locations : $location");
}

function query($sql){
    global $connection;
    return mysqli_query($connection,$sql);
}

function confirm($result){
    global $connection;
    if (!$result) {
        die("Query failed" . mysqli_error($connection));
    }
}

//avoid sql injection
function escape_string($string){
    global $connection;
    return mysqli_real_escape_string($connection,$string);
}

//for fetch
function fetch_array($result){
    return mysqli_fetch_array($result);
}

//GetProducts 

function get_products(){
    $query = query ("SELECT * FROM product");
    confirm($query);
        while($row = fetch_array($query)){
            echo $row['product_price'];
            $product = <<<DELIMETER

            <div class="container">
                <div class="card-deck mb-3 text-center">
                    <div class="card mb-4 box-shadow">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">Free</h4>
                    </div>
                    <div class="card-body">
                        <a href="item.php?id={$row['product_id']}"><img src="{$row['product_image']}" alt=""></a>
                        <ul class="list-unstyled mt-3 mb-4">
                        <li><h4 class="pull-right">&#8369;{$row['product_price']}</h4>
                        </li>
                        <li><h4><a href="item.php?id{$row['product_id']}">{$row['product_title']}</a></h4>
                        </li>
                        <p> {$row['product_description']} <a target="_blank" href="#">URL</a>.</p>
                        <li>Help center access</li>
                        </ul> <a  target="_blank" href="item.php?id={$row['product_id']}">
                        <button type="button" class="btn btn-lg btn-block btn-outline-primary" >                        
                             Add to cart
                        </button></a>
                    </div>
                    </div>
                </div>
            </div>
DELIMETER;
echo $product;
        }
}
//side_nav.php
function get_categories(){
    $query = query("SELECT * FROM categories");
    confirm($query);
       while ($row = mysqli_fetch_array($query)){
        $category_links = <<<DELIMETER
        <a href='category.php?id={$row['cat_id']}' class='list-group-item'>{$row['cat_title']}</a>
DELIMETER;
echo $category_links;
    }
}

?>