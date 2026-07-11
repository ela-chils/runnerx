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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;800&display=swap" rel="stylesheet">


    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">



<style>


:root{

    --runner-blue:#0047ff;

    --runner-yellow:#ffd000;

    --runner-black:#050505;

    --runner-navy:#020617;

}



/* GLOBAL */

html{

    scroll-behavior:smooth;

}



body{

    font-family:'Poppins',sans-serif;

    background:var(--runner-black);

    color:white;

}





/* NAVBAR */


.bg-navy{

    background:transparent!important;

}



.navbar{

    background:rgba(5,5,5,.75)!important;

    backdrop-filter:blur(12px);

    transition:.3s ease;

}



.navbar.scrolled{


    background:#050505!important;


    box-shadow:

    0 5px 25px rgba(0,71,255,.5);


}



.navbar-brand{

    font-size:1.5rem;

    letter-spacing:1px;

}

.navbar .nav-link{
    color: white !important;
    padding: 8px 16px;
    border-radius: 10px;
    transition: all .3s ease;
}

.navbar .nav-link:hover{
    background: var(--runner-yellow);
    color: var(--runner-navy) !important;
}


/* TEXT */


.text-gold{

    color:var(--runner-yellow)!important;

}



.text-blue{

    color:var(--runner-blue)!important;

}



.glow-yellow{


    text-shadow:

    0 0 10px var(--runner-yellow),

    0 0 25px var(--runner-yellow);


}



.glow-blue{


    text-shadow:

    0 0 10px var(--runner-blue),

    0 0 25px var(--runner-blue);


}





/* BUTTON */


.btn-gold{


    background:var(--runner-yellow);

    color:#000;

    font-weight:700;

    border:none;

    padding:12px 30px;

    border-radius:30px;

    transition:.3s;


}



.btn-gold:hover{


    background:var(--runner-blue);

    color:white;

    transform:translateY(-3px);


}






.btn-outline-runner{


    border:2px solid var(--runner-yellow);

    color:var(--runner-yellow);

    padding:12px 30px;

    border-radius:30px;

    font-weight:600;


}



.btn-outline-runner:hover{


    background:var(--runner-yellow);

    color:#000;


}





/* HERO SECTION */

.hero-section{

    min-height:100vh !important;

    display:flex;

    align-items:center;

    padding-top:80px;


    background:

    linear-gradient(
        90deg,
        rgba(0,0,0,.9),
        rgba(0,71,255,.5)
    ),

    url("https://images.unsplash.com/photo-1552674605-db6ffd4facb5?auto=format&fit=crop&w=1600&q=80")


    center/cover no-repeat !important;

}



.hero-box{

    background:rgba(0,0,0,.65);

    border:1px solid var(--runner-yellow);

    padding:35px;

    border-radius:25px;

    color:white;


    backdrop-filter:blur(10px);


    box-shadow:

    0 0 30px rgba(0,71,255,.5);

}






/* SECTION */


.section-title{


    font-weight:800;

    text-transform:uppercase;

    letter-spacing:1px;


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

    padding:8px 18px;

    border-radius:20px;


}





/* CARD */


.runner-card{


    background:#0b0b0b;


    border:1px solid rgba(0,71,255,.6);


    color:white;


    transition:.3s;


}




.runner-card:hover{


    transform:translateY(-10px);


    box-shadow:


    0 0 30px rgba(0,71,255,.7);


}






.runner-event{


    background:#0b0b0b;


    border:1px solid rgba(255,208,0,.5);


    color:white;


    transition:.3s;


}




.runner-event:hover{


    transform:translateY(-10px);


    box-shadow:


    0 0 30px rgba(255,208,0,.5);


}


/* SEARCH EVENT */


.search-section{

    background:#050505;

    padding:70px 0;

}



.search-box{


    background:

    linear-gradient(

    135deg,

    #020617,

    #001f80

    );


    padding:40px;


    border-radius:25px;


    border:1px solid rgba(255,208,0,.5);


    box-shadow:


    0 0 30px rgba(0,71,255,.3);


}




.search-box h2{


    letter-spacing:1px;


}




.search-box .form-select{


    background:#050505;


    color:white;


    border:1px solid var(--runner-blue);


    padding:14px;


    border-radius:15px;


}



.search-box .form-select:focus{


    border-color:var(--runner-yellow);


    box-shadow:


    0 0 10px rgba(255,208,0,.5);


}



.search-box .form-select option{


    background:#050505;


    color:white;


}



/* FOOTER */


footer{


    background:#020617;


}






/* MOBILE */


@media(max-width:768px){


.hero-section{


    height:90vh;


}


}

/* IMAGE */
.event-image{

    width:100%;
    height:200px;
    object-fit:contain;
    background:#000;
    border-radius:15px;
    margin-bottom:15px;

}

/* HERO ANIMATION */

.hero-item {
    opacity:0;
    transform:translateY(40px);
    animation:heroFade 1s ease forwards;
}


.hero-item:nth-child(1){
    animation-delay:.2s;
}


.hero-item:nth-child(2){
    animation-delay:.4s;
}


.hero-item:nth-child(3){
    animation-delay:.6s;
}


.hero-item:nth-child(4){
    animation-delay:.8s;
}


.hero-item:nth-child(5){
    animation-delay:1s;
}



@keyframes heroFade{

    from{
        opacity:0;
        transform:translateY(40px);
    }


    to{
        opacity:1;
        transform:translateY(0);
    }

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

<script>
window.addEventListener('load', function () {

    const params = new URLSearchParams(window.location.search);

    if (params.get('scroll') === 'events') {

        const section = document.getElementById('events');

        if (section) {
            section.scrollIntoView({
                behavior: 'smooth'
            });
        }

    }

});
</script>

</body>

</html>