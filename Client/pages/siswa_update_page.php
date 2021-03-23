
<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Update Siswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="Back()">
            <span aria-hidden="true">x</span>
        </button>
    </div>
    <div class="modal-body">
        <form action="" method="post" class="form-horizontal">
            <div class="form-group">
                <label for="catId" class="col-sm-2 control-label">Id</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="txtId" value="" >
                </div>
            </div>
            <div class="form-group">
                <label for="catId" class="col-sm-2 control-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control"  name="txtName" value="">
                </div>
            </div>
            <div class="modal-footer">
                <input name="btnSubmit" type="submit" class="btn btn-primary">
                <input type="reset" class="btn btn-default">
            </div>
            <script>
                function Back() {
                    window.history.back();
                }
            </script>
        </form>
    </div>
</div>
