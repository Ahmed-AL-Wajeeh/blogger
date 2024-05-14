<?php
         include('connect.php');
         include('header.php');
         ///include('search.php');
        
        if($_SERVER["REQUEST_METHOD"]=="POST"){

          
         $title = $_POST['input-title'];
         $post = $_POST['input-post'];
         $send = $_POST['input-send'];
         if(!empty($title)&&!empty($post)){
           $query= "INSERT INTO articles(title,post) values('$title','$post') ";
           mysqli_query($conn,$query);
           echo " تم نشر المنشور بنجاح";

          } else{
            echo '<center>."الرجاء ملا جميع الحقول".</center>';
          }
            
          }
         
           
         ?>

          <!-- add-post-->
          <div class="article2">
          <div class="container">
              <h4>إضافةمنشور</h4>
              <form action="add-post.php" method="POST">
              <label>العنوان</label>
              <input type="text" placeholder="ادخل العنوان" name="input-title" required>
              <label>المنشور</label>
              <input type="text" placeholder="ادخل المنشور" name="input-post" required>
              <a > <button class="btn indigo" name="input-send" name="input-send">نشر</button></a>
              </form>
       
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

    
</body>
</html>

<?php  include('footer.php'); ?>
