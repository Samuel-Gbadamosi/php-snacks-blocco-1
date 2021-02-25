<?php


$Matches = [

     [
       "Teamhome" => "italy basket",
       "Teamaway" => "tunisia basket",
       "Pointshome" => "33",
       "Pointsaway" => "29"
     ],
     [
       "Teamhome" => "nigeria basket",
       "Teamaway" => "yugoslavia basket",
       "Pointshome" => "80",
       "Pointsaway" => "79"
     ],
     [
       "Teamhome" => "brescia basket",
       "Teamaway" => "sicily basket",
       "Pointshome" => "90",
       "Pointsaway" => "89"
     ],
     [
       "Teamhome" => "salermo basket",
       "Teamaway" => "paris basket",
       "Pointshome" => "90",
       "Pointsaway" => "50"
     ]

   ];
   // var_dump($Matches);
  // echo count($Matches);
   // $lengtharray = count($Matches);

 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <?php for ($i=0; $i < count($Matches); $i++){

       $Teamhome = $Matches[$i]['Teamhome'];
       $Teamaway = $Matches[$i]['Teamaway'];
       $Pointshome = $Matches[$i]['Pointshome'];
       $Pointsaway = $Matches[$i]['Pointsaway'];


         ?>
         <ul >
           <li><?php echo $Teamhome ?></li>
            <li><?php echo $Teamaway ?></li>
             <li><?php echo $Pointsaway ?></li>
             <li><?php echo $Pointshome ?></li>

         </ul>




       <?php } ?>


   </body>
 </html>
