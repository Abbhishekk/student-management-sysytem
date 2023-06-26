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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
    <link rel="icon" type="image/png" href="favicon.png">

    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>
    <!--Replace with your tailwind.css once created-->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" />
    <!-- Define your gradient here - use online tools to find a gradient matching your branding-->
    <style>
      html{
        scroll-behavior: smooth;
      }
      .gradient {
        background: linear-gradient(to right, #050505 0%, #fc850d 100%);
        
      }
    </style>
    <script>
      AOS.init();
    </script>
    
    
  </head>
  <body class="leading-normal tracking-normal text-white gradient"  style="font-family: 'Source Sans Pro', sans-serif;">
    <!--Nav-->
    <nav id="header" class="fixed w-full z-30 top-0 text-white">
      <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-2">
        <div class="pl-4 flex items-center">
          <a class="toggleColour text-white no-underline hover:no-underline font-bold text-2xl lg:text-4xl" href="index.php">
            
            <img src="images/ACETECH (2).png" alt="logo" class="h-16 fill-current inline">
            AceTech
          </a>
        </div>
        <div class="block lg:hidden pr-4">
          <button id="nav-toggle" class="flex items-center p-1 text-pink-800 text-xl hover:text-gray-900 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
            <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <title>Menu</title>
              <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
            </svg>
          </button>
        </div>
        <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden mt-2 lg:mt-0 bg-white lg:bg-transparent text-black p-4 lg:p-0 z-20" id="nav-content">
          <ul class="list-reset lg:flex justify-end flex-1 items-center">
            <li class="mr-3">
              <a class="inline-block py-2 px-4 text-black font-bold no-underline text-xl" href="index.php">Home</a>
            </li>
            <li class="mr-3">
              <a class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4 text-xl" href="index.php#about">About us</a>
            </li>
            <li class="mr-3">
              <a class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4 text-xl" href="index.php#service">Services</a>
            </li>
            <li class="mr-3">
              <a class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4 text-xl" href="index.php#internship">Internships</a>
            </li>
            <li class="mr-3 text-xl">
            <button id="dropdownHoverButton" data-dropdown-toggle="dropdownHover" data-dropdown-trigger="hover" class="text-black   font-medium rounded-lg px-4 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Verification <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
              <!-- Dropdown menu -->
              <div id="dropdownHover" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                  <ul class="py-2 text-gray-700 dark:text-gray-200" aria-labelledby="dropdownHoverButton">
                    <li>
                      <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Course</a>
                    </li>
                    <li>
                      <a href="intern_verification.php" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Internship</a>
                    </li>
                    <li>
                      <a href="student_verification.php" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Student</a>
                    </li>
                    
                  </ul>
              </div>
            </li>
            <li class="mr-3">
              <a class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4 text-xl" href="index.php#contact">Contact us</a>
            </li>
          </ul>
          
        </div>
      </div>
      <hr class="border-b border-gray-100 opacity-25 my-0 py-0" />
    </nav>
    <div class="mt-24"></div> 
      
    <div class="bg-white container m-auto flex justify-center border-b rounded-2xl py-14 mb-10 w-full" >
        <div 
        class="block w-full rounded-lg text-black transition ease-in-out delay-150  bg-white p-6 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
        <div class="m-10 w-full  mx-2 h-auto">
            <form action="internP.php" method="POST"> 
            <label for="id" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                </div>
                <input type="search" id="id" name="id" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter intern id" required>
                <button type="submit" name="submit" class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
            </div>
        </form>
        </div>
        <form method="post" action="submit.php" enctype="multipart/form-data" >
        <?php 
                                
                                $res = null;
                                if(isset($_POST['submit'])){
                                    $id = $_POST['id'];
                                    
                                    $id1 = substr($id,3);
                                    
                                   
                                    $result = $fun ->getInternsByID($id1);
                                    if(mysqli_num_rows($result) == 1){
                                        $res = mysqli_fetch_assoc($result);
                                    }
                                    else{
                                        echo "<p class='mr-24'>No intern found</p>";
                                        $res = null;
                                    }
                                }
                                

                            ?>
                            <div class="text-gray-700">
                                <div class="grid md:grid-cols-2 text-sm">
                                    <div class="grid grid-cols-2">
                                        <div class="px-4 py-2 font-semibold"> Name</div>
                                        <?php if($res != null){?>
                                        <div class="px-4 py-2"><?php echo $res['name'] ?></div>
                                        <?php } else {?>
                                        
                                        <div class="px-4 py-2">--nill--</div>
                                        <?php }?>
                                    </div>
                                    <div class="grid grid-cols-2">
                                        <div class="px-4 py-2 font-semibold">Email</div>
                                        <?php if($res != null){?>
                                        <div class="px-4 py-2"><?php echo $res['email'] ?></div>
                                        <?php } else {?>
                                        
                                        <div class="px-4 py-2">--nill--</div>
                                        <?php }?>
                                    </div>
                                    <div class="grid grid-cols-2">
                                        <div class="px-4 py-2 font-semibold">Gender</div>
                                        <?php if($res != null){?>
                                        <div class="px-4 py-2"><?php echo $res['gender'] ?></div>
                                        <?php } else {?>
                                        
                                        <div class="px-4 py-2">--nill--</div>
                                        <?php }?>
                                    </div>
                                    <div class="grid grid-cols-2">
                                        <div class="px-4 py-2 font-semibold">Contact No.</div>
                                        <?php if($res != null){?>
                                        <div class="px-4 py-2"><?php echo $res['phone_no.'] ?></div>
                                        <?php } else {?>
                                        
                                        <div class="px-4 py-2">--nill--</div>
                                        <?php }?>
                                    </div>
                                    <div class="grid grid-cols-2">
                                        <div class="px-4 py-2 font-semibold">City</div>
                                        <?php if($res != null){?>
                                        <div class="px-4 py-2"><?php echo $res['city'] ?></div>
                                        <?php } else {?>
                                        
                                        <div class="px-4 py-2">--nill--</div>
                                        <?php }?>
                                    </div>
                                    <div class="grid grid-cols-2">
                                        <div class="px-4 py-2 font-semibold">State</div>
                                        <?php if($res != null){?>
                                        <div class="px-4 py-2"><?php echo $res['state'] ?></div>
                                        <?php } else {?>
                                        
                                        <div class="px-4 py-2">--nill--</div>
                                        <?php }?>
                                    </div>
                                    <div class="grid grid-cols-2">
                                        <div class="px-4 py-2 font-semibold">College name</div>
                                        <?php if($res != null){?>
                                        <div class="px-4 py-2"><?php echo $res['clg_name'] ?></div>
                                        <?php } else {?>
                                        
                                        <div class="px-4 py-2">--nill--</div>
                                        <?php }?>
                                    </div>
                                    <div class="grid grid-cols-2">
                                        <div class="px-4 py-2 font-semibold">Internship domain</div>
                                        <?php if($res != null){?>
                                        <div class="px-4 py-2"><?php echo $res['i_domain'] ?></div>
                                        <?php } else {?>
                                        
                                        <div class="px-4 py-2">--nill--</div>
                                        <?php }?>
                                    </div>
                                    <div class="grid grid-cols-2">
                                        <div class="px-4 py-2 font-semibold">Internship type</div>
                                        <?php if($res != null){?>
                                        <div class="px-4 py-2"><?php echo $res['i_type'] ?></div>
                                        <?php } else {?>
                                        
                                        <div class="px-4 py-2">--nill--</div>
                                        <?php }?>
                                    </div>
                                    <div class="grid grid-cols-2">
                                        <div class="px-4 py-2 font-semibold">Internship duration</div>
                                        <?php if($res != null){?>
                                        <div class="px-4 py-2"><?php echo $res['i_duration'] ?></div>
                                        <?php } else {?>
                                        
                                        <div class="px-4 py-2">--nill--</div>
                                        <?php }?>
                                    </div>
                                    <div class="grid grid-cols-2">
                                        <div class="px-4 py-2 font-semibold">Internship resume</div>
                                        <?php if($res != null){?>
                                        <div class="px-4 py-2"> 
                                            <?php echo "<a href='uploads/".$res['resume']."' target = '_blank'>". $res['name']."'s Resume </a>"?>
                                            
                                        </div>
                                        <?php } else {?>
                                        
                                        <div class="px-4 py-2">--nill--</div>
                                        <?php }?>
                                    </div>
                                    <div class="grid grid-cols-2">
                                        <div class="px-4 py-2 font-semibold">Pay:</div>
                                        <?php if($res != null){?>
                                            <?php 
                                                if($res['i_duration'] == 1 && $res['i_type'] == 'work From Home'){
                                                    $amount = 150;
                                            ?>
                                            <div class="px-4 py-2">150 rs</div>
                                              <?php  }    
                                            ?>
                                            <?php 
                                                if($res['i_duration'] == 3 && $res['i_type'] == 'work From Home'){
                                                    $amount = 500;
                                            ?>
                                            <div class="px-4 py-2">500 rs</div>
                                              <?php  }    
                                            ?>
                                            <?php 
                                                if($res['i_duration'] == 6 && $res['i_type'] == 'work From Home'){
                                                    $amount = 1500;
                                            ?>
                                            <div class="px-4 py-2">1500 rs</div>
                                              <?php  }    
                                            ?>
                                        <?php } else {?>
                                        
                                        <div class="px-4 py-2">--nill--</div>
                                        <?php }?>
                                    </div>
                                </div>
                            </div>
                            
                        </div>



        </form>

      </div>
    </div>  
    
    <div class="mt-44"></div>
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
      var navaction = document.getElementById("navAction");
      var brandname = document.getElementById("brandname");
      var toToggle = document.querySelectorAll(".toggleColour");
      var b1 = document.getElementById('b1');
      
      document.getElementById('custom').addEventListener('click', function(event) {
        event.preventDefault();
      });
      document.getElementById('custom2').addEventListener('click', function(event) {
        event.preventDefault();
      });

      function hiddenAbility(num){
        var div = document.getElementById(num);
        if(num != 2){
          
          var div2 = document.getElementById(num + 1);
         
        }
        else{
          
          var div2 = document.getElementById(num - 1);
          
        }
          div.classList.add('hidden');
          div2.classList.remove('hidden');
      }

      document.addEventListener("scroll", function () {
        /*Apply classes for slide in bar*/
        scrollpos = window.scrollY;

        if (scrollpos > 10) {
          header.classList.add("bg-white");
          navaction.classList.remove("bg-white");
          navaction.classList.add("gradient");
          navaction.classList.remove("text-gray-800");
          navaction.classList.add("text-white");
          //Use to switch toggleColour colours
          for (var i = 0; i < toToggle.length; i++) {
            toToggle[i].classList.add("text-gray-800");
            toToggle[i].classList.remove("text-white");
          }
          header.classList.add("shadow");
          navcontent.classList.remove("bg-gray-100");
          navcontent.classList.add("bg-white");
        } else {
          header.classList.remove("bg-white");
          navaction.classList.remove("gradient");
          navaction.classList.add("bg-white");
          navaction.classList.remove("text-white");
          navaction.classList.add("text-gray-800");
          //Use to switch toggleColour colours
          for (var i = 0; i < toToggle.length; i++) {
            toToggle[i].classList.add("text-white");
            toToggle[i].classList.remove("text-gray-800");
          }

          header.classList.remove("shadow");
          navcontent.classList.remove("bg-white");
          navcontent.classList.add("bg-gray-100");
        }
      });
    </script>
    <script>
      /*Toggle dropdown list*/
      /*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8*/

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