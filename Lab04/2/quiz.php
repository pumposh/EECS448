<?php
//access the global array called $_POST to get the values from the answers
$A1 = $_POST["Q1_answers"];
$A2 = $_POST["Q2_answers"];
$A3 = $_POST["Q3_answers"];
$A4 = $_POST["Q4_answers"];
$A5 = $_POST["Q5_answers"];
$correct = 0;

//Tally up correct answers
if ($A1 == "B")
{
  $correct ++;
}
if ($A2 == "A")
{
  $correct ++;
}
if ($A3 == "C")
{
  $correct ++;
}
if ($A4 == "D")
{
  $correct ++;
}
if ($A5 == "A")
{
  $correct ++;
}

//Question 1 output
echo "<br>Question 1: What is the best food? <br> You answered: ";
if ($A1 == "A")
{
  echo "Pizza";
}
elseif ($A1 == "B")
{
  echo "Enchiladas";
}
elseif ($A1 == "C")
{
  echo "Hot dogs";
}
elseif ($A1 == "D")
{
  echo "Crab rangoons";
}
echo "<br>Correct answer: Enchiladas<br>";

//Question 2 output
echo "<br>Question 2: What is the 3rd letter of the alphabet? <br> You answered: ";
if ($A2 == "A")
{
  echo "C";
}
elseif ($A2 == "B")
{
  echo "A";
}
elseif ($A2 == "C")
{
  echo "D";
}
elseif ($A2 == "D")
{
  echo "B";
}
echo "<br>Correct answer: C<br>";

//Question 3 output
echo "<br>Question 3: How many ghosts chase Pac Man? <br> You answered: ";
if ($A3 == "A")
{
  echo "1";
}
elseif ($A3 == "B")
{
  echo "9";
}
elseif ($A3 == "C")
{
  echo "4";
}
elseif ($A3 == "D")
{
  echo "17";
}
echo "<br>Correct answer: 4<br>";

//Question 4 output
echo "<br>Question 4: How big is the Samsung Galaxy Note 8 display? <br> You answered: ";
if ($A4 == "A")
{
  echo '5.8"';
}
elseif ($A4 == "B")
{
  echo '6.0"';
}
elseif ($A4 == "C")
{
  echo '4.7"';
}
elseif ($A4 == "D")
{
  echo '6.3"';
}
echo '<br>Correct answer: 6.3"<br>';

//Question 5 output
echo "<br>Question 5: How many live turkeys fit inside a mid sized sedan? <br> You answered: ";
if ($A5 == "A")
{
  echo '54';
}
elseif ($A5 == "B")
{
  echo '17';
}
elseif ($A5 == "C")
{
  echo '0';
}
elseif ($A5 == "D")
{
  echo '4';
}
echo '<br>Correct answer: 54"<br>';

echo '<br><br>Your score: ';

if ($correct == 0)
{
  echo "0%";
}
elseif ($correct == 1)
{
  echo "20%";
}
elseif ($correct == 2)
{
  echo "40%";
}
elseif ($correct == 3)
{
  echo "60%";
}
elseif ($correct == 4)
{
  echo "80%";
}
elseif ($correct == 5)
{
  echo "100%";
}

?>
