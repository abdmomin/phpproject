<?php


$hostname ="localhost";
$username ="root";
$password ="";
$databasename ="tx_rag_question";
$connect = mysqli_connect($hostname,$username,$password,$databasename);
$school_id = $_GET['school_code'];
$year = $_GET['year_select'];
/*$school_id2 = $_GET['school_code'];
$year2 = $_GET['year_select'];
$school_id3 = $_GET['school_code'];
$year3 = $_GET['year_select'];
$school_id4 = $_GET['school_code'];
$year4 = $_GET['year_select'];
$school_id5 = $_GET['school_code'];
$year5 = $_GET['year_select'];
$school_id6 = $_GET['school_code'];
$year6 = $_GET['year_select'];
$school_id7 = $_GET['school_code'];
$year7 = $_GET['year_select'];
$school_id8 = $_GET['school_code'];
$year8 = $_GET['year_select'];
$school_id9 = $_GET['school_code'];
$year9 = $_GET['year_select'];
$school_id10 = $_GET['school_code'];
$year10 = $_GET['year_select'];
$school_id11 = $_GET['school_code'];
$year11 = $_GET['year_select'];*/

$sql = "SELECT * FROM rag_question where year = '$year' and school_code = '$school_id'";
mysqli_query($connect,$sql);





 // select * FROM rag_question where $school_id =

?>


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
    <title></title>
  </head>
  <body>
<div class="main">

<div class="iptfrm">

    <form class= "fform" action="action.php?&school_code=<?php echo $school_id ?>&year_select=<?php echo  $year ?>" method="post">

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
      <input type="submit" class="subbtn" name="submit"/>
    </form>
  </div>

  <div class="tbldv">


    <table class="table2">

      <tr>
        <td class="clred">Far Below Cohort Average (Below target)</td>
        <td>0</td>
        <td>2</td>
      </tr>

      <tr>
        <td class="clyel">Moving towards target</td>
        <td>3</td>
        <td>5</td>
      </tr>

      <tr>
        <td class="clgre">Average(On target)</td>
        <td>6</td>
        <td>8</td>
      </tr>

      <tr>
        <td class="clblu">Above Cohort Average (Exceeds target)</td>
        <td>9</td>
        <td>11<br></td>
      </tr>

      <tr>
        <td class="clgra">Not applicable in this month</td>
        <td>12</td>
        <td>12</td>
      </tr>

    </table>
  </div>

    <div class="txt">
      <p>Here we could decide whether the benchmark will be Cohort performance or expected performance
      -I for now I suggest that we should look average performance or else everthing will be red</p>
    </div>
</div>

  </body>
</html>
