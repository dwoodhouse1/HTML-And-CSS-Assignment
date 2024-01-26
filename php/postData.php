<?php

    function postData($name, $email, $company, $phone, $message, $marketing)
    {
        include("dbConnection.php");

        try {
            $sql = $conn->prepare('
                INSERT INTO enquiries (name, email, company, phone, message, marketing)
                VALUES (:name, :email, :company, :phone, :message, :marketing);
            ');

            $sql->bindValue(":name", $name, PDO::PARAM_STR);
            $sql->bindValue(":email", $name, PDO::PARAM_STR);
            $sql->bindValue(":company", $name, PDO::PARAM_STR);
            $sql->bindValue(":phone", $name, PDO::PARAM_STR);
            $sql->bindValue(":message", $name, PDO::PARAM_STR);
            $sql->bindValue(":marketing", $name, PDO::PARAM_STR);


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