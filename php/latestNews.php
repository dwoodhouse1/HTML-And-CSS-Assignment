<?php

function getNews()
{
    include "dbConnection.php";

    try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname;", $username);
        $statement = $conn->query(
            '
            SELECT *
            FROM news
            ORDER BY date DESC
            LIMIT 3 
            '
        );
        echo 'Query success';
        return $statement->fetchAll();
    }
    catch (PDOException $pe)
    {
        echo 'Database query failed: ' . $pe->getMessage();
        exit;
    }
}

function articleContent($image, $title, $readTime, $info, $authorImage, $authorName, $date, $counter)
{
    return '
    <div class="block' . $counter . '">
        <a class="article-link" href ="#"></a>
        <div class="img-container">
            <a href="#" class="btn-tooltip btn-tooltip-one" title="View all: Digital Marketing / News">News</a>
            <a class="article-img">
            <img src="' . $image . '" class ="img-responsive img-container" alt="Gary Cullen - Octobers Notable of the Month">
            </a> 
        </div>
        <div class="block-content">
            <h3>
            <a href="#">' . $title  . '</a>
            <span class="readtime">' . $readTime . '</span>
            </h3>
            <p>' . $info . '</div>
            
            <div class="user">
            <div class="avatar">
                <img src="' . $authorImage . '" class="img-responsive" alt="Netmatters">
            </div>
            <div class="info">
                <strong>' . $authorName . '</strong> <br>
                ' . $date . '
            </div>
            </div>
        </div>
        
    </div>
    
    
    ';
}


?>