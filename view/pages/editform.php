    <?php 
    //  session_start();
     
    //  $errorUser = '';
    //  if (isset($_POST['update'])) {
    //      $name = $_POST["name_user"];
         
    //      $gmail = $_POST["gmail"];
    //      $password = $_POST['password'];
    //      $img_user = $_POST["img_user"];
    //      $phone = $_POST["phone"];
    //      $adress= $_POST["adress"];
    //      $errorUser = $userC->checkUserclient($id_user,$name, $gmail, $password, $img_user, $phone, $address, $role);
    //       header('location:index.php?url=formclient&id_uesr=$_SESSION[`$id_user`]');
    //  }
    
            // if(isset($_POST['update'])){
            //     // laays du lieeu tu view:
                
                      
            //             $name_user = $_POST['name_user'];
            //             $gmail = $_POST['gmail'];
            //             $password = $_POST['password'];
            //             $phone = $_POST['phone'];
            //             $address = $_POST['address'];
            //             $img_user = $_FILES['img_user']['name'];
            //             $img_user_tmp = $_FILES['img_user']['tmp_name'];
            //             $img_src = upload($img_user_tmp);

            //             $updateuser->updateNewUser($id_user,$name, $gmail, $password, $img_user, $phone, $address, $role);
            //             header("location:index.php?url=formclient&id_user=$_SESSION[user]");
            //         }
                // truyen du lieu tu view sang model:
                // $db->UpdateData($id,$hoten,$namsinh,$quequan);
                // header('location:index.php?controller=thanhvien&action=list');
    
            
    ?>
    <div class="container">
        <form action="index.php?url=editform&act=editUser" method="post" enctype="multipart/form-data">
        <div class="col md-12">
            
            <h2>Thông tin</h2>
            <img src="<?=$_SESSION['user']['img_user']?>" class="rounded-circle m-2" style="object-fit:cover;" width="150rem" height="150rem" alt=""><span class="h2 "><?=$_SESSION['user']['name_user']?></span>
            <br>
            <p class=" btn btn-primary">
                <a href="index.php?url=formuser&id_user=$_SESSION['$id_user']" style="color: #fff;">Quay về</a>
            </p>
        </div>
        <div class="row  pt-2 align-items-center" style="font-size:1.4rem">
            <div class="col-md-10 d-flex flex-row border-1 border-top border-bottom  pt-2 align-items-center " >
                <div class="col-4 ">
                    <p >Username</p>
                </div>
                <div class="col-7  ">
                    <p class="w-100"> <input class="form-control w-bl-100" type="text" name="name_user" value="<?=$_SESSION['user']['name_user']?>"   placeholder="uesrename"
                            id=""></p>
                </div>
                
            </div>
            <div class="col-md-10 d-flex flex-row border-1 border-bottom  pt-2 align-items-center">
            
                <div class="col-4 ">
                    <p style="font-size: 1.2rem;">Email</p>
                </div>
                <div class="col-7  ">
                    <p class="w-100"> <input class="form-control w-100" type="text" name="gmail" value="<?=$_SESSION['user']['gmail']?>" placeholder="Email" id="gmail">
                    </p>
                </div>
             </div>
             <div class="col-md-10 d-flex flex-row border-1 border-bottom  pt-2 align-items-center">
            
                <div class="col-4 ">
                    <p style="font-size: 1.2rem;">Password</p>
                </div>
                <div class="col-7  ">
                    <p class="w-100"> <input class="form-control w-100"  type="text" name="password" value="<?=$_SESSION['user']['password']?>" placeholder="password" id="" required>
                    </p>
                </div>
             </div>
             <div class="col-md-10 d-flex flex-row border-1 border-bottom  pt-2 align-items-center">
            
                <div class="col-4 ">
                    <p >Image</p>
                </div>
                <div class="col-7  ">
                    <p class="w-100"> <input class="form-control w-100" style="object-fit:cover;" value="<?=$_SESSION['user']['img_user']?>" type="file" name="img_user" placeholder="imgae" id="img_user" required>
                    </p>
                </div>
             </div>
             <div class="col-md-10 d-flex flex-row border-1 border-bottom  pt-2 align-items-center">
            
                <div class="col-4 ">
                    <p >Phone</p>
                </div>
                <div class="col-7  ">
                    <p class="w-100"> <input class="form-control w-100"  value="<?=$_SESSION['user']['phone']?>" type="text" name="phone" placeholder="Phone" id="phone">
                    </p>
                </div>
             </div>
             <div class="col-md-10 d-flex flex-row border-1 border-bottom  pt-2 align-items-center">
            
                <div class="col-4 ">
                    <p >Adress</p>
                </div>
                <div class="col-7  ">
                    <p class="w-100"> <input class="form-control w-100" type="text" name="address"  value="<?=$_SESSION['user']['address']?>" placeholder="Address" id="address">
                    </p>
                </div>
             </div>
             <div class="col-md-10 ">
            
                <div class="col-12 d-flex justify-content-center">  
                    <button class="btn btn-danger px-4" type="submit" name="updateUser" style="font-size: 1.2rem;">cập nhật</button>
                </div>
                
             </div>
     
        </form>
        
    

        </div>
    </div>

