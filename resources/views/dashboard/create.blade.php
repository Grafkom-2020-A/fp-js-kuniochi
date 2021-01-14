        <!-- Modal tambah tugas-->
        <div class="modal fade" id="tambahTugas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tugasBaru">Tugas Baru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/dashboard/create" method="POST">
                {{csrf_field()}}
                <div class="modal-body">
                    <div class="form-group mb-3">
                        <label for="taskName" class="form-label">Nama tugas</label>
                        <input name="task_name" type="text" class="form-control" id="taskName">
                    </div>
                    <div class="form-group mb-3">
                        <label for="taskInterval" class="form-label">Interval</label>
                        <input name="task_interval" type="text" class="form-control" id="taskInterval">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                    <button class="btn btn-primary" type="submit" value="submit">Simpan</button>
                </div>
            </form>
            </div>
        </div>
        </div>