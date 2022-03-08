 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Admin   Dashboard</title>
     <link rel="stylesheet" href="member.css?">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
 </head>
 <body>
     <div class="container">
        <nav>
            <ul>
        <li><a href="#" class="logo"> 
<img src="assets/images/log.png" >
<span class="nav-items">Dashboard</span>
        </a></li>
                <li><a href="#">
                    <i class="fas  fa-home"></i>
                    <span class="nav-item">Home</span>
                </a></li>
                <li><a href="">
                    <i class="fas  fa-user"></i>
                    <span class="nav-item">Profile</span>
                </a></li>
                <li><a href="">
                    <i class="fas  fa-wallet"></i>
                    <span class="nav-item">Wallet</span>
                </a></li>
                <li><a href="">
                    <i class="fas  fa-chart-bar"></i>
                    <span class="nav-item">Tasks</span>
                </a></li>
                <li><a href="">
                    <i class="fas  fa-cog"></i>
                    <span class="nav-item">Settings</span>
                </a></li>
                <li><a href="">
                    <i class="fas  fa-question-circle"></i>
                    <span class="nav-item">Help</span>
                </a></li>
                <li><a href="" class="logout">
                    <i class="fas  fa-sign-out-alt"></i>
                    <span class="nav-item"><a href="logout.php" class="logout">Logout</a></span>
                </a></li>
            </ul>
        </nav>
<section class="main">
    <div class="main-top">
        <h1>Skills</h1>
        <i class="fas  fa-cog"></i>
    </div>
    <div class="main-skills">
        <div class="card">
            <i class="fas fa-laptop-code"></i>
            <h3>Web Development</h3>
            <p>Join over 1 million Students.</p>
            <button>Get  Started</button>
        </div>
        <div class="card">
            <i class="fab fa-wordpress"></i>
            <h3>Wordpress</h3>
            <p>Join over 2 million Students.</p>
            <button>Get  Started</button>
        </div>
        <div class="card">
            <i class="fas fa-palette"></i>
            <h3>Graphic Design</h3>
            <p>Join over 5 million Students.</p>
            <button>Get  Started</button>
        </div>
        <div class="card">
            <i class="fab fa-app-store-ios"></i>
            <h3>IOS Dev</h3>
            <p>Join over 1 million Students.</p>
            <button>Get  Started</button>
        </div>
    </div>


    <section class="main-course">
        <h1>My courses</h1>
        <div class="course-box">
            <ul>
                <li class="active">In Progress</li>
                <li>Explore</li>
                <li>Incoming</li>
                <li>Finished</li>
            </ul>
            <div class="course">
                <div class="box">
                    <h3>HTML</h3>
                    <p>80% - progress</p>
                    <button>Continue</button>
                    <i class="fab fa-html5 html"></i>
                </div>
                <div class="box">
                    <h3>CSS</h3>
                    <p>50% - progress</p>
                    <button>Continue</button>
                    <i class="fab fa-css3-alt css"></i>
                </div>
                <div class="box">
                    <h3>JavaScript</h3>
                    <p>30% - progress</p>
                    <button>Continue</button>
                    <i class="fab fa-js-square js"></i>
                </div>
            </div>
        </div>
    </section>

</section>



     </div>
 </body>
 </html>