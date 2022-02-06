


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="error" style='width:100%;'>
            <?php
            if(isset($_GET['ruselt'])){

                if($_GET['ruselt'] == 'input_blank'){


                    echo '<h2 style="text-align:center;background:red; color:#fff;"> Fillup the input</h2>';
                }elseif($_GET['ruselt'] == 'Password_not_mach'){
                    echo '<h2 style="text-align:center;background:red; color:#fff;"> Password_not_mach</h2>';
                }elseif($_GET['ruselt'] == 'email_is_alreay_used'){
                    echo '<h2 style="text-align:center;background:red; color:#fff;"> email_is_alreay_used</h2>';
                }elseif($_GET['ruselt'] == 'ok'){
                    echo '<h2 style="text-align:center;background:green; color:#fff;"> Well come Facebook</h2>';
                }
                
            }
            
            
            
            
            ?>
        </div>
    <div class="fac_container">
    
        <div class="container_left">
            <h1>Facebook</h1>
            <h5>Connect with friends and the world <br> around you on Facebook.</h5>
        </div>
        <div class="container_right">
          
            <div class="login_form">
                <form action="inc/login.php" method='post'>
                    <div class="form_group">
                        <input name="u_email" type="text" placeholder="&nbsp; &nbsp;Email or Phone nember" id="login_id">
                        <small id="login_Error"></small>
                    </div>
                    <div class="form_group">
                        <input name="u_password" type="password" placeholder="&nbsp;&nbsp;password" id="user_pass">
                        <small id="pass_Error"></small>
                    </div>
                    <button href="">Log in</button>
                   <a href="">Forgot Password?</a>
                    <hr>
                </form>
                <button type="button" id="create_btn">Create a new Account</button>
            </div>
        </div>
    </div>
    <div class="main" id="modal">
        <div class="form_container">
            <form  action="inc/reg.php" method="POST" enctype="multipart/form-data">
                <div class="input_group">
                    <h2> Sin up Form <span id="closeModal">&times;</span> </h2>
                    <p>It’s quick and easy.</p>
                </div>
                <div class="name">
                    <div class="input_group input_name">
                        <input name="f_name" type="text" placeholder="Enter your First Name" id="userName">
                        <small id="nameErr"></small>
                    </div>
                    <div class="input_group input_name">
                        <input name="l_name" type="text" placeholder="Enter your last Name" id="lastName">
                        <small id="lastNameErr"></small>
                    </div>
                </div>
                <div class="input_group">
                    <input name="email" type="email" placeholder="Mobile Number or Email" id="email">
                    <small id="emailErr"></small>
                </div>
                <div class="input_group">
                    <input name="password" type="password" placeholder="New Password" id="pass"> 
                    <small id="passErr"></small>
                </div>
                <div class="input_group">
                    <input name="rePass" type="password" placeholder="confarm Password" id="rePass">
                    <small id="rePassErr"></small>
                </div>
                <p>Birthday <span> &#63;</span></p>
                <select name="day" id="day">
                    <option value="01">01</option>
                    <option value="02">02</option>
                    <option value="03">03</option>
                    <option value="04">04</option>
                    <option value="05">05</option>
                    <option value="06">06</option>
                    <option value="07">07</option>
                    <option value="08">08</option>
                    <option value="09">09</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="30">30</option>
                    <option value="31">31</option>
            
                    
                    <!-- <script>
                        for(date=1;date <= 31;date++){
                            document.write("<option>"+date+"</option>");
                        }
                    </script> -->
                </select>
                    <select name="month" id="month">
                        <option value="select">Select</option>
                        <option value="Jan">Jan</option>
                        <option value="Feb">Feb</option>
                        <option value="Mar">Mar</option>
                        <option value="Apr">Apr</option>
                        <option value="May">May</option>
                        <option value="Jun">Jun</option>
                        <option value="Jul">Jul</option>
                        <option value="Agu">Agu</option>
                        <option value="Sep">Sep</option>
                        <option value="Nov">Nov</option>
                        <option value="Dec">Dec</option>
                     <!-- <script>
                         for(month=1;month <= 12;month++){
                             document.write("<option>"+month+"</option>");
                         }
                     </script> -->
                    </select>
                <select name="year" id="year">
                    <option value="">Seclect</option>
                    <option value="2001">2001</option>
                    <option value="2002">2002</option>
                    <option value="2003">2003</option>
                    <option value="2004">2004</option>
                    <option value="2005">2005</option>
                    <option value="2006">2006</option>
                    <option value="2007">2007</option>
                    <option value="2008">2008</option>
                    <option value="2009">2009</option>
                    <option value="2010">2010</option>
                    <option value="2011">2011</option>
                    <option value="2012">2012</option>
                    <option value="2013">2013</option>
                    <option value="2014">2014</option>
                    <option value="2015">2015</option>
                    <option value="2016">2016</option>
                    <option value="2017">2017</option>
                    <option value="2018">2018</option>
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                    <!-- <script>
                        for(year=2021;year >=1905;year--){
                            document.write('<option>'+year+'</option>');
                        }  
                    </script> -->
                </select>  
                <br>
                <label for="ppp" id="ppp">Profile Image</label>
                    <input name="ppp" type="file">
                <div id="g_group">
                    <p>Gender <span> &#63;</span></p>
                    <input value="male" type="radio" name="same">
                    <label>Male</label>
                    <input value="Female" type="radio" name="same">
                    <label>Female</label>
                    <input value="Other" type="radio" name="same">
                    <label>Other</label>
                </div>
                <button type="submit" onclick="return submit();">Sin up</button>
            </form>
        </div>
    </div>

    <script src="js/main.js"></script>
</body>
</html>
