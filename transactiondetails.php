<?php


require_once ("db.php");
require_once("addcust.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    
        <link rel="stylesheet" href="assets/css/styles.css">

        <!-- =====BOX ICONS===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <title>All Citizens Bank</title>
        
    </head>
    <body>
        <!--===== HEADER =====-->
        <header class="l-header">
            <nav class="nav bd-grid">
                <div>
                    <a href="index.html" class="nav__logo">All Citizens Bank</a>
                </div>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="index.html" class="nav__link active">Home</a></li>
                        <li class="nav__item"><a href="customerdetails.php" class="nav__link">Customer Details</a></li>
                        <li class="nav__item"><a href="transactiondetails.php" class="nav__link">Transaction Details</a></li>
                        
                    </ul>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </nav>
        </header>

<main>
     <section class="contact section" id="contact">
                <h2 class="section-title">Transfer Money</h2>

                <div class="contact__container bd-grid">
                    <form action="transactionupdate.php" method="POST" class="contact__form" >
                        <input type="text" placeholder="Your ID" class="contact__input" name="yid">
                         <input type="text" placeholder="Your Name" class="contact__input" name="yname">
                         <input type="text" placeholder="Receiver's ID" class="contact__input" name="sid">
                         <input type="text" placeholder="Receiver's Name" class="contact__input" name="sname">
                          <input type="text" placeholder="Amount to be Transferred" class="contact__input" name="tamount">
                         <input type="submit" value="Transfer" class="contact__button button" name="tsubmit">
                    </form>

                </div>
            </section>
 

<section>
 <h2 class="section-title">Recently ADDED</h2>

    <table>
  <caption>Recent Transactions</caption>
  <thead>
    <tr>
      <th scope="col">Transaction ID</th>
      <th scope="col">Sender's Name</th>
      <th scope="col">Receiver's Name</th>
      <th scope="col">Amount Transferred</th>
      <th scope="col">Transaction Date and Time</th>
      
    </tr>
  </thead>
  <tbody>
      <?php
        $sql = "SELECT id,sender_Name, receiver_Name ,transferred_amount ,creation_date FROM transaction ORDER BY creation_date";
        $result = mysqli_query($con, $sql);
        while( $row = mysqli_fetch_assoc($result)) :
      ?>
      <tr>
            <!--Each table column is echoed in to a td cell-->
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['sender_Name']; ?></td>
            <td><?php echo $row['receiver_Name']; ?></td>
            <td><?php echo $row['transferred_amount']; ?></td>
           <td><?php echo $row['creation_date']; ?></td>
      </tr>
      <?php endwhile ?>
      </tbody>

</table>

</section>




 <section class="work section" id="work">
                <h2 class="section-title">Work</h2>

                <div class="work__container bd-grid">
                    <div class="work__img">
                        <img src="assets/img/work1.jpg" alt="">
                    </div>
                    <div class="work__img">
                        <img src="assets/img/work2.jpg" alt="">
                    </div>
                    <div class="work__img">
                        <img src="assets/img/work3.jpg" alt="">
                    </div>
                    <div class="work__img">
                        <img src="assets/img/work4.jpg" alt="">
                    </div>
                    <div class="work__img">
                        <img src="assets/img/work5.jpg" alt="">
                    </div>
                    <div class="work__img">
                        <img src="assets/img/work6.jpg" alt="">
                    </div>
                </div>
            </section>




<footer class="footer">
            <p class="footer__title">Thank You</p>
            <div class="footer__social">
                <a href="#" class="footer__icon"><i class='bx bxl-linkedin' ></i></a>
                <a href="#" class="footer__icon"><i class='bx bxl-instagram' ></i></a>
                <a href="#" class="footer__icon"><i class='bx bxl-facebook' ></i></a>
            </div>
            <p>&#169; 2020 copyright all right reserved</p>
             <p>References<br>Pictures and illustrations: Unsplash <br>Design: Bedimcode</p>
        </footer>


        <!--===== SCROLL REVEAL =====-->
        <script src="https://unpkg.com/scrollreveal"></script>

        <!--===== MAIN JS =====-->
        <script src="assets/js/main.js"></script>
    </body>
</html>