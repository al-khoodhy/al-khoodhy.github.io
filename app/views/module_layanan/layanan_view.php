<?php
defined('BASEPATH') OR exit('No direct script access allowed'); ?>

          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Layanan Masyarakat </h3>
              <nav aria-label="breadcrumb">
                <button class="btn btn-primary" data-toggle="modal" data-target="#formModal" id="btnTambah">Tambah</button>
              </nav>
            </div>
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-bordered w-100" id="tblLayanan">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Urutan</th>
                            <th>Judul</th>
                            <th>Deskripsi</th>
                            <th>Kontak</th>
                            <th>Aktif</th>
                            <th>Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $i=1; foreach($data as $d): ?>
                          <tr>
                            <td><?= $i++; ?></td>
                            <td><?= (int)$d->urutan ?></td>
                            <td><?= htmlentities($d->judul) ?></td>
                            <td><?= htmlentities(teaser($d->deskripsi ?? '', 120)) ?></td>
                            <td><?= htmlentities($d->kontak ?? '') ?></td>
                            <td><?= $d->aktif ? 'Ya' : 'Tidak' ?></td>
                            <td>
                              <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <i class="mdi mdi-menu"></i>
                                </button>
                                <div class="dropdown-menu">
                                  <a class="dropdown-item edit-row" href="#" data-id="<?= $d->id ?>" data-judul="<?= htmlentities($d->judul) ?>" data-deskripsi='<?= htmlentities($d->deskripsi ?? '') ?>' data-kontak='<?= htmlentities($d->kontak ?? '') ?>' data-urutan='<?= (int)$d->urutan ?>' data-aktif='<?= (int)$d->aktif ?>'>Edit</a>
                                  <a class="dropdown-item hapus-row" href="#" data-id="<?= $d->id ?>">Hapus</a>
                                </div>
                              </div>
                            </td>
                          </tr>
                          <?php endforeach; ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

      <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content bg-dark text-white">
            <div class="modal-header">
              <h5 class="modal-title">Form Layanan</h5>
              <button class="close" type="button" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <div class="modal-body">
              <?= form_open('', 'method="post" id="layananForm" accept-charset="utf-8"');?>
                <input type="hidden" name="id" id="id">
                <div class="form-group">
                  <label>Judul *</label>
                  <input type="text" name="judul" id="judul" class="form-control" required>
                </div>
                <div class="form-group">
                  <label>Deskripsi</label>
                  <textarea name="deskripsi" id="deskripsi" rows="5" class="form-control"></textarea>
                </div>
                <div class="form-group">
                  <label>Kontak</label>
                  <input type="text" name="kontak" id="kontak" class="form-control">
                </div>
                <div class="form-group">
                  <label>Urutan *</label>
                  <input type="number" name="urutan" id="urutan" class="form-control" required value="0">
                </div>
                <div class="form-group">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input" name="aktif" id="aktif" value="1"> Aktif
                    </label>
                  </div>
                </div>
            </div>
            <div class="modal-footer">
              <button class="btn btn-secondary" data-dismiss="modal" type="button">Batal</button>
              <button class="btn btn-success" type="submit" id="submitBtn">Simpan</button>
              </form>
            </div>
          </div>
        </div>
      </div>


