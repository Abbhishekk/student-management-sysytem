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
    <title>AceTech</title>
</head>
<style>
    @import url(https://fonts.googleapis.com/css?family=Open+Sans);

body{
background: #f2f2f2;
font-family: 'Open Sans', sans-serif;
}

.search {
width: 100%;
position: relative;
display: flex;

}

.searchTerm {
width: 100%;
border: 3px solid black;
border-right: none;
padding: 5px;
height: 36px;
border-radius: 5px 0 0 5px;
outline: none;
color: #9DBFAF;
}

.searchTerm:focus{
color: #00B4CC;
}

.searchButton {
width: 40px;
height: 36px;
border: 1px solid black;
background: black;
text-align: center;
color: #fff;
border-radius: 0 5px 5px 0;
cursor: pointer;
font-size: 20px;
}

/*Resize the wrap to see the search bar change!*/
.wrap{
width: 70%;
position: absolute;
top: 10%;
left: 58%;
transform: translate(-50%, -50%);
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
                    <a href="#" onclick="profileToggle()" class="text-white p-2 no-underline hidden md:block lg:block">Adam Wathan</a>
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
        <li class="w-full h-full py-3 px-2 border-b border-300-border bg-white">
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
            <!--/Sidebar-->
            <!--Main-->
            <main class="bg-white-medium flex-1 p-3 overflow-hidden">
                <div class="flex flex-col">
                    <div class="m-10">
                        <form action="fee_dep.php" method="POST">    
                        <label for="id" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                            </div>
                            <input type="search" id="id" name="id" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter student id" required>
                            <button type="submit" name="submit" class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                        </div>
                    </form>
                </div>
                
                     <div class="m-10">
                        
                     <?php
                            
                            if(isset($_POST['deposit'])){
                                $d_id = $_POST['id'];
                                $balance = $_POST['balance'];
                                $remain = $_POST['deposit_amount'];
                                if($balance>=$remain){
                                    $update = $balance-$remain;
                                    $query = $fun->updateBalanceFees($update,$d_id);
                                    if($query){
                                        echo "Done!";
                                        
                                    }
                                    else{
                                        echo"Not Done!";
                                    }
                                    $fun->insertTransactionHistory($d_id,$_POST['name'],$remain,"course_fees");
                                    $am = $fun->getLastEarningMonth();
                                    $row_earn = mysqli_num_rows($am);
                                    $earn  = mysqli_fetch_assoc($am);
                                    $month = date('m');
                                    $year = date('y');
                                    if($row_earn > 0){
                                        $subm = substr($earn['month_year'],0,2);
                                        
                                        if($subm < $month){
                                            
                                            $date = "".$month."-".$year."";
                                            
                                            if($fun->insertEarning($remain,$date)){
                                                echo "done".$date;
                                            }
                                        }
                                        else{

                                                $remain += $earn['earning'];
                                                $fun->updateEarning($remain,$earn['id']);
                                            
                                        }
                                    }
                                    else{
                                        $date = "".$month."-".$year."";
                                           
                                            if($fun->insertEarning($remain,$date)){
                                                echo "done".$date;
                                            }
                                    }
                                    
                                }
                                else{
                                    echo "Enter correct amount";
                                }
                                
                            }
                            if(isset($_POST['submit'])){

                                $id1 = $_POST['id'];
                               
                                $id = substr($id1,3);
                                
                               
                                $result = $fun->getStudentByID($id);
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
                                    $result = $fun->getStudentWithLimit($start_from,$limit);
                            }
                            
                            
                            if (mysqli_num_rows($result) > 0) {
                                
                            ?>
                                <table class="table-auto border-collapse border border-slate-500 p-1" style="width: 100%">
                                    
                                    <thead>
                                        <tr>
                                            <th class="border border-slate-500 p-4 bg-grey">Sr no.</th>
                                            <th class="border border-slate-500 p-4 bg-grey">Student Id</th>
                                            <th class="border border-slate-500 p-4 bg-grey">Name</th>
                                            <th class="border border-slate-500 p-4 bg-grey">Course</th>
                                            <th class="border border-slate-500 p-4 bg-grey">Total Fees</th>
                                            <th class="border border-slate-500 p-4 bg-grey">Remaining Fees</th>
                                            <th class="border border-slate-500 p-4 bg-grey">Deposit Amount</th>
                                            <th class="border border-slate-500 p-4 bg-grey">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                        <?php
                                    while ($res = mysqli_fetch_assoc($result)) {
                                            ?>
                                    <form action="fee_dep.php" method="POST">
                                        <tr >
                                            <td class="border border-slate-500 p-4">
                                                <input type="text" name="id" value="<?php echo $res['id'] ?>" hidden>
                                                <?php echo $sr ?>
                                            </td>
                                            <td class="border border-slate-500 p-4">
                                                
                                                <?php echo "ACE".$res['id'] ?>
                                            </td>
                                            <td class="border border-slate-500 p-4">
                                            <input type="text" name="name" value="<?php echo $res['name'] ?>" hidden>
                                                <?php echo $res['name'] ?>
                                            </td>
                                            <td class="border border-slate-500 p-4">
                                                <?php echo $res['course_name'] ?>
                                            </td>
                                            <td class="border border-slate-500 p-4">
                                                <?php echo $res['course_fees'] ?>
                                            </td>
                                            <td class="border border-slate-500 p-4">
                                            <input type="text" name="balance" value="<?php echo $res['balance_fees'] ?>" hidden>
                                                <?php echo $res['balance_fees'] ?>
                                            </td>
                                            <td class="border border-slate-500 p-4" style="font-size: 15px;">
                                            <input type="text" name="deposit_amount" id="deposit_amount" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="deposit amount" required>
                                            </td>
                                            <td class="border border-slate-500 p-4 text-center">
                                                <button type="submit" name="deposit" class="bg-green-500 rounded p-2">Deposit!</button>
                                            </td>
                                        </tr>
                                    </form>
                                        <?php
                                        $sr++;
                                    }
                            } 
                            else {
                                echo "0 Results";
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
                                            $rs_result = 1; 
                                            
                                        }
                                        else{
                                            $rs_result = $fun->countTotalStudents();
                                        }
                                         
                                          
                                        
                                        $total_records = $rs_result;  

                                        
                                        $total_pages = ceil($total_records / $limit);  
                                        $pagLink = "";                        
                                        for ($i=1; $i<=$total_pages; $i++) {
                                        if ($i==$pn) {
                                            $pagLink .= "<li class='active bg-violet-700' aria-current='page' > <a href='fee_dep.php?page="
                                            .$i."' class='px-3 py-2 ml-0 leading-tight text-gray-500  bg-grey border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white'>".$i."</a></li>";
                                        }            
                                        else  {
                                            $pagLink .= "<li > <a href='fee_dep.php?page="
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