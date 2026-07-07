<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>RunnerX</title>


    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">


    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">


    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">


    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">



<style>

:root{

    --runner-blue:#0047ff;
    --runner-yellow:#ffd000;
    --runner-black:#050505;

}


/* BODY */

body{

    font-family:'Poppins',sans-serif;

    background:var(--runner-black);

}



/* NAVBAR */

.bg-navy{

    background:var(--runner-black)!important;

}


.navbar{

    transition:.3s ease;

}



.navbar.scrolled{

    background:#050505!important;

    box-shadow:
    0 5px 25px rgba(0,71,255,.5);

}



/* TEXT */

.text-gold{

    color:var(--runner-yellow)!important;

}


.text-navy{

    color:var(--runner-blue)!important;

}



/* BUTTON */

.btn-gold{

    background:var(--runner-yellow);

    color:#000;

    font-weight:700;

    border:none;

}



.btn-gold:hover{

    background:var(--runner-blue);

    color:white;

}



/* HERO */

.hero-section{

    height:100vh;

    background:

    linear-gradient(
        135deg,
        rgba(0,0,0,.9),
        rgba(0,71,255,.7)
    ),

    url('https://images.unsplash.com/photo-1552674605-db6ffd4facb5')

    no-repeat center center/cover;


    position:relative;

}



.hero-section .container{

    position:relative;

    z-index:2;

}




/* BLACK SECTION */

.bg-black-runner{

    background:#050505;

}



/* ABOUT */

.about-section{


    background:

    linear-gradient(

        135deg,

        #050505,

        #001f80

    );


}




.badge-runner{


    background:var(--runner-yellow);

    color:#000;

    font-weight:700;


}





/* ABOUT CARD */


.runner-card{


    background:#0b0b0b;


    border:1px solid var(--runner-blue);


    color:white;


    transition:.3s;


}



.runner-card:hover{


    transform:translateY(-8px);


    box-shadow:

    0 0 25px rgba(0,71,255,.7);


}




/* EVENT CARD */


.runner-event{


    background:#0b0b0b;


    border:1px solid rgba(255,208,0,.5);


    color:white;


    transition:.3s;


}



.runner-event:hover{


    transform:translateY(-8px);


    box-shadow:

    0 0 25px rgba(255,208,0,.5);


}



/* CARD GLOBAL */

.card{


    transition:.3s ease;


}




/* ABOUT POSITION */

#about{


    padding-top:100px;


}


#about h2{


    line-height:1.2;


}



</style>


</head>



<body>



    @include('components.navbar')



    @yield('content')



    @include('components.footer')





    <!-- Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>



    <!-- AOS JS -->

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>



<script>


AOS.init({

    duration:1000,

    once:true

});


</script>




<script>


window.addEventListener("scroll",function(){


    const navbar=document.querySelector(".navbar");



    if(window.scrollY > 50){


        navbar.classList.add("scrolled");


    }

    else{


        navbar.classList.remove("scrolled");


    }



});


</script>



</body>


</html>