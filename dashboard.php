<?php
session_start();
$uname=$_SESSION['username'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
 
</head>
<body>
	<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
<style type="text/css">td{
  padding:2px;    
}
</style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <img src="images/logo2.png" width="20%" height="5%">
  
          <li class="nav-item active">
        <a class="nav-link" href="home.html">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="register.html">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.html">About Us</a>
      </li>

    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
      <a class="btn btn-success my-2 my-sm-2" href="login.php" role="button">Logout</a>
			
    </form>
  </div>
</nav>


		   <div>
			Logged in as <?php echo "$uname"; ?>
			
			
<table>
  <tr colspan="1">
<td>
  
<div class="card text-white bg-primary mb-3" style="max-width:50rem;">
  <div class="card-header">Resources</div>
  <div class="card-body">
    <h4 class="card-title">TextEditors </h4>
    <p class="card-text">Know what are the text Editors or IDE's Present .Before that know what is textEditor and IDE are:
<p>
What is the Difference between IDE and Text Editor?
Web development IDE does all the things simple text editors do plus a number of more advanced stuff that you can’t do with text editors.
<p> For instance, while an editor such as Sublime or Atom can be used as an HTML CSS JavaScript editor, they only allow you to write code. Of course, they come with a bunch of convenient features such as syntax highlighting, customizable interfaces, and extensive navigation tools, you will need additional features to make a functional app. <h4 style="color:white"><a href="#">Click here</a></h4> </p>
<p> For example, you will need a debugger and a compiler. However, with the best IDEs, you won’t have to worry about that. They often come with additional tools for automating, testing, and visualizing the development process. Basically, they equip you with everything you need to turn code into a functioning app or program.

</p>
</p>

    </p>
  </div>
</div>
</td>
  <td>
  <div class="card text-white bg-primary mb-3" style="max-width:50rem;">
  <div class="card-header">Basic Pillars</div>
  <div class="card-body">
    <h4 class="card-title">Everyone Need to Know this</h4>
    <p class="card-text">Javascript,HTML,CSS</p>
    <p>JavaScript is a lightweight, interpreted programming language. It is designed for creating network-centric applications. It is complimentary to and integrated with Java. JavaScript is very easy to implement because it is integrated with HTML. It is open and cross-platform.

   <p>Why to Learn Javascript</p><p>
Javascript is a MUST for students and working professionals to become a great Software Engineer specially when they are working in Web Development Domain. I will list down some of the key advantages of learning Javascript:</p>
<p>Javascript is the most popular programming language in the world and that makes it a programmer’s great choice. Once you learnt Javascript, it helps you developing great front-end as well as back-end softwares using different Javascript based frameworks like jQuery, Node.JS etc.</p>
Wanna know more..<a href="#">Click Here</a></p>
  </div>
</div>
</td>
</tr>
<tr>
    <td>
  <div class="card text-white bg-primary mb-3" style="max-width:50rem;">
  <div class="card-header"> FrameWorks for designing</div>
  <div class="card-body">
    <h4 class="card-title">Know  What is CSS before you learn CSS Frameworks</h4>
    <p class="card-text">Cascading Style Sheets, fondly referred to as CSS, is a simple design language intended to simplify the process of making web pages presentable.

CSS handles the look and feel part of a web page. Using CSS, you can control the color of the text, the style of fonts, the spacing between paragraphs, how columns are sized and laid out, what background images or colors are used, layout designs,variations in display for different devices and screen sizes as well as a variety of other effects.

CSS is easy to learn and understand but it provides powerful control over the presentation of an HTML document. Most commonly, CSS is combined with the markup languages HTML or XHTML.
<a href="#">Click here to know about them</a>
</p>
  </div>
</div>
</td>

<td>
<div class="card text-white bg-secondary mb-3" style="max-width:50rem;">
  <div class="card-header">Scripting Languages</div>
  <div class="card-body">
    <h4 class="card-title">Secondary card title</h4>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
</td>
</tr>
<tr>
<td>
  
<div class="card text-white bg-info mb-3" style="max-width:48rem;">
  <div class="card-header">Frameworks</div>
  <div class="card-body">
    <h4 class="card-title">Secondary card title</h4>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
</td>

</tr>

</table>



	
</body>
</html>
