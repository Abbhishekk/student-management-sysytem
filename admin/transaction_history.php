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
    <!-- Css -->
    <link rel="stylesheet" href="./dist/styles.css">
    <link rel="stylesheet" href="./dist/all.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600,600i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>
    <title>Buttons | Tailwind Admin</title>
</head>
<style>
    @import url(https://fonts.googleapis.com/css?family=Open+Sans);

body{
background: #f2f2f2;
font-family: 'Open Sans', sans-serif;
}


</style>


<body>
<!--Container -->
<div class="mx-auto bg-gray-lightest">
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
                    <img onclick="profileToggle()" class="inline-block h-8 w-8 rounded-full" src="https://avatars0.githubusercontent.com/u/4323180?s=460&v=4" alt="">
                    <a href="#" onclick="profileToggle()" class="text-white p-2 no-underline hidden md:block lg:block">ACETECH</a>
                    <div id="ProfileDropDown" class="rounded hidden shadow-md bg-white absolute pin-t mt-12 mr-1 pin-r">
                        <ul class="list-reset">
                          <li><a href="#" class="no-underline px-4 py-2 block text-black hover:bg-gray-light">My account</a></li>
                          <li><a href="#" class="no-underline px-4 py-2 block text-black hover:bg-gray-light">Notifications</a></li>
                          <li><hr class="border-t mx-2 border-gray-ligght"></li>
                          <li><a href="#" class="no-underline px-4 py-2 block text-black hover:bg-gray-light">Logout</a></li>
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
                <i class="fa fa-dashboard  float-left mx-2 "></i>
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
        <li class="w-full h-full py-3 px-2 border-b border-300-border bg-white">
            <a href="transaction_history.php" class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                <i class="fas fa-money-check-alt float-left mx-2"></i>
                Transaction history
                <span><i class="fa fa-angle-right float-right"></i></span>
            </a>
        </li>
    </ul>

</aside>
            <!--/Sidebar-->
            <!--Main-->
            <main class="bg-white-medium flex-1 p-3 overflow-hidden">

                <div class="flex flex-col">
                    <div class="m-10">
                        <form action="transaction_history.php" method="POST">    
                        <label for="id" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                            </div>
                            <input type="search" id="id" name="id" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter Intern id" required>
                            <button type="submit" name="submit" class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                        </div>
                    </form>
                    </div>
                    
                     <div class="m-10">
                        
                        <?php
                           
                            
                            
                            
                            if(isset($_POST['submit'])){
                                $id = $_POST['id'];
                                
                                $id1 = substr($id,3);
                                
                                $result = $fun->getTransactionWithId($id1);
                                $sr = 1;
                                $limit = 1;
                                $pn = 1;
                            }
                            else{
                                $limit = 10;  
        
                                    if (isset($_GET["page"])) { 
                                    $pn  = $_GET["page"]; 
                                    } 
                                    else { 
                                    $pn=1; 
                                    };  
                                
                                    $start_from = ($pn-1) * $limit;  
                                    $sr = $start_from+1;
                                    $result = $fun->getTransactionWithLimit($start_from,$limit);
                            }
                            
                            
                            if (mysqli_num_rows($result) > 0) {
                                
                            ?>
                                
                                <table class="table-auto border-collapse border border-slate-500 p-1" style="width: 100%">
                                    
                                    <thead>
                                        <tr>
                                            <th class="border border-slate-500 p-4 bg-grey">Sr no.</th>
                                            <th class="border border-slate-500 p-4 bg-grey">Id</th>
                                            
                                            <th class="border border-slate-500 p-4 bg-grey">Name</th>
                                            <th class="border border-slate-500 p-4 bg-grey">Amount</th>
                                            <th class="border border-slate-500 p-4 bg-grey">reason</th>
                                            <th class="border border-slate-500 p-4 bg-grey">DateTime</th>
                                            
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    
                        <?php
                                    while ($res = mysqli_fetch_assoc($result)) {
                                            ?>
                                            
                                            <tr class = "">
                                                <td class="border border-slate-500 p-4 gap-4" >
                                                    <?php echo $sr ?>
                                                    
                                                </td>
                                                <td class="border border-slate-500 p-4" >
                                                    
                                                    <?php  if($res['reason'] == 'course_fees' ){
                                                        echo "ACE".$res['user_id'];
                                                    }
                                                        else{
                                                            echo "AIN".$res['user_id'];
                                                        }  
                                                    ?>
                                                </td>
                                                <td class="border border-slate-500 p-4">
                                                    
                                                    <?php echo $res['name'] ?>
                                                </td>
                                                <td class="border border-slate-500 p-4">
                                                    
                                                    <?php echo $res['amount'] ?>
                                                </td>
                                                <td class="border border-slate-500 p-4">
                                                    <?php echo $res['reason'] ?>
                                                </td>
                                                <td class="border border-slate-500 p-4">
                                                    <?php echo $res['date'] ?>
                                                </td>
                                            </tr>
                                       
                                        
                                        <?php
                                            
                                        $sr++;
                                    }
                            } 
                            else {
                                echo "No student found";
                            }
                            
                           
                        ?>
                                    
                                    </tbody>
                                </table>
                                
                                
                                <nav aria-label="Page navigation example" class=" py-5">
                                    <ul class="inline-flex -space-x-px gap-5">
                                    <?php  
                                        if(isset($_POST['submit'])){
                                            $id1 = $_POST['id'];
                                            $id = substr($id1,3);
                                            $row = 1;
                                            
                                        }
                                        else{
                                            $row  = $fun->countInterns();
                                        }
                                         
                                          
                                        $total_records = $row;  

                                        
                                        $total_pages = ceil($total_records / $limit);  
                                        $pagLink = "";                        
                                        for ($i=1; $i<=$total_pages; $i++) {
                                        if ($i==$pn) {
                                            $pagLink .= "<li class='active bg-violet-700' aria-current='page' > <a href='add_intern.php?page="
                                            .$i."' class='px-3 py-2 ml-0 leading-tight text-gray-500  bg-grey border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white'>".$i."</a></li>";
                                        }            
                                        else  {
                                            $pagLink .= "<li > <a href='add_intern.php?page="
                                            .$i."' class='px-3 py-2 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white'>".$i."</a></li>";  
                                        }
                                        };  
                                        echo $pagLink;
                                        
                                    ?>
                                    </ul>
                                </nav>
                                

                        </div>
                </div>
            </main>
            <!--/Main-->
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