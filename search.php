<!DOCTYPE html>
<html lang="eng">

<body>
    <h2>Searching the CD Database</h2>

    <div id="myForm">
        <form id="myform" name="theForm" class="group" action="songresults.php" method="POST">
        
            <ul>
			 <li>
                    <label for="Search">
                        <span id="srch"></span>Enter Song Name </label>
                    <input type="text" name="songName" class="tb" id="srcj" placeholder="Song Name" /> </input>
					
                </li>
                
      
            </ul>
        </form>
			<form action = "totaltracks.php">
				<li>
					<input type="submit" value="View All Tracks"/>
				</li>	
		</form>			
		<br>
			<form action = "totalgen.php">
				<li>
					<input type="submit" value="View Genres"/>
				</li>	
		</form>	
		<br>		
		<form action = "totalart.php">
				<li>
					<input type="submit" value="View All Artists"/>
				</li>	
		</form>		
		<br>
		<form action = "totalalb.php">
				<li>
					<input type="submit" value="View All Albums"/>
				</li>	
		</form>	
<br>
		<form action = "viewstars.php">
				<li>
					<input type="text" value="test"/>
				</li>	
		</form>			
    </div>

</body>

</html>