<?php 

  $conn = mysqli_connect("localhost","root","","project2") ;
  $movies = $conn->query("SELECT * FROM movie_booking where '".date('Y-m-d')."' BETWEEN date(start_date) and date(end_date) order by rand() limit 10");
  
?>

     <link href="style.css" rel="stylesheet" />
                  <center><h3 class="text-primary">Now Showing</h3></center>

<div id="movie-carousel-field">

  <div class="list-prev list-nav">
    <a href="javascript:void(0)" class="text"><i class="fa fa-angle-left"></i></a>
  </div>
  <div class="list">
    <?php while($row=$movies->fetch_assoc()): ?>
        <div class="movie-item">
          <img class="" src="images/<?php echo $row['image']  ?>" alt="<?php echo $row['movie_name'] ?>" style="height: 200px; width: 200px;">
          <div class="mov-det">
            <button type="button" class="btn btn-primary" data-id="<?php echo $row['booking_id'] ?>">Reserve Seat</button>
          </div>
        </div>
    <?php endwhile; ?>
  </div>
   <div class="list-next list-nav">
    <a href="javascript:void(0)" class="text"><i class="fa fa-angle-right"></i></a>
  </div>
</div>

      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
  
  $('#movie-carousel-field .list-next').click(function(){
    $('#movie-carousel-field .list').animate({
    scrollLeft:$('#movie-carousel-field .list').scrollLeft() + ($('#movie-carousel-field .list').find('img').width() * 3)
   }, 'slow');
  })
  $('#movie-carousel-field .list-prev').click(function(){
    $('#movie-carousel-field .list').animate({
    scrollLeft:$('#movie-carousel-field .list').scrollLeft() - ($('#movie-carousel-field .list').find('img').width() * 3)
   }, 'slow');
  })
  $('.mov-det button').click(function(){
    location.replace('index.php?page=reserve&id='+$(this).attr('data-id'))
  })
  
</script>