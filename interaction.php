
<html>
    <head>
        <title>Samasaya : Discussion</title>
        <link rel="stylesheet" href="aboutcss.css">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script>
			function checks()
			{
				var check=document.getElementsByClassName("categories").selected;
				if(check.value==SelectCategory)
				{
					alert();
				}

			}
		</script>
    </head>
    <body background="about.jpg">
        <header class="h2">
            <div class="headNav">
               <div class="logo">
                   <img src="myicon.ico">
               </div>
               <nav>
                <ul class="general">
                    <li><a href="home.php">HOME</a></li>
                    <li><a href="contact.html">CONTACT</a></li>
                    <li><a href="about.html">ABOUT</a></li>
                    <li><a href="home.php">LOGOUT</a></li>
                </ul>
                </nav>
                <marquee scrollamount="8"><b>Welcome!! Post your doubts and queries here and get their replies and answers from the experienced people of our community.</b></marquee>
            </div>
            <br>
            
            <!-- --------------------------------------------------------------Search Bar------------------------------------------------------------------------- -->
                   <div>
                     
                     <h3 style="font-size: 25px;color: #191970">Search Question</h3>

                    <form action="searchconn.php" method="Post">
                    <div class="form-group">
                        <input type="text" class="form-control" name="search"  id="question" placeholder="Enter here to search frequently asked questions.."  style=" border: solid blue 2px;">
                        <input type="submit" name="search" value="search" class="search">
                        <br>
                        <div id="questionlist"></div>
                    </div>
                    </form>
            </div>
            
            <h3 class="page-heading2"><b><center>Ask Query</center></b></h3><br>
   
<div style="width: 100vw; height: 50vh; background-color: aqua;">

<div class="query" style="width: 50vw;position: absolute; height: 70vh; border: solid black 2px;">
  <form action="interactionconn.php" method="Post">
   
     <label for="categories">Categories:</label>
                     <select class="selects" name="categories">
                     <option value="SelectCategory">Select Category</option>
                     <option valu="java">Java</option>
                     <option value="database">DataBase Management System</option>
                     <option value="HTML">HTML</option>
                     <option value="CSS">CSS</option>
                     <option value="javascript">Javascript</option>
                     </select>
       
                      <label for="question">Question:</label> 
                      <input type="text" name="question" class="question">   
             
                     <label for="description">Description:<br></label> 
                     <textarea rows="5" cols="30" class="description" name="description"></textarea>
                     
                     <label for="file_upload">Upload File:<small>(optional)</small></label> 
                    <p><strong>Your E-Mail Address:</strong><br>
                      <input type="text" name="email" class="email">
                   <center><br><br>
                       <input type="submit" name="submit" value="ASK QUERY" class="submit" onclick="checks()"></center>
                   
                 
                     
  </form>
<center> <a href="allcomments.php"> <input type="button" class="submit"  name="allcomments" value="To See all the answer" style="background-color: #191970;color: white;padding: 12px 20px;border: none;border-radius: 4px;cursor: pointer;"> </a></center>
</div>
 

          <div class="sshow"  style="border: solid black 2px;">
               <img class="mySlides" src="contact.png" style="height: 55vh; width: 50vw; margin-left: 50vw;">
               <img class="mySlides" src="11.jpg" style="height: 55vh; width: 50vw; margin-left: 50vw;">
               <img class="mySlides" src="22.jpg" style="height: 55vh; width: 50vw; margin-left: 50vw;">
               <img class="mySlides" src="33.jpg" style="height: 55vh; width: 50vw; margin-left: 50vw;">
               <img class="mySlides" src="44.jpg" style="height: 55vh; width: 50vw; margin-left: 50vw;">
               <img class="mySlides" src="55.jpg" style="height: 55vh; width: 50vw; margin-left: 50vw;">
           </div>
           <script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
           
            </div>
       
        </header>
        
    </body>
</html>