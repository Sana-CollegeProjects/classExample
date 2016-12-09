<?php
  if(isset($_POST['submit'])){
    //process the feedback form
    
    //put everything in variables
    $module = $_POST['module'];
    $semester = $_POST['semester'];
    $text = $_POST['text'];
    $rating = $_POST['rating'];
    
    //load the xml file
    $xml= simplexml_load_file("./data/feedbacks.xml") or die("ERROR: cannot load xml");
    
    //add the new feedback
    $feedback= $xml->addChild("feedback");
    $feedback->addChild('module', $module);
    $feedback->addChild('semester', $semester);
    $feedback->addChild('text', $text);
    $feedback->addChild('rating', $rating);
    
    //save the whole modified xml file
    $xml->asXML("./data/feedbacks.xml");
    
    echo"Thank you for your text, " .$text;
    
    //refer to another page
    header("Location: ../thankyou.html");
  }
?>