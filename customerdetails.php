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
                <h2 class="section-title">Customer Details</h2>

                <div class="contact__container bd-grid">
                    <form action="addcust.php" method="POST" class="contact__form" >
                        <input type="text" placeholder="ID" class="contact__input" name="cid">
                        <input type="mail" placeholder="Email" class="contact__input" name="cmail">
                          <input type="text" placeholder="Name" class="contact__input" name="cname">
                          <input type="text" placeholder="Balance" class="contact__input" name="cbal">
                         <input type="submit" value="ADD" class="contact__button button" name="submit">
                    </form>
                </div>
            </section>

</main>

<section>
    <table>
  <caption>Active Customers</caption>
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Balance</th>
      
      
    </tr>
  </thead>
  <tbody>
      <?php
        $sql = "SELECT id, customer_name, customer_email, customer_balance FROM acbank";
        $result = mysqli_query($con, $sql);
        while( $row = mysqli_fetch_assoc($result)) :
      ?>
      <tr>
            <!--Each table column is echoed in to a td cell-->
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['customer_name']; ?></td>
            <td><?php echo $row['customer_email']; ?></td>
            <td><?php echo $row['customer_balance']; ?></td>
           
      </tr>
      <?php endwhile ?>
      </tbody>

</table>

</section>

<section class="about section " id="about">
                <h2 class="section-title">Recently ADDED</h2>
                <?php
                 $sql = "SELECT id, customer_name, customer_email, customer_balance FROM acbank where id=(SELECT max(id) FROM customer)";
                  $result = mysqli_query($con, $sql);
                  while( $row = mysqli_fetch_assoc($result)) :
                  ?>
                <div class="about__container bd-grid">
                    <div class="about__img">
                        <img src="assets/img/about.jpg" alt="">
                    </div>
                    
                    <div>
                        <h2 class="about__subtitle"><?php echo $row['customer_name']; ?></h2>
                        <h2 class="about__subtitle"><?php echo $row['id']; ?></h2>
                        <h2 class="about__subtitle"><?php echo $row['customer_email']; ?></h2>
                        <h2 class="about__subtitle">$<?php echo $row['customer_balance']; ?></h2>
                        <p class="about__text">We thank you for trusting us!</p>           
                    </div>  
                    <?php endwhile?>                                 
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