<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Data Email Masuk</h3>
        </div>
        <div class="card-body">
            <?php if (!empty(session()->getFlashdata('message'))) : ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?php echo session()->getFlashdata('message'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>
            <!--
                <a href="#" class="btn btn-primary">Tambah</a>
                <hr />
            -->
            <table class="table table-bordered">
                <tr>
                    <th>No</th>
                    <th>Subject</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Ponsel</th>
                    <th>Pesan</th>
                    <th>Dibuat</th>
                </tr>
                <?php
                $no = 1;
                foreach ($mails as $key => $row) {
                ?>
                    <tr>
                        <td><?php echo $key + 1; ?></td>
                        <td><?php echo $row['subject']; ?></td>
                        <td><?php echo $row['from']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['phone']; ?></td>
                        <td><?php echo $row['message']; ?></td>
                        <td><?php echo $row['created_at']; ?></td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection('content'); ?>