<?php 
  include 'db.php';
  include 'fun.php';

  $connect=new connect();
  $fun=new fun($connect->dbconnect());
 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>
      Acetech
    </title>
    <meta name="description" content="Simple landind page" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>
    <!--Replace with your tailwind.css once created-->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" />
    <!-- Define your gradient here - use online tools to find a gradient matching your branding-->
    <style>
      html{
        scroll-behavior: smooth;
        overflow-x: hidden;
        
      }
      *{
        font-family: 'Times New Roman', Times, serif;
      }
      body{
        overflow: hidden;
        
      }
      .gradient {
        background: linear-gradient(to right, #050505 0%, #fc850d 100%);
        background-repeat: no-repeat;
        background-size: contain ;
        
        
      }
    </style>
    
    
  </head>
 
  <body class="leading-normal tracking-normal text-white gradient "  style="font-family: 'Source Sans Pro', sans-serif;">
    <!--Nav-->
    
    <nav id="header" class=" grid fixed w-full z-30 top-0 ">
      <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-2">
        <div class="pl-4 flex items-center">
          <a class="toggleColour text-white  no-underline hover:no-underline font-bold text-2xl lg:text-4xl" id="toggleColour" href="index.php">
            
            <img src="images/ACETECH (2).png" alt="logo" class="h-16 fill-current inline">
            AceTech
          </a>
        </div>
        <div class=" lg:hidden pr-4 justify-self-end">
          <button id="nav-toggle" class="flex items-center p-1 text-pink-800 text-xl hover:text-gray-900 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
            <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <title>Menu</title>
              <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
            </svg>
          </button>
        </div>
        <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden mt-2 lg:mt-0 bg-white lg:bg-transparent text-black p-4 lg:p-0 z-20 text-l  xl:text-xl" id="nav-content">
          <ul class="list-reset lg:flex justify-end flex-1 items-center">
            <li class="mr-3">
              <a class="inline-block py-2 px-4 text-black font-bold no-underline" href="#">Home</a>
            </li>
            <li class="mr-3">
              <a class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4 " href="#about">About us</a>
            </li>
            <li class="mr-3">
              <a class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4 " href="#service">Services</a>
            </li>
            <li class="mr-3">
              <a class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4 " href="#internship">Internships</a>
            </li>
            <li class="mr-3">
                 <a href="courses.php" class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4 ">Course</a>
            </li>
            <li class="mr-3 ">
            <button id="dropdownHoverButton" data-dropdown-toggle="dropdownHover" data-dropdown-trigger="hover" class="text-black   font-medium rounded-lg px-4 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Verification <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
              <!-- Dropdown menu -->
              <div id="dropdownHover" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                  <ul class="py-2 text-gray-700 dark:text-gray-200" aria-labelledby="dropdownHoverButton">
                   
                    <li>
                      <a href="intern_verification.php" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Internship</a>
                    </li>
                    <li>
                      <a href="student_verification.php" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Student</a>
                    </li>
                    
                  </ul>
              </div>
            </li>
            <li class="mr-0">
              <a class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4 " href="#contact">Contact us</a>
            </li>
          </ul>
          
        </div>
      </div>
      <hr class="border-b border-gray-100 opacity-25 my-0 py-0" />
    </nav>
    <!--Hero-->
    <div class="pt-24">
      <div class="container px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center">
        <!--Left Col-->
        <div class="flex flex-col w-full md:w-2/5 justify-center items-start text-center md:text-left">
          
          <h1 class="my-4 text-5xl font-bold leading-tight">
            Ace your carrer with AceTech!
          </h1>
          <p class="leading-tight text-xl mb-8 ">
            Above Computer Education(ACE)!
          </p>
          <a href="#about" class="mx-auto lg:mx-0 text-xl  bg-white text-gray-800 font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
            read more
          </a>
        </div>
        <!--Right Col-->
        <div class="w-full md:w-3/5 py-6 text-center">
          <img class="w-full md:w-4/5 z-50" src="images/hero.png" data-aos="fade-down" />
        </div>
      </div>
    </div>
    <div class="relative -mt-12 lg:-mt-24">
      <svg viewBox="0 0 1428 174" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
          <g transform="translate(-2.000000, 44.000000)" fill="#FFFFFF" fill-rule="nonzero">
            <path d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496" opacity="0.100000001"></path>
            <path
              d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z"
              opacity="0.100000001"
            ></path>
            <path d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z" id="Path-4" opacity="0.200000003"></path>
          </g>
          <g transform="translate(-4.000000, 76.000000)" fill="#FFFFFF" fill-rule="nonzero">
            <path
              d="M0.457,34.035 C57.086,53.198 98.208,65.809 123.822,71.865 C181.454,85.495 234.295,90.29 272.033,93.459 C311.355,96.759 396.635,95.801 461.025,91.663 C486.76,90.01 518.727,86.372 556.926,80.752 C595.747,74.596 622.372,70.008 636.799,66.991 C663.913,61.324 712.501,49.503 727.605,46.128 C780.47,34.317 818.839,22.532 856.324,15.904 C922.689,4.169 955.676,2.522 1011.185,0.432 C1060.705,1.477 1097.39,3.129 1121.236,5.387 C1161.703,9.219 1208.621,17.821 1235.4,22.304 C1285.855,30.748 1354.351,47.432 1440.886,72.354 L1441.191,104.352 L1.121,104.031 L0.457,34.035 Z"
            ></path>
          </g>
        </g>
      </svg>
    </div>
    <section class="bg-white border-b py-8 w-full" id="about">
      <div class="container max-w-5xl mx-auto m-8">
        <h2 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
          About us
        </h2>
        <div class="w-full mb-4">
          <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
        </div>
        <div class="flex flex-wrap">
          <div class="w-5/6 sm:w-1/2 p-6">
            <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3">
              Unlock Your Potential with us
            </h3>
            <p class="text-gray-600 text-xl mb-8">
              coding skills have become increasingly valuable across various industries. Whether you aspire to become a software developer, enhance your problem-solving abilities, or simply gain a deeper understanding of technology, our coding classes provide a transformative learning experience. As a leading provider of coding education, we offer engaging and comprehensive classes designed to empower individuals of all backgrounds to master the art of coding and unleash their full potential in the world of technology.
              <br />
              <br />

            </p>
          </div>
          <div class="w-full sm:w-1/2 p-6"  data-aos="fade-left"  >
            <img src="images/5236.jpg" alt="coding" class="w-full sm:h-64 mx-auto  rounded-2xl">
          </div>
        </div>
        <div class="flex flex-wrap flex-col-reverse sm:flex-row">
          <div class="w-full sm:w-1/2 p-6 mt-6" data-aos="fade-right">
            <img src="images/971.jpg" alt="coding" class="w-full sm:h-64 mx-auto border rounded-2xl">
          </div>
          <div class="w-full sm:w-1/2 p-6 mt-6">
            <div class="align-middle">
              <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3">
                Elevate Your Business
              </h3>
              <p class="text-gray-600 text-xl mb-8">
                In the digital landscape, a strong and impactful online presence is vital for businesses of all sizes. A well-designed and functional website serves as the cornerstone of your online identity, enabling you to attract, engage, and convert potential customers. As a trusted provider of web development solutions, we specialize in delivering innovative and cutting-edge services that empower your business in the digital realm. 
                <br />
                <br />
                
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="bg-white border-b py-8" id="service">
      <div class="container mx-auto flex flex-wrap pt-4 pb-12">
        <h2 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
          Services
        </h2>
        <div class="w-full mb-4">
          <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
        </div>
        <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
          <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow">
            <a href="#" class="flex flex-wrap no-underline hover:no-underline">
              <p class="w-full text-gray-600 text-md  px-6">
                Teaching
              </p>
              <div class="w-full font-bold text-2xl text-gray-800 px-6">
                Unlock Your Web Development Potential
              </div>
              
              <p class="text-gray-800 text-xl px-6 mb-5">
                Whether you're a professional seeking to enhance your skillset or an aspiring web developer looking to embark on a fulfilling career, our web development classes offer a comprehensive learning experience to unlock your potential. With a focus on hands-on training, industry best practices, and the latest technologies, our classes are designed to equip you with the knowledge and skills needed to succeed in the dynamic world of web development.
              </p>
            </a>
          </div>
          <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6">
            <div class="flex items-center justify-start">
              <a href="#contact" class="mx-auto lg:mx-0 text-xl  gradient text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                <button class="font-bold">
                   Contact
                </button>
              </a>
            </div>
          </div>
        </div>
        <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
          <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow">
            <a href="#" class="flex flex-wrap no-underline hover:no-underline">
              <p class="w-full text-gray-600 text-md  px-6">
                Project
              </p>
              <div class="w-full font-bold text-2xl text-gray-800 px-6">
                Elevate Your Business with Innovative Web Development Solutions
              </div>
              <p class="text-gray-800 text-xl px-6 mb-5">
                In the digital landscape, a strong and impactful online presence is vital for businesses of all sizes. A well-designed and functional website serves as the cornerstone of your online identity, enabling you to attract, engage, and convert potential customers. As a trusted provider of web development solutions, we specialize in delivering innovative and cutting-edge services that empower your business in the digital realm.
              </p>
            </a>
          </div>
          <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6">
            <div class="flex items-center justify-center">
              <a href="#contact" class="mx-auto lg:mx-0 text-xl  gradient text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                <button class="font-bold">
                   Contact
                </button>
              </a>
            </div>
          </div>
        </div>
        <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
          <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow">
            <a href="#" class="flex flex-wrap no-underline hover:no-underline">
              <p class="w-full text-gray-600 text-l md:text-sm px-6">
                Teaching
              </p>
              <div class="w-full font-bold text-2xl text-gray-800 px-6 py-2">
                Master Programming Languages.
              </div>
              <p class="text-gray-800 text-xl px-6 mb-5">
                Programming languages are the building blocks of the digital world, enabling developers to create innovative software, websites, and applications. Whether you're a beginner taking your first steps into coding or an experienced programmer seeking to expand your language repertoire, our programming language classes provide a comprehensive learning experience.
              </p>
            </a>
          </div>
          <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6">
            <div class="flex items-center justify-end">
              <a href="#contact" class="mx-auto lg:mx-0 text-xl  gradient text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                <button class="font-bold">
                   Contact
                </button>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="bg-gray-100 py-8" id="internship">
      <?php 
        
        
        $query = $fun->getAllInternships();
        
      ?>
      <div class="container mx-auto px-2 pt-4 pb-12 text-gray-800">
        <h2 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
          Internships
        </h2>
        <div class="w-full mb-4">
          <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
        </div>
        
          <div class="flex grid xl:grid-cols-3 md:grid-cols-2 justify-center xl:gap-10  md:gap-5 gap-0 pt-12 my-12 sm:my-4">
          <?php 
          if(mysqli_num_rows($query)>0){
              while($res = mysqli_fetch_assoc($query)){
        ?>
          <div class="flex flex-col w-auto mx-auto lg:mx-0 rounded-none lg:rounded-l-lg bg-white mt-4" data-aos="flip-left">
            <div class="flex-1 bg-white w-56 text-gray-600 rounded-t md:w-96 rounded-b-none overflow-hidden shadow">
              <div class="p-8 text-3xl font-bold text-center border-b-4">
                <?php echo $res['name'];
                      $perks = explode(",", $res['perks']);
                ?>
              </div>
              <p class="p-4 text-xl font-bold  border" >Perks:</p>
              <ul class="w-full text-center text-md">
                <?php 
                  foreach($perks as $perk){
                ?>
                <li class="border-b py-4"><?php echo $perk?></li>
                <?php   }
                ?>
                <li class="border-b py-4"><?php echo $res['type']?></li>
              </ul>
              <p class="p-4 text-xl font-bold  border" >Duration:</p>
              <ul class="flex  w-full text-center text-md m-2 ">
                <li class="text-center py-4 mx-4"><?php echo $res['duration']." month"?></li>
              </ul>
              <p class="p-4 text-xl font-bold  border" >Skills:</p>
              <ul class="flex gap-1 w-full text-center text-md m-2 border-b">
                <li class="text-center py-4 mx-4"><?php echo $res['skills']?></li>
                
              </ul>
            </div>
            <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6">
              
              <div class="flex items-center justify-center">
                <a href="form.php" class="mx-auto lg:mx-0 text-xl gradient text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                <button class="font-bold">
                   Apply
                </button>
              </a>
              </div>
            </div>
          </div>
        <?php  }


          }?>
       
        
      </div>
      </div>
    </section>
    <!-- Change the colour #f8fafc to match the previous section colour -->
    <svg class="wave-top" viewBox="0 0 1439 147" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g transform="translate(-1.000000, -14.000000)" fill-rule="nonzero">
          <g class="wave" fill="#f8fafc">
            <path
              d="M1440,84 C1383.555,64.3 1342.555,51.3 1317,45 C1259.5,30.824 1206.707,25.526 1169,22 C1129.711,18.326 1044.426,18.475 980,22 C954.25,23.409 922.25,26.742 884,32 C845.122,37.787 818.455,42.121 804,45 C776.833,50.41 728.136,61.77 713,65 C660.023,76.309 621.544,87.729 584,94 C517.525,105.104 484.525,106.438 429,108 C379.49,106.484 342.823,104.484 319,102 C278.571,97.783 231.737,88.736 205,84 C154.629,75.076 86.296,57.743 0,32 L0,0 L1440,0 L1440,84 Z"
            ></path>
          </g>
          <g transform="translate(1.000000, 15.000000)" fill="#FFFFFF">
            <g transform="translate(719.500000, 68.500000) rotate(-180.000000) translate(-719.500000, -68.500000) ">
              <path d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496" opacity="0.100000001"></path>
              <path
                d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z"
                opacity="0.100000001"
              ></path>
              <path d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z" opacity="0.200000003"></path>
            </g>
          </g>
        </g>
      </g>
    </svg>
    <section class="container mx-auto text-center py-6 mb-12" id="contact">
      <h2 class="w-full my-2 text-5xl font-bold leading-tight text-center text-white">
        Contact us
      </h2>
      <div class="w-full mb-4">
        <div class="h-1 mx-auto bg-white w-1/6 opacity-25 my-0 py-0 rounded-t"></div>
      </div>
      <h3 class="my-4 text-2xl leading-tight">
        What are you waiting for contact us to make your buisness scalable with Ace Technologies.
      </h3>
      <div class="bg-transparent border-b w-full flex justify-center" >
        <div 
        class="block w-full rounded-lg text-white text-2xl text-bold bg-transparent p-6 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
        <form method="post" action="index.php#contact">
          <!--Name input-->
          <div class="relative mb-6" >
            <input
              type="text"
              name="name"
              class="peer block min-h-[auto] w-full rounded border-b bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
              id="exampleInput7"
              placeholder="Name" required />
            
          </div>
      
          <!--Email input-->
          <div class="relative mb-6" >
            <input
              type="email"
              name="email"
              class="peer block min-h-[auto] w-full rounded border-b bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
              id="exampleInput8"
              placeholder="Email address" required />
            
          </div>
      
          <!--Message textarea-->
          <div class="relative mb-6 w-full" >
            <textarea
              class="peer block min-h-[auto] w-full rounded border-b bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
              id="exampleFormControlTextarea13"
              rows="3"
              name="message"
              placeholder="Message" required></textarea>
            
          </div>
          <!--Submit button-->
          <button
            type="submit"
            class="dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]] text-l text-bold border-2 inline-block  rounded  px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-black-600 hover:bg-white hover:text-black focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
             >
            Send
          </button>
          <div class="relative mb-6 w-full">
              <?php
                
                if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])){
                  $name = $_POST['name'];
                  $email = $_POST['email'];
                  $message = $_POST['message'];
                  $sql = $fun->insertContactDetails($name,$email,$message);
                  
                  if($sql){
                    echo "<p>Sent successfully!</p><p>We will contact you.</p>";
                  } 
                  else{
                    echo "Error occured";
                  }
                }
                
              ?>
          </div>
        </form>
      </div>
    </div>
    </section>
    <!--Footer-->
    <footer class="bg-white">
      <div class="container mx-auto px-8">
        <div class="w-full flex flex-col md:flex-row py-6">
          <div class="flex-1 mb-6 text-black">
            <a class=" no-underline hover:no-underline font-bold text-2xl lg:text-4xl " style="color: #FC850D;" href="#">
              
              <img src="images/ACETECH (2).png" alt="logo"  class="h-16 fill-current inline">
              AceTech
            </a>
          </div>
          <div class="flex-1">
            <p class="uppercase text-gray-500 md:mb-6">Links</p>
            <ul class="list-reset mb-6">
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">FAQ</a>
              </li>
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Help</a>
              </li>
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Support</a>
              </li>
            </ul>
          </div>
          <div class="flex-1">
            <p class="uppercase text-gray-500 md:mb-6">Legal</p>
            <ul class="list-reset mb-6">
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Terms</a>
              </li>
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Privacy</a>
              </li>
            </ul>
          </div>
          <div class="flex-1">
            <p class="uppercase text-gray-500 md:mb-6">Social</p>
            <ul class="list-reset mb-6">
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a href="https://www.instagram.com/acetechnology49/" target="_blank" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Instagram</a>
              </li>
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Linkedin</a>
              </li>
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Twitter</a>
              </li>
            </ul>
          </div>
          <div class="flex-1">
            <p class="uppercase text-gray-500 md:mb-6">Company</p>
            <ul class="list-reset mb-6">
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Official Blog</a>
              </li>
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">About Us</a>
              </li>
              <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <a href="index.php" class="no-underline  text-gray-800 hover:text-pink-500 flex justify-center">Ace technologies</a>
    </footer>
    
    <!-- jQuery if you need it
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  -->
    <script>
      var scrollpos = window.scrollY;
      var header = document.getElementById("header");
      var navcontent = document.getElementById("nav-content");
      
      
      var toToggle = document.getElementById("toggleColour");

      document.addEventListener("scroll", function () {
        /*Apply classes for slide in bar*/
        scrollpos = window.scrollY;

        if (scrollpos > 10) {
          header.classList.add("bg-white");
          
          //Use to switch toggleColour colours
          toToggle.classList.remove("text-white");
          toToggle.classList.add("text-black");
          
          
          header.classList.add("shadow");
          navcontent.classList.remove("bg-gray-100");
          navcontent.classList.add("bg-white");
        } else {
          header.classList.remove("bg-white");
          
          //Use to switch toggleColour colours
          toToggle.classList.remove("text-black");
            toToggle.classList.add("text-white");
            
          

          header.classList.remove("shadow");
          navcontent.classList.remove("bg-white");
          navcontent.classList.add("bg-gray-100");
        }
      });
    </script>
    <script>
      

      var navMenuDiv = document.getElementById("nav-content");
      var navMenu = document.getElementById("nav-toggle");

      document.onclick = check;
      function check(e) {
        var target = (e && e.target) || (event && event.srcElement);

        //Nav Menu
        if (!checkParent(target, navMenuDiv)) {
          // click NOT on the menu
          if (checkParent(target, navMenu)) {
            // click on the link
            if (navMenuDiv.classList.contains("hidden")) {
              navMenuDiv.classList.remove("hidden");
            } else {
              navMenuDiv.classList.add("hidden");
            }
          } else {
            // click both outside link and outside menu, hide menu
            navMenuDiv.classList.add("hidden");
          }
        }
      }
      function checkParent(t, elm) {
        while (t.parentNode) {
          if (t == elm) {
            return true;
          }
          t = t.parentNode;
        }
        return false;
      }
    </script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({
      duration: 1200,
    });
  </script>
  </body>
</html>
