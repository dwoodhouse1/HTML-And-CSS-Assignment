<?php

    function postData($name, $email, $companyName, $telephone, $message, $marketing)
    {
        include("dbConnection.php");

        try {
            $sql = $conn->prepare('
                INSERT INTO enquiries (name, email, company_name, telephone, message, marketing)
                VALUES (:name, :email, :company_name, :telephone, :message, :marketing);
            ');

            $sql->bindValue(":name", $name, PDO::PARAM_STR);
            $sql->bindValue(":email", $email, PDO::PARAM_STR);
            $sql->bindValue(":company_name", $companyName, PDO::PARAM_STR);
            $sql->bindValue(":telephone", $telephone, PDO::PARAM_STR);
            $sql->bindValue(":message", $message, PDO::PARAM_STR);
            $sql->bindValue(":marketing", $marketing, PDO::PARAM_STR);


            $sql->execute();
            return true;
        }
        catch (PDOException $pe)
        {
            echo 'Unable to send data ' . $pe->getMessage();
            exit;
        }
    }






















?>