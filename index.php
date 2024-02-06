<?php
include "db_conn.php";
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="styles.css">
<title>BOOK WORM CLUB</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
.w3-row-padding img {margin-bottom: 12px}
.bgimg {
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  background-image: url('image/book.jpg');
  min-height: 100%;
}
</style>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
<body>
body {
  
    display: flex;
    align-content::left;
    align-items: center;
    text-align:center;
    height: 100vh;
    margin :0;
}

.card-container {
    display: flex;
}

.card {
    width: 200px;
    height: 250px;
    perspective: 1000px;
    margin-right: 60px;
}

.card-inner {
    width: 100%;
    height: 100%;
    transform-style: preserve-3d;
    transition: transform 0.5s;
}

.card:hover .card-inner {
    transform: rotateY(180deg);
}

.card-front,
.card-back {
    width: 115%;
    height: 100%;
    position: absolute;
    backface-visibility: hidden;
}

.card-front {
    background-color: #3498db;
    color: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
}

.card-back {
    background-color: #D4D9EF;
    color: black;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    transform: rotateY(180deg);
}

</style>
</head>
</body>

<!-- Sidebar with image -->
<nav class="w3-sidebar w3-hide-medium w3-hide-small" style="width:40%">
  <div class="bgimg"></div>
</nav>

<!-- Hidden Sidebar (reveals when clicked on menu icon)-->
<nav class="w3-sidebar w3-black w3-animate-right w3-xxlarge" style="display:none;padding-top:150px;right:0;z-index:2" id="mySidebar">
  <a href="javascript:void(0)" onclick="closeNav()" class="w3-button w3-black w3-xxxlarge w3-display-topright" style="padding:0 12px;">
    <i class="fa fa-remove"></i>
  </a>
  <div class="w3-bar-block w3-center">
    <a href="#" class="w3-bar-item w3-button w3-text-grey w3-hover-black" onclick="closeNav()">Home</a>
    <a href="#photos" class="w3-bar-item w3-button w3-text-grey w3-hover-black" onclick="closeNav()">Photos</a>
    <a href="#about" class="w3-bar-item w3-button w3-text-grey w3-hover-black" onclick="closeNav()">About</a>
    <a href="#committee" class="w3-bar-item w3-button w3-text-grey w3-hover-black" onclick="closeNav()">Committee</a>
    <a href="#activities" class="w3-bar-item w3-button w3-text-grey w3-hover-black" onclick="closeNav()">Activities</a>
    <a href="#achievement" class="w3-bar-item w3-button w3-text-grey w3-hover-black" onclick="closeNav()">Achievement</a>
    <a href="#membership" class="w3-bar-item w3-button w3-text-grey w3-hover-black" onclick="closeNav()">Membership</a>
    <a href="#contact" class="w3-bar-item w3-button w3-text-grey w3-hover-black" onclick="closeNav()">Contact</a>
    <a href="admin/index.php" class="w3-bar-item w3-button w3-text-grey w3-hover-black" onclick="closeNav()">Administrator</a>
  </div>
</nav>
<!-- Page Content -->
<div class="w3-main w3-padding-large" style="margin-left:40%">

  <!-- Menu icon to open sidebar -->
  <span class="w3-button w3-top w3-white w3-xxlarge w3-text-grey w3-hover-text-black" style="width:auto;right:0;" onclick="openNav()"><i class="fa fa-bars"></i></span>

  <!-- Header -->
 <header class="w3-container w3-center" style="padding:128px 16px" id="home">
    <h1 class="w3-jumbo"><b>BOOK WORM CLUB</b></h1>
    <p>Novels & Motivation.</p>
    <img src="image/worm.jpg" class="w3-image w3-hide-large w3-hide-small w3-round" style="display:block;width:60%;margin:auto;">
    <img src="/w3images/profile_girl.jpg" class="w3-image w3-hide-large w3-hide-medium w3-round" width="1000" height="1333">
    <img src="image/worm.jpg" style="width:100%">
  </header>

  <!-- Portfolio Section -->
  <div class="w3-padding-32 w3-content" id="photos">
    <h2 class="w3-text-grey">OUR PHOTOS</h2>
    <hr class="w3-opacity">

    <!-- Grid for photos -->
    <div class="w3-row-padding" style="margin:0 -16px">
      <div class="w3-half">
        <img src="image/book1.jpg" style="width:100%">
        <img src="image/book2.jpg" style="width:100%">
        <img src="image/book3.jpg" style="width:100%">
        <img src="image/book10.jpg" style="width:100%">
        <img src="image/book11.jpg" style="width:100%">
      </div>

      <div class="w3-half">
        <img src="image/book4.jpg" style="width:100%">
        <img src="image/book5.jpg" style="width:100%">
        <img src="image/book6.jpg" style="width:100%">
        <img src="image/book8.jpg" style="width:100%">
        <img src="image/book9.jpg" style="width:100%">

      </div>
    <!-- End photo grid -->
    </div>
  <!-- End Portfolio Section -->
  </div>

  <!-- About Section -->
  <div class="w3-content w3-justify w3-text-black w3-padding-32" id="about">
    <h2>About</h2>
    <hr class="w3-opacity">
    <p>Welcome to Book Worm Club, where the magic of literature comes alive, and the joy of reading is shared among like-minded individuals. Nestled in the heart of our community, our reading club is more than just a gathering of book enthusiasts; it's a vibrant space where stories unfold, ideas bloom, and the love for reading is celebrated.
    </p>
    <p> At Book Worm Club, we are united by a common passion for the written word. Our mission is simple yet profound – to create a haven for bibliophiles, fostering a community where diverse voices, perspectives, and genres converge. We believe in the transformative power of literature and its ability to transport us to new worlds, spark conversations, and connect individuals through the shared experience of reading.
    </p>
    <p> Diversity is at the heart of our reading club. We curate a wide range of books, spanning various genres, cultures, and time periods, ensuring that there's something for every taste. Our members bring a kaleidoscope of perspectives, enriching our discussions and creating an inclusive environment where everyone's voice is heard and valued.
    </p>

<br><div class="w3-row-padding" style="margin:0 -16px">
      <div class="w3-half">
    <div class="w3-half">
        <img src="image/reading.jpg" alt="Swap" style="width:100%">
        <img src="image/r2.jpg" style="width:100%">

      </div>
    </div>
  </div>


<!-- Committee section -->
<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">
  <div class="w3-content w3-justify w3-text-black w3-padding-32" id="committee">
    <h2>BOOK WORM'S COMMITTEE</h2>
    <hr class="w3-opacity">
    <div class="w3-row-padding w3-padding-16 w3-center" id="activites">
    <h1> Tap The Card <3 <h1>
      <br>
      <div class="card-container">
    <div class="card" onclick="flipCard(this)">
        <div class="card-inner">
            <div class="card-front">
                <img src="image/syaza.png" style="width:210px;height:260px;">
            </div>
            <div class="card-back">
                <h1>NUR SYAZA
                  President of BWC<h1>
            </div>
        </div>
    </div>

    <div class="card" onclick="flipCard(this)">
        <div class="card-inner">
            <div class="card-front">
                <img src="image/syazana.png" style="width:210px;height:260px;">
            </div>
            <div class="card-back">
                <h1>NURUL SYAZANA
                  Secretary of BWC<h1>
            </div>
        </div>
    </div>

    <div class="card" onclick="flipCard(this)">
        <div class="card-inner">
            <div class="card-front">
                <img src="image/liyana.png" style="width:210px;height:260px;">
            </div>
            <div class="card-back">
                <h1>NUR LIYANA
                  Treasurer of BWC<h1>
            </div>
        </div>
    </div>
</div>

</div>

 <!-- Activities section -->
<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">
  <div class="w3-content w3-justify w3-text-black w3-padding-32" id="activities">
    <h2>BOOK WORM'S ACTIVITIES</h2>
    <hr class="w3-opacity">
    <div class="w3-row-padding w3-padding-16 w3-center" id="activites">
    <div class="w3-quarter">
      <img src="image/group.jpg" alt="Group" style="width:100%">
      <h3>READING DISCUSSION</h3>
      <p>Book Worm Club will schedule regular meetings to discuss the chosen book, sharing insight, opinions and favourite part.</p>
     </div>
      <div class="w3-quarter">
      <img src="image/exchange.jpg" alt="Swap" style="width:90%">
      <h3>BOOK SWAPS</h3>
      <p>Book Worm Club will organize a book exchange where members can trade books they've enjoyed.</p>
    </div>
     <div class="w3-quarter">
      <img src="image/cha.jpg" alt="Swap" style="width:100%">
      <h3>MONTHLY CHALLANGE</h3>
      <p>Each members have to read at least 2 books in different genres and share it later with other members in sharing/reading discussion</p>
    </div>
     <div class="w3-quarter">
      <img src="image/movie.jpg" alt="Swap" style="width:100%">
      <h3>BOOK-TO-MOVIE</h3>
      <p>Each members have to read a book that has been adapted into a movie or TV series, and then have a discussion comparing the book to its visual adaptation.</p>
    </div>
</div>

<div class="container">
    <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
  <p align="center"><h3>Activities form for BOOK WORM CLUB</h3></p>
    <a href="add_activity.php" class="btn btn-dark mb-3">Add New</a>

    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">Activity ID</th>
          <th scope="col">Activity Name</th>
          <th scope="col">Activity Date</th>
          <th scope="col">Club ID</th>
        </tr>
      </thead>
      <tbody>
   
        <?php
        $sql = "SELECT * FROM `activity`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["activity_id"] ?></td>
            <td><?php echo $row["activity_name"] ?></td>
            <td><?php echo $row["activity_date"] ?></td>
            <td><?php echo $row["club_id"] ?></td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>
</div>

<!-- Achievement section -->


<header id="portfolio">
    <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
    <div class="w3-content w3-justify w3-text-black w3-padding-32" id="achievement">
    <div class="w3-container">
    <h1><b>Book Worm Club's Achievements</b></h1>
    <hr class="w3-opacity">
    <div class="w3-row-padding w3-padding-16 w3-center" id="achievement">
    <br>
</div>
  </div>
    </div>
  </header>
  
  <!-- First Photo Grid-->
  <div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="image/a8.png" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-pale-red">
        <p><b>TOP 3 BEST BOOK CLUB</b></p>
        <p>In November 2022, Book worm club was received an award of Top 3 Best Book Club by Kedah Book Association (KBA)</p>
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="image/a2.png" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-pale-red">
        <p><b>THE BEST BOOK CLUB 2023</b></p>
        <p>In Feb 2023, Book worm club received an award for THE BEST BOOK CLUB 2023 from Book Society (NS).</p>
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="image/a3.png" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-pale-red">
        <p><b>CHAMPION BOOK EXPLORACE</b></p>
        <p>In May 2023, Book Worm Club won as CHAMPION in Book Explorace at National Book Festival (NBF) located at Kuala Lumpur </p>
      </div>
    </div>
     <div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="image/a44.png" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-pale-red">
        <p><b>ADVOCATE BOOK CLUB</b></p>
        <p>In June 2023, Book Worm Club received an award for The Most Advocate Book Club by Ariel Book Association (ABA) .</p>
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="image/a5.png" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-pale-red">
        <p><b>AESTHETIC CLUB</b></p>
        <p>In July 2023, Book Worm club received an award for AESTHETIC BOOK CLUB by Book Lovers Association (BLA) located at Kelantan </p>
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="image/a7.png" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-pale-red">
        <p><b>THE BEST BOOK CLUB IN TOWN</b></p>
        <p>In July 2023, Book Worm Club has received the best book club award at the Kedah state level from Kedah Book Association (KBA).</p>
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="image/8.png" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-pale-red">
        <p><b>THE BEST BOOK COLLECTION</b></p>
        <p>In August 2023, Book Worm Club has received the best book collection award from Gurun Book Association (GBA).</p>
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="image/9.png" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-pale-red">
        <p><b>ACTIVE BOOK CLUB AWARD</b></p>
        <p>In September 2023, Book Worm club received an award as Active Book Club in town from Kedah Book Association.</p>
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="image/10.png" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-pale-red">
        <p><b>BEST BOOK MANAGEMENT</b></p>
        <p>In October 2023, Book Worm Club received The Best Book Management award from Junie Book Association located at Pahang.</p>
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="image/11.png" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-pale-red">
        <p><b>INTERACTIVE BOOK CHALLANGE</b></p>
        <p>In November 2023, Book Worm Club has won 2nd place in Interactive Book Challange which is sponsored by KL Book Association  .</p>
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="image/12.png" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-pale-red">
        <p><b>WINNER CREATIVE COVER</b></p>
        <p>In December 2023, Book Worm Club has won as a Winner in creative cover book redesign competition located at Alor Setar, Kedah.</p>
      </div>
    </div>
 <div class="w3-third w3-container w3-margin-bottom">
      <img src="image/15.png" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-pale-red">
        <p><b>WINNER BOOKISH SCAVENGER HUNT</b></p>
        <p>In January 2024, Book Worm Club has won as a Winner in Bookish Scavenger Hunt competition located at Alor Setar, Kedah.</p>
      </div>
    </div>
  </div>
</div>

<!-- End of Achievement section -->

 
<!-- Membership section -->
     <div class="w3-padding-32 w3-content" id="membership">
    <h2 class="w3-text-black">BOOK WORM MEMBERSHIP</h2>
    <hr class="w3-opacity">

    <div class="container">
    <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
  
  <p align="center"><h3>Membership form for Book Worm Club</h3></p>
    <a href="add-new.php" class="btn btn-dark mb-3">Add New</a>

    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">First Name</th>
          <th scope="col">Last Name</th>
          <th scope="col">Email</th>
          <th scope="col">Gender</th>
          
        </tr>
      </thead>
      <tbody>
   
        <?php
        $sql = "SELECT * FROM `members`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["id"] ?></td>
            <td><?php echo $row["first_name"] ?></td>
            <td><?php echo $row["last_name"] ?></td>
            <td><?php echo $row["email"] ?></td>
            <td><?php echo $row["gender"] ?></td>
            
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>
    
  <!-- End About Section -->
  </div>

 <!-- Contact Section -->
  <div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">
  <div class="w3-content w3-justify w3-text-black w3-padding-32" id="contact">
    <h2>BOOK WORM'S CONTACT</h2>
    <hr class="w3-opacity">
 
  <div class="container">
    <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
  <p align="center"><h3>MEMBERS CONTACT</h3></p>
    <a href="add_contact.php" class="btn btn-dark mb-3">Add New</a>

    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">Contact ID</th>
          <th scope="col">Contact Name</th>
          <th scope="col">Contact ID</th>
          <th scope="col">Email</th>
          <th scope="col">Contact Number</th>
          <th scope="col">Comment</th>
        </tr>
      </thead>
      <tbody>
   
        <?php
        $sql = "SELECT * FROM `contact`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["contact_id"] ?></td>
            <td><?php echo $row["contact_name"] ?></td>
            <td><?php echo $row["contact_studid"] ?></td>
            <td><?php echo $row["contact_phone"] ?></td>
            <td><?php echo $row["contact_email"] ?></td>
            <td><?php echo $row["contact_desc"] ?></td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>
  <!-- End Contact Section -->
  </div> 

  <div class="w3-padding-32 w3-content w3-text-dark-grey" id="contact" style="margin-bottom:64px">
    <h2>Our Location</h2>
    <hr class="w3-opacity">

    <div class="w3-section">
      <p><i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right"></i> Gurun, Kedah</p>
      <p><i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"></i> Phone: +60147842881</p>
      <p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"> </i> Email: bookworm1602@gmail.com</p>
    </div>
  </div>
     
  
  <p>Want to join BWC? Fill in the form love!</p>
    <form action="received.php">
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Name" required name="Name"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Email" required name="Email"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="No Tel" required name="No Tel"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Address" required name="Address"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Message" required name="Message"></p>
      <p>
        <button class="w3-button w3-light-grey w3-padding-large" type="submit">
          <i class="fa fa-paper-plane"></i> REGISTER NOW
        </button>
      </p>
    </form>
<!-- END PAGE CONTENT -->
</div>

<script>
// Open and close sidebar
function openNav() {
  document.getElementById("mySidebar").style.width = "60%";
  document.getElementById("mySidebar").style.display = "block";
}

function closeNav() {
  document.getElementById("mySidebar").style.display = "none";
}
</script>

</body>
</html>
