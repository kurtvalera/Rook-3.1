<!DOCTYPE html>

<html lang="en">
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="Rook Digital Unlimited">
		<meta name="author" content="Kurt Valera">
		<title>Rook Digital Unlimited | Home</title>
		
		<!-- Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>

		<!-- Tailwind -->
		<script src="https://cdn.tailwindcss.com"></script>

		<!-- Custom ROOK CSS -->
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/s1.css" />
		<link rel="stylesheet" href="assets/css/s2.css" />
		<link rel="stylesheet" href="assets/css/s3.css" />
		<link rel="stylesheet" href="assets/css/s4.css" />
		<link rel="stylesheet" href="assets/css/s8.css" />
		<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		
		<!-- Owl Carousel -->
		
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>


<?php
    include ('html/section_1.html');
	include ('html/section_2.html');
	include ('html/section_3.html');
	include ('html/section_4.html');
	include ('html/section_5.html');
	include ('html/section_6.html');
	include ('html/section_7.html');
	include ('html/section_8.html');
	include ('html/section_9.html');
?>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="assets/js/nav.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script type="text/javascript">
	$('.owl-carousel-s3').owlCarousel({
		
		margin:10,
		responsiveClass:true,
		responsive:{
			0:{
				items:5,
				nav:true
			},
			600:{
				items:5,
				nav:false
			},
			1000:{
				items:5,
				nav:false,
				loop:false
			}
		}
	})
</script>
<script type="text/javascript">
	$('.owl-carousel-s5').owlCarousel({

    margin:10,
    responsiveClass:true,
    responsive:{
        0:{
            items:5,
            nav:true
        },
        600:{
            items:5,
            nav:false
        },
        1000:{
            items:8,
            nav:true,
            loop:false
        }
    }
})
</script>


<script type="text/javascript">
	$('.owl-carousel-s7').owlCarousel({
   loop:true,
    margin:10,
    nav:true,
	items:7
  
})
</script>
</body>
</html>
