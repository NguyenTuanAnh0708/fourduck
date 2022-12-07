
    <div class="container">
        <div class="row ">
            <div class="col text-left my-2 mx-3">
             <h2> Thông tin</h2>
            <img src="<?=$_SESSION['user']['img_user']?>" class="rounded-circle m-2" width="150rem" height="150rem" alt=""><span class="h3"><?=$_SESSION['user']['name_user']?></span>
            <br>
             <p class=" btn btn-primary">
                <a href="index.php?url=editform"   style="color: #fff;">sữa</a>
             </p>
        </div> 
        <div class="row  pt-2" style="font-size: 1.3rem;">
            
                <div class="col-md-10 d-flex flex-row border-1 border-bottom  pt-2 align-items-center">
                    <div class="col-4 ">
                        <p>Username</p>
                    </div>
                    <div class="col-7  ">
                        <p class="font-weight-bold"><?=$_SESSION['user']['name_user']?></p>
                    </div>
                    

                </div>
                <div class="col-md-10 d-flex flex-row border-1 border-bottom  pt-2 align-items-center">
                    <div class="col-4 ">
                        <p>Email</p>
                    </div>
                    <div class="col-7">
                        <p><?=$_SESSION['user']['gmail']?></p>
                    </div>
                    

                </div>
                <div class="col-md-10 d-flex flex-row border-1 border-bottom  pt-2 align-items-center">
                    <div class="col-4 ">
                        <p>Password</p>
                    </div>
                    <div class="col-7">
                        <p><?=$_SESSION['user']['password']?></p>
                    </div>
                    

                </div>
                <div class="col-md-10 d-flex flex-row border-1 border-bottom  pt-2 align-items-center">
                    <div class="col-4 ">
                        <p>Image</p>
                    </div>
                    <div class="col-7">
                        <p> <img src="<?=$_SESSION['user']['img_user']?>" class="rounded-circle m-2" width="50rem" height="50rem" alt=""></p>
                    </div>
                    

                </div>
                <div class="col-md-10 d-flex flex-row border-1 border-bottom  pt-2 align-items-center">
                    <div class="col-4 ">
                        <p>Phone</p>
                    </div>
                    <div class="col-7">
                        <p><?=$_SESSION['user']['phone']?></p>
                    </div>
                    

                </div>
                <div class="col-md-10 d-flex flex-row border-1 border-bottom pt-2 align-items-center">
                    <div class="col-4 ">
                        <p>Adress</p>
                    </div>
                    <div class="col-7">
                        <p><?=$_SESSION['user']['address']?></p>
                    </div>
                    

                </div>
           
           
        </div>
    </div>
     </div> 
