<main>
    <div class="container-fluid">
        <h1 class="mt-4"></h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="<?php echo site_url('kategori') ?>">kategori</a></li>
            <li class="breadcrumb-item active"><?php echo $title ?></li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <a href="<?php echo site_url('kategori/add') ?>"><i class="fas fa-plus"></i> Add New</a>
            </div>
            <?php if ($this->session->flashdata('success')): ?>
                <div class="alert alert-success" role="alert">
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
            <?php endif; ?>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="tabelkelas" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Name</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            $no = 1;
                            if (isset($kategori) && is_array($kategori)) {
                                foreach ($kategori as $item) {
                        ?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $item->name; ?></td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <a href="<?php echo base_url('kategori/getedit/' . $item->id); ?>" class="btn btn-sm btn-info me-1"><i class="fas fa-edit"></i> Edit</a>
                                        <a href="<?php echo base_url('kategori/delete/' . $item->id); ?>" class="btn btn-sm btn-danger ms-1" onclick="return confirm('Ingin menghapus data user ini?');">
                                            <i class="fas fa-trash"></i> Hapus
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        <?php
                                    $no++;
                                }
                            } else {
                                echo '<tr><td colspan="3">No data available</td></tr>';
                            }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div style="height: 100vh"></div>
    </div>
</main>
