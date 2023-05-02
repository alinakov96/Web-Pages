<?php 

function getMainPost() {
    $db = mysqli_connect("localhost", "user", "password", "blogsite");
    $query = "SELECT * FROM post ORDER BY date DESC LIMIT 20";
    $result = mysqli_query($db, $query);
    while($row = mysqli_fetch_array($result)) {
        $query = "SELECT name FROM category 
                    INNER JOIN has_category ON category.id = has_category.category
        WHERE has_category.post = " .$row['id'];
        $cat_result = mysqli_query($db, $query);
        $categories = "";
        while($category = mysqli_fetch_array($cat_result)) {
            $categories .= '<p class="badge bg-primary">'. 
            $category['name'].'</p>';
        }
        echo '<article class="blog-post d-flex">
        <div class="img-container">
          <img
            class="img-fluid"
            src="img/'. $row['id'].'.jpg"
            alt="'. $row['title'].'"
          />
        </div>
        <div class="blog-post-content">
          <h3>'. $row['title'].'</h3>
          <div class="blog-post-info d-flex space-between">
            <p>'. substr($row['date'],0,10) .'</p>
            <p>'. $categories.'</p>
          </div>
        </div>
      </article>';
    }
}

?>