

<!--
# mahmoudhegazi.github.io
This is my first web app hosted using github pages .github.io
-->

<!-- you can use php with html but the file extension will be .php not .html -->

<!-- connect the server to the database in order to excute database query or search for something in the database
by the way if i copy the code in db.php and add it here it will work to without include
// we use include in order to use the same file in all or project fills using small line we need at least 6 files in good project -->
<?php include 'db.php'; ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Manipulating the DOM</title>
  <!-- Load Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Fira+Sans:900|Merriweather&display=swap" rel="stylesheet">  <!-- Load Styles -->
 <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <!-- HTML Follows BEM naming conventions 
  IDs are only used for sections to connect menu achors to sections -->
  <header class="page__header">
    <nav class="navbar__menu">
      <!-- Navigation starts as empty UL that will be populated with JS -->
      <ul id="navbar__list"></ul>
    </nav>
  </header>
  <main>
    <header class="main__hero">
      <h1>Landing Page </h1>
    </header>
    <!-- Each Section has an ID (used for the anchor) and 
    a data attribute that will populate the li node.
    Adding more sections will automatically populate nav.
    The first section is set to active class by default -->
    

	 

	   
	       <?php 
	  
    global $con;
    // get all recoreds in the database table  sections	  
    $query = "SELECT * FROM sections ";
    // excute the query on the database	
    $res = mysqli_query($con, $query);

   // use while/for to loop in the 
	  
	  //mysqli_fetch_assoc($res) it return all rows in associative array (kind of arrays) 
    while ($row = mysqli_fetch_assoc($res)) {
	    
	 // set new var section_id and assgin to it the first cell value in column id in the first row it will be 1  and so on until it print all recoreds returend
	 $section_id = $row['id'];
	    
	 // set new var section_title and assgin to  the first cell value in column title in the first row it will be Section 1
	 $section_title = $row['name'];
	    
	 // set new var section_ details and assgin to it the first cell value in column deatils in the first row it will be the post cotent or section content   
	 $section_deatlis = $row['details'];
        
    // I did not forget the end } but I leave it open in order to let while loop reapeate th html section below   
    // the while loop ($row = mysqli_fetch_assoc($res)) means after we excute the query result it return 
    // rows every row have data for 1 section , id , name, deatlis I added only 4 posts to database so the result
    // from my query will be 4 rows returned, so when $row reach row number 4 in the result associative array which is last recored
    // stop the while loop so we will copy that section 4 times each time have the same recored data cells  name, deatlis, id but with defirent values
    // The Dynamic Action here we then echo in our template section the     $section_title,  $section_deatlis 
    // and $section_id we added before it using concat [ . ] full stop = +  "We add section becuase u can use id = number in html atr"
    // result will be 4 sections each section get the data from the database, and each section has an id with the same order 123456 - 999999999
    // section1, section2, section3, section4	 and we close the while loop that must be happend or we will loop for ever 
	    
	    
	    
    
    ?>
    
	  <!-- print the section id next after section text id ++ -->
    <section id="<?php echo 'section' . $section_id . '"'; ?> data-nav="'Section' . <?php echo . $section_id . '"'; ?> class="your-active-class">
      <div class="landing__container">
	      <!-- echo used to print the returned title for each row -->
        <h2><?php echo $section_title ?></h2>
	      
	       <!-- print out the post deatils direct inside the html we get all data from thhe database-->
        <p><?php echo $section_deatlis; ?></p>
      </div>
    </section>
    
    
    <?php     
	    // another php line code to close the while loop
	    // php like javascript we use <script> // code</script> with php <?php //code ?>
         }
    
    ?>
				     
<!-- not we close loop before footer we don't need to get 4 footers we use loop in something gonna reapted -->
<!-- messages, friends, table, posts, gallery, todo tasks, notifications -->			     
  </main>
  <footer class="page__footer">
    <p>&copy Udacity</p>
  </footer>
  

  
<!-- connect our html code to the javascript in order to create dynamic nav bar detect sections count and create new li for each section -->
	
	<!-- replace this with your javascript file or paster your js code inside the file then do laragon steps -->
<script src="app.js"></script>


</body>
</html>
