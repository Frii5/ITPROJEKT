<?php
//create_cat.php
include 'connect.php';
include 'header.php';
 
//first select the category based on $_GET['cat_id']

$urllastchar = $_SERVER['REQUEST_URI'];

$url = substr($urllastchar, -1);

$sql = "SELECT
            cat_id,
            cat_name,
            cat_description
        FROM
            categories
        WHERE
            cat_id = '" . mysqli_real_escape_string($con , $url) . "'";
 
$result = mysqli_query($con , $sql);
 
if(!$result)
{
    echo 'The category could not be displayed, please try again later.' . mysqli_error($con);
}
else
{
    if(mysqli_num_rows($result) == 0)
    {
        echo 'This category does not exist.';
    }
    else
    {
        //display category data
        while($row = mysqli_fetch_assoc($result))
        {
            echo '<h2>Topics in ′' . $row['cat_name'] . '′ category</h2>';
        }
     
        //do a query for the topics
        $sql = "SELECT  
                    topic_id,
                    topic_subject,
                    topic_date,
                    topic_cat
                FROM
                    topics
                WHERE
                    topic_cat = " . mysqli_real_escape_string($con , $url) . "
                ORDER BY
                    topic_date
                DESC";
        
         
        $result = mysqli_query($con , $sql);
         
        if(!$result)
        {
            echo 'The topics could not be displayed, please try again later.';
        }
        else
        {
            if(mysqli_num_rows($result) == 0)
            {
                echo 'There are no topics in this category yet.';
            }
            else
            {
                
                     
                while($row = mysqli_fetch_assoc($result))
                {               
                 
                    echo'<div class="container_topic">';
                    echo'<div class="topic_title">
                    <a href="topic.php?id=' . $row['topic_id'] . '">' . $row['topic_subject'] . '</a>
                    </div>';
                    
                    echo'<div class="topic_date">';
                    echo date('d-m-Y', strtotime($row['topic_date']));
                    echo'</div>';
    
                    echo'</div>';
                    }
                }
            }
        }
    }


include 'footer.php';
?>

                   
