
<form method="post">
    <div class="row">
        <div class="form-group col-sm-4">
            <label class="label label-primary" for="id">ID</label>
            <input type="text" class="form-control" id="id" name="txtId" required>

            <label class="label label-primary" for="name">Name</label>
            <input type="text" class="form-control" id="name" name="txtName" required>

            <br>
            <input type="submit" name="btnSubmit" class="btn btn-secondary btn-lg btn-block">
        </div>
        <div class="col-sm-8">
            <table id="myTable" class="display">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>name</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($siswas as $siswa) {
                    echo '<tr>';
                    echo '<td>' . $siswa->id . '</td>';
                    echo '<td>' . $siswa->nama . '</td>';
                    echo '<td><button class="btn btn-outline-warning" onclick="updateValueSiswa(\'' . $siswa->id . '\')">Update</button>
                    <button class="btn btn-outline-danger" onclick="deleteValueSiswa(\'' . $siswa->id . '\')">Delete</button></td>';

                    echo '</tr>';
                }
                $link = null;
                ?>
        </div>
    </div>
</form>
