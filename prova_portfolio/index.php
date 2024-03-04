<?php include 'includes/config.php';

$sql = "SELECT * FROM `users` WHERE `users`.`id` = 1";
$result = mysqli_query($con, $sql);
$data = mysqli_fetch_assoc($result);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$data['name']?></title>
    <!-- Font Awesome CDN link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <!-- Typing Script CDN Link -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.0/typed.min.js"></script>


    <!-- Custom CSS file link -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <!-- Nav Section Start Here -->
    <nav>
        <div class="container nav_container">
            <a href="index.php">
                <h4><span>Prova</span>Paul</h4>
            </a>
            <!-- <a href="index.html"><?=$data['name']?></a> -->
            <ul class="nav_menu">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#education">Education</a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#courses">Courses</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="http://localhost/prova_portfolio/includes/login.php">Admin</a></li>

            </ul>
            <button id="open-menu-btn"><i class="fa-solid fa-bars"></i></button>
            <button id="close-menu-btn"><i class="fa-solid fa-xmark"></i></button>
        </div>
    </nav>
    <!-- Nav Section End Here -->
    <!-- Admin section start -->

    <!-- Admin Section End -->

    <!-- Header Section Start Here -->
    <header>
        <div class="container header_container" id="home">
            <div class="header_left">
                <div class="header_left_img">
                    <img src="image/prova2.jpg" alt="Model Image">
                </div>
            </div>
            <div class="header_right">
                <div class="text-1">Hello,I'm</div>
                <div class="text-2"><?=$data['name']?></div>
                <div class="text-3">And I'm a <span class="typing"></span></div>
                <div class="text-4"><p> <?=$data['explain']?></p></div>
                <a href=" http://localhost/prova_portfolio/includes/login.php" class="btn">Download CV</a>
                <div class="media-icons">  
                <?php   
          if($data['facebook']){
        ?>
                    <a href="<?=$data['facebook']?>" target="blank">  <i class="fab fa-facebook-f"></i></a>
        <?php
          }
        ?>

        <?php   
          if($data['instragram']){
        ?>
                    <a href="<?=$data['instragram']?>" target="blank"><i class="fab fa-instagram"></i></a>
        <?php
          }
        ?>

        <?php   
          if($data['github']){
        ?>
                    <a href="<?=$data['github']?>" target="blank"><i class="fab fa-github"></i></a>
        <?php
          }
        ?>

        <?php   
          if($data['cf']){
        ?>
                    <a href="<?=$data['cf']?>" target="blank"><i class="fab fa-code"></i></a>
        <?php
          }
        ?>

                  </div>

            </div>
            <hr>
        </div>
    </header>
    <!-- Header Section End Here -->

    <!-- About Me Section Start Here -->
    <section class="about" id="about">
        <h2 class="border_bottom">About Me</h2>
        <div class="container about_container">
            <div class="about-img">
                <img src="image/prova.jpg" alt="about model">
            </div>
            <div class="about-text">
                <div class="text">
                    I am Prova Paul and I'm a <span class="typing-2">Student at KUET</span>
                </div>
                <p>I have completed my primary,secondary and higher secondary education in Ideal School and college which is in Dhaka,Bangladesh. After that I've completed my higher secondary education in HolyCross College which is also in Dhaka. Right now I'm studing at KUET in CSE department. Technology is my passion and I always try to gain knowledge and to experience different skills.</p>
            </div>
        </div>
    </section>
    <hr>

    <!-- About Me Section End Here -->

    <!-- My Education Section Start Here -->
    <div class="Education" id="education">
        <h2 class="border_bottom">My Education</h2>
        <div class="container Education_container">
            <div class="cards">
                <div class="card">
                    <div class="sbox">
                        <img src="image/Logo_KUET.png">
                        <!-- <i class="fa-solid fa-code"></i> -->
                        <h3>BSC in Computer Science and Engineering</h3>
                        <h5>2021-Present</h5>
                        <p>Khulna University of Engineering & Technology,Khulna</p>
                        <a href="#" target="blank"><img src="image/hsc.jpg">Learn More</a>
                    </div>
                </div>
                <div class="card">
                    <div class="sbox">
                        <img src="image/holy.jpg">
                        <h3>Higher Secondary Certificate           </h3>
                        <h5>2020</h5>
                        <p>HolyCross College,Tejgoan,Dhaka                    </p>
                        <a href="#">Learn More</a>
                    </div>
                </div>
                <div class="card">
                    <div class="sbox">
                        <img src="image/ideal.jpeg">

                        <!-- <i class="fa-solid fa-laptop-code"></i> -->
                        <h3>Secondary School Certificate            </h3>
                        <h5>2018</h5>

                        <p>Ideal School and College,Motijheel,Dhaka           </p>
                        <a href="#">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- My Education Section End Here -->

    <!-- My Skills Section Start Here -->
    <div class="skills" id="skills">
        <div class="new">
            <h2 class="border_bottom">My Skills</h2>
        </div>
        <div class="container skills_container">
            <div class="bar">
                <div class="info">
                    <span>HTML</span>
                </div>
                <div class="progress-line html">
                    <span></span>
                </div>
            </div>
            <div class="bar">
                <div class="info">
                    <span>CSS</span>
                </div>
                <div class="progress-line css">
                    <span></span>
                </div>
            </div>
            <div class="bar">
                <div class="info">
                    <span>Javascript</span>
                </div>
                <div class="progress-line javascript">
                    <span></span>
                </div>
            </div>
            <div class="bar">
                <div class="info">
                    <span>PHP</span>
                </div>
                <div class="progress-line php">
                    <span></span>
                </div>
            </div>
            <div class="bar">
                <div class="info">
                    <span>ASP.net</span>
                </div>
                <div class="progress-line asp">
                    <span></span>
                </div>
            </div>
            <div class="bar">
                <div class="info">
                    <span>Python</span>
                </div>
                <div class="progress-line python">
                    <span></span>
                </div>
            </div>
            <div class="bar">
                <div class="info">
                    <span>C-Programming</span>
                </div>
                <div class="progress-line c-programming">
                    <span></span>
                </div>
            </div>
            <div class="bar">
                <div class="info">
                    <span>MySQL</span>
                </div>
                <div class="progress-line mysql">
                    <span></span>
                </div>
            </div>

        </div>
    </div>
    <!-- My Skills Section End Here -->

    <!-- My courses Section Start Here -->
    <div class="container courses_container" id="courses">
        <h2 class="border_bottom">My courses</h2>
        <?php
        $courses="SELECT * FROM `courses`";
        $courses_result=mysqli_query($con, $courses);
        ?>
        
        <div class="gallery">
            <?php
            if($courses_result -> num_rows >0){
            while($courses_data = $courses_result->fetch_assoc()){
                ?>
            <a href="<?=$courses_data['link']?>"><img src="<?=$courses_data['icon']?>" ></a>
            
    <?php

            }} 
            else
            {
                echo "no courses found";
            }
            ?>
    </div>
        </div>
    <!-- My courses Section End Here -->

    <!-- My projects Section Start Here -->
    <div class="projects" id="projects">
    <h2 class="border_bottom">My Popular Projects</h2>
    <div class="container projects_container">
        <?php
        $projects = "SELECT * FROM `projects`";
        $projects_result = mysqli_query($con, $projects);

        if ($projects_result->num_rows > 0) {
            while ($projects_data = $projects_result->fetch_assoc()) {
        ?>
                <article class="course">
                    <div class="course_image">
                        <img src="<?= $projects_data['image'] ?>" alt="Project Image">
                    </div>
                    <div class="course_info">
                        <h4><?= $projects_data['heading'] ?></h4>
                        <p><?= $projects_data['para'] ?></p>
                        <a href="<?= $projects_data['link'] ?>" class="btn"><?= $projects_data['learn'] ?></a>
                    </div>
                </article>
        <?php
            }
        } else {
            echo "No Projects Found.";
        }
        ?>
    </div>
</div>

    <!-- My projects Section End Here -->

<!-- contact section -->
    <section class="contact" id="contact">
        <div class="container">
            <h2 class="border_bottom">Contact Me</h2>
            <?php
        if(isset($_POST['send_message'])){
          global $con;
          $name = mysqli_real_escape_string($con, $_POST['name']);
          $email = mysqli_real_escape_string($con, $_POST['email']);
          $subject = mysqli_real_escape_string($con, $_POST['subject']);
          $message = mysqli_real_escape_string($con, $_POST['message']);

          $contact = "INSERT INTO `contact` (`name`, `email`, `subject`, `message`) VALUES ('$name', '$email', '$subject', '$message')";
          mysqli_query($con, $contact);
        }
      ?>

            <form method="post" role="form" class="php-mail">
                <div class="input-wrap">
                    <input type="text" name="name" id="name" placeholder="Your Name *">
                    <input type="email" name="email" id="email" placeholder="Your Email *">
                </div>
                <div class="input-wrap-2">
                    <input type="text" name="subject" id="subject" placeholder="Your Subject...">
                    <textarea name="message" id="message" cols="30" rows="10" placeholder="Your Message..."></textarea>
                </div>
                <div class="btn-wrapper">
                    <button class="btn">
                        <input type="submit" class="btn" name="send_message"></button>
                </div>
            </form>
        </div>
        

    </section>
    <!-- end of contact section -->

    <!-- Footer Section Start Here -->
    
    <footer>
        <div class="container footer_container">
            <div class="footer_1">
                    <h4>Prova Paul</h4>
                <p>Currently studing Computer Science and Engineering in KUET</p>
            </div>

            <div class="footer_2">
                <h4>Section_links</h4>
                <ul class="permalinks">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#education">Education</a></li>
                    <li><a href="#skills">Skills</a></li>
                    <li><a href="#courses">Courses</a></li>
                    <li><a href="#projects">Projects</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
            <div class="footer_3">
            <h4 id="contact">Social Links</h4>

                <ul class="footer_social">
                    <li><a href="https://www.facebook.com/prova.ranipaul"> <i class="fa-brands fa-facebook-f"></i> </a></li>
                    <li><a href="https://www.instagram.com/_prova_paul_/"> <i class="fa-brands fa-instagram"></i> </a></li>
                    <li><a href="https://github.com/ProvaPaul"> <i class="fab fa-github"></i> </a></li>
                    <li><a href="https://codeforces.com/profile/prova6459"> <i class="fab fa-code"></i> </a></li>
                </ul>
            </div>


            <div class="footer_4">
                <h4 id="contact">Contact Me</h4>
                <div>
                    <p>+880 1739330301</p>
                    <p class="mail">provapaul123@gmail.com</p>
                </div>
            </div>
        </div>
        <div class="footer_copyright">
            <small>Copyright &copy;Prova Paul</small>
        </div>
    </footer>
    <!-- Footer Section End Here -->
    <!-- Custom Javascript File Link -->
    <script src="js/script.js"></script>

    <!-- <script src="js/typed.js"></script> -->

</body>
</html>