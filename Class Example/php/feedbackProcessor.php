<?php
  if(isset($_POST['submit'])){
    //process the feedback form
    
    //put everything in variables
    $text=$_POST['text'];
    
    //load the xml file
    $xml= simplexml_load_file("./data/feedbacks.xml") or die("ERROR: cannot load xml");
    
    //add the new feedback
    $feedback= $xml->addChild("feedback");
    $feedback->addChild('text', $text);
    
    //save the whole modified xml file
    $xml->asXML("./data/feedbacks.xml");
    
    echo"Thank you for your text, " .$text;
    
    //refer to another page
    header("Location: ../thankyou.html");
  }
?>