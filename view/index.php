<html>
    <head>
        <title> Cooking blog </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-
    1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    </head>

    <body>
        <div class="col-md-10 col-md-offset-1">
        <div id="header">
            <h1 align="center"> Una Alconbury Cooking Blog </h1>
            <div id="search-form" align="left">

                <form method="POST" action="/post.php">
                    <input type="text" name="query" placeholder="Search">
                    <input type="submit" value="Search">
                </form>
            </div>
        </div>
    <a class="btn btn-default btn-default active" href="#" role="button">Salads</a>
    <a class="btn btn-default btn-default active" href="#" role="button">First Course</a>
    <a class="btn btn-default btn-default active" href="#" role="button">Second Course</a>
    <a class="btn btn-default btn-default active" href="#" role="button">Deserts</a>
    <a class="btn btn-default btn-default active" href="#" role="button">Drinks</a>
        
        <div id="content">   
            <?php foreach ($posts as $post) {?>
            <div class ="post">
                    <h1 class = "title" align="left"> <?php echo $post->get_title(); ?> </h1>
                    <p class = "text" align="left"> <?php echo $post->preview(); ?> </p>
					<p class = "text" align="left"> <?php echo $post->get_autor(); ?> </p>
                    <a class = "more-link" href= "<?php echo $post->get_link(); ?>" align="right">  Read more </a>
					<!--<a href="/show.php?title=<?php echo $post->get_title(); ?>">Read more</a>-->			
                        <p>
                            <br><button style="display: <?php echo $buttonDisplay; ?>" type="button" class="btn btn-default btn-default active">Edit</button>    
                        </p>  
                    <img src =<?php echo $post->get_image();?>>
            <?php }  ?>
                     
            </div>  
            <br>
                <div id="footer">
                     <p>Una & Co. 2016</p>
                </div>
            </div>
        </body>  
</html>


