<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
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
    <title></title>
  </head>
  <body>
<div class="main">

<div class="iptfrm">

    <form class= "fform" action="page.php" method="post">

      <table>
        <tr>
          <th class="aaa">School Name: SMK Putrajaya Presint 18</th>
          <th>JAN</th>
          <th>FEB</th>
          <th>MAR</th>
          <th>APR</th>
          <th>MAY</th>
          <th>JUN</th>
          <th>JUL</th>
          <th>AUG</th>
          <th>SEP</th>
          <th>OCT</th>
          <th>NOV</th>
          <th>DEC</th>
          <th>Remark</th>
        </tr>
        <tr>

          <td class="me1">School implementation plan</td>
          <td class="me1"></td>
          <td class="me1"></td>
          <td class="me1"></td>
          <td class="me1"></td>
          <td class="me1"></td>
          <td class="me1"></td>
          <td class="me1"></td>
          <td class="me1"></td>
          <td class="me1"></td>
          <td class="me1"></td>
          <td class="me1"></td>
          <td class="me1"></td>
          <td class="me1"></td>
        </tr>
        <tr>
          <td value = "q1">Completed/implemented</td>
          <td><input type="text" class="iptbox" name="value1"/></td>
          <td><input type="text" class="iptbox" name="value2"/></td>
          <td><input type="text" class="iptbox" name="value3"/></td>
          <td><input type="text" class="iptbox" name="value4"/></td>
          <td><input type="text" class="iptbox" name="value5"/></td>
          <td><input type="text" class="iptbox" name="value6"/></td>
          <td><input type="text" class="iptbox" name="value7"/></td>
          <td><input type="text" class="iptbox" name="value8"/></td>
          <td><input type="text" class="iptbox" name="value9"/></td>
          <td><input type="text" class="iptbox" name="value10"/></td>
          <td><input type="text" class="iptbox" name="value11"/></td>
          <td><input type="text" class="iptbox" name="value12"/></td>
          <td><input type="text" class="iptbox" name="remark"/></td>


        </tr>
        <tr>
          <td class="me">Online workshop</td>
          <td class="me1"></td>
          <td class="me1"></td>
          <td class="me1"></td>
          <td class="me1"></td>
          <td class="me1"></td>
          <td class="me1"></td>
          <td class="me1"></td>
          <td class="me1"></td>
          <td class="me1"></td>
          <td class="me1"></td>
          <td class="me1"></td>
          <td class="me1"></td>
          <td class="me1"></td>



        </tr>
        <tr>
          <td value = "q2">participation in online flipped learning (workshops)</td>
          <td><input type="text" class="iptbox" name="q2value1"/></td>
          <td><input type="text" class="iptbox" name="q2value2"/></td>
          <td><input type="text" class="iptbox" name="q2value3"/></td>
          <td><input type="text" class="iptbox" name="q2value4"/></td>
          <td><input type="text" class="iptbox" name="q2value5"/></td>
          <td><input type="text" class="iptbox" name="q2value6"/></td>
          <td><input type="text" class="iptbox" name="q2value7"/></td>
          <td><input type="text" class="iptbox" name="q2value8"/></td>
          <td><input type="text" class="iptbox" name="q2value9"/></td>
          <td><input type="text" class="iptbox" name="q2value10"/></td>
          <td><input type="text" class="iptbox" name="q2value11"/></td>
          <td><input type="text" class="iptbox" name="q2value12"/></td>
          <td><input type="text" class="iptbox" name="q2remark"/></td>

        </tr>
        <tr>
          <td value = "q3">participation in online surveys and feedback (workshops)</td>
          <td><input type="text" class="iptbox" name="q3value1"/></td>
          <td><input type="text" class="iptbox" name="q3value2"/></td>
          <td><input type="text" class="iptbox" name="q3value3"/></td>
          <td><input type="text" class="iptbox" name="q3value4"/></td>
          <td><input type="text" class="iptbox" name="q3value5"/></td>
          <td><input type="text" class="iptbox" name="q3value6"/></td>
          <td><input type="text" class="iptbox" name="q3value7"/></td>
          <td><input type="text" class="iptbox" name="q3value8"/></td>
          <td><input type="text" class="iptbox" name="q3value9"/></td>
          <td><input type="text" class="iptbox" name="q3value10"/></td>
          <td><input type="text" class="iptbox" name="q3value11"/></td>
          <td><input type="text" class="iptbox" name="q3value12"/></td>
          <td><input type="text" class="iptbox" name="q3remark"/></td>

        </tr>
        <tr>
          <td class="me">Download of toolkits and Resources</td>
          <td class="me1"></td>
          <td class="me1"></td>
          <td class="me1"></td>
          <td class="me1"></td>
          <td class="me1"></td>
          <td class="me1"></td>
          <td class="me1"></td>
          <td class="me1"></td>
          <td class="me1"></td>
          <td class="me1"></td>
          <td class="me1"></td>
          <td class="me1"></td>
          <td class="me1"></td>


        </tr>
        <tr>
          <td value = "q4">Investigations and Projects</td>
          <td><input type="text" class="iptbox" name="q4value1"/></td>
          <td><input type="text" class="iptbox" name="q4value2"/></td>
          <td><input type="text" class="iptbox" name="q4value3"/></td>
          <td><input type="text" class="iptbox" name="q4value4"/></td>
          <td><input type="text" class="iptbox" name="q4value5"/></td>
          <td><input type="text" class="iptbox" name="q4value6"/></td>
          <td><input type="text" class="iptbox" name="q4value7"/></td>
          <td><input type="text" class="iptbox" name="q4value8"/></td>
          <td><input type="text" class="iptbox" name="q4value9"/></td>
          <td><input type="text" class="iptbox" name="q4value10"/></td>
          <td><input type="text" class="iptbox" name="q4value11"/></td>
          <td><input type="text" class="iptbox" name="q4value12"/></td>
          <td><input type="text" class="iptbox" name="q4remark"/></td5

        </tr>
        <tr>
          <td value = "q5">Assignments to students</td>
          <td><input type="text" class="iptbox" name="q5value1"/></td>
          <td><input type="text" class="iptbox" name="q5value2"/></td>
          <td><input type="text" class="iptbox" name="q5value3"/></td>
          <td><input type="text" class="iptbox" name="q5value4"/></td>
          <td><input type="text" class="iptbox" name="q5value5"/></td>
          <td><input type="text" class="iptbox" name="q5value6"/></td>
          <td><input type="text" class="iptbox" name="q5value7"/></td>
          <td><input type="text" class="iptbox" name="q5value8"/></td>
          <td><input type="text" class="iptbox" name="q5value9"/></td>
          <td><input type="text" class="iptbox" name="q5value10"/></td>
          <td><input type="text" class="iptbox" name="q5value11"/></td>
          <td><input type="text" class="iptbox" name="q5value12"/></td>
          <td><input type="text" class="iptbox" name="q5remark"/></td>

        </tr>
        <tr>
          <td value = "q6">Student uploads</td>
          <td><input type="text" class="iptbox" name="q6value1"/></td>
          <td><input type="text" class="iptbox" name="q6value2"/></td>
          <td><input type="text" class="iptbox" name="q6value3"/></td>
          <td><input type="text" class="iptbox" name="q6value4"/></td>
          <td><input type="text" class="iptbox" name="q6value5"/></td>
          <td><input type="text" class="iptbox" name="q6value6"/></td>
          <td><input type="text" class="iptbox" name="q6value7"/></td>
          <td><input type="text" class="iptbox" name="q6value8"/></td>
          <td><input type="text" class="iptbox" name="q6value9"/></td>
          <td><input type="text" class="iptbox" name="q6value10"/></td>
          <td><input type="text" class="iptbox" name="q6value11"/></td>
          <td><input type="text" class="iptbox" name="q6value12"/></td>
          <td><input type="text" class="iptbox" name="q6remark"/></td>

        </tr>
        <tr>
          <td class="me">Self-Assessment for monitoring</td>
          <td class="me1"></td>
          <td class="me1"></td>
          <td class="me1"></td>
          <td class="me1"></td>
          <td class="me1"></td>
          <td class="me1"></td>
          <td class="me1"></td>
          <td class="me1"></td>
          <td class="me1"></td>
          <td class="me1"></td>
          <td class="me1"></td>
          <td class="me1"></td>
          <td class="me1"></td>


        </tr>
        <tr>
          <td value = "q7">School</td>
          <td><input type="text" class="iptbox" name="q7value1"/></td>
          <td><input type="text" class="iptbox" name="q7value2"/></td>
          <td><input type="text" class="iptbox" name="q7value3"/></td>
          <td><input type="text" class="iptbox" name="q7value4"/></td>
          <td><input type="text" class="iptbox" name="q7value5"/></td>
          <td><input type="text" class="iptbox" name="q7value6"/></td>
          <td><input type="text" class="iptbox" name="q7value7"/></td>
          <td><input type="text" class="iptbox" name="q7value8"/></td>
          <td><input type="text" class="iptbox" name="q7value9"/></td>
          <td><input type="text" class="iptbox" name="q7value10"/></td>
          <td><input type="text" class="iptbox" name="q7value11"/></td>
          <td><input type="text" class="iptbox" name="q7value12"/></td>
          <td><input type="text" class="iptbox" name="q7remark"/></td>

        </tr>
        <tr>
          <td value = "q8">Teachers</td>
          <td><input type="text" class="iptbox" name="q8value1"/></td>
          <td><input type="text" class="iptbox" name="q8value2"/></td>
          <td><input type="text" class="iptbox" name="q8value3"/></td>
          <td><input type="text" class="iptbox" name="q8value4"/></td>
          <td><input type="text" class="iptbox" name="q8value5"/></td>
          <td><input type="text" class="iptbox" name="q8value6"/></td>
          <td><input type="text" class="iptbox" name="q8value7"/></td>
          <td><input type="text" class="iptbox" name="q8value8"/></td>
          <td><input type="text" class="iptbox" name="q8value9"/></td>
          <td><input type="text" class="iptbox" name="q8value10"/></td>
          <td><input type="text" class="iptbox" name="q8value11"/></td>
          <td><input type="text" class="iptbox" name="q8value12"/></td>
          <td><input type="text" class="iptbox" name="q8remark"/></td>

        </tr>
        <tr>
          <td class="me">Knowledge Exchange</td>
          <td class="me1"></td>
          <td class="me1"></td>
          <td class="me1"></td>
          <td class="me1"></td>
          <td class="me1"></td>
          <td class="me1"></td>
          <td class="me1"></td>
          <td class="me1"></td>
          <td class="me1"></td>
          <td class="me1"></td>
          <td class="me1"></td>
          <td class="me1"></td>
          <td class="me1"></td>


        </tr>
        <tr>
          <td value = "q9">Time spent</td>
          <td><input type="text" class="iptbox" name="q9value1"/></td>
          <td><input type="text" class="iptbox" name="q9value2"/></td>
          <td><input type="text" class="iptbox" name="q9value3"/></td>
          <td><input type="text" class="iptbox" name="q9value4"/></td>
          <td><input type="text" class="iptbox" name="q9value5"/></td>
          <td><input type="text" class="iptbox" name="q9value6"/></td>
          <td><input type="text" class="iptbox" name="q9value7"/></td>
          <td><input type="text" class="iptbox" name="q9value8"/></td>
          <td><input type="text" class="iptbox" name="q9value9"/></td>
          <td><input type="text" class="iptbox" name="q9value10"/></td>
          <td><input type="text" class="iptbox" name="q9value11"/></td>
          <td><input type="text" class="iptbox" name="q9value12"/></td>
          <td><input type="text" class="iptbox" name="q9remark"/></td>

        </tr>
        <tr>
          <td value = "q10">Numbers of contributions (comments/topics initiated)</td>
          <td><input type="text" class="iptbox" name="q10value1"/></td>
          <td><input type="text" class="iptbox" name="q10value2"/></td>
          <td><input type="text" class="iptbox" name="q10value3"/></td>
          <td><input type="text" class="iptbox" name="q10value4"/></td>
          <td><input type="text" class="iptbox" name="q10value5"/></td>
          <td><input type="text" class="iptbox" name="q10value6"/></td>
          <td><input type="text" class="iptbox" name="q10value7"/></td>
          <td><input type="text" class="iptbox" name="q10value8"/></td>
          <td><input type="text" class="iptbox" name="q10value9"/></td>
          <td><input type="text" class="iptbox" name="q10value10"/></td>
          <td><input type="text" class="iptbox" name="q10value11"/></td>
          <td><input type="text" class="iptbox" name="q10value12"/></td>
          <td><input type="text" class="iptbox" name="q10remark"/></td>

        </tr>
        <tr>
          <td value = "q11">Sharing of practice (uploads of materials)</td>
          <td><input type="text" class="iptbox" name="q11value1"/></td>
          <td><input type="text" class="iptbox" name="q11value2"/></td>
          <td><input type="text" class="iptbox" name="q11value3"/></td>
          <td><input type="text" class="iptbox" name="q11value4"/></td>
          <td><input type="text" class="iptbox" name="q11value5"/></td>
          <td><input type="text" class="iptbox" name="q11value6"/></td>
          <td><input type="text" class="iptbox" name="q11value7"/></td>
          <td><input type="text" class="iptbox" name="q11value8"/></td>
          <td><input type="text" class="iptbox" name="q11value9"/></td>
          <td><input type="text" class="iptbox" name="q11value10"/></td>
          <td><input type="text" class="iptbox" name="q11value11"/></td>
          <td><input type="text" class="iptbox" name="q11value12"/></td>
          <td><input type="text" class="iptbox" name="q11remark"/></td>

        </tr>
      </table>
    </form>
  </div>
  </body>
  </html>
  <?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database="tx_rag_question";
        $conn = mysqli_connect($servername, $username, $password,$database);


        if ($conn->connect_error) {
      echo("Connection failed: ");
    }
      echo "Connected successfully";




    ?>


     <div class="container">
      <?php
      // $sql =" SELECT rag_question.title_id, rag_report.question_id ,rag_question.title,rag_report.school_code,rag_report.year_id,rag_report.jan,rag_report.feb,rag_report.mar,rag_report.apr,rag_report.may,rag_report.jun,rag_report.jul,rag_report.aug,rag_report.sep,rag_report.oct,rag_report.nov,rag_report.dece,rag_report.remark FROM rag_report INNER JOIN rag_question ON rag_report.question_id = rag_question.title_id";


  $sql =" SELECT question.title_id, rag_question.question_id ,question.title,rag_question.school_id,rag_question.year,rag_question.jan,rag_question.feb,rag_question.mar,rag_question.apr,rag_question.may,rag_question.jun,rag_question.jul,rag_question.aug,rag_question.sep,rag_question.oct,rag_question.nov,rag_question.dece,rag_question.remark FROM rag_question INNER JOIN question ON rag_question.question_id = question.title_id";
  // $result=mysqli_query($conn,$sql);
      // $sql="SELECT * FROM rag_report";
       $result=mysqli_query($conn,$sql);
      if(mysqli_num_rows($result)>0){

         while($row=$result->fetch_assoc()){


  $red= "<td style='background-color:red'></td>";
  $yellow= "<td style='background-color:yellow'></td>";
  $green= "<td style='background-color:#4CAF50'></td>";
  $blue= "<td style='background-color:#008CBA'></td>";
  $grey= "<td style='background-color:grey'></td>";
  $white= "<td style='background-color:white'></td>";



          if($row['jan']>=1 && $row['jan']<=2)
            {$col_td= $red;}
           else if ($row['jan']>=3 && $row['jan']<=5)
         {$col_td= $yellow;}
       else if ($row['jan']>=6 && $row['jan']<=8)
         {$col_td= $green;}
     else if ($row['jan']>=9 && $row['jan']<=11)
         {$col_td= $blue;}
     else if ($row['jan']>=12 && $row['jan']<=12)
         {$col_td= $grey;}
     else if ($row['jan']==0)
         {$col_td= $white;}




    if($row['feb']>=1 && $row['feb']<=2)
            {$red1= $red;}
           else if ($row['feb']>=3 && $row['feb']<=5)
         {$red1= $yellow;}
       else if ($row['feb']>=6 && $row['feb']<=8)
         {$red1= $green;}
     else if ($row['feb']>=9 && $row['feb']<=11)
         {$red1= $blue;}
     else if ($row['feb']>=12 && $row['feb']<=12)
         {$red1= $grey;}
     else if ($row['feb']==0)
         {$red1= $white;}


     if($row['mar']>=1 && $row['mar']<=2)
            {$mar= $red;}
           else if ($row['mar']>=3 && $row['mar']<=5)
         {$mar= $yellow;}
       else if ($row['mar']>=6 && $row['mar']<=8)
         {$mar= $green;}
     else if ($row['mar']>=9 && $row['mar']<=11)
         {$mar= $blue;}
     else if ($row['mar']>=12 && $row['mar']<=12)
         {$mar= $grey;}
     else if ($row['mar']==0)
         {$mar= $white;}



     if($row['apr']>=1 && $row['apr']<=2)
            {$apr= $red;}
           else if ($row['apr']>=3 && $row['apr']<=5)
         {$apr= $yellow;}
       else if ($row['apr']>=6 && $row['apr']<=8)
         {$apr= $green;}
     else if ($row['apr']>=9 && $row['apr']<=11)
         {$apr= $blue;}
     else if ($row['apr']>=12 && $row['apr']<=12)
         {$apr= $grey;}
     else if ($row['apr']==0)
         {$apr= $white;}


     if($row['may']>=1 && $row['may']<=2)
            {$may= $red;}
           else if ($row['may']>=3 && $row['may']<=5)
         {$may= $yellow;}
       else if ($row['may']>=6 && $row['may']<=8)
         {$may= $green;}
     else if ($row['may']>=9 && $row['may']<=11)
         {$may= $blue;}
     else if ($row['may']>=12 && $row['may']<=12)
         {$may= $grey;}
     else if ($row['may']==0)
         {$may= $white;}


     if($row['jun']>=1 && $row['jun']<=2)
            {$jun= $red;}
           else if ($row['jun']>=3 && $row['jun']<=5)
         {$jun= $yellow;}
       else if ($row['jun']>=6 && $row['jun']<=8)
         {$jun= $green;}
     else if ($row['jun']>=9 && $row['jun']<=11)
         {$jun= $blue;}
     else if ($row['jun']>=12 && $row['jun']<=12)
         {$jun= $grey;}
     else if ($row['jun']==0)
         {$jun= $white;}


     if($row['jul']>=1 && $row['jul']<=2)
            {$jul= $red;}
           else if ($row['jul']>=3 && $row['jul']<=5)
         {$jul= $yellow;}
       else if ($row['jul']>=6 && $row['jul']<=8)
         {$jul= $green;}
     else if ($row['jul']>=9 && $row['jul']<=11)
         {$jul= $blue;}
     else if ($row['jul']>=12 && $row['jul']<=12)
         {$jul= $grey;}
     else if ($row['jul']==0)
         {$jul= $white;}



     if($row['aug']>=1 && $row['aug']<=2)
            {$aug= $red;}
           else if ($row['aug']>=3 && $row['aug']<=5)
         {$aug= $yellow;}
       else if ($row['aug']>=6 && $row['aug']<=8)
         {$aug= $green;}
     else if ($row['aug']>=9 && $row['aug']<=11)
         {$aug= $blue;}
     else if ($row['aug']>=12 && $row['aug']<=12)
         {$aug= $grey;}
     else if ($row['aug']==0)
         {$aug= $white;}


     if($row['sep']>=1 && $row['sep']<=2)
            {$sep= $red;}
           else if ($row['sep']>=3 && $row['sep']<=5)
         {$sep= $yellow;}
       else if ($row['sep']>=6 && $row['sep']<=8)
         {$sep= $green;}
     else if ($row['sep']>=9 && $row['sep']<=11)
         {$sep= $blue;}
     else if ($row['sep']>=12 && $row['sep']<=12)
         {$sep= $grey;}
     else if ($row['sep']==0)
         {$sep= $white;}


     if($row['oct']>=1 && $row['oct']<=2)
            {$oct= $red;}
           else if ($row['oct']>=3 && $row['oct']<=5)
         {$oct= $yellow;}
       else if ($row['oct']>=6 && $row['oct']<=8)
         {$oct= $green;}
     else if ($row['oct']>=9 && $row['oct']<=11)
         {$oct= $blue;}
     else if ($row['oct']>=12 && $row['oct']<=12)
         {$oct= $grey;}
     else if ($row['oct']==0)
         {$oct= $white;}



     if($row['nov']>=1 && $row['nov']<=2)
            {$nov= $red;}
           else if ($row['nov']>=3 && $row['nov']<=5)
         {$nov= $yellow;}
       else if ($row['nov']>=6 && $row['nov']<=8)
         {$nov= $green;}
     else if ($row['nov']>=9 && $row['nov']<=11)
         {$nov= $blue;}
     else if ($row['nov']>=12 && $row['nov']<=12)
         {$nov= $grey;}
     else if ($row['nov']==0)
         {$nov= $white;}



     if($row['dece']>=1 && $row['dece']<=2)
            {$dece= $red;}
           else if ($row['dece']>=3 && $row['dece']<=5)
         {$dece= $yellow;}
       else if ($row['dece']>=6 && $row['dece']<=8)
         {$dece= $green;}
     else if ($row['dece']>=9 && $row['dece']<=11)
         {$dece= $blue;}
     else if ($row['dece']>=12 && $row['dece']<=12)
         {$dece= $grey;}
     else if ($row['dece']==0)
         {$dece= $white;}


     if($row['remark']>=1 && $row['remark']<=2)
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


          // if($row['feb']<=2)
          //  {$red1= "<td style='background-color:yellow'></td>";}
          // else if($row['jan']>2  && $row['jan']<=5)
          //  {$red= "<td style='background-color:red'></td>";}

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







      ?>
     </div>


    </body>
  </html>
