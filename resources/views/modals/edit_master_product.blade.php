<!-- Modal Tambah Kategori -->
<div class="modal fade" id="modalEditKategori" tabindex="-1" aria-labelledby="modalEditKategoriLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="{{ url('product/category/update') }}" method="POST" id="form-edit">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="modalEditKategoriLabel">Edit Kategori</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                </div>
                <div class="modal-body">
                    <div class="row mb-3">
                        <div class="col-lg-9 col-sm-12">
                            <div class="row">
                                    <label for="type" class="col-lg-3 col-form-label">Nama</label>
                                    <div class="col-lg-9">
                                        <input type="hidden" class="form-control" name="id_master_product" id="id_master_product" readonly>
                                        <input type="text" class="form-control required" name="nama_master_product_edit" id="nama_master_product_edit" placeholder="Nama" data-required="Nama Kategori" maxlength="100">
                                                </div>
                                                </div>
                        </div>
                        <div class="col-lg-3 col-sm-12">
                            <div class="form-check form-switch">
                            <input
                                class="form-check-input"
                                type="checkbox"
                                id="active"
                                name="active">
                            <label class="form-check-label" for="active">Aktif</label>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-primary" id="btn-edit">
                        <i class="bi bi-save me-2"></i> Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
