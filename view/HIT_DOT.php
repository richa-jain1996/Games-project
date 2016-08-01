<!DOCTYPE HTML>  
<html>
<head>
   
<title>HIT_THE_DOT GAME</title>

		<script type="text/javascript">
 

var temp=-1;
var player_score=0;
var hoursleft=60;
var playing=false;

 function time_check(remtime) {
				document.getElementById("time").value=remtime;
                                if(playing==true)
                                {
				
					if(remtime==0) {
						
            alert("The score of the player is "+player_score);
		windows.location="ExtraAssignment.php";
					}
					else {
						t=remtime-1;
						setTimeout("time_check(t)",1000);
					}
				
			}        
                    }
function random()
{
 return(Math.floor(Math.random()*100%hoursleft));   
}

function play()
{
   
   playing=true;
        
        
	Computer_turn();
        document.getElementById("score").value=player_score;
        
	time_check(30);
        
    }    

function Computer_turn()
{
	 var launched=false;

				while(!launched) {

					mynum=random();

					if(mynum!=temp) {
						document.getElementById(mynum).checked=true;
						temp=mynum;
						launched=true;
					}
				}
	
}


function Hit(t)
{
	

        if(temp!=t)
        {
            player_score+=-1;
            document.getElementById("score").value=player_score;
            
            document.getElementById(t).checked=false;
            document.getElementById(temp).checked=true;
    
                
           
        }
         
         
	else
	{
		player_score+=1;
		document.getElementById("score").value=player_score;
                Computer_turn();
                document.getElementById(t).checked=false;
               
    
	}
	
	
}

</script>
</head>
<body style="background-color:#11ffdd">
<center>
<h1>HIT_THE_DOT</h1>
Test Your Skills ...How many boxes can you check in 30 seconds??
<br>
<input type="button" name="start" value="Start Game" onClick="play()">

<br>
<br>
Time:<input type="text" id="time">
<br>
<br>
Score:<input type="text" id="score">
<hr style="width:500px">
<table>
<tr>
<td><input type="radio" id="1" name="abc" onClick="Hit(1)"></td>
<td><input type="radio" id="2" name="abc" onClick="Hit(2)"></td>
<td><input type="radio" id="3" name="abc" onClick="Hit(3)"></td>
<td><input type="radio" id="4" name="abc" onClick="Hit(4)"></td>
<td><input type="radio" id="5" name="abc" onClick="Hit(5)"></td>
<td><input type="radio" id="6" name="abc" onClick="Hit(6)"></td>
<td><input type="radio" id="7" name="abc" onClick="Hit(7)"></td>
<td><input type="radio" id="8" name="abc" onClick="Hit(8)"></td>
<td><input type="radio" id="9" name="abc" onClick="Hit(9)"></td>
<td><input type="radio" id="10" name="abc" onClick="Hit(10)"></td>

</tr>
<tr>
<td><input type="radio" id="11" name="abc" onClick="Hit(11)"></td>
<td><input type="radio" id="12" name="abc" onClick="Hit(12)"></td>
<td><input type="radio" id="13" name="abc" onClick="Hit(13)"></td>
<td><input type="radio" id="14" name="abc" onClick="Hit(14)"></td>
<td><input type="radio" id="15" name="abc" onClick="Hit(15)"></td>
<td><input type="radio" id="16" name="abc" onClick="Hit(16)"></td>
<td><input type="radio" id="17" name="abc" onClick="Hit(17)"></td>
<td><input type="radio" id="18" name="abc" onClick="Hit(18)"></td>
<td><input type="radio" id="19" name="abc" onClick="Hit(19)"></td>
<td><input type="radio" id="20" name="abc" onClick="Hit(20)"></td>

</tr>
<tr>
<td><input type="radio" id="21" name="abc" onClick="Hit(21)"></td>
<td><input type="radio" id="22" name="abc" onClick="Hit(22)"></td>
<td><input type="radio" id="23" name="abc" onClick="Hit(23)"></td>
<td><input type="radio" id="24" name="abc" onClick="Hit(24)"></td>
<td><input type="radio" id="25" name="abc" onClick="Hit(25)"></td>
<td><input type="radio" id="26" name="abc" onClick="Hit(26)"></td>
<td><input type="radio" id="27" name="abc" onClick="Hit(27)"></td>
<td><input type="radio" id="28" name="abc" onClick="Hit(28)"></td>
<td><input type="radio" id="29" name="abc" onClick="Hit(29)"></td>
<td><input type="radio" id="30" name="abc" onClick="Hit(30)"></td>

</tr>
<tr>
<td><input type="radio" id="31" name="abc" onClick="Hit(31)"></td>
<td><input type="radio" id="32" name="abc" onClick="Hit(32)"></td>
<td><input type="radio" id="33" name="abc" onClick="Hit(33)"></td>
<td><input type="radio" id="34" name="abc" onClick="Hit(34)"></td>
<td><input type="radio" id="35" name="abc" onClick="Hit(35)"></td>
<td><input type="radio" id="36" name="abc" onClick="Hit(36)"></td>
<td><input type="radio" id="37" name="abc" onClick="Hit(37)"></td>
<td><input type="radio" id="38" name="abc" onClick="Hit(38)"></td>
<td><input type="radio" id="39" name="abc" onClick="Hit(39)"></td>
<td><input type="radio" id="40" name="abc" onClick="Hit(40)"></td>

</tr>
<tr>
<td><input type="radio" id="41" name="abc" onClick="Hit(41)"></td>
<td><input type="radio" id="42" name="abc" onClick="Hit(42)"></td>
<td><input type="radio" id="43" name="abc" onClick="Hit(43)"></td>
<td><input type="radio" id="44" name="abc" onClick="Hit(44)"></td>
<td><input type="radio" id="45" name="abc" onClick="Hit(45)"></td>
<td><input type="radio" id="46" name="abc" onClick="Hit(46)"></td>
<td><input type="radio" id="47" name="abc" onClick="Hit(47)"></td>
<td><input type="radio" id="48" name="abc" onClick="Hit(48)"></td>
<td><input type="radio" id="49" name="abc" onClick="Hit(49)"></td>
<td><input type="radio" id="50" name="abc" onClick="Hit(50)"></td>

</tr>
<tr>
<td><input type="radio" id="51" name="abc" onClick="Hit(51)"></td>
<td><input type="radio" id="52" name="abc" onClick="Hit(52)"></td>
<td><input type="radio" id="53" name="abc" onClick="Hit(53)"></td>
<td><input type="radio" id="54" name="abc" onClick="Hit(54)"></td>
<td><input type="radio" id="55" name="abc" onClick="Hit(55)"></td>
<td><input type="radio" id="56" name="abc" onClick="Hit(56)"></td>
<td><input type="radio" id="57" name="abc" onClick="Hit(57)"></td>
<td><input type="radio" id="58" name="abc" onClick="Hit(58)"></td>
<td><input type="radio" id="59" name="abc" onClick="Hit(59)"></td>
<td><input type="radio" id="60" name="abc" onClick="Hit(60)"></td>

</tr>
</table>
<hr style="width:500px">

<p><b>Instructions:</b></p>
<ul>
<li>Click on the radio buttons as they are selected randomly by the computer
</li>
<li>1 point per hit,minus 1 point per miss
</li>
</ul>

</center>
</body>
</html>

