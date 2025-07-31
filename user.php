<?php

     

     if($_POST){
          
     }

     // $user=factoryClass :: makeObject("user");
     // $allUser=user :: select() ->where("age" , 24 ,">") ->limit(1 , 2) ->  get();
     $allUser = user:: all();

     $uriRouter=$_SERVER["REQUEST_URI"];
     $uriArr = explode("/", $uriRouter);
     $numRows = $allUser -> num_rows;
     if($uriArr[count($uriArr) -2] =="page"){
          $allUser = user ::select() -> pageInit($uriArr[4]) -> get();
          
          for($i = 0; $i < $numRows/5;$i++){
?>


 <a href="http://localhost/router/user/page/<?=$i+1;?>">
               <button ><?=$i+1 ; ?></button>
          </a>

<?php
            }

     }

     if($_POST){
          
          $allUser = user:: sort($_POST);
          
     }

     foreach($allUser  as $rowUser){
          // $x = $rowUser->fetch_assoc();
          
     
?>


          <div style="width:800px;height:72px;background-color:yellow;margin-top:10px;margin-left:250px;">
               <div style="width:100px;height:50px;background-color:aqua;margin-top:10px;float:left;margin-left:20px;">
                    <spaan><?=$rowUser['name'];?></spaan>
               </div>
               <div style="width:100px;height:50px;background-color:aqua;margin-top:10px;float:left;margin-left:20px;">
                    <span><?=$rowUser['family'];?></span>
               </div>
               <div style="width:100px;height:50px;background-color:aqua;margin-top:10px;float:left;margin-left:20px;">
                    <span><?=$rowUser['age'];?></span>
               </div>
               <div style="width:100px;height:50px;background-color:aqua;margin-top:10px;float:left;margin-left:20px;">
                    <span><?=$rowUser['userpassword'];?></span>
               </div>


               <a href="http://localhost/router/editUser/<?=$rowUser['id'];?>">
                         <div style="width:72px;height:50px;background-color:green;margin-top:10px;float:left;margin-left:20px;">
                              <span>edite</span>
                         </div>
               </a>

               <a href="http://localhost/router/deletUser/<?=$rowUser['id'];?>">
                         <div style="width:72px;height:50px;background-color:red;margin-top:10px;float:left;margin-left:20px;">
                              <span>delet</span>
                         </div>
               </a>

               <a href="http://localhost/router/showUser/<?=$rowUser['id'];?>">
                         <div style="width:72px;height:50px;background-color:gray;margin-top:10px;float:left;margin-left:20px;">
                              <span>show</span>
                         </div>
               </a>
               
          </div>

<?php
     }
?>

          




<br><br>
<form action="/router/user" method="POST">
     <input type="text" name ="az" placeHolder ="شروع محدودیت نمایش از">
     <input type="text" name ="ta" placeHolder=" نمایش تا">
     <button>فیلتر نمایش</button>
</form>