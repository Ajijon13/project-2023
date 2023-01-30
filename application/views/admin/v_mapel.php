<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <button class="btn btn-success" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i>&nbsp;Tambah Data</button>
        </div>
        <div class="panel-body">
            <?php
            if ($this->session->flashdata('pesan')) {
                echo '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
                echo $this->session->flashdata('pesan');
                echo '</div>';
            }
            ?>
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Mata Pelajaran</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($mapel as $i => $value) { ?>

                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $value->nama_mapel; ?></td>
                                <td>
                                    <button class="btn btn-warning" data-toggle="modal" data-target="#edit<?= $value->id_mapel ?>"><i class="fa fa-pencil"></i>&nbsp;Edit</button>
                                    <a href="" class="btn btn-danger"><i class="fa fa-trash"></i>&nbsp;Hapus</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>



<!-- Modal tambah -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Tambah Data Mapel</h4>
            </div>
            <div class="modal-body">
                <?php echo form_open('mapel/tambah'); ?>
                <div class="form-group">
                    <label>Mata Pelajaran</label>
                    <input class="form-control" type="text" name="nama_mapel"  placeholder="Mata Pelajaran" required>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
                <? echo form_close(); ?>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
</div>
<!-- /.modal tambah-->




<!-- Modal tambah -->
<?php foreach ($mapel as $i => $value) { ?>
<div class="modal fade" id="edit<?= $value->id_mapel ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Edit Data Mapel</h4>
            </div>
            <div class="modal-body">
                <?php echo form_open('mapel/edit',$value->id_mapel); ?>
                <div class="form-group" >
                    <label>Mata Pelajaran</label>
                    <input class="form-control" type="text" name="nama_mapel" value="<?= $value->nama_mapel ?>" placeholder="Mata Pelajaran" required/>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
                <? echo form_close(); ?>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
</div>
<?php } ?>
<!-- /.modal tambah-->



