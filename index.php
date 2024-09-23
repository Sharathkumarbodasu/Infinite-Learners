<?php
  include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>inFiniteLearners</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@48,400,0,0" />
  <link rel="stylesheet" href="style.css">
</head>
<body>
   <?php echo "<script>alert('Login Successful');</script>"; ?>
   <div class="container">
      <aside>
           
         <div class="top">
           <div class="logo">
             <h2><span class="danger">inFiniteLearners</span> </h2>
           </div>
           <div class="close" id="close_btn">
            <span class="material-symbols-sharp">
              close
              </span>
           </div>
         </div>
         <!-- end top -->
          <div class="sidebar">

            <a href="#">
              <span class="material-symbols-sharp">grid_view </span>
              <h3>Dashbord</h3>
           </a>
           <a href="#" class="active">
              <span class="material-symbols-sharp">person_outline </span>
              <h3>Profile</h3>
           </a>
           <a href="home.html">
              <span class="material-symbols-sharp">insights </span>
              <h3>Home</h3>
           </a>
           <a href="#">
              <span class="material-symbols-sharp">mail_outline </span>
              <h3>Messages</h3>
              <span class="msg_count">14</span>
           </a>
           <a href="#">
              <span class="material-symbols-sharp">receipt_long </span>
              <h3>Progress</h3>
           </a>
           <a href="#">
              <span class="material-symbols-sharp">report_gmailerrorred </span>
              <h3>Reports</h3>
           </a>
           <a href="events.html">
              <span class="material-symbols-sharp">settings </span>
              <h3>Events</h3>
           </a>
           <a href="#">
              <span class="material-symbols-sharp">add </span>
              <h3>Add Courses</h3>
           </a>
           <a href="index.html">
              <span class="material-symbols-sharp">logout </span>
              <h3>logout</h3>
           </a>
             


          </div>

      </aside>
      <!-- --------------
        end asid
      -------------------- -->

      <!-- --------------
        start main part
      --------------- -->

      <main>
           <h1>Dashbord</h1>

           <div class="date">
             <input type="date" >
           </div>

        <div class="insights">

           <!-- start seling -->
            <div class="sales">
               <span class="material-symbols-sharp">insights</span>
               <div class="middle">

                 <div class="left">
                   <h3>Course Progress</h3>
                   <h1>20%</h1>
                 </div>
                  <div class="progress">
                      <svg>
                         <circle  r="30" cy="40" cx="40"></circle>
                      </svg>
                      <div class="number"><p>80%</p></div>
                  </div>

               </div>
               <small>Last 24 Hours</small>
            </div>
           <!-- end seling -->
              <!-- start expenses -->
              <div class="expenses">
                <span class="material-symbols-sharp">badge</span>
                <div class="middle">
 
                  <div class="left">
                    <h3>Points</h3>
                    <h1>25</h1>
                  </div>
                   <div class="progress">
                       <svg>
                          <circle  r="30" cy="40" cx="40"></circle>
                       </svg>
                       <div class="number"><p>25</p></div>
                   </div>
 
                </div>
                <small>Last 24 Hours</small>
             </div>
            <!-- end seling -->
               <!-- start seling -->
               <div class="income">
                <span class="material-symbols-sharp">stacked_line_chart</span>
                <div class="middle">
 
                  <div class="left">
                    <h3>Leaderboard Rank</h3>
                    <h1>50</h1>
                  </div>
                   <div class="progress">
                       <svg>
                          <circle  r="30" cy="40" cx="40"></circle>
                       </svg>
                       <div class="number"><p>50</p></div>
                   </div>
 
                </div>
                <small>Last 24 Hours</small>
             </div>
            <!-- end seling -->

        </div>
       <!-- end insights -->
      <div class="recent_order">
         <h2>Courses Enrolled</h2>
         <table> 
             <thead>
              <tr>
                <th>Course Name</th>
                <th>Course Duration</th>
                <th>Points earned</th>
                <th>Status</th>
              </tr>
             </thead>
              <tbody>
                 <tr>
                   <td>Web Devlopment</td>
                   <td>2 months</td>
                   <td>5</td>
                   <td class="warning">Enrolled</td>
                   <td class="primary">Details</td>
                 </tr>
                 <tr>
                  <td>Core Java</td>
                  <td>1 month</td>
                  <td>5</td>
                  <td class="warning">Ongoing</td>
                  <td class="primary">Details</td>
                </tr>
                <tr>
                  <td>Python Programming</td>
                  <td>1 month</td>
                  <td>4</td>
                  <td class="warning">Yet to enroll</td>
                  <td class="primary">Details</td>
                </tr>
                <tr>
                  <td>Data Structures and Algorithms</td>
                  <td>2 months</td>
                  <td>5</td>
                  <td class="warning">Ongoing</td>
                  <td class="primary">Details</td>
                </tr>
              </tbody>
         </table>
         <a href="#">Show All</a>
      </div>

      </main>
      <!------------------
         end main
        ------------------->

      <!----------------
        start right main 
      ---------------------->
    <div class="right">

<div class="top">
   <button id="menu_bar">
     <span class="material-symbols-sharp">menu</span>
   </button>

   <div class="theme-toggler">
     <span class="material-symbols-sharp active">light_mode</span>
     <span class="material-symbols-sharp">dark_mode</span>
   </div>
    <div class="profile">
       <div class="info">
           <p><b><?php echo "$username"; ?></b></p>
           <small class="text-muted"></small>
       </div>
       <div class="profile-photo">
         <img src="./images/profile-1.jpg" alt=""/>
       </div>
    </div>
</div>

  <div class="recent_updates">
     <h2>Recent Update</h2>
   <div class="updates">
      <div class="update">
         <div class="profile-photo">
            <img src="./images/profile-4.jpg" alt=""/>
         </div>
        <div class="message">
           <p><b>inFiniteLearners</b> Solution for your problem has been posted</p>
        </div>
      </div>
      <div class="update">
        <div class="profile-photo">
        <img src="./images/profile-3.jpg" alt=""/>
        </div>
       <div class="message">
          <p><b>inFiniteLearners</b> Your solution has been accepted </p>
       </div>
     </div>
     <div class="update">
      <div class="profile-photo">
         <img src="./images/profile-2.jpg" alt=""/>
      </div>
     <div class="message">
        <p><b>inFiniteLearners</b> You have earned 5 poinsts on course completion</p>
     </div>
   </div>
  </div>
  </div>



   
  

</div>

      <div class="item add_product">
            <div>
            <span class="material-symbols-sharp">add</span>
            </div>
     </div>
</div>


   </div>



   <script src="script.js"></script>
</body>
</html>