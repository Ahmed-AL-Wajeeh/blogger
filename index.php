
         <?php
         include('files/connect.php');
         include('files/header.php');
        /// include('search.php');
         $query= 'SELECT * FROM articles';
         $result=mysqli_query($conn,$query);
         if(isset($result))
         {

         while($row=mysqli_fetch_assoc($result )){?>

         <div class="article">
                 <div class="container">
                         <h5><a href="files/posts.php?id= <?php echo $row['id']?> "> <?php echo $row['title']?></a></h5>
                         <p>
                         <?php echo $row['post'] ?>
                         </p>

                         <a href="files/posts.php?id= <?php echo $row['id']?> "><button > اقرأ اكثر </button></a>
                 </div>

         </div>
         <?php
         
         }
        }
         ?>
        <!--jquery-->
        <script src="js/jquery-3.6.0.min.map"> </script>
        <!--script src="js/jquery-3.6.0.slim.min.map"></script-->
        <!--JavaScript at end of body for optimized loading-->
        <script  src="js/materialize.min.js"></script>
        <!--script>
            document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems, options);
  });
        </script-->
        <script>
           $(document).ready(function(){
          $('.sidenav').sidenav();
       });
        </script>
     

    
</body>
</html>
<?php  include('files/footer.php'); ?>