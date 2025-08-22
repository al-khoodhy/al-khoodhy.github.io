<?php
defined('BASEPATH') OR exit('No direct script access allowed'); ?>

          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Pengumuman </h3>
              <nav aria-label="breadcrumb">
                <button class="btn btn-primary" data-toggle="modal" data-target="#formModal" id="btnTambah">Tambah</button>
              </nav>
            </div>
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-bordered w-100" id="tblPengumuman">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Tanggal</th>
                            <th>Judul</th>
                            <th>Isi</th>
                            <th>Publik</th>
                            <th>Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $i=1; foreach($data as $d): ?>
                          <tr>
                            <td><?= $i++; ?></td>
                            <td><?= indonesian_date($d->tanggal) ?></td>
                            <td><?= htmlentities($d->judul) ?></td>
                            <td><?= htmlentities(teaser($d->isi, 120)) ?></td>
                            <td><?= $d->dipublikasikan ? 'Ya' : 'Tidak' ?></td>
                            <td>
                              <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <i class="mdi mdi-menu"></i>
                                </button>
                                <div class="dropdown-menu">
                                  <a class="dropdown-item edit-row" href="#" data-id="<?= $d->id ?>" data-judul="<?= htmlentities($d->judul) ?>" data-isi='<?= htmlentities($d->isi) ?>' data-tanggal="<?= $d->tanggal ?>" data-publik="<?= $d->dipublikasikan ?>">Edit</a>
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
              <h5 class="modal-title">Form Pengumuman</h5>
              <button class="close" type="button" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <div class="modal-body">
              <?= form_open('', 'method="post" id="pengumumanForm" accept-charset="utf-8"');?>
                <input type="hidden" name="id" id="id">
                <div class="form-group">
                  <label>Judul *</label>
                  <input type="text" name="judul" id="judul" class="form-control" required>
                </div>
                <div class="form-group">
                  <label>Tanggal *</label>
                  <input type="date" name="tanggal" id="tanggal" class="form-control" required>
                </div>
                <div class="form-group">
                  <label>Isi *</label>
                  <textarea name="isi" id="isi" rows="6" class="form-control" required></textarea>
                </div>
                <div class="form-group">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input" name="dipublikasikan" id="dipublikasikan" value="1"> Publikasikan
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


