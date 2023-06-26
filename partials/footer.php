</main>
<footer>
    <div class="upper-footer">
        <h4>Follow Us</h4>
        <h3>Sign Up fo our newsletter to get the latest updates.</h3>
        <h4>ENTER EMAIL ADDRESS</h4>
        <form method="post">
            <input type="text" name="newsletter" id="newsletter"><br>
            <button type="submit" name="newsletterBtn">Send</button>
        </form>
    </div>
    <div class="main-footer display-flex">
        <div class="img">
            <img src="<?php echo $base_url ?>assets/images/logo.webp" alt="">
        </div>
        <div class="content">
            Terms of Use <i class="fa-solid fa-circle fa-xs"></i> Privacy Notice <i
                class="fa-solid fa-circle fa-xs"></i> Cookie Policy <i class="fa-solid fa-circle fa-xs"></i> Do not sell
            or share my Personal Info <br>
            Licensing FAQ <i class="fa-solid fa-circle fa-xs"></i> Accessibility <i
                class="fa-solid fa-circle fa-xs"></i> Platform Status <br>
            Contact <i class="fa-solid fa-circle fa-xs"></i> Send us a Tip <i class="fa-solid fa-circle fa-xs"></i>
            Masthead <i class="fa-solid fa-circle fa-xs"></i> About Us <i class="fa-solid fa-circle fa-xs"></i> Press
            Room <br>
            Editorial Ethics and Guidelines
        </div>
    </div>
</footer>

<script src="<?php echo $base_url; ?>assets/js/app.js"></script>
<script src="<?php echo $base_url; ?>assets/js/vanilla-slider.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
</body>

</html>
<?php
if (isset($_POST["newsletterBtn"])) {
    $email = $_POST["newsletter"];

    $sender = $email;
    $recipient = 'newsletter@teamonemanagementgrp.com';

    $subject = "Email Submission";
    $message = "
              Customer Information
      Customer Email = $email
      "
    ;
    $headers = 'From:' . $sender;

    if (mail($recipient, $subject, $message, $headers)) {
        echo "
          <script>
              alert('Email Submitted')
          </script>
          ";
    } else {
        echo "
          <script>
              alert('Plz Try Again')
          </script>
          ";
    }

}
?>