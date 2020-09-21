  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>User view</title>
  </head>
  <body>
      
    <h1>
        <?php
        
            
         foreach($results as $object )
            echo $welcome ;
            echo $object->password;
        
        ?>
    </h1>

  </body>
  </html>