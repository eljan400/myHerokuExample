
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>My Heroku</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="css/styles.css" />

    </head>

    <body>
        <div class="assignment">
          <h1>heroku</h1>
                   <h3>Play List 2</h3>
                   <large>Requirements</large>
                   <ul>
                    <li>Part 1:

                    Make a copy of your Vue playlist.  Refactor it to utilize 2 components.  One component for the song, and a second component that will contain a number of song components (You could name this component playlist or songlist perhaps?)</li>

                     

                    <li>Part 2: 

                    Add some functionality to your playlist app:

                    - Add the ability to remove individual songs. 

                    - Add the ability to mark songs as 'Favorites'.

                    - Utilize the v-on and the v-bind directive to highlight your favorite songs using a CSS class.  </li>
                   </ul>
                       
                   <div>

            <h2>My song List</h2>

            
              <div id="app" class="container">

                <playlist> </playlist>    

            </div>


           
        <script src="node_modules/vue/dist/vue.js"></script>
        <script src="js/app.js"></script>

    </body>
</html>