<?php
include 'conn.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Facebook</title>
	<link rel="stylesheet" type="text/css" href="fbstyle3.css">
</head>	
<body>
<header>
	<div class="header-block">
		<div class="logo">
			<img src="fblogo2.png">
		</div>        
	<div class="fblogin">
          <form action="facebook.php" method="POST">
		<div class="email">
		<label>Email or Phone</label><br>
		<input type="text" name="email" required/>
		</div>
		<div class="password">
		<label>Password</label><br>
		<input type="password" name="password" required/>
			<div class="forgot-account">
			<a href="#">Forgot account?</a>
			</div>
		</div>
		<div class="loginbutton">
               <button type="submit" name="login">Log In</button>
		</div>
          </form>
          <?php
          if(isset($_POST['login']) && ($_POST['email']) && ($_POST['password'])){
$Email = $_POST['email'];
$Password = $_POST['password'];
          $sqlSelect="SELECT * FROM tblFacebook WHERE mobileemail='$Email' AND npassword='$Password'";
          $query=mysqli_query($connect,$sqlSelect);
          $rows=mysqli_fetch_assoc($query);  
               if($rows['mobileemail']==$Email && $rows['npassword']==$Password){
                   echo '<script>alert("Log In")</script>';
               }
               else{
                    echo '<script>alert("Incorrect")</script>';
               }    
}
?>
	</div>
</div>
</header>
<div class="content-block clearfix">
	<div class="fb-connect">
		<p>Connect with friends and the<br>world around you on Facebook.</p>
		<div class="seelogo">
		<img src="seephoto.png">	
		</div>
	</div>
     <form action="facebook.php" method="POST">
	<div class="create-account">
		<h2>Sign Up</h2>
		<p>It's quick and easy.</p>
		<div class="account">		
			<div class="flname">		
				<input type="text" name="firstname" placeholder="  First Name" required>
				<input type="text" name="lastname" placeholder="  Last Name" required><br>
			</div>
			<div class="mobileoremail">
				<input type="text" name="mobileoremail" placeholder="  Mobile number or email" required><br>
			</div>
			<div class="newpassword">
				<input type="password" name="newpassword" placeholder="  New password" required><br>
			</div>
			<div class="bday">
				<label>Birthday</label><br>
<span>
     <select name="month">
        <option value="01">January</option>
        <option value="02">February</option>
        <option value="03">March</option>
        <option value="04">April</option>
        <option value="05">May</option>
        <option value="06">June</option>
        <option value="07">July</option>
        <option value="08">August</option>
        <option value="09">September</option>
        <option value="10">October</option>
        <option value="11">November</option>
        <option value="12">December</option>
     </select> 
</span>
<span>
     <select name="day">
          <option value="01">1</option>
          <option value="02">2</option>
          <option value="03">3</option>
          <option value="04">4</option>
          <option value="05">5</option>
          <option value="06">6</option>
          <option value="07">7</option>
          <option value="08">8</option>
          <option value="09">9</option>
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
          <option value="20">20</option>
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
     </select>
</span>
<span>
     <select name="year">
          <option value="2020">2020</option>
          <option value="2019">2019</option>
          <option value="2018">2018</option>
          <option value="2017">2017</option>
          <option value="2016">2016</option>
          <option value="2015">2015</option>
          <option value="2014">2014</option>
          <option value="2013">2013</option>
          <option value="2012">2012</option>
          <option value="2011">2011</option>
          <option value="2010">2010</option>
          <option value="2009">2009</option>
          <option value="2008">2008</option>
          <option value="2007">2007</option>
          <option value="2006">2006</option>
          <option value="2005">2005</option>
          <option value="2004">2004</option>
          <option value="2003">2003</option>
          <option value="2002">2002</option>
          <option value="2001">2001</option>
          <option value="2000">2000</option>
          <option value="1999">1999</option>
          <option value="1998">1998</option>
          <option value="1997">1997</option>
          <option value="1996">1996</option>
          <option value="1995">1995</option>
          <option value="1994">1994</option>
          <option value="1993">1993</option>
          <option value="1992">1992</option>
          <option value="1991">1991</option>
          <option value="1990">1990</option>
          <option value="1989">1989</option>
          <option value="1988">1988</option>
          <option value="1987">1987</option>
          <option value="1986">1986</option>
          <option value="1985">1985</option>
          <option value="1984">1984</option>
          <option value="1983">1983</option>
          <option value="1982">1982</option>
          <option value="1981">1981</option>
          <option value="1980">1980</option>
          <option value="1979">1979</option>
          <option value="1978">1978</option>
          <option value="1977">1977</option>
          <option value="1976">1976</option>
          <option value="1975">1975</option>
          <option value="1974">1974</option>
          <option value="1973">1973</option>
          <option value="1972">1972</option>
          <option value="1971">1971</option>
          <option value="1970">1970</option>
          <option value="1969">1969</option>
          <option value="1968">1968</option>
          <option value="1967">1967</option>
          <option value="1966">1966</option>
          <option value="1965">1965</option>
          <option value="1964">1964</option>
          <option value="1963">1963</option>
          <option value="1962">1962</option>
          <option value="1961">1961</option>
          <option value="1960">1960</option>
          <option value="1959">1959</option>
          <option value="1958">1958</option>
          <option value="1957">1957</option>
          <option value="1956">1956</option>
          <option value="1955">1955</option>
          <option value="1954">1954</option>
          <option value="1953">1953</option>
          <option value="1952">1952</option>
          <option value="1951">1951</option>
          <option value="1950">1950</option>
          <option value="1949">1949</option>
          <option value="1948">1948</option>
          <option value="1947">1947</option>
          <option value="1946">1946</option>
          <option value="1945">1945</option>
          <option value="1944">1944</option>
          <option value="1943">1943</option>
          <option value="1942">1942</option>
          <option value="1941">1941</option>
          <option value="1940">1940</option>
          <option value="1939">1939</option>
          <option value="1938">1938</option>
          <option value="1937">1937</option>
          <option value="1936">1936</option>
          <option value="1935">1935</option>
          <option value="1934">1934</option>
          <option value="1933">1933</option>
          <option value="1932">1932</option>
          <option value="1931">1931</option>
          <option value="1930">1930</option>
          <option value="1929">1929</option>
          <option value="1928">1928</option>
          <option value="1927">1927</option>
          <option value="1926">1926</option>
          <option value="1925">1925</option>
          <option value="1924">1924</option>
          <option value="1923">1923</option>
          <option value="1922">1922</option>
          <option value="1921">1921</option>
          <option value="1920">1920</option>
          <option value="1919">1919</option>
          <option value="1918">1918</option>
          <option value="1917">1917</option>
          <option value="1916">1916</option>
          <option value="1915">1915</option>
          <option value="1914">1914</option>
          <option value="1913">1913</option>
          <option value="1912">1912</option>
          <option value="1911">1911</option>
          <option value="1910">1910</option>
          <option value="1909">1909</option>
          <option value="1908">1908</option>
          <option value="1907">1907</option>
          <option value="1906">1906</option>
          <option value="1905">1905</option>
     </select>
</span><br>
</div>
			<label>Gender</label><br>
				<div class="gen">
					<input type="radio" name="gender" value="female" required>Female
					<input type="radio" name="gender" value="male" required>Male
					<input type="radio" name="gender" value="custom" required>Custom
				</div>	
			<div class="terms">
			<p>By clicking Sign Up, you agree to our
			<a href="#">Terms, Data Policy</a>
			and<br>
			<a href="#">Cookies Policy.</a>
			You may receive SMS Notification from us and<br>can opt out any time.</p>
			</div>
				<div class="signup">
                         <button type="submit" name="register">Sign Up</button>
				</div>
		</div>	
	</div>
</div>
</form>
<?php
if(isset($_POST['register'])){
               //initialization
     if(isset($_POST['gender'])){
               $Firstname = $_POST['firstname'];
               $Lastname = $_POST['lastname'];
               $Mobileoremail = $_POST['mobileoremail'];
               $Newpassword = $_POST['newpassword'];
               $Month = $_POST['month'];
               $Day = $_POST['day'];
               $Year = $_POST['year'];
               $Gender = $_POST['gender'];
               $sqlInsert = "INSERT INTO tblFacebook(fname,lname,mobileemail,npassword,month,day,year,gender)VALUES('$Firstname','$Lastname','$Mobileoremail','$Newpassword','$Month',$Day,$Year,'$Gender')";
               $query = mysqli_query($connect,$sqlInsert);
               if ($query == TRUE) {
                    echo "<strong>Record Added</strong>";
               }else{
                    echo "<strong>Record not Added</strong>";
               }
          }     
     }
?>
</body>
</html>