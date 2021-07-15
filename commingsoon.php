<html>
  <head>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  </head>

  <style>

    #status
    
      {
        width: 150px;
        height: 150px;
        position: absolute;
        left: 50%;
        top: 50%;
        background-image: url(status.gif);
        background-repeat: no-repeat;
        background-position: center;
        margin: -100px 0 0 -100px;
      }
      
    </style>
  
  <body>

      <div id="preloader">
        <div id="status"></div>
      </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script>
      $(document).ready(function()
      {
        $(window).on('load',function()
        {
            $('#status').fadeOut();
            $('#preloader').delay(350).fadeOut('slow');

        })
      });
    </script>

  </body>
</html>



