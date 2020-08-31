<?php

/*
*  Copyright (c) 2019-2020 Barchampas Gerasimos <makindosxx@gmail.com>.
*  proxior is a wifi interception.
*
*  proxior is free software: you can redistribute it and/or modify
*  it under the terms of the GNU Affero General Public License as published by
*  the Free Software Foundation, either version 3 of the License, or
*  (at your option) any later version.
*
*  proxior is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU Affero General Public License for more details.
*
*  You should have received a copy of the GNU Affero General Public License
*  along with this program.  If not, see <http://www.gnu.org/licenses/>.
*
*/

session_start();

 if (!isset($_SESSION['login']))
    {
      header("Location: index.php");
      }


?>



<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

     <meta http-equiv="refresh" content="60" > 


    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title> DNS:: Data </title>

     <link rel="icon" type="image/jpg" href="logo.png" />

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


    <link rel="stylesheet" href="css/ui.css">

</head>

<body>

<!--
<img src='css/icons/dns2.png' height='50' width='100'>
-->

<?php

//ini_set('display_errors', '1');
//ini_set('display_startup_errors', '1');
//error_reporting(E_ALL);

error_reporting(0);


$title = "DNS::DATA";


     echo "<div align='center' style='background-color:#006666;'> 

            <font size='5'> 
             <a href='ui.php' id='a2'> <b> PROXIOR DNS::UI </b> </a> 
            </font>
             
             <br>
    
            <font size='5' color='grey'> $title </font> 

               <br>

                 <table>
                   <tr>
                  

                  <td>
                   <form action='/clear.php'>
                   <button type='submit' name='submit_clear' value='ok' id='sub'> Clear </button>
                   &nbsp; &nbsp; &nbsp; 
                  </form>
                 </td>


                <td>
                 <form action='' method='GET'>
                 <button type='submit' name='Save' value='ok' id='sub'> Save </button>
                 &nbsp; &nbsp; &nbsp; 
                 </form>
               </td> 


                <td>
                   <form action='/stored' target='_blank'>
                   <button type='submit' id='sub'> View all </button>
                   &nbsp; &nbsp; &nbsp; 
                  </form>
                 </td>



                <td>
                 <form action='logout.php'>
                 <button type='submit' name='submit_stored' id='sub'> Logout </button>
                 &nbsp; &nbsp; &nbsp; 
                 </form>
               </td> 


               </tr>
               </table>
              

          </div>";

    $handle = fopen("C:\\xampp\\htdocs\\proxior\\export\\data.txt", "r");

      $counter = 0;

      if ($handle) 
         {

        while (($line = fgets($handle)) !== false) 
         {

          $counter++;


     echo "<div class='outersec'>
           <div class='left-col'>
            <div class='inner'>

            <div class='header-div' style='word-wrap: break-word'>
              <p class='heading sc-sp-data-dis'>  $line </p>
            <div class='data'>
                       
                    </div>
                </div>

              
            </div>
        </div>


        <div class='right-col'>
            <div class='inner'>
                <ul>
                    <li>
                        <a href='' class='sc-sp-list'> DNS:: $counter </a>
                    </li>
                </ul>
            </div>
        </div>


    </div>";


   }


  fclose($handle); 
        } 



    if (isset($_GET['Save']))
       {

       $file_time = date("d_m_Y_H_i_s");

	
	   $file = "DNSDATA#$file_time.txt";


    copy("C:\\xampp\\htdocs\\proxior\\export\\data.txt", "C:\\xampp\\htdocs\\proxior\\stored\\$file");

         }


?>

    <script src="js/jquery.js"></script>
    <script src="js/script.js"></script>


</body>

</html>
