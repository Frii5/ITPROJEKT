<?php
//index.php
include 'connect.php';
include 'header.php';
?>

<?php

$sql = "SELECT
            cat_id,
            cat_name,
            cat_description
        FROM
            categories
        ORDER BY
            cat_id
        DESC";

 
$result = mysqli_query($con , $sql);
 
if(!$result)
{
    echo 'The categories could not be displayed, please try again later.';
}
else
{
    if(mysqli_num_rows($result) == 0)
    {
        echo 'No categories defined yet.';
    }
    else
    {
              
             
        while($row = mysqli_fetch_assoc($result))
        {               
            echo '<div class="container">';
            echo '   <div class="thumbnail">';
            echo '   <img src="images/thumbnail.png" alt="Avatar">';
            echo '   </div>';
            
            echo '      <div class="section">';
            echo '      <p class="cat_title"><a href="category.php?='.$row['cat_id'].'">' . $row['cat_name'] . '</a></p>';
            echo '      </div>'; 
            
            echo '      <div class="section">';
            echo '      <p class="cat_desc">"'.$row['cat_description'].'"</p>';
            echo '      </div>'; 
            
            echo '      <div class="section">';
            
            //fetch last topic for each cat
					$topicsql = "SELECT
									topic_id,
									topic_subject,
									topic_date,
									topic_cat
								FROM
									topics
								WHERE
									topic_cat = " . $row['cat_id'] . "
								ORDER BY
									topic_date
								DESC
								LIMIT
									1";
								
					$topicsresult = mysqli_query($con , $topicsql);
				
					if(!$topicsresult)
					{
						echo 'Last topic could not be displayed.';
					}
            
					else
                        
					{
						if(mysqli_num_rows($topicsresult) == 0)
						{
							echo 'There are currently 0 topics in this category.';
						}
						else
						{
							while($topicrow = mysqli_fetch_assoc($topicsresult))
                            
							echo '<i>Latest topic:</i> <a href="topic.php?id=' . $topicrow['topic_id'] . '">' . $topicrow['topic_subject'] . '</a> <i>at</i> ' . date('d-m-Y | H:i:s', strtotime($topicrow['topic_date']));

						}
				    }
				
            echo '</div>'; //section div
            echo '</div>'; //container div
        
        }
    }
}

?>

        
<?php include 'footer.php';?>


