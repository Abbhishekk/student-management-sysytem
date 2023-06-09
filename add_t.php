<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Css -->
    <link rel="stylesheet" href="./dist/styles.css">
    <link rel="stylesheet" href="./dist/all.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600,600i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" />
    <title>AceTech</title>
</head>

<body>
    <!--Container -->
    <div class="mx-auto bg-gray-300est">
        <!--Screen-->
        <div class="min-h-screen flex flex-col">
            <!--Header Section Starts Here-->
            <header class="bg-nav">
                <div class="flex justify-between">
                    <div class="p-1 mx-3 inline-flex items-center">
                        <i class="fas fa-bars pr-2 text-white" onclick="sidebarToggle()"></i>
                        <h1 class="text-white p-2">Logo</h1>
                    </div>
                    <div class="p-1 flex flex-row items-center">
                    <img onclick="profileToggle()" class="inline-block h-8 w-8 rounded-full"
                            src="img/ACETECH (2).png" alt="logo">
                        <a href="#" onclick="profileToggle()"
                            class="text-white p-2 no-underline hidden md:block lg:block">Adam Wathan</a>
                        <div id="ProfileDropDown"
                            class="rounded hidden shadow-md bg-white absolute top-0 mt-12 mr-1 right-0">
                            <ul class="list-reset">
                                <li><a href="#" class="no-underline px-4 py-2 block text-black hover:bg-gray-300">My
                                        account</a></li>
                                <li><a href="#"
                                        class="no-underline px-4 py-2 block text-black hover:bg-gray-300">Notifications</a>
                                </li>
                                <li>
                                    <hr class="border-t mx-2 border-gray-ligght">
                                </li>
                                <li><a href="#"
                                        class="no-underline px-4 py-2 block text-black hover:bg-gray-300">Logout</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </header>
            <!--/Header-->

            <div class="flex flex-1">
                <!--Sidebar-->
                <aside id="sidebar" class="bg-side-nav w-1/2 md:w-1/6 lg:w-1/6 border-r border-side-nav hidden md:block lg:block">
    
                    <ul class="list-reset flex flex-col">
                        <li class=" w-full h-full py-3 px-2 border-b border-light-border ">
                            <a href="index.php"
                               class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                                <i class="fas fa-tachometer-alt float-left mx-2"></i>
                                Dashboard
                                <span><i class="fas fa-angle-right float-right"></i></span>
                            </a>
                        </li>
                        <li class="w-full h-full py-3 px-2 border-b border-light-border ">
                            <a href="add_student.php"
                               class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                                <i class="fab fa-wpforms float-left mx-2"></i>
                                Add Student
                                <span><i class="fa fa-angle-right float-right"></i></span>
                            </a>
                        </li>
                        <li class="w-full h-full py-3 px-2 border-b border-light-border">
                            <a href="view_s.php"
                               class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                                <i class="fas fa-grip-horizontal float-left mx-2"></i>
                                View Students
                                <span><i class="fa fa-angle-right float-right"></i></span>
                            </a>
                        </li>
                        <li class="w-full h-full py-3 px-2 border-b border-light-border">
                            <a href="edit_s.php"
                               class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                                <i class="fas fa-table float-left mx-2"></i>
                                Edit Student
                                <span><i class="fa fa-angle-right float-right"></i></span>
                            </a>
                        </li>
                        <li class="w-full h-full py-3 px-2 border-b border-light-border bg-white">
                            <a href="#"
                               class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                                <i class="fab fa-uikit float-left mx-2"></i>
                                Add Teacher
                                <span><i class="fa fa-angle-right float-right"></i></span>
                            </a>
                        </li>
                        <li class="w-full h-full py-3 px-2 border-b border-300-border">
                            <a href="#" class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                                <i class="fas fa-square-full float-left mx-2"></i>
                                View Teacher
                                <span><i class="fa fa-angle-right float-right"></i></span>
                            </a>
                        </li>
                        <li class="w-full h-full py-3 px-2 border-b border-300-border">
                            <a href="fee_dep.php" class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                                <i class="fas fa-square-full float-left mx-2"></i>
                                Fees Deposit
                                <span><i class="fa fa-angle-right float-right"></i></span>
                            </a>
                        </li>
                        <li class="w-full h-full py-3 px-2 border-b border-300-border">
                            <a href="add_course.php" class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                                <i class="fas fa-square-full float-left mx-2"></i>
                                Add Course
                                <span><i class="fa fa-angle-right float-right"></i></span>
                            </a>
                        </li>
                        <li class="w-full h-full py-3 px-2 border-b border-300-border">
                            <a href="add_internships.php" class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                                <i class="fas fa-square-full float-left mx-2"></i>
                                Add Internships
                                <span><i class="fa fa-angle-right float-right"></i></span>
                            </a>
                        </li>
                        <li class="w-full h-full py-3 px-2 border-b border-300-border">
                            <a href="add_interns.php" class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                                <i class="fas fa-square-full float-left mx-2"></i>
                                Add Internship Students
                                <span><i class="fa fa-angle-right float-right"></i></span>
                            </a>
                        </li>
                        <li class="w-full h-full py-3 px-2 border-b border-300-border">
                            <a href="view_intern.php" class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                                <i class="fas fa-square-full float-left mx-2"></i>
                                View Internship Students
                                <span><i class="fa fa-angle-right float-right"></i></span>
                            </a>
                        </li>
                    </ul>
    
                </aside>
                <main class="bg-white-300 flex-1 p-3 overflow-hidden">
    
                    <div class="flex flex-col">
                        <!-- Stats Row Starts Here -->
                        <h1 class="text-2xl mb-6 mt-0 ml-10 font-bold">Add Teacher details</h1>
                        <div class="m-10">
                            
                        <form action="add_student.php" method="POST">
                            <div class="relative z-0 w-full mb-6 group">
                                <input type="text" name="name" id="name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                                <label for="name" class="peer-focus:font-medium absolute text-l text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6  top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Name</label>
                            </div>
                            <div class="relative z-0 w-full mb-6 group">
                                <input type="text" name="age" id="age" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                                <label for="age" class="peer-focus:font-medium absolute text-l text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6  top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Age</label>
                            </div>
                            <div class="relative z-0 w-full mb-6 group">
                                <input type="text" name="mobile" id="mobile" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                                <label for="mobile" class="peer-focus:font-medium absolute text-l text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6  top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Mobile No.</label>
                            </div>
                            <div class="grid md:grid-cols-2 md:gap-6">
                            <div class="relative z-0 w-full mb-6 group">
                                <input type="text" name="school" id="school" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                                <label for="school" class="peer-focus:font-medium absolute text-l text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6  top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Course Teaching</label>
                            </div>
                            <div class="relative z-0 w-full mb-6 group">
                                <input type="text" name="course" id="course" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                                <label for="course" class="peer-focus:font-medium absolute text-l text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6  top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Class Teaching</label>
                            </div>
                            </div>
                            <div class="grid md:grid-cols-3 md:gap-6">
                            <div class="relative z-0 w-full mb-6 group">
                                <input type="text"  name="fees" id="fees" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                                <label for="fees" class="peer-focus:font-medium absolute text-l text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6  top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Salary</label>
                            </div>
                            <div class="relative z-0 w-full mb-6 group">
                                <input type="text" name="aadhar" id="aadhar" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                                <label  for="aadhar" class="peer-focus:font-medium absolute text-l text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6  top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Aadhar No.</label>
                            </div>
                            <div class="relative z-0 w-full mb-6 group">
                                <input type="date" name="date" id="date" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                                <label  for="date" class="peer-focus:font-medium absolute text-l text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6  top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Date of Joining</label>
                            </div>
                            </div>
                            <button type="submit" name="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                        </form>
                        
                        
    
                    </div>
                </main>
                 
    
    
    
                
            
            </div>
            
                <!--Footer-->
                <footer class="bg-gray-darkest text-white p-2">
                    <div class="flex flex-1 mx-auto">&copy; My Design</div>
                </footer>
                <!--/footer-->

            </div>

        </div>

        <script src="./main.js"></script>

</body>

</html>