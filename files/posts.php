
         <?php
         include('connect.php');
         include('header.php');
         //include('search.php');
         
         $id=$_GET['id'];
         $query= 'SELECT * FROM articles where id='.$id;
        $result=mysqli_query($conn,$query);

         $row = mysqli_fetch_assoc($result)
         //$result=mysqli_query($conn,$query);
   ?>
            <div class="article">
                 <div class="container">
                         <h5> <?php echo $row['title']?></h5>
                         <p>
                         <?php echo $row['post'] ?>
                         </p>

                 </div>

         </div>
        <!--jquery-->
        <script src="js/jquery-3.6.0.min.map"> </script>
        <!--script src="js/jquery-3.6.0.slim.min.map"></script-->
        <!--JavaScript at end of body for optimized loading-->
        <script  src="js/materialize.min.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems, options);
  });
        </script>
        <script>
           $(document).ready(function(){
          $('.sidenav').sidenav();
       });
        </script>
          <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br><b></b><b></b>
          <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br><b></b><b></b>


    
</body>
</html>
<?php  include('footer.php'); ?>