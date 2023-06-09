<?php 
    include "db.php";        
    $user = "SELECT COUNT(*) FROM stud_details ";
    $count = mysqli_query($conn,$user);
     
    $row = mysqli_fetch_row($count);  
    $total_records = $row[0]; 
    $amount = "SELECT * FROM `earning` ORDER BY id DESC LIMIT 1 ";
    $am = mysqli_query($conn, $amount);
    $row_earn = mysqli_num_rows($am);
    $earn  = mysqli_fetch_assoc($am);
    $course = "SELECT * FROM `course_details` ";
    $course_query = mysqli_query($conn, $course);
    $course_rows = mysqli_num_rows($course_query);
    $intern_sql = "SELECT * FROM `intern` ";
    $intern_query = mysqli_query($conn, $intern_sql);
    $intern_rows = mysqli_num_rows($intern_query);
    $intern_sqlwfg = "SELECT * FROM `intern` where `i_type` = 'work From Home'";
    $intern_querywfg = mysqli_query($conn, $intern_sqlwfg);
    $intern_rowswfg = mysqli_num_rows($intern_querywfg);
    $total_remaining = "SELECT SUM(balance_fees) AS balance FROM stud_details;";
    $remain = mysqli_query($conn, $total_remaining);

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
    <title>Dashboard | Tailwind Admin</title>
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
                            src="img/ACETECH (2).png" alt="logo">
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
                    <li class=" w-full h-full py-3 px-2 border-b border-light-border bg-white">
                        <a href="index.php"
                           class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                            <i class=" fa  float-left mx-2 ">&#xf0e4;</i>
                            Dashboard
                            <span><i class="fas fa-angle-right float-right"></i></span>
                        </a>
                    </li>
                    <li class="w-full h-full py-3 px-2 border-b border-light-border ">
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
                <main class="bg-white-300 flex-1 p-3 overflow-hidden">

                    <div class="flex flex-col">
                        <!-- Stats Row Starts Here -->
                        <div class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2" style="margin-top: 50px;">
                        <div class="shadow-lg bg-red-vibrant border-l-8 hover:bg-red-vibrant-dark border-red-vibrant-dark mb-2 p-2 md:w-1/4 mx-2">
                            <div class="p-4 flex flex-col">
                                <a href="#" class="no-underline text-white text-2xl">
                                    <?php echo $total_records?>
                                </a>
                                <a href="#" class="no-underline text-white text-lg">
                                    Total Students
                                </a>
                            </div>
                        </div>

                        <div class="shadow bg-info border-l-8 hover:bg-info-dark border-info-dark mb-2 p-2 md:w-1/4 mx-2">
                            <div class="p-4 flex flex-col">
                                <a href="#" class="no-underline text-white text-2xl">
                                    <?php echo $earn['earning']?>
                                </a>
                                <a href="#" class="no-underline text-white text-lg">
                                    Total Earning
                                </a>
                            </div>
                        </div>

                        <div class="shadow bg-warning border-l-8 hover:bg-warning-dark border-warning-dark mb-2 p-2 md:w-1/4 mx-2">
                            <div class="p-4 flex flex-col">
                                <a href="#" class="no-underline text-white text-2xl">
                                    <?php echo $intern_rows?>
                                </a>
                                <a href="#" class="no-underline text-white text-lg">
                                    Registered Internships
                                </a>
                            </div>
                        </div>

                        <div class="shadow bg-success border-l-8 hover:bg-success-dark border-success-dark mb-2 p-2 md:w-1/4 mx-2">
                            <div class="p-4 flex flex-col">
                                <a href="#" class="no-underline text-white text-2xl">
                                    <?php echo $intern_rowswfg?>
                                </a>
                                <a href="#" class="no-underline text-white text-lg">
                                    Interns for Work From Home
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2" style="margin-top: 40px;">
                        

                        <div class="shadow bg-info border-l-8 hover:bg-info-dark border-info-dark" style="margin-left: 150px; width: 25%;height: 100px;">
                            <div class="p-2 flex flex-col" style="margin-top: 10px;margin-left: 10px;">
                                <a href="#" class="no-underline text-white text-2xl">
                                    <?php echo $course_rows?>
                                </a>
                                <a href="#" class="no-underline text-white text-lg">
                                    Total Courses
                                </a>
                            </div>
                        </div>

                        <div class="shadow bg-warning border-l-8 hover:bg-warning-dark border-warning-dark "style="margin-left: 300px; width: 25%;height: 100px;">
                            <div class="p-2 flex flex-col" style="margin-top: 10px;margin-left: 10px;">
                                <a href="#" class="no-underline text-white text-2xl">
                                    <?php 
                                    $row = mysqli_fetch_assoc($remain); 
                                    $sum = $row['balance'];                                    
                                    echo $sum;
                                    ?>
                                </a>
                                <a href="#" class="no-underline text-white text-lg">
                                    Total remaining fees
                                </a>
                            </div>
                        </div>
    
                        <!-- /Stats Row Ends Here -->
    
                        
                    </div>
                </main>
            </div>
        </div>

    </div>

    </div>
    <script src="./main.js"></script>
</body>

</html>