<div class="container">
    <form action="index.php?url=editform&act=editUser" method="post" enctype="multipart/form-data">
        <div class="col md-12">

            <h2>Thông tin</h2>
            <img src="<?= $_SESSION['user']['img_user'] ?>" class="rounded-circle m-2" style="object-fit:cover;" width="150rem" height="150rem" alt=""><span class="h2 "><?= $_SESSION['user']['name_user'] ?></span>
            <br>
            <p class=" btn btn-primary">
                <a href="index.php?url=formuser&id_user=$_SESSION['$id_user']" style="color: #fff;">Quay về</a>
            </p>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">User name</label>
            <input class="form-control w-bl-100" type="text" name="name_user" value="<?= $_SESSION['user']['name_user'] ?>" placeholder="uesrename" id="">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Email</label>
            <input class="form-control w-bl-100" type="email" name="gmail" value="<?= $_SESSION['user']['gmail'] ?>" placeholder="Email" id="gmail">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input class="form-control w-bl-100" type="text" name="password" value="<?= $_SESSION['user']['password'] ?>" placeholder="password" id="" required>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Image</label>
            <input class="form-control w-bl-100" style="object-fit:cover;" value="<?= $_SESSION['user']['img_user'] ?>" type="file" name="img_user" placeholder="imgae" id="img_user" required>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Phone</label>
            <input class="form-control w-bl-100" value="<?= $_SESSION['user']['phone'] ?>" type="text" name="phone" placeholder="Phone" id="phone">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Address</label>
            <input class="form-control w-bl-100" type="text" name="address" value="<?= $_SESSION['user']['address'] ?>" placeholder="Address" id="address">
        </div>
        <div class="col-12 d-flex justify-content-center">
            <button class="btn btn-danger px-4" type="submit" name="updateUser" style="font-size: 1.2rem;">cập nhật</button>
        </div>
    </form>
</div>