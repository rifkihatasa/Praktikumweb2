<main>
    <div class="container-fluid">
        <h1 class="mt-4"></h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="<?php echo site_url('kategori') ?>">kategori</a></li>
            <li class="breadcrumb-item active"><?php echo $title ?></li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                <form action="<?php echo site_url('kategori/save') ?>" method="post">
                    <div class="mb-3">
                        <label for="name">NAME <code>*</code></label>
                        <input class="form-control" type="text" name="name" placeholder="NAME" required />
                    </div>
                    <div>
                        <button class="btn btn-primary" type="submit"><i class="fas fa-plus"></i> Save</button>
                    </div>
                    <div style="height: 100vh"></div>
                </form>
            </div>
        </div>
    </div>
</main>
