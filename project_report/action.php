<?php

require "page.php";

if(isset($_POST['submit'])){


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
$school_id = $_GET['school_code'];
$year = $_GET['year_select'];




$sql1 ="INSERT INTO rag_question(question_id,year,school_id,jan, feb, mar, apr, may, jun, jul, aug,sep,oct,nov,dece,remark) VALUES
('q1',$year,$school_id,'$value1','$value2','$value3','$value4','$value5','$value6','$value7','$value8','$value9','$value10','$value11',
 '$value12','$remark')";

//echo "$sql1";
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





$sql2 ="INSERT INTO rag_question(question_id, year, school_id, jan, feb, mar, apr, may, jun, jul, aug, sep, oct, nov, dece, remark) VALUES
('q2',$year,$school_id,'$q2value1','$q2value2','$q2value3','$q2value4','$q2value5','$q2value6','$q2value7','$q2value8','$q2value9',
 '$q2value10','$q2value11','$q2value12','$q2remark')";
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





$sql3 ="INSERT INTO rag_question(question_id, year, school_id, jan, feb, mar, apr, may, jun, jul, aug, sep, oct, nov, dece, remark) VALUES
('q3',$year,$school_id,'$q3value1','$q3value2','$q3value3','$q3value4','$q3value5','$q3value6','$q3value7','$q3value8','$q3value9',
 '$q3value10','$q3value11','$q3value12','$q3remark')";
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





$sql4 ="INSERT INTO rag_question(question_id, year, school_id, jan, feb, mar, apr, may, jun, jul, aug, sep, oct, nov, dece, remark) VALUES
('q4',$year,$school_id,'$q4value1','$q4value2','$q4value3','$q4value4','$q4value5','$q4value6','$q4value7','$q4value8','$q4value9',
 '$q4value10','$q4value11','$q4value12','$q4remark')";
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





$sql5 ="INSERT INTO rag_question(question_id, year, school_id, jan, feb, mar, apr, may, jun, jul, aug, sep, oct, nov, dece, remark) VALUES
('q5',$year,$school_id,'$q5value1','$q5value2','$q5value3','$q5value4','$q5value5','$q5value6','$q5value7','$q5value8','$q5value9',
 '$q5value10','$q5value11','$q5value12','$q5remark')";
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





$sql6 ="INSERT INTO rag_question(question_id, year, school_id, jan, feb, mar, apr, may, jun, jul, aug, sep, oct, nov, dece, remark) VALUES
('q6',$year,$school_id,'$q6value1','$q6value2','$q6value3','$q6value4','$q6value5','$q6value6','$q6value7','$q6value8','$q6value9',
 '$q6value10','$q6value11','$q6value12','$q6remark')";
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





$sql7 ="INSERT INTO rag_question(question_id, year, school_id, jan, feb, mar, apr, may, jun, jul, aug, sep, oct, nov, dece, remark) VALUES
('q7',$year,$school_id,'$q7value1','$q7value2','$q7value3','$q7value4','$q7value5','$q7value6','$q7value7','$q7value8','$q7value9',
 '$q7value10','$q7value11','$q7value12','$q7remark')";
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





$sql8 ="INSERT INTO rag_question(question_id, year, school_id, jan, feb, mar, apr, may, jun, jul, aug, sep, oct, nov, dece, remark) VALUES
('q8',$year,$school_id,'$q8value1','$q8value2','$q8value3','$q8value4','$q8value5','$q8value6','$q8value7','$q8value8','$q8value9',
 '$q8value10','$q8value11','$q8value12','$q8remark')";
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





$sql9 ="INSERT INTO rag_question(question_id, year, school_id, jan, feb, mar, apr, may, jun, jul, aug, sep, oct, nov, dece, remark) VALUES
('q9',$year,$school_id,'$q9value1','$q9value2','$q9value3','$q9value4','$q9value5','$q9value6','$q9value7','$q9value8','$q9value9',
 '$q9value10','$q9value11','$q9value12','$q9remark')";
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





$sql10 ="INSERT INTO rag_question(question_id, year, school_id, jan, feb, mar, apr, may, jun, jul, aug, sep, oct, nov, dece, remark) VALUES
('q10',$year,$school_id,'$q10value1','$q10value2','$q10value3','$q10value4','$q10value5','$q10value6','$q10value7','$q10value8',
 '$q10value9','$q10value10','$q10value11','$q10value12','$q10remark')";
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





$sql11 ="INSERT INTO rag_question(question_id, year, school_id, jan, feb, mar, apr, may, jun, jul, aug, sep, oct, nov, dece, remark) VALUES
('q11',$year,$school_id,'$q11value1','$q11value2','$q11value3','$q11value4','$q11value5','$q11value6','$q11value7','$q11value8',
 '$q11value9','$q11value10','$q11value11','$q11value12','$q11remark')";
$test11 = mysqli_query($connect,$sql11);


//header("Location:action.php?&school_code=$school_id&year_select=$year");
//exit;
}

?>
