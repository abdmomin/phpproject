
<?php


$hostname ="localhost";
$username ="root";
$password ="";
$databasename ="tx_rag_question";
$connect = mysqli_connect($hostname,$username,$password,$databasename);

$school_id = $_GET['school_code'];
$year = $_GET['year_select'];

//$updateid = $_GET['eid'];






    $sql = "SELECT * FROM rag_question WHERE school_id= $school_id AND year = $year";
    $sqled = mysqli_query($connect,$sql) or die(mysqli_error());
    $data = mysqli_fetch_array($sqled);
    $data2 = mysqli_fetch_array($sqled);
    $data3 = mysqli_fetch_array($sqled);
    $data4 = mysqli_fetch_array($sqled);
    $data5 = mysqli_fetch_array($sqled);
    $data6 = mysqli_fetch_array($sqled);
    $data7 = mysqli_fetch_array($sqled);
    $data8 = mysqli_fetch_array($sqled);
    $data9 = mysqli_fetch_array($sqled);
    $data10 = mysqli_fetch_array($sqled);
    $data11 = mysqli_fetch_array($sqled);




//echo "id ".$data[0]." next ".$data[17]." and ".$data[14];

//print_r( array_values( $data ));


if($count>0){
  echo "<br>update the table";
}
 // select * FROM rag_question where $school_id =

if(isset($_POST['updatebtn'])){


$value1 = $_POST['value1'];
$value2 = $_POST['value2'];
$value3 = $_POST['value3'];
$value4 = $_POST['value4'];
$value5 = $_POST['value5'];
$value6 = $_POST['value6'];
$value7 = $_POST['value7'];
$value8 = $_POST['value8'];
$value9 = $_POST['value9'];
$value10 = $_POST['value10'];
$value11 = $_POST['value11'];
$value12 = $_POST['value12'];
$remark = $_POST['remark'];






$sql1 ="UPDATE rag_question SET jan = '$value1', feb = '$value2', mar = '$value3', apr = '$value4', may = '$value5', jun = '$value6',
        jul = '$value7', aug = '$value8', sep = '$value9', oct = '$value10', nov = '$value11', dece = '$value12', remark = '$remark'
        WHERE question_id = 'q1' AND school_id = '$school_id' AND year = '$year'";
$test1= mysqli_query($connect,$sql1);



$q2value1 = $_POST['q2value1'];
$q2value2 = $_POST['q2value2'];
$q2value3 = $_POST['q2value3'];
$q2value4 = $_POST['q2value4'];
$q2value5 = $_POST['q2value5'];
$q2value6 = $_POST['q2value6'];
$q2value7 = $_POST['q2value7'];
$q2value8 = $_POST['q2value8'];
$q2value9 = $_POST['q2value9'];
$q2value10 = $_POST['q2value10'];
$q2value11 = $_POST['q2value11'];
$q2value12 = $_POST['q2value12'];
$q2remark = $_POST['q2remark'];





$sql2 ="UPDATE rag_question SET jan = '$q2value1', feb = '$q2value2', mar = '$q2value3', apr = '$q2value4', may = '$q2value5', jun = '$q2value6',
        jul = '$q2value7', aug = '$q2value8', sep = '$q2value9', oct = '$q2value10', nov = '$q2value11', dece = '$q2value12', remark = '$q2remark'
        WHERE question_id = 'q2'  AND school_id = '$school_id' AND year = '$year";
$test2= mysqli_query($connect,$sql2);


$q3value1 = $_POST['q3value1'];
$q3value2 = $_POST['q3value2'];
$q3value3 = $_POST['q3value3'];
$q3value4 = $_POST['q3value4'];
$q3value5 = $_POST['q3value5'];
$q3value6 = $_POST['q3value6'];
$q3value7 = $_POST['q3value7'];
$q3value8 = $_POST['q3value8'];
$q3value9 = $_POST['q3value9'];
$q3value10 = $_POST['q3value10'];
$q3value11 = $_POST['q3value11'];
$q3value12 = $_POST['q3value12'];
$q3remark = $_POST['q3remark'];





$sql3 ="UPDATE rag_question SET jan = '$q3value1', feb = '$q3value2', mar = '$q3value3', apr = '$q3value4', may = '$q3value5', jun = '$q3value6',
        jul = '$q3value7', aug = '$q3value8', sep = '$q3value9', oct = '$q3value10', nov = '$q3value11', dece = '$q3value12', remark = '$q3remark'
        WHERE question_id = 'q3'  AND school_id = '$school_id' AND year = '$year";
$test3 = mysqli_query($connect,$sql3);

$q4value1 = $_POST['q4value1'];
$q4value2 = $_POST['q4value2'];
$q4value3 = $_POST['q4value3'];
$q4value4 = $_POST['q4value4'];
$q4value5 = $_POST['q4value5'];
$q4value6 = $_POST['q4value6'];
$q4value7 = $_POST['q4value7'];
$q4value8 = $_POST['q4value8'];
$q4value9 = $_POST['q4value9'];
$q4value10 = $_POST['q4value10'];
$q4value11 = $_POST['q4value11'];
$q4value12 = $_POST['q4value12'];
$q4remark = $_POST['q4remark'];





$sql4 ="UPDATE rag_question SET jan = '$q4value1', feb = '$q4value2', mar = '$q4value3', apr = '$q4value4', may = '$q4value5', jun = '$q4value6',
        jul = '$q4value7', aug = '$q4value8', sep = '$q4value9', oct = '$q4value10', nov = '$q4value11', dece = '$q4value12', remark = '$q4remark'
        WHERE question_id = 'q4'  AND school_id = '$school_id' AND year = '$year";
$test4 = mysqli_query($connect,$sql4);

$q5value1 = $_POST['q5value1'];
$q5value2 = $_POST['q5value2'];
$q5value3 = $_POST['q5value3'];
$q5value4 = $_POST['q5value4'];
$q5value5 = $_POST['q5value5'];
$q5value6 = $_POST['q5value6'];
$q5value7 = $_POST['q5value7'];
$q5value8 = $_POST['q5value8'];
$q5value9 = $_POST['q5value9'];
$q5value10 = $_POST['q5value10'];
$q5value11 = $_POST['q5value11'];
$q5value12 = $_POST['q5value12'];
$q5remark = $_POST['q5remark'];





$sql5 ="UPDATE rag_question SET jan = '$q5value1', feb = '$q5value2', mar = '$q5value3', apr = '$q5value4', may = '$q5value5', jun = '$q5value6',
        jul = '$q5value7', aug = '$q5value8', sep = '$q5value9', oct = '$q5value10', nov = '$q5value11', dece = '$q5value12', remark = '$q5remark'
        WHERE question_id = 'q5'  AND school_id = '$school_id' AND year = '$year";
$test5 = mysqli_query($connect,$sql5);

$q6value1 = $_POST['q6value1'];
$q6value2 = $_POST['q6value2'];
$q6value3 = $_POST['q6value3'];
$q6value4 = $_POST['q6value4'];
$q6value5 = $_POST['q6value5'];
$q6value6 = $_POST['q6value6'];
$q6value7 = $_POST['q6value7'];
$q6value8 = $_POST['q6value8'];
$q6value9 = $_POST['q6value9'];
$q6value10 = $_POST['q6value10'];
$q6value11 = $_POST['q6value11'];
$q6value12 = $_POST['q6value12'];
$q6remark = $_POST['q6remark'];





$sql6 ="UPDATE rag_question SET jan = '$q6value1', feb = '$q6value2', mar = '$q6value3', apr = '$q6value4', may = '$q6value5', jun = '$q6value6',
        jul = '$q6value7', aug = '$q6value8', sep = '$q6value9', oct = '$q6value10', nov = '$q6value11', dece = '$q6value12', remark = '$q6remark'
        WHERE question_id = 'q6'  AND school_id = '$school_id' AND year = '$year";
$test6 = mysqli_query($connect,$sql6);


$q7value1 = $_POST['q7value1'];
$q7value2 = $_POST['q7value2'];
$q7value3 = $_POST['q7value3'];
$q7value4 = $_POST['q7value4'];
$q7value5 = $_POST['q7value5'];
$q7value6 = $_POST['q7value6'];
$q7value7 = $_POST['q7value7'];
$q7value8 = $_POST['q7value8'];
$q7value9 = $_POST['q7value9'];
$q7value10 = $_POST['q7value10'];
$q7value11 = $_POST['q7value11'];
$q7value12 = $_POST['q7value12'];
$q7remark = $_POST['q7remark'];





$sql7 ="UPDATE rag_question SET jan = '$q7value1', feb = '$q7value2', mar = '$q7value3', apr = '$q7value4', may = '$q7value5', jun = '$q7value6',
        jul = '$q7value7', aug = '$q7value8', sep = '$q7value9', oct = '$q7value10', nov = '$q7value11', dece = '$q7value12', remark = '$q7remark'
        WHERE question_id = 'q7'  AND school_id = '$school_id' AND year = '$year";
$test7 = mysqli_query($connect,$sql7);



$q8value1 = $_POST['q8value1'];
$q8value2 = $_POST['q8value2'];
$q8value3 = $_POST['q8value3'];
$q8value4 = $_POST['q8value4'];
$q8value5 = $_POST['q8value5'];
$q8value6 = $_POST['q8value6'];
$q8value7 = $_POST['q8value7'];
$q8value8 = $_POST['q8value8'];
$q8value9 = $_POST['q8value9'];
$q8value10 = $_POST['q8value10'];
$q8value11 = $_POST['q8value11'];
$q8value12 = $_POST['q8value12'];
$q8remark = $_POST['q8remark'];





$sql8 ="UPDATE rag_question SET jan = '$q8value1', feb = '$q8value2', mar = '$q8value3', apr = '$q8value4', may = '$q8value5', jun = '$q8value6',
        jul = '$q8value7', aug = '$q8value8', sep = '$q8value9', oct = '$q8value10', nov = '$q8value11', dece = '$q8value12', remark = '$q8remark'
        WHERE question_id = 'q8'  AND school_id = '$school_id' AND year = '$year";
$test8 = mysqli_query($connect,$sql8);



$q9value1 = $_POST['q9value1'];
$q9value2 = $_POST['q9value2'];
$q9value3 = $_POST['q9value3'];
$q9value4 = $_POST['q9value4'];
$q9value5 = $_POST['q9value5'];
$q9value6 = $_POST['q9value6'];
$q9value7 = $_POST['q9value7'];
$q9value8 = $_POST['q9value8'];
$q9value9 = $_POST['q9value9'];
$q9value10 = $_POST['q9value10'];
$q9value11 = $_POST['q9value11'];
$q9value12 = $_POST['q9value12'];
$q9remark = $_POST['q9remark'];





$sql9 ="UPDATE rag_question SET jan = '$q9value1', feb = '$q9value2', mar = '$q9value3', apr = '$q9value4', may = '$q9value5', jun = '$q9value6',
        jul = '$q9value7', aug = '$q9value8', sep = '$q9value9', oct = '$q9value10', nov = '$q9value11', dece = '$q9value12', remark = '$q9remark'
        WHERE question_id = 'q9'  AND school_id = '$school_id' AND year = '$year";
$test9 = mysqli_query($connect,$sql9);


$q10value1 = $_POST['q10value1'];
$q10value2 = $_POST['q10value2'];
$q10value3 = $_POST['q10value3'];
$q10value4 = $_POST['q10value4'];
$q10value5 = $_POST['q10value5'];
$q10value6 = $_POST['q10value6'];
$q10value7 = $_POST['q10value7'];
$q10value8 = $_POST['q10value8'];
$q10value9 = $_POST['q10value9'];
$q10value10 = $_POST['q10value10'];
$q10value11 = $_POST['q10value11'];
$q10value12 = $_POST['q10value12'];
$q10remark = $_POST['q10remark'];





$sql10 ="UPDATE rag_question SET jan = '$q10value1', feb = '$q10value2', mar = '$q10value3', apr = '$q10value4', may = '$q10value5', jun = '$q10value6',
        jul = '$q10value7', aug = '$q10value8', sep = '$q10value9', oct = '$q10value10', nov = '$q10value11', dece = '$q10value12', remark = '$q10remark'
        WHERE question_id = 'q10'  AND school_id = '$school_id' AND year = '$year";
$test10 = mysqli_query($connect,$sql10);



$q11value1 = $_POST['q11value1'];
$q11value2 = $_POST['q11value2'];
$q11value3 = $_POST['q11value3'];
$q11value4 = $_POST['q11value4'];
$q11value5 = $_POST['q11value5'];
$q11value6 = $_POST['q11value6'];
$q11value7 = $_POST['q11value7'];
$q11value8 = $_POST['q11value8'];
$q11value9 = $_POST['q11value9'];
$q11value10 = $_POST['q11value10'];
$q11value11 = $_POST['q11value11'];
$q11value12 = $_POST['q11value12'];
$q11remark = $_POST['q11remark'];






$sql11 ="UPDATE rag_question SET jan = '$q11value1', feb = '$q11value2', mar = '$q11value3', apr = '$q11value4', may = '$q11value5', jun = '$q11value6',
        jul = '$q11value7', aug = '$q11value8', sep = '$q11value9', oct = '$q11value10', nov = '$q11value11', dece = '$q11value12', remark = '$q11remark'
        WHERE question_id = 'q11'  AND school_id = '$school_id' AND year = '$year";
$test11 = mysqli_query($connect,$sql11);



}
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

    <form class= "fform" action="update.php?&school_code=<?php echo $school_id; ?>&year_select=<?php echo $year; ?>" method="post">

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
          <td><input type="text" class="iptbox" name="value1" value="<?php echo $data[1]; ?>"/></td>
          <td><input type="text" class="iptbox" name="value2" value="<?php echo $data[2]; ?>"/></td>
          <td><input type="text" class="iptbox" name="value3" value="<?php echo $data[3]; ?>"/></td>
          <td><input type="text" class="iptbox" name="value4" value="<?php echo $data[4]; ?>"/></td>
          <td><input type="text" class="iptbox" name="value5" value="<?php echo $data[5]; ?>"/></td>
          <td><input type="text" class="iptbox" name="value6" value="<?php echo $data[6]; ?>"/></td>
          <td><input type="text" class="iptbox" name="value7" value="<?php echo $data[7]; ?>"/></td>
          <td><input type="text" class="iptbox" name="value8" value="<?php echo $data[8]; ?>"/></td>
          <td><input type="text" class="iptbox" name="value9" value="<?php echo $data[9]; ?>"/></td>
          <td><input type="text" class="iptbox" name="value10" value="<?php echo $data[10]; ?>"/></td>
          <td><input type="text" class="iptbox" name="value11" value="<?php echo $data[11]; ?>"/></td>
          <td><input type="text" class="iptbox" name="value12" value="<?php echo $data[12]; ?>"/></td>
          <td><input type="text" class="iptbox" name="remark" value="<?php echo $data[13]; ?>"/></td>


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
          <td><input type="text" class="iptbox" name="q2value1" value="<?php echo $data2[1]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q2value2" value="<?php echo $data2[2]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q2value3" value="<?php echo $data2[3]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q2value4" value="<?php echo $data2[4]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q2value5" value="<?php echo $data2[5]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q2value6" value="<?php echo $data2[6]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q2value7" value="<?php echo $data2[7]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q2value8" value="<?php echo $data2[8]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q2value9" value="<?php echo $data2[9]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q2value10" value="<?php echo $data2[10]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q2value11" value="<?php echo $data2[11]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q2value12" value="<?php echo $data2[12]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q2remark" value="<?php echo $data2[13]; ?>"/></td>

        </tr>
        <tr>
          <td value = "q3">participation in online surveys and feedback (workshops)</td>
          <td><input type="text" class="iptbox" name="q3value1" value="<?php echo $data3[1]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q3value2" value="<?php echo $data3[2]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q3value3" value="<?php echo $data3[3]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q3value4" value="<?php echo $data3[4]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q3value5" value="<?php echo $data3[5]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q3value6" value="<?php echo $data3[6]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q3value7" value="<?php echo $data3[7]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q3value8" value="<?php echo $data3[8]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q3value9" value="<?php echo $data3[9]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q3value10" value="<?php echo $data3[10]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q3value11" value="<?php echo $data3[11]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q3value12" value="<?php echo $data3[12]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q3remark" value="<?php echo $data3[13]; ?>"/></td>

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
          <td><input type="text" class="iptbox" name="q4value1" value="<?php echo $data4[1]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q4value2" value="<?php echo $data4[2]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q4value3" value="<?php echo $data4[3]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q4value4" value="<?php echo $data4[4]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q4value5" value="<?php echo $data4[5]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q4value6" value="<?php echo $data4[6]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q4value7" value="<?php echo $data4[7]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q4value8" value="<?php echo $data4[8]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q4value9" value="<?php echo $data4[9]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q4value10" value="<?php echo $data4[10]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q4value11" value="<?php echo $data4[11]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q4value12" value="<?php echo $data4[12]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q4remark" value="<?php echo $data4[13]; ?>"/></td>

        </tr>
        <tr>
          <td value = "q5">Assignments to students</td>
          <td><input type="text" class="iptbox" name="q5value1" value="<?php echo $data5[1]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q5value2" value="<?php echo $data5[2]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q5value3" value="<?php echo $data5[3]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q5value4" value="<?php echo $data5[4]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q5value5" value="<?php echo $data5[5]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q5value6" value="<?php echo $data5[6]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q5value7" value="<?php echo $data5[7]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q5value8" value="<?php echo $data5[8]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q5value9" value="<?php echo $data5[9]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q5value10" value="<?php echo $data5[10]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q5value11" value="<?php echo $data5[11]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q5value12" value="<?php echo $data5[12]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q5remark" value="<?php echo $data5[13]; ?>"/></td>

        </tr>
      <tr>
          <td value = "q6">Student uploads</td>
          <td><input type="text" class="iptbox" name="q6value1" value="<?php echo $data6[1]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q6value2" value="<?php echo $data6[2]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q6value3" value="<?php echo $data6[3]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q6value4" value="<?php echo $data6[4]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q6value5" value="<?php echo $data6[5]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q6value6" value="<?php echo $data6[6]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q6value7" value="<?php echo $data6[7]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q6value8" value="<?php echo $data6[8]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q6value9" value="<?php echo $data6[9]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q6value10" value="<?php echo $data6[10]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q6value11" value="<?php echo $data6[11]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q6value12" value="<?php echo $data6[12]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q6remark" value="<?php echo $data6[13]; ?>"/></td>

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
          <td><input type="text" class="iptbox" name="q7value1" value="<?php echo $data7[1]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q7value2" value="<?php echo $data7[2]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q7value3" value="<?php echo $data7[3]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q7value4" value="<?php echo $data7[4]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q7value5" value="<?php echo $data7[5]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q7value6" value="<?php echo $data7[6]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q7value7" value="<?php echo $data7[7]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q7value8" value="<?php echo $data7[8]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q7value9" value="<?php echo $data7[9]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q7value10" value="<?php echo $data7[10]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q7value11" value="<?php echo $data7[11]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q7value12" value="<?php echo $data7[12]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q7remark" value="<?php echo $data7[13]; ?>"/></td>

        </tr>
        <tr>
          <td value = "q8">Teachers</td>
          <td><input type="text" class="iptbox" name="q8value1" value="<?php echo $data8[1]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q8value2" value="<?php echo $data8[2]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q8value3" value="<?php echo $data8[3]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q8value4" value="<?php echo $data8[4]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q8value5" value="<?php echo $data8[5]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q8value6" value="<?php echo $data8[6]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q8value7" value="<?php echo $data8[7]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q8value8" value="<?php echo $data8[8]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q8value9" value="<?php echo $data8[9]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q8value10" value="<?php echo $data8[10]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q8value11" value="<?php echo $data8[11]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q8value12" value="<?php echo $data8[12]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q8remark" value="<?php echo $data8[13]; ?>"/></td>

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
          <td><input type="text" class="iptbox" name="q9value1" value="<?php echo $data9[1]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q9value2" value="<?php echo $data9[2]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q9value3" value="<?php echo $data9[3]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q9value4" value="<?php echo $data9[4]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q9value5" value="<?php echo $data9[5]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q9value6" value="<?php echo $data9[6]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q9value7" value="<?php echo $data9[7]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q9value8" value="<?php echo $data9[8]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q9value9" value="<?php echo $data9[9]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q9value10" value="<?php echo $data9[10]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q9value11" value="<?php echo $data9[11]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q9value12" value="<?php echo $data9[12]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q9remark" value="<?php echo $data9[13]; ?>"/></td>

        </tr>
        <tr>
          <td value = "q10">Numbers of contributions (comments/topics initiated)</td>
          <td><input type="text" class="iptbox" name="q10value1" value="<?php echo $data10[1]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q10value2" value="<?php echo $data10[2]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q10value3" value="<?php echo $data10[3]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q10value4" value="<?php echo $data10[4]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q10value5" value="<?php echo $data10[5]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q10value6" value="<?php echo $data10[6]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q10value7" value="<?php echo $data10[7]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q10value8" value="<?php echo $data10[8]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q10value9" value="<?php echo $data10[9]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q10value10" value="<?php echo $data10[10]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q10value11" value="<?php echo $data10[11]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q10value12" value="<?php echo $data10[12]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q10remark" value="<?php echo $data10[13]; ?>"/></td>

        </tr>
        <tr>
          <td value = "q11">Sharing of practice (uploads of materials)</td>
          <td><input type="text" class="iptbox" name="q11value1" value="<?php echo $data11[1]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q11value2" value="<?php echo $data11[2]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q11value3" value="<?php echo $data11[3]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q11value4" value="<?php echo $data11[4]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q11value5" value="<?php echo $data11[5]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q11value6" value="<?php echo $data11[6]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q11value7" value="<?php echo $data11[7]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q11value8" value="<?php echo $data11[8]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q11value9" value="<?php echo $data11[9]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q11value10" value="<?php echo $data11[10]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q11value11" value="<?php echo $data11[11]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q11value12" value="<?php echo $data11[12]; ?>"/></td>
          <td><input type="text" class="iptbox" name="q11remark" value="<?php echo $data11[13]; ?>"/></td>

        </tr>
      </table>
      <button type="submit" name="updatebtn" class="subbtn">Update</button>
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
