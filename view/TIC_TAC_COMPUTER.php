<html>
<head>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js">
</script>
<title>TIC_TAC_TOE Game</title>
<script type="text/javascript">
var a=0;
var b=0;
var c=0;
var d=0;
var e=0;
var f=0;
var g=0;
var h=0;
var i=0;
var whose_move=1;
var temp='';
var who_won=0;
var ok=0;
var count_player1_wins=0;
var count_computer_wins=0;
var count_ties=0;

function process()
{
	check_win();
	if(who_won==1)
	{
		alert("Congrats Player1 wins!!");
		++count_player1_wins;
		document.getElementById('player1').value=count_player1_wins;
		
		playAgain();
	}
	
	if(who_won==2)
		{
			alert("Computer wins!!");
		count_computer_wins++;
		document.getElementById('player2').value=count_computer_wins;
		playAgain();
		}
	
	if(who_won==3)
		{
			alert("Its a tie");
			count_ties++;
			document.getElementById('ties').value=count_ties;
			playAgain();
		}

	
}
function check_Space()
{
	if((temp=='A')&&(a==0))
	{
		
		ok=1;

		if(whose_move==1)
		{
			a=1;
			
		}
		if(whose_move==2)
			a=2;
	}
	if((temp=='B')&&(b==0))
	{ok=1;
		if(whose_move==1)
			b=1;
		if(whose_move==2)
			b=2;
	}
	if((temp=='C')&&(c==0))
	{ok=1;
		if(whose_move==1)
			c=1;
		if(whose_move==2)
			c=2;
	}
	if((temp=="D")&&(d==0))
	{ok=1;
		if(whose_move==1)
			d=1;
		if(whose_move==2)
			d=2;
	}
	if((temp=="E")&&(e==0))
	{ok=1;
		if(whose_move==1)
			e=1;
		if(whose_move==2)
			e=2;
	}
	if((temp=="F")&&(f==0))
	{ok=1;
		if(whose_move==1)
			f=1;
		if(whose_move==2)
			f=2;
	}
	if((temp=="G")&&(g==0))
	{ok=1;
		if(whose_move==1)
			g=1;
		if(whose_move==2)
			g=2;
	}
	if((temp=="H")&&(h==0))
	{ok=1;
		if(whose_move==1)
			h=1;
		if(whose_move==2)
			h=2;
	}
	if((temp=="I")&&(i==0))
	{ok=1;
		if(whose_move==1)
			i=1;
		if(whose_move==2)
			i=2;
	}
}
function computer_random_move()
{
	while(ok==0)
	{
		var computer_move=Math.floor(Math.random()*10)+1;
		if(computer_move==1)
			temp="A";
		if(computer_move==2)
			temp="B";
		if(computer_move==3)
			temp="C";
		if(computer_move==4)
			temp="D";
		if(computer_move==5)
			temp="E";
		if(computer_move==6)
			temp="F";
		if(computer_move==7)
			temp="G";
		if(computer_move==8)
			temp="H";
		if(computer_move==9)
			temp="I";
		check_Space();
		
	}
}
function computer_against_move()
{
	if((a==1)&&(b==1)&&(c==0)&&(temp==""))temp="C";
	if((a==1)&&(b==0)&&(c==1)&&(temp==""))temp="B";
	if((a==0)&&(b==1)&&(c==1)&&(temp==""))temp="A";
	if((d==1)&&(e==1)&&(f==0)&&(temp==""))temp="F";
	if((d==1)&&(e==0)&&(f==1)&&(temp==""))temp="E";
	if((d==0)&&(e==1)&&(f==1)&&(temp==""))temp="D";
	if((g==1)&&(h==1)&&(i==0)&&(temp==""))temp="I";
	if((g==1)&&(h==0)&&(i==1)&&(temp==""))temp="H";
	if((g==0)&&(h==1)&&(i==1)&&(temp==""))temp="G";
	if((a==1)&&(e==1)&&(i==0)&&(temp==""))temp="I";
	if((a==1)&&(e==0)&&(i==1)&&(temp==""))temp="E";
	if((a==0)&&(e==1)&&(i==1)&&(temp==""))temp="A";
	if((e==1)&&(g==1)&&(c==0)&&(temp==""))temp="C";
	if((e==1)&&(g==0)&&(c==1)&&(temp==""))temp="G";
	if((e==0)&&(g==1)&&(c==1)&&(temp==""))temp="E";
	if((a==1)&&(d==1)&&(g==0)&&(temp==""))temp="G";
	if((a==1)&&(d==0)&&(g==1)&&(temp==""))temp="D";
	if((a==0)&&(d==1)&&(g==1)&&(temp==""))temp="A";
	if((e==1)&&(b==1)&&(h==0)&&(temp==""))temp="H";
	if((e==1)&&(b==0)&&(h==1)&&(temp==""))temp="B";
	if((e==0)&&(b==1)&&(h==1)&&(temp==""))temp="E";
	if((f==1)&&(i==1)&&(c==0)&&(temp==""))temp="C";
	if((f==1)&&(i==0)&&(c==1)&&(temp==""))temp="I";
	if((f==0)&&(i==1)&&(c==1)&&(temp==""))temp="F";
	
}
function computer_winning_move()
{
	if((a==2)&&(b==2)&&(c==0)&&(temp==""))temp="C";
	if((a==2)&&(b==0)&&(c==2)&&(temp==""))temp="B";
	if((a==0)&&(b==2)&&(c==2)&&(temp==""))temp="A";
	if((d==2)&&(e==2)&&(f==0)&&(temp==""))temp="F";
	if((d==2)&&(e==0)&&(f==2)&&(temp==""))temp="E";
	if((d==0)&&(e==2)&&(f==2)&&(temp==""))temp="D";
	if((g==2)&&(h==2)&&(i==0)&&(temp==""))temp="I";
	if((g==2)&&(h==0)&&(i==2)&&(temp==""))temp="H";
	if((g==0)&&(h==2)&&(i==2)&&(temp==""))temp="G";
	if((a==2)&&(e==2)&&(i==0)&&(temp==""))temp="I";
	if((a==2)&&(e==0)&&(i==2)&&(temp==""))temp="E";
	if((a==0)&&(e==2)&&(i==2)&&(temp==""))temp="A";
	if((e==2)&&(g==2)&&(c==0)&&(temp==""))temp="C";
	if((e==2)&&(g==0)&&(c==2)&&(temp==""))temp="G";
	if((e==0)&&(g==2)&&(c==2)&&(temp==""))temp="E";
	if((a==2)&&(d==2)&&(g==0)&&(temp==""))temp="G";
	if((a==2)&&(d==0)&&(g==2)&&(temp==""))temp="D";
	if((a==0)&&(d==2)&&(g==2)&&(temp==""))temp="A";
	if((e==2)&&(b==2)&&(h==0)&&(temp==""))temp="H";
	if((e==2)&&(b==0)&&(h==2)&&(temp==""))temp="B";
	if((e==0)&&(b==2)&&(h==2)&&(temp==""))temp="E";
	if((f==2)&&(i==2)&&(c==0)&&(temp==""))temp="C";
	if((f==2)&&(i==0)&&(c==2)&&(temp==""))temp="I";
	if((f==0)&&(i==2)&&(c==2)&&(temp==""))temp="F";
	
}
function computer_move()
{
	ok=0;
	temp="";
	computer_winning_move();
	check_Space();
	if(ok==0)
	{
		computer_against_move();
		check_Space();
		if(ok==0)
		{
			computer_random_move();
			
		}
	}
	document.getElementById(temp).src="cross.jpg";
	whose_move=1;
	process();
}
function playAgain()
{a=0;
b=0;
c=0;
d=0; e=0;
f=0;
g=0;
h=0;
i=0;
whose_move=1;
temp='';
who_won=0;
ok=0;
document.getElementById('A').src="blank.png";
document.getElementById('B').src="blank.png";
document.getElementById('C').src="blank.png";
document.getElementById('D').src="blank.png";
document.getElementById('E').src="blank.png";
document.getElementById('F').src="blank.png";
document.getElementById('G').src="blank.png";
document.getElementById('H').src="blank.png";
document.getElementById('I').src="blank.png";
	
}
$(document).ready(function()
{
	
$("input").click(function()
	{

		
		playAgain();
	});
	
	$("button").toggle(
	function()
	{
		$("#helping").fadeIn(2000);
		
	},
	function()
	{
		$("#helping").fadeOut(2000);
	});
});



function check_win()
{
	if(((a==1)&&(b==1)&&(c==1))||
	((d==1)&&(e==1)&&(f==1))||
	((g==1)&&(h==1)&&(i==1))||
	((a==1)&&(d==1)&&(g==1))||
	((b==1)&&(e==1)&&(h==1))||
	((c==1)&&(f==1)&&(i==1))||
	((a==1)&&(e==1)&&(i==1))||
	((e==1)&&(g==1)&&(c==1)))
		who_won=1;
	else
		if(((a==2)&&(b==2)&&(c==2))||
	((d==2)&&(e==2)&&(f==2))||
	((g==2)&&(h==2)&&(i==2))||
	((a==2)&&(d==2)&&(g==2))||
	((b==2)&&(e==2)&&(h==2))||
	((c==2)&&(f==2)&&(i==2))||
	((a==2)&&(e==2)&&(i==2))||
	((e==2)&&(g==2)&&(c==2)))
		who_won=2;
	else
		if((a!=0)&&(b!=0)&&(c!=0)&&(d!=0)&&(e!=0)&&(f!=0)&&(g!=0)&&(h!=0)&&(i!=0)&&(who_won==0))
			who_won=3;

}

function Move(c)
{
	temp=c;
	ok=0;
if(whose_move==1)
{
	
	check_Space();
	if(ok==1)
	{ 
		whose_move=2;
		document.getElementById(c).src="zero.jpg";
		process();
		
	}
	else
	{
		alert("The space is already occupied!!Please select another square");
	}
}

    if(whose_move==2)
	{
	computer_move();
	}
	

}

</script>

</head>
<center>
<body style="background-color:#ee5511">



<h1><u>Tic-Tac-Toe</u></h1>
<br>
<br>
<table>
<td>
<table border="1px" style="background-color:#6699dd;">
<tr>
<td><a href="javascript:Move('A')"><img src="blank.png" border="0px" height="100px" width="100px" id="A"></a></td>
<td><a href="javascript:Move('B')"><img src="blank.png" border="0px" height="100px" width="100px" id="B"></a></td>
<td><a href="javascript:Move('C')"><img src="blank.png" border="0px" height="100px" width="100px" id="C"></a></td>
</tr>
<tr>
<td><a href="javascript:Move('D')"><img src="blank.png" border="0px" height="100px" width="100px" id="D"></a></td>
<td><a href="javascript:Move('E')"><img src="blank.png" border="0px" height="100px" width="100px" id="E"></a></td>
<td><a href="javascript:Move('F')"><img src="blank.png" border="0px" height="100px" width="100px" id="F"></a></td>
</tr>
<tr>
<td><a href="javascript:Move('G')"><img src="blank.png" border="0px" height="100px" width="100px" id="G"></a></td>
<td><a href="javascript:Move('H')"><img src="blank.png" border="0px" height="100px" width="100px" id="H"></a></td>
<td><a href="javascript:Move('I')"><img src="blank.png" border="0px" height="100px" width="100px" id="I"></a></td>
</tr>

</table>
</td>
<td>

<table>
<tr>
<td>
<input type="text" id="player1" value="0" size="5">Player1

</td>
</tr>
<tr>
<td>
<input type="text" id="player2" value="0" size="5">Computer

</td>
</tr>
<tr>
<td>
<input type="text" id="ties" value="0" size="5">Ties
</td>
</tr>
</table>
</td>
</table>


<input type="button" value="Play Again"  style="color:#eeffdd;background-color:#112233"> 
&nbsp;
&nbsp;

<button  style="color:#eeffdd;background-color:#112233">Game Help</button>
<div id="helping" style="display:none;background-color:#dd1144;height:400px;width:400px">

<h3>
        Welcome to Tic-Tac-Toe Game.Here player1 plays as 0's and computer plays as X's.
		Select the sqaure where you want to insert 0's or  X's by clicking them.
		You cannot occupy the square that is already occupied."
		The first player to get three 0's or X's consecutively wins. Good Luck!!
</h3>
		</div>


</body>
</center>
</html>