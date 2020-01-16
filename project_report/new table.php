<?php
$servername = "localhost";
$username = "root";
$password = "";
$database="tx_rag_question";
      $conn = mysqli_connect($servername, $username, $password,$database);



  ?>
  <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->


    <title>new table</title>
    <style media="screen">
      *{
        margin: 0px;
        padding: 0px;
      }
      body{
        font: 15px/1.5 Arial, Helvetica, sans-serif;
        padding: 0;
        margin: 0;
        background-color: #f4f4f4;
      }
        table{
            width: 100%;
          }
        table, th, td{
          border: 1px solid black;
          border-collapse: collapse;
          padding-left: 5px;
        }
        th{
          text-align: center;
        }
        .aaa{
          text-align: left;
        }
        .me{
          background-color: #aaaa;
        }

        .me1{
          background-color: #aaaa;
          border-right:none !important;
        }

        .table2 {
          margin-top: 10px;
          width: 473px;
        }

        .clred{
          background-color: #f44336;
        }
        .clyel{
          background-color: yellow;
        }
        .clgre{
          background-color: #4CAF50;
        }
        .clblu{
          background-color: #008CBA;
        }
        .clgra{
          background-color: gray;
        }
        .main{
          margin: 20px;
          padding-top: 20px;
        }
        .iptbox{
          height: 20px;
          width: 50px;
          border: 1px solid gray;
          border-radius: 3px;
          margin: 2px 2px;
          padding: 5px 10px;
          margin-left: 10px;
          font-size: 15px;
          box-sizing: border-box;
        }
        input[type=text]:focus{
          border-color: dodgerBlue;
          box-shadow: 0 0 4px 0 dodgerBlue;
        }
        .subbtn{
          padding: 6px;
          margin: 20px;
          margin-left: 1200px;
          font-size: 15px;
          color: #ffff;
          background: gray;
          border: none;
          border-radius: 3px;
        }
        .subbtn:hover{
          cursor: pointer;
        }
      .txt{
        height: 110px;
        width: 389px;
        background-color: #aaaa;
        padding: 15px;
        margin-top: 20px;
      }
      .col-md-4{

        align-content: center;
      }

      }
    </style>
  </head>
  <body>

   <div class="container">
       <div class = "main">
    <?php
    // $sql =" SELECT rag_question.title_id, rag_report.question_id ,rag_question.title,rag_report.school_code,rag_report.year_id,rag_report.jan,rag_report.feb,rag_report.mar,rag_report.apr,rag_report.may,rag_report.jun,rag_report.jul,rag_report.aug,rag_report.sep,rag_report.oct,rag_report.nov,rag_report.dece,rag_report.remark FROM rag_report INNER JOIN rag_question ON rag_report.question_id = rag_question.title_id";


$sql =" SELECT question.title_id, rag_question.question_id ,question.title,rag_question.school_id,rag_question.year,rag_question.jan,
      rag_question.feb,rag_question.mar,rag_question.apr,rag_question.may,rag_question.jun,rag_question.jul,rag_question.aug,
      rag_question.sep,rag_question.oct,rag_question.nov,rag_question.dece,rag_question.remark FROM rag_question INNER JOIN question ON
      rag_question.question_id = question.title_id";
// $result=mysqli_query($conn,$sql);
    // $sql="SELECT * FROM rag_report";
     $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){

     echo '<table class="table">';
     echo  "<thead>";
     echo "<tr>";

     echo "<th class='me1'>Qid</th>";
     echo "<th class='me1'>TITLE</th>";
     echo "<th class='me1'>school_id</th>";
     echo "<th class='me1'>year</th>";
     echo "<th class='me1'>JAN</th>";
     echo "<th class='me1'>FEB</th>";
     echo "<th class='me1'>MAR</th>";
     echo "<th class='me1'>APR</th>";
     echo "<th class='me1'>MAY</th>";
     echo "<th class='me1'>JUN</th>";
     echo "<th class='me1'>JUL</th>";
     echo "<th class='me1'>AUG</th>";
     echo "<th class='me1'>SEP</th>";
     echo "<th class='me1'>OCT</th>";
     echo "<th class='me1'>NOV</th>";
     echo "<th class='me1'>DEC</th>";
     echo "<th class='me1'>REMARK</th>";
    echo "</tr>";
    echo  "</thead>";
      echo "<tbody>";
       while($row=$result->fetch_assoc()){


$red= "<td style='background-color:red'></td>";
$yellow= "<td style='background-color:yellow'></td>";
$green= "<td style='background-color:#4CAF50'></td>";
$blue= "<td style='background-color:#008CBA'></td>";
$grey= "<td style='background-color:grey'></td>";
$white= "<td style='background-color:white'></td>";



        if($row['jan']>=0 && $row['jan']<=2)
          {$col_td= $red;}
         else if ($row['jan']>=3 && $row['jan']<=5)
       {$col_td= $yellow;}
     else if ($row['jan']>=6 && $row['jan']<=8)
       {$col_td= $green;}
   else if ($row['jan']>=9 && $row['jan']<=11)
       {$col_td= $blue;}
   else if ($row['jan']>=12 && $row['jan']<=12)
       {$col_td= $grey;}
       else if ($row['jan']>12 )
          {$col_td= $white;}




  if($row['feb']>=0 && $row['feb']<=2)
          {$red1= $red;}
         else if ($row['feb']>=3 && $row['feb']<=5)
       {$red1= $yellow;}
     else if ($row['feb']>=6 && $row['feb']<=8)
       {$red1= $green;}
   else if ($row['feb']>=9 && $row['feb']<=11)
       {$red1= $blue;}
   else if ($row['feb']>=12 && $row['feb']<=12)
       {$red1= $grey;}
       else if ($row['feb']>12 )
          {$red1= $white;}



   if($row['mar']>=0 && $row['mar']<=2)
          {$mar= $red;}
         else if ($row['mar']>=3 && $row['mar']<=5)
       {$mar= $yellow;}
     else if ($row['mar']>=6 && $row['mar']<=8)
       {$mar= $green;}
   else if ($row['mar']>=9 && $row['mar']<=11)
       {$mar= $blue;}
   else if ($row['mar']>=12 && $row['mar']<=12)
       {$mar= $grey;}
       else if ($row['feb']>12 )
          {$mar= $white;}


   if($row['apr']>=0 && $row['apr']<=2)
          {$apr= $red;}
         else if ($row['apr']>=3 && $row['apr']<=5)
       {$apr= $yellow;}
     else if ($row['apr']>=6 && $row['apr']<=8)
       {$apr= $green;}
   else if ($row['apr']>=9 && $row['apr']<=11)
       {$apr= $blue;}
   else if ($row['apr']>=12 && $row['apr']<=12)
       {$apr= $grey;}
       else if ($row['apr']>12 )
          {$apr= $white;}


   if($row['may']>=0 && $row['may']<=2)
          {$may= $red;}
         else if ($row['may']>=3 && $row['may']<=5)
       {$may= $yellow;}
     else if ($row['may']>=6 && $row['may']<=8)
       {$may= $green;}
   else if ($row['may']>=9 && $row['may']<=11)
       {$may= $blue;}
   else if ($row['may']>=12 && $row['may']<=12)
       {$may= $grey;}
       else if ($row['may']>12 )
          {$may= $white;}


   if($row['jun']>=0 && $row['jun']<=2)
          {$jun= $red;}
         else if ($row['jun']>=3 && $row['jun']<=5)
       {$jun= $yellow;}
     else if ($row['jun']>=6 && $row['jun']<=8)
       {$jun= $green;}
   else if ($row['jun']>=9 && $row['jun']<=11)
       {$jun= $blue;}
   else if ($row['jun']>=12 && $row['jun']<=12)
       {$jun= $grey;}
       else if ($row['jun']>12 )
          {$jun= $white;}








   if($row['jul']>=0 && $row['jul']<=2)
          {$jul= $red;}
         else if ($row['jul']>=3 && $row['jul']<=5)
       {$jul= $yellow;}
     else if ($row['jul']>=6 && $row['jul']<=8)
       {$jul= $green;}
   else if ($row['jul']>=9 && $row['jul']<=11)
       {$jul= $blue;}
   else if ($row['jul']>=12 && $row['jul']<=12)
       {$jul= $grey;}
       else if ($row['jul']>12 )
          {$jul= $white;}








   if($row['aug']>=0 && $row['aug']<=2)
          {$aug= $red;}
         else if ($row['aug']>=3 && $row['aug']<=5)
       {$aug= $yellow;}
     else if ($row['aug']>=6 && $row['aug']<=8)
       {$aug= $green;}
   else if ($row['aug']>=9 && $row['aug']<=11)
       {$aug= $blue;}
   else if ($row['aug']>=12 && $row['aug']<=12)
       {$aug= $grey;}
       else if ($row['aug']>12 )
          {$aug= $white;}








   if($row['sep']>=0 && $row['sep']<=2)
          {$sep= $red;}
         else if ($row['sep']>=3 && $row['sep']<=5)
       {$sep= $yellow;}
     else if ($row['sep']>=6 && $row['sep']<=8)
       {$sep= $green;}
   else if ($row['sep']>=9 && $row['sep']<=11)
       {$sep= $blue;}
   else if ($row['sep']>=12 && $row['sep']<=12)
       {$sep= $grey;}
       else if ($row['sep']>12 )
          {$sep= $white;}








   if($row['oct']>=0 && $row['oct']<=2)
          {$oct= $red;}
         else if ($row['oct']>=3 && $row['oct']<=5)
       {$oct= $yellow;}
     else if ($row['oct']>=6 && $row['oct']<=8)
       {$oct= $green;}
   else if ($row['oct']>=9 && $row['oct']<=11)
       {$oct= $blue;}
   else if ($row['oct']>=12 && $row['oct']<=12)
       {$oct= $grey;}
       else if ($row['oct']>12 )
          {$oct= $white;}








   if($row['nov']>=0 && $row['nov']<=2)
          {$nov= $red;}
         else if ($row['nov']>=3 && $row['nov']<=5)
       {$nov= $yellow;}
     else if ($row['nov']>=6 && $row['nov']<=8)
       {$nov= $green;}
   else if ($row['nov']>=9 && $row['nov']<=11)
       {$nov= $blue;}
   else if ($row['nov']>=12 && $row['nov']<=12)
       {$nov= $grey;}
       else if ($row['nov']>12 )
          {$nov= $white;}










   if($row['dece']>=0 && $row['dece']<=2)
          {$dece= $red;}
         else if ($row['dece']>=3 && $row['dece']<=5)
       {$dece= $yellow;}
     else if ($row['dece']>=6 && $row['dece']<=8)
       {$dece= $green;}
   else if ($row['dece']>=9 && $row['dece']<=11)
       {$dece= $blue;}
   else if ($row['dece']>=12 && $row['dece']<=12)
       {$dece= $grey;}
       else if ($row['dece']>12 )
          {$dece= $white;}








  /* if($row['remark']>=1 && $row['remark']<=2)
          {$remark= $red;}
         else if ($row['remark']>=3 && $row['remark']<=5)
       {$remark= $yellow;}
     else if ($row['remark']>=6 && $row['remark']<=8)
       {$remark= $green;}
   else if ($row['remark']>=9 && $row['remark']<=11)
       {$remark= $blue;}
   else if ($row['remark']>=12 && $row['remark']<=12)
       {$remark= $grey;}
   else if ($row['remark']==0)
       {$remark= $white;}
*/





        // if($row['feb']<=2)
        //  {$red1= "<td style='background-color:yellow'></td>";}
        // else if($row['jan']>2  && $row['jan']<=5)
        //  {$red= "<td style='background-color:red'></td>";}
        echo "<tr>";

        echo "<td>"  .$row['question_id'] . "</td>";
        echo "<td>"  .$row['title']."</td>";
        echo "<td>"  .$row['year'] . "</td>";
        echo "<td>"  .$row['school_id'] . "</td>";
        echo "$col_td";
        echo "$red1";
        echo "$mar";
        echo "$apr";
        echo "$may";
        echo "$jun";
        echo "$jul";
        echo "$aug";
        echo "$sep";
        echo "$oct.";
        echo "$nov";
        echo "$dece";
        echo "<td>"  .$row['remark'] ."</td>";
        // echo "<td>"  .$row['apr'] . "</td>";
        // echo "<td>"  .$row['may'] . "</td>";
        // echo "<td>"  .$row['jun'] . "</td>";
        // echo "<td>"  .$row['jul'] . "</td>";
        // echo "<td>"  .$row['aug'] . "</td>";
        // echo "<td>"  .$row['sep'] . "</td>";
        // echo "<td>"  .$row['oct'] . "</td>";
        // echo "<td>"  .$row['nov'] . "</td>";
        // echo "<td>"  .$row['dece'] . "</td>";
        // echo "<td>"  .$row['remark'] ."</td>";
        echo "</tr>";


       }
     echo "</tbody>";
    echo '</table>';

    }else{
      echo "0 result";
    }
    ?>
   </div>
 </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
  </body>
</html>
