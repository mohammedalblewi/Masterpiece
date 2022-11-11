<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Master - Contact</title>
    <?php require ('inc/links.php'); ?>
  
</head>
<body class="bg-light">


<?php require ('inc/header.php');?>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">CONTACT US</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam
            ea amet possimus <br> minus id! Excepturi laudantium esse 
            blanditiis est molestiae.
        </p>
    </div>

    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4">
                    <iframe class="w-100 rounded mb-4" height="320" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d433869.38330790447!2d35.9476308!3d31.83576035!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151b5fb85d7981af%3A0x631c30c0f8dc65e8!2z2LnZhdmR2KfZhg!5e0!3m2!1sar!2sjo!4v1667412597765!5m2!1sar!2sjo"   loading="lazy"></iframe>
                     <h5> Address </h5>
                     <a href="https://goo.gl/maps/jkNGMnL7VUMNTgiMA" target="_blank" class="d-inline-block text-decoration-none text-dark mb-2">
                     <i class="bi bi-geo-alt-fill"></i> XYZ,location
                     </a>   

                        <h5 class="mt-4">Call Us</h5>
                        <a href="tel: +9620778084936" class="d-inline-block text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i> +9620778084936
                        </a>

                        <br>

                        <a href="tel: +9620778084936" class="d-inline-block text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i> +9620778084936
                        </a>

                        <h5 class="mt-4">Email</h5>
                        <a href="mailto: ask.alblewi@gmail.com" class="d-inline-block text-decoration-none text-dark">
                        <i class="bi bi-envelope-fill"></i> ask.alblewi@gmail.com
                        </a>

                        <h5 class="mt-4">Follow Us</h5>
                        <a href="#" class="d-inline-block text-dark fs-5 me-2">
                        <i class="bi bi-twitter me-1"></i> 
                        </a>   

                        <a href="#" class="d-inline-block text-dark fs-5 me-2">
                            <i class="bi bi-facebook me-1"></i> 
                        </a>

                        <a href="#" class="d-inline-block text-dark fs-5">
                            <i class="bi bi-instagram me-1"></i> 
                        </a>
                </div>
            </div>


            <div class="col-lg-6 col-md-6  px-4">
                <div class="bg-white rounded shadow p-4 ">
                    <form action="">
                        <h5>Send a Message</h5>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Name</label>
                            <input type="text" class="form-control shadow-none">
                       </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Email</label>
                            <input type="email" class="form-control shadow-none">
                       </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Subject</label>
                            <input type="text" class="form-control shadow-none">
                       </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Message</label>
                            <textarea class="form-control shadow-none" rows="5" style="resize: none;"></textarea>
                       </div>
                       <button type="submit" class="btn text-white custom-bg mt-3 ">SEND</button>
                    </form>
                   
                </div>
            </div>


            
        </div>
    </div>
  
 <?php require ('inc/footer.php'); ?>
  


   
</body>
</html>