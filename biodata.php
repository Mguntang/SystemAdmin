<!DOCTYPE html>
<html>
<head>
	<title>Biodata</title>

</head>
<body>


   <form method="POST" action="biodata.php">

          <center> <h1>BIODATA</h1></center>

           <pre>

       Name:              <input type="text" name="name"><br>
       Present Address:   <input type="text" name="preAdd"> <br>
       Permanent Address: <input type="text" name="permAdd"> <br>
       Date of Birth:     <select name="month">
					<option>Month</option>
					<option>Jan</option>
					<option>Feb</option>
					<option>Mar</option>
					<option>Apr</option>
					<option>May</option>
					<option>Jun</option>
					<option>Jul</option>
					<option>Aug</option>
					<option>Sep</option>
					<option>Otb</option>
					<option>Nov</option>
					<option>Dec</option>
				</select><select name="day">
					<option>Day</option>
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
					<option>6</option>
					<option>7</option>
					<option>8</option>
					<option>9</option>
					<option>10</option>
					<option>11</option>
					<option>12</option>
					<option>13</option>
					<option>14</option>
					<option>15</option>
					<option>16</option>
					<option>17</option>
					<option>18</option>
					<option>19</option>
					<option>20</option>
					<option>21</option>
					<option>22</option>
					<option>23</option>
					<option>24</option>
					<option>25</option>
					<option>26</option>
					<option>27</option>
					<option>28</option>
					<option>29</option>
					<option>30</option>
					<option>31</option>
				</select><select name="year">
					<option>Year</option>
					<option>1989</option>
					<option>1990</option>
					<option>1991</option>
					<option>1992</option>
					<option>1993</option>
					<option>1994</option>
					<option>1995</option>
					<option>1996</option>
					<option>1997</option>
					<option>1998</option>
					<option>1999</option>
					<option>2001</option>
					<option>2002</option>
					<option>2003</option>
					<option>2004</option>
					<option>2005</option>
					<option>2006</option>
					<option>2007</option>
					<option>2008</option>
					<option>2009</option>
					<option>2010</option>
					<option>2011</option>
					<option>2012</option>
					<option>2013</option>
					<option>2014</option>
					<option>2015</option>
					<option>2016</option>
					<option>2017</option>
					<option>2018</option>
					<option>2019</option>
					<option>2020</option>
				</select> <br>
     Civil Status:   <input type="text" name="Status">										Religion: <input type="text" name="Religion"><br>
     Citizenship:    <input type="text" name="Citizenship">										Age:      <input type="text" name="Age"><br>
     Place of Birth: <input type="text" name="pob">										Weight:   <input type="text" name="Weight"><br>
     Name of Father: <input type="text" name="father">										Height:   <input type="text" name="Height"><br>
     Name of Mother: <input type="text" name="mother"><br>
     Address: 	     <input type="text" name="address"><br>
     Languages or Dialect Spoken: 		 <input type="text" name="dialect"> <br>
     Person to be notified In Case of Emergency: <input type="text" name="pemergency"><br>

   <center> <h1>EDUCATIONAL BACKGROUND:</h1></center> 

     Elementary:     <input type="text" name="elem">							Year Graduated: <input type="text" name="ygelem"> <br>
     High School:    <input type="text" name="hs">						        Year Graduated: <input type="text" name="yghighs"> <br>
     College: 	     <input type="text" name="College">							Year Graduated: <input type="text" name="ygcoll"><br>
     Course:         <input type="text" name="Course"><br>
     Special Skills: <input type="text" name="skills">

    </pre>

    <center>
    	<!-- Reset Button -->
		<input type="reset"> 

		<!-- Submit Button -->
		<input type="submit" name="submit"> <br><br>
</center>
    </form>

        <pre style="padding: 10px;">
      <?php
      
           if (isset($_POST['submit'])) {
           echo " <b> YOUR INFORMATION </b>" . "<br>". "<br>";

         echo "Name: " .$_POST['name'] ."<br>";
         echo "Present Address:" .$_POST['preAdd'] ."<br>";
         echo "Permanent Address:" .$_POST['permAdd'] ."<br>";
         echo "Date of Birth:" .$_POST['month'] ." " .$_POST['day']. " " .$_POST['year'] ."<br>";
         echo "Civil Status:" .$_POST['Status'] ."<br>";
         echo     "Religion:" .$_POST['Religion'] ."<br>";
         echo "Citizenship:" .$_POST['Citizenship'] ."<br>";
         echo     "Age:" .$_POST['Age'] ."<br>";
         echo "Place of Birth:" .$_POST['pob'] ."<br>";
         echo     "Weight:" .$_POST['Weight'] ."<br>";
         echo "Name of Father:" .$_POST['father'] ."<br>";
         echo     "Height:" .$_POST['Height'] ."<br>";

         echo "Name of Mother:" .$_POST['mother'] ."<br>";
         echo "Address: " .$_POST['address'] ."<br>";
         echo "Languages or Dialect Spoken:" .$_POST['dialect'] ."<br>";
         echo "Person to be notified In Case of Emergency:" .$_POST['pemergency'] ."<br>";
         echo " <b> EDUCATIONAL BACKGROUND </b> ". "<br>";

         echo "Elementary:" .$_POST['elem'] ."<br>";
         echo "Year Graduated:" .$_POST['ygelem'] ."<br>";
         echo "High School:" .$_POST['preAdd'] ."<br>";
         echo     "Year Graduated:" .$_POST['yghighs'] ."<br>";
         echo "College:" .$_POST['preAdd'] ."<br>";
         echo     "Year Graduated:" .$_POST['ygcoll'] ."<br>";
         echo "Course:" .$_POST['Course'] ."<br>";
         echo  "Special Skills:" .$_POST['skills'] ."<br>";

           }
 
         ?>
 </pre>


</body>
</html>

 