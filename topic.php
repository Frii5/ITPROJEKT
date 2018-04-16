<?php
//topic.php
include 'connect.php';
include 'header.php';

$urllastchar = $_SERVER['REQUEST_URI'];

$url = substr($urllastchar, -1);

$sql = "SELECT
            topic_id,
            topic_subject
        FROM
            topics
        WHERE
            topics.topic_id = '" . mysqli_real_escape_string($con , $url) . "'";
			
$result = mysqli_query($con , $sql);

if(!$result)
{
	echo 'The topic could not be displayed, please try again later.';
}
else
{
	if(mysqli_num_rows($result) == 0)
	{
		echo 'This topic doesn&prime;t exist.';
	}
	else
	{
		while($row = mysqli_fetch_assoc($result))
		{
			echo'
            <div class ="container_topic_subject">
            <p> ' . $row['topic_subject'] .' </p>
            </div>
            ';
            
            $topicviewsql = "SELECT
                            posts.post_topic,
                            posts.post_content,
                            posts.post_date,
                            posts.post_by,
                            users.user_id,
                            users.user_name
                        FROM
                                posts
                        LEFT JOIN
                                users
                        ON
                                posts.post_by = users.user_id
                        WHERE
                                posts.post_topic = '" . mysqli_real_escape_string($con , $url) . "'";
                        
            $topicview = mysqli_query($con , $topicviewsql);
            
            if(!$topicview)
            {
				echo 'Last topic could not be displayed.';
            }
            else
            {
                if(mysqli_num_rows($topicview) == 0)
				{
				    echo 'There are currently 0 topics in this category.';
				}
				else
				{
				    while($topicrow = mysqli_fetch_assoc($topicview)) 
                    {
                        
                        echo'
                        <div class="post_container">
                        <div class="post_info">
                         '.$topicrow['user_name'].' </br>
                         '.$topicrow['post_date'].'
                        </div>          
                       
                        <div class="post_content">
                        '.$topicrow['post_content'].'
                        </div>
                        </div>';
                    }
                }
            }
        }
    }
}

include 'footer.php';
?>

