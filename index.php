<html>
    <head>
        <title> Attendence Management System</title>
        <link rel="stylesheet" href="indexcss.css">
        <style>
      a{
        margin-right: 5px;
        color: white;
        text-decoration: none;
      }
      a:hover{
        color: goldenrod;
      }
      nav{
        margin: 30px;
        height: 30px;
        background-color: rgb(74, 95, 88);
      }
      mark{
        margin: 527px;
        color: brown;
        background-color: rgb(205, 255, 242);
        padding: 23px;
        text-align: center;
      }
      body{
        hko
        background-image: url("https://images.unsplash.com/photo-1614285457768-646f65ca8548?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80");
      }
      /* .navbar-brand{
        margin-top: 10px;
      } */
        </style>
    </head>
    <body>
        <div class="abs">
    <nav class="navbar navbar-expand-lg bg-secondary">
        <div class="container-fluid">
          <a class="navbar-brand" href="">&nbsp;&nbsp;&nbsp;<mark>ATTENDANCE MANAGEMENT SYSTEM</mark></a>
        </div>
      </nav>
      </div> 
<div class="kohli">
    <div class="formb ">
        <div class="login-signup">
            <div id="btn"></div>
            <button type="button" class="but" onclick="stu()">Student</button>
            <button type="button" class="but" onclick="lec()"">Lecturer</button>
        </div>
        <form id="student"  class="input">
            <div class="contact">
                <a href="contact.html"style="text-decoration:none;">
                <img src="https://www.freeiconspng.com/uploads/contact-icons-png-contact-me-png-health-us-icon-8.png">
                </a>
                <a href="timetable.html"style="text-decoration:none;">
                <img src="C:\Users\apparao\OneDrive\Pictures\aa-removebg-preview.png">
                </a>
            </div>
            <div class="div2">
                <input type="text" name="name" required >
                <span></span>
                <label>Username</label>
            </div>
            <div class="div2">
                <input type="password" name="pswd" required >
                <span></span>
                <label>Password</label>
            </div> 
            <button type="submit" class="submit-btn">Login</button>
        </form>
        <form id="lecturer" class="input" action="index.html">
            <div class="div2">
                <input type="text" name="name"id="id1" required >
                <span></span>
                <label>Username</label>
            </div>
            <div class="div2">
                <input type="password" name="pswd"id="id2" required >
                <span></span>
                <label>Password</label>
            </div> 
           
            <button type="submit" class="submit-btn" onclick="fun()">Login</button>
        </form>
    </div>
</div>
<script>
    var x=document.getElementById("student");
    var y=document.getElementById("lecturer");
    var z=document.getElementById("btn");
    function fun()
    {
        var a=document.getElementById("id1").value;
        var b=document.getElementById("id2").value;
        document.write(a+b);
        if(a=='neelima' && b=='123'){
            window.location.replace("Untitled-1.html");
        }
        if(a=='naveen'&& b=='123'){
            window.location.replace("Untitled-1.html");
        }
    }
    function lec()
    {
        x.style.left="-400px";
        y.style.left="50px";
         z.style.left="110px";       
    }
    function stu()
    {
        x.style.left="50px";
        y.style.left="450px";
        z.style.left="0px";       
    }
</script> 
    </body>
</html>