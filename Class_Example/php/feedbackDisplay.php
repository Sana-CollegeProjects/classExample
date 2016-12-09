<!DOCTYPE html>

<html lang="en">
  <head>
    <title>Feedback Box</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="../bootstrap/js/bootstrap.min.js"></script>
  </head>

  <body>
   
    
       <div class="jumbotron text-center">
  <h1>Feedback Box</h1>
         <a href=""><img src="../Images/feedback.gif" class="img-fluid" alt="FeedbackBox" width=250></a>
  <p>Resize this responsive page to see the effect!</p> 
</div>
  
  <div class="container">
    <h2>
      Feedback Display
    </h2>
      
    <div class="panel panel-default"> 
    <table class="table">
    <thead>
    <tr> 
    <th>#</th>
    <th>Module</th>
    <th>Semester</th>
    <th>Text</th>
    <th>Rating</th>
    </tr>
    </thead> 
    <tbody>
      <?php
        $xml= simplexml_load_file("./data/feedbacks.xml") or die("ERROR: cannot load xml");
        $n=1;
        foreach($xml->children() as $feedback){
           echo"<tr>";
           echo"<th scope=\"row\">" .$n. "</th>";
          foreach($feedback->children() as $child){
            echo"<td>" .$child. "</td>";
          }
            echo"</tr>";
            $n++;
          
        }
      ?>
    </tbody> 
    </table> 
    </div>
    
    </div>
    
  </body>
  
</html>

