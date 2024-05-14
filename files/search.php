<?php
         include('connect.php');
         include('header.php');
         if($_SERVER["REQUEST_METHOD"]=="POST"){
            if(isset($_POST['search'])){
   $search= mysqli_real_escape_string ($conn,$_POST['search']);
   
   
               $query="SELECT id,title,post from  articles where title like'%$search%' or post like '%$search%' ";
               $result=mysqli_query($conn,$query);
               if(mysqli_num_rows($result)>0){
                    while($row=mysqli_fetch_assoc($result )){?>

                            <div class="article">
                                    <div class="container">
                                            <h5><a href="posts.php?id= <?php echo  $row['id']?> "> <?php echo  $row['title']?></a></h5>
                                            <p>
                                            <?php echo $row['post']; ?>
                                            </p>
                   
                                            <a href="posts.php?id= <?php echo $row['id']?> "><button > اقرأ اكثر </button></a>
                                    </div>
                   
                            </div>
                            <?php
            }
         }else{
            echo"لا توجد نتيجه";
         }
      }
     }
   
            
           
        
?>
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
     

    
</body>
</html>
<?php  include('footer.php'); ?>
