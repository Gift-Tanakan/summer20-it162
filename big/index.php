<?php include "includes/header.php";?>
<h3>Client Questionnaire</h3>
<!-- MAKE SURE YOU GET YOUR (3) IMAGES SAVED INTO YOUR IMAGES FOLDER -->


<p>Please answer some simple questions below, so that we know how to serve you better about building your brand online!</p>


<?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "tanakan.gth@gmail.com";  //place your/your client's email address here
        $toName = "Gift Homsaen"; //place your client's name here
        $website = "Contact Form Test";  //place NAME of your client's website

//        echo loadContact('simple.php');#demonstrates a simple contact form
        echo loadContact('multiple.php');#demonstrates multiple form elements

	?>
 

</section>
<!-- END LEFT COL -->

<!-- START RIGHT COL -->
<aside>
    <h3 >Basic Website Design Cycle</h3>

    <p><a href="https://www.columnfivemedia.com/how-to-create-a-brand-identity" target="_blank">- How to Create a Powerful Brand Identity (A Step-by-Step Guide)</a></p>
    
    <p><a href="https://www.entrepreneur.com/article/78952" target="_blank">- Creating a Website for Your Service Business (Strategies)</a></p>
    
    <p><a href="https://vintage.agency/blog/12-great-small-business-website-examples/" target="_blank">- TOP 11 Best Small Business Websites Design</a></p>  

</aside>
<!-- END RIGHT COL -->

<?php include "includes/footer.php";?>