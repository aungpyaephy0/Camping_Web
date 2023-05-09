<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php include("connect.php");
    // $sql = "create database assignment";
    // $connect=mysqli_connect('localhost', 'root','');
    // if (mysqli_query($connect,$sql) ) echo "Database created";
    // else "Database error";
    
    //  $create = "CREATE Table Visitor 
    //  (
    //      Visitor_ID int NOT NULL Primary Key AUTO_INCREMENT,
    //      FirstName varchar (15),
    //      LastName varchar (15),
    //      UserName varchar (30),
    //      Password varchar (30),
    //      PhoneNumber varchar (30),
    //      Email varchar (30),  
    //      Address varchar (50)
    //  )";
    //  if (mysqli_query($connect,$create) ) echo "Database created";
    //  else "Database error";
    
    // $create = "CREATE Table CampSite
    //  (
    //     Site_ID int NOT NULL Primary Key AUTO_INCREMENT,
    //     CampSite_Name varchar(30),
    //     Region VARCHAR (30),
    //     Location VARCHAR(30),
    //     Site_Image VARCHAR(100),
    //     Short_Desc TEXT,
    //     Long_Desc TEXT,
    //     Coordinates TEXT,
    //     Rating VARCHAR (50),
    //     Site_Email VARCHAR (50),
    //     Site_Phone int
    //  )";
    //  if (mysqli_query($connect,$create) ) echo "Campsite database created";
    //   else "Database error";
    

    // $create = "CREATE Table Booking_info
    //   (
    //     Booking_ID int NOT NULL Primary Key AUTO_INCREMENT,
    //     UserName varchar (30),
    //     Site_ID int NOT NULL,
    //     Remark text,
    //     Visitor_ID,
    //     Site_ID int NOT NULL,
    //     FOREIGN KEY (Site_ID) References CampSite (Site_ID),
    //     FOREIGN KEY (Visitor_ID) References Visitor (Visitor_ID)
    //   )";
    //       if (mysqli_query($connect,$create) ) echo "Booking Info table created";
    //   else "Database error";
    

    $create = "CREATE Table Pitches
       (
        Pitche_ID int NOT NULL Primary Key AUTO_INCREMENT,
        Pitches_Type VARCHAR (100),
        Site_ID int NOT NULL,
        Availability varchar (50),
        FOREIGN KEY (Site_ID) References CampSite (Site_ID)
    
       )";
    //     if (mysqli_query($connect,$create) ) echo "pitches table database created";
    //     else "Database error";
    
    //      $create = "CREATE Table Campsite_Facilities
    //    (
    //         CF_ID int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    //         Site_ID int NOT NULL,
    //         Facilities_ID int NOT NULL,
    //         FOREIGN KEY (Facilities_ID) References Facilities (Facilities_ID),
    //         FOREIGN KEY (Site_ID) References CampSite (Site_ID)
    
    //    )";
    //     if (mysqli_query($connect,$create) ) echo "Campsite Fcilities database created";
    //     else "Database error";
    

    // $create = "CREATE Table Reviewer
    // (
    //     Reviewer_ID int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    //     Site_ID int NOT NULL,
    //     Visitor_ID int NOT NULL,
    //     Message text,
    //     FOREIGN KEY (Visitor_ID) References Visitor (Visitor_ID),
    //     FOREIGN KEY (Site_ID) References CampSite (Site_ID)
    
    // )";
    //  if (mysqli_query($connect,$create) ) echo "reviewer table database created";
    //  else "Database error";
    
    // $create = "CREATE Table Facilities
    // (
    //     Facilities_ID int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    //     Faclities_Name varchar(50) NOT NULL,
    //     Facililties_Icon TEXT,
    
    // )";
    //  if (mysqli_query($connect,$create) ) echo "Facilities database created";
    //  else "Database error";
    
    // $create = "CREATE Table LocalAttractions
    // (
    //     LocalAttraction_ID int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    //     Site_ID int NOT NULL,
    //     Place TEXT,
    //     Attraction_Photo varchar(100),
    //     FOREIGN KEY (Site_ID) References CampSite (Site_ID)
    
    // )";
    //  if (mysqli_query($connect,$create) ) echo "localattraction table database created";
    //  else "Database error";
    
    //  $create = "CREATE Table Rss_feed
    // (
    //     Feed_ID int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    //     Title varchar (50),
    //     Lind TEXT,
    //     Description varchar(100),
    
    // )";
    //  if (mysqli_query($connect,$create) ) echo "Rss Feed table created";
    //  else "Database error";
    

    $create = "CREATE Table Contact
    (
    Contact_ID int NOT NULL Primary Key AUTO_INCREMENT,
    UserName varchar (15),
    Email varchar (30),
    Phone int,
    Message varchar (100)
    )";
    if (mysqli_query($connect, $create))
        echo "Rss Feed table created";
    else
        "Database error";

    ?>
</body>

</html>