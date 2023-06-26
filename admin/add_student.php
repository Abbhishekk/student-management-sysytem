<?php
    include "db.php";
    include 'fun.php';

    $connect=new connect();
    $fun=new fun($connect->dbconnect());
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords"
        content="tailwind,tailwindcss,tailwind css,css,starter template,free template,admin templates, admin template, admin dashboard, free tailwind templates, tailwind example">
    <!-- Css -->
    <link rel="stylesheet" href="./dist/styles.css">
    <link rel="stylesheet" href="./dist/all.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600,600i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>
    <title>AceTech</title>
</head>

<body>
    <!--Container -->
    <div class="mx-auto bg-grey-400">
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
                            src="https://avatars0.githubusercontent.com/u/4323180?s=460&v=4" alt="">
                        <a href="#" onclick="profileToggle()"
                            class="text-white p-2 no-underline hidden md:block lg:block">Ace-Tech</a>
                        <div id="ProfileDropDown"
                            class="rounded hidden shadow-md bg-white absolute pin-t mt-12 mr-1 pin-r">
                            <ul class="list-reset">
                                <li><a href="#" class="no-underline px-4 py-2 block text-black hover:bg-grey-light">My
                                        account</a></li>
                                <li><a href="#"
                                        class="no-underline px-4 py-2 block text-black hover:bg-grey-light">Notifications</a>
                                </li>
                                <li>
                                    <hr class="border-t mx-2 border-grey-ligght">
                                </li>
                                <li><a href="#"
                                        class="no-underline px-4 py-2 block text-black hover:bg-grey-light">Logout</a>
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
                <i class=" fa fa-dashboard float-left mx-2 "></i>
                Dashboard
                <span><i class="fas fa-angle-right float-right"></i></span>
            </a>
        </li>
        <li class="w-full h-full py-3 px-2 border-b border-light-border bg-white">
            <a href="add_student.php"
               class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                <i class="	fa fa-address-book float-left mx-2"></i>
                Add Student
                <span><i class="fa fa-angle-right float-right"></i></span>
            </a>
        </li>
        <li class="w-full h-full py-3 px-2 border-b border-light-border ">
            <a href="view_s.php"
               class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                <i class="fas fa-address-card float-left mx-2"></i>
                View Students
                <span><i class="fa fa-angle-right float-right"></i></span>
            </a>
        </li>
        <li class="w-full h-full py-3 px-2 border-b border-light-border">
            <a href="edit_s.php"
               class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                <i class="fas fa-edit float-left mx-2"></i>
                Edit Student
                <span><i class="fa fa-angle-right float-right"></i></span>
            </a>
        </li>
        <li class="w-full h-full py-3 px-2 border-b border-light-border ">
            <a href="#"
               class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                <i class="fab fa-uikit float-left mx-2"></i>
                Add Teacher
                <span><i class="fa fa-angle-right float-right"></i></span>
            </a>
        </li>
        <li class="w-full h-full py-3 px-2 border-b border-300-border">
            <a href="#" class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                <i class="fab fa-uikit float-left mx-2"></i>
                View Teacher
                <span><i class="fa fa-angle-right float-right"></i></span>
            </a>
        </li>
        <li class="w-full h-full py-3 px-2 border-b border-300-border">
            <a href="fee_dep.php" class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                <i class="	fas fa-money-bill-wave float-left mx-2"></i>
                Fees Deposit
                <span><i class="fa fa-angle-right float-right"></i></span>
            </a>
        </li>
        <li class="w-full h-full py-3 px-2 border-b border-300-border">
            <a href="add_course.php" class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                <i class="fa fa-book float-left mx-2"></i>
                Add Course
                <span><i class="fa fa-angle-right float-right"></i></span>
            </a>
        </li>
        <li class="w-full h-full py-3 px-2 border-b border-300-border">
            <a href="add_internships.php" class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                <i class="fa fa-briefcase float-left mx-2"></i>
                Add Internships
                <span><i class="fa fa-angle-right float-right"></i></span>
            </a>
        </li>
        <li class="w-full h-full py-3 px-2 border-b border-300-border">
            <a href="add_interns.php" class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                <i class="fa fa-building float-left mx-2"></i>
                Add Internship Students
                <span><i class="fa fa-angle-right float-right"></i></span>
            </a>
        </li>
        <li class="w-full h-full py-3 px-2 border-b border-300-border">
            <a href="view_intern.php" class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                <i class="fa fa-bullhorn float-left mx-2"></i>
                View Internship Students
                <span><i class="fa fa-angle-right float-right"></i></span>
            </a>
        </li>
        <li class="w-full h-full py-3 px-2 border-b border-300-border">
            <a href="add_batches.php" class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                <i class="fa fa-bookmark float-left mx-2"></i>
                Add batches
                <span><i class="fa fa-angle-right float-right"></i></span>
            </a>
        </li>
        <li class="w-full h-full py-3 px-2 border-b border-300-border">
            <a href="edit_batch.php" class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                <i class="fa fa-edit float-left mx-2"></i>
                Edit batches
                <span><i class="fa fa-angle-right float-right"></i></span>
            </a>
        </li>
        <li class="w-full h-full py-3 px-2 border-b border-300-border ">
                        <a href="transaction_history.php" class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                        <i class="fa fa-edit float-left mx-2"></i>
                            Transaction history
                        <span><i class="fa fa-angle-right float-right"></i></span>
                        </a>
                    </li>
    </ul>

</aside>
                <main class="bg-white-300 flex-1 p-3  overflow-hidden">
                <h1 class="text-2xl mb-6 mt-0 ml-10 font-bold">Add student details</h1>
                    <div class="m-10">
                     <?php 
                        
                        $c = $fun->getCourseDetails();
                        
                        $b = $fun->getAllBatches();

                     ?>   
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
                        <div class="grid md:grid-cols-3 md:gap-6">
                        <div class="relative z-0 w-full mb-6 group">
                            <input type="text" name="school" id="school" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                            <label for="school" class="peer-focus:font-medium absolute text-l text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6  top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">School name</label>
                        </div>
                        <div class="relative z-0 w-full mb-6 group">
                           
                            <label for="course" class="peer-focus:font-medium absolute text-l text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6  top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Course</label>
                            <select name="course" id="course" class="block pt-4 pb-0 px-0 w-full text-l text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                                <option selected>select option</option>
                                <?php 
                                if (mysqli_num_rows($c) > 0) {
                                    while ($res = mysqli_fetch_assoc($c)) {
                                    ?>
                                    <option value="<?php echo $res['course_name'];?>" class="p-10 flex justify-around m-10 text-sm"><?php echo $res['course_name'];?></option>
                                <?php }
                                    }
                                else{
                                    echo "<option value='no courses'>No courses available</option>";
                                }    
                                ?>
                                
                            </select>
                        </div>
                        <div class="relative z-0 w-full mb-6 group">
                           
                            <label for="batch" class="peer-focus:font-medium absolute text-l text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6  top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Batches</label>
                            <select name="batch" id="batch" class="block pt-4 pb-0 px-0 w-full text-l text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                                <option selected>select option</option>
                                <?php 
                                if (mysqli_num_rows($b) > 0) {
                                    while ($res = mysqli_fetch_assoc($b)) {
                                    ?>
                                    <option value="<?php echo $res['name'];?>" class="p-10 flex justify-around m-10 text-sm"><?php echo $res['name']."  ".$res['start_time']." - ".$res['end_time']." ";?></option>
                                <?php }
                                    }
                                else{
                                    echo "<option value='no courses'>No courses available</option>";
                                }    
                                ?>
                                
                            </select>
                        </div>
                        </div>
                        <div class="grid md:grid-cols-3 md:gap-6">
                        <div class="relative z-0 w-full mb-6 group">
                            <input type="text"  name="fees" id="fees" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                            <label for="fees" class="peer-focus:font-medium absolute text-l text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6  top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Course fees</label>
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
                    <?php 
                        
                        if (isset($_POST['submit'])) {
                        $name = $_POST['name'];
                        $age = $_POST['age'];
                        $mobile = $_POST['mobile'];
                        $school = $_POST['school'];
                        $course = $_POST['course'];
                        $fees = $_POST['fees'];
                        $aadhar = $_POST['aadhar'];
                        $date = $_POST['date'];
                        $batch = $_POST['batch'];
                        $query = $fun->insertStudentDetails($name,$age,$mobile,$school,$course,$fees,$aadhar,$date,$batch);
                        
                    }
                    ?>
                    </div>
                    <div class="m-10">
                        
                    <?php
                        
                       
                        $result = $fun->lastFiveStudents();
                        if (mysqli_num_rows($result) > 0) {
                        ?>
                            <table class="table-auto border-collapse border border-slate-500 p-1" style="width: 100%">
                                <caption class="caption-top" >Last 5 entries</caption>
                                <thead>
                                    <tr>
                                        <th class="border border-slate-500 p-4 bg-grey">Student Id</th>
                                        <th class="border border-slate-500 p-4 bg-grey">Name</th>
                                        <th class="border border-slate-500 p-4 bg-grey">Age</th>
                                        <th class="border border-slate-500 p-4 bg-grey">Mobile no.</th>
                                        <th class="border border-slate-500 p-4 bg-grey">Course</th>
                                        <th class="border border-slate-500 p-4 bg-grey">Batch</th>
                                        <th class="border border-slate-500 p-4 bg-grey">Fees</th>
                                        <th class="border border-slate-500 p-4 bg-grey">Remaining Fees</th>
                                    </tr>
                                </thead>
                                <tbody>
                    <?php
                                while ($res = mysqli_fetch_assoc($result)) {
                                        ?>

                                    <tr >
                                        <td class="border border-slate-500 p-4">
                                            <?php echo "ACE".$res['id'] ?>
                                        </td>
                                        <td class="border border-slate-500 p-4">
                                            <?php echo $res['name'] ?>
                                        </td>
                                        <td class="border border-slate-500 p-4">
                                            <?php echo $res['age'] ?>
                                        </td>
                                        <td class="border border-slate-500 p-4">
                                            <?php echo $res['mobile'] ?>
                                        </td>
                                        <td class="border border-slate-500 p-4">
                                            <?php echo $res['course_name'] ?>
                                        </td>
                                        <td class="border border-slate-500 p-4">
                                            <?php echo $res['batch'] ?>
                                        </td>
                                        <td class="border border-slate-500 p-4">
                                            <?php echo $res['course_fees'] ?>
                                        </td>
                                        <td class="border border-slate-500 p-4">
                                            <?php echo $res['balance_fees'] ?>
                                        </td>
                                    </tr>
                                    <?php
                                }
                        } 
                        else {
                            echo "0 Results";
                        }
                        
                    ?>
                                </tbody>
                            </table>
                    </div>  
                </main>
                
                
                    
            </div>
        </div>

    </div>

    </div>
    <script src="./main.js"></script>
</body>

</html>