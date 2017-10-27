<!DOCTYPE html>
<html>
    <head>
        <title>Lab 7</title>
    </head>
    <body>
        <h1>Lab 7</h1>
        <p><a href="https://github.com/srojtas/cs0334/tree/master/lab7">Source Code</a></p>
        <h2>Part 1</h2>
        <h3>1.</h3>
        <p>The days of the week in sequence are:</p>
        <?php
            $daysOfWeek = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");
            for($i = 0; $i < 7; $i++) {
                echo '<p>' . ($i + 1) . '. ' . $daysOfWeek[$i] . '</p>';
            }
        ?>
        <h3>2.</h3>
        <form action="index.php" method="post">
            <label for="month">Month: </label>
            <select name="month">
                <option value="1">January</option>
                <option value="2">February</option>
                <option value="3">March</option>
                <option value="4">April</option>
                <option value="5">May</option>
                <option value="6">June</option>
                <option value="7">July</option>
                <option value="8">August</option>
                <option value="9">September</option>
                <option value="10">October</option>
                <option value="11">November</option>
                <option value="12">December</option>
            </select>
            <label for="day">Day: </label>
            <input type="number" name="day">
            <label for="year">Year: </label>
            <input type="number" name="year">
            <button type="submit">Submit</button>
        </form>
        <?php
            if($_POST){
                if($_POST["month"] != null && $_POST["day"] != null && $_POST["year"] != null) {
                    echo '<p>You were born on a ' . date("l", mktime(0, 0, 0, $_POST["month"], $_POST["day"], $_POST["year"])) . '!</p>';
                    switch(date("l", mktime(0, 0, 0, $_POST["month"], 1, $_POST["year"]))) {
                        case "Sunday" :
                            $offset = 0;
                            break;
                        case "Monday" :
                            $offset = 1;
                            break;
                        case "Tuesday" :
                            $offset = 2;
                            break;
                        case "Wednesday" :
                            $offset = 3;
                            break;
                        case "Thursday" :
                            $offset = 4;
                            break;
                        case "Friday" :
                            $offset = 5;
                            break;
                        case "Saturday" :
                            $offset = 6;
                            break;
                    }
                    $daysInMonth = cal_days_in_month(CAL_GREGORIAN, $_POST["month"], $_POST["year"]);
	  //build calendar
	   $calendarArray = array();
	   $i=1;
	   $isFirstWeek = True;
	   for ($row = 0; $row < 5; $row++)
	    {
	      $col = 0;
	      if($isFirstWeek)
	      {
	         $col = $offset;
	   	  $isFirstWeek = false;
	      }

	      for (; $col < 7; $col++)
	      {
	         if($i > $daysInMonth)
		     {
		        $i = '&nbsp';
		     }
		     $calendarArray[$row][$col]=$i;
		     $i++;
		   }
	   }
    
	//print calendar
	//display header row

	   echo "<table>";
	   echo"<tr>";
	       echo"<th>Sunday</th>";
		   echo"<th>Monday</th>";
		   echo"<th>Tuesday</th>";
		   echo"<th>Wednesday</th>";
		   echo"<th>Thursday</th>";
		   echo"<th>Friday</th>";
		   echo"<th>Saturday</th>";
		echo"</tr>";
	
		$i = 1;
        //$m = array(); //added to check for nulls     
	    for ($row = 0; $row < 5; $row++)
	    {
	        echo("<tr>");
	        for ($col = 0; $col < 7; $col++)
	        {
	         //if (isset($m[$row+1][$col+1])) - removed the +1 from line below
			 
			     $m = $calendarArray[$row][$col];
			     echo("<td>$m</td>");
			  	 
			 //else {$calendar = NULL;}

	            

	            $i++;
	        }
	        echo("</tr>");
	    }
		echo "</table>";
                }
            }
        ?>
        
        <h2>Part 2</h2>
        <h3>1.</h3>
        
        <form action="index.php" method="post">
            <label for="score1">Lab 1 Score (Out of 100): </label>
            <input type="number" name="score1"> <br>
            <label for="score2">Lab 2 Score (Out of 100): </label>
            <input type="number" name="score2"> <br>
            <label for="score3">Lab 3 Score (Out of 100): </label>
            <input type="number" name="score3"> <br>
            <label for="score4">Lab 4 Score (Out of 100): </label>
            <input type="number" name="score4"> <br>
            <label for="score5">Lab 5 Score (Out of 100): </label>
            <input type="number" name="score5"> <br>
            <button type="submit">Submit</button> <br>
        </form>

        <?php
            if($_POST) {
                if($_POST["score1"] != null && $_POST["score2"] != null && $_POST["score3"] != null && $_POST["score4"] != null && $_POST["score5"] != null) {
                    $totalPoints = $_POST["score1"] + $_POST["score2"] + $_POST["score3"] + $_POST["score4"] + $_POST["score5"];
                    $avg = $totalPoints / 5;
                    echo '<p>The total points scored is ' . $totalPoints . ', and the average score is ' . $avg . '.</p>';
                }
            }
        ?>
    </body>
</html>