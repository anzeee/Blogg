<?php
include_once('resources/init.php');
if ( isset($_POST['name'])) {
    $name = trim($_POST['name']);
    
    if ( empty($name) ) {
        $error = 'You must submit a category name.';
    } else if (category_exists($name)) {
        $error = 'That category already exsists.';
} else if ( strlen($name) > 24) {
         $error  = 'Category name can only be up to 24 characters.';
}
   if (! isset($error) ) {
       add_category($name);
   }
}

?>
<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equi v="X-UA-Compatible" content= "IE=edge, chrome=1">
        
        
        <title> Add a Category </title>
        
    </head>
    
    <body>
        
        <h1> Add a category</h1>
        
        <?php  
        if (isset($error) ){
            
            echo "<p> {$error} </p>\n";
        }
        ?>
        <form action="" method="post">
            <div> 
                <label far="name"> Name </label>
                <input type="text" name="name" value="">    
            </div>
            <div>
                <input type="submit" value="Add category"
            </div>
            
        </form>
    </body>
