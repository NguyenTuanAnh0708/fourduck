<div class="content-wrapper">
    <form class="form-group" action="index.php?url=category&act=add" method="POST" enctype="multipart/form-data">
        <section class="content">
            <div class="container-fluid">

                <table class="table table-collapse">
                    <div class="mb-3">
                        <label for="addcategory" class="form-label">Tên loại</label>
                        <input type="text" class="form-control" id="addcategory" name="category_name" placeholder="Thêm danh mục admin">
                    </div>
                    <div class="mb-3">
                        <label for="formFileMultiple" class="form-label">Ảnh loại sản phẩm</label>
                        <input class="form-control" type="file" name="file" id="formFileMultiple" multiple>
                    </div>
                </table>
            </div>
        </section>
        <div class="col-auto">
            <input type="submit" class="btn btn-primary mb-3" name="btnThem" value="Thêm">
        </div>
    </form>
</div>