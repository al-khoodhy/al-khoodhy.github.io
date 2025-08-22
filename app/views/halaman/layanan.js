$(function(){
  $('#tblLayanan').DataTable();
  $('#btnTambah').on('click', function(){
    $('#layananForm')[0].reset();
    $('#id').val('');
    $('#aktif').prop('checked', true);
    $('#urutan').val('0');
  });
  $(document).on('click','.edit-row', function(){
    $('#id').val($(this).data('id'));
    $('#judul').val($(this).data('judul'));
    $('#deskripsi').val($(this).data('deskripsi'));
    $('#kontak').val($(this).data('kontak'));
    $('#urutan').val($(this).data('urutan'));
    $('#aktif').prop('checked', $(this).data('aktif') == 1);
    $('#formModal').modal('show');
  });
  $(document).on('submit','#layananForm', function(e){
    e.preventDefault();
    var form = $(this);
    var isEdit = $('#id').val() !== '';
    $.post(isEdit ? 'edit-layanan' : 'tambah-layanan', form.serialize(), function(res){
      alert(res.msg);
      if(res.result === 1){ location.reload(); }
    }, 'json');
  });
  $(document).on('click','.hapus-row', function(){
    if(!confirm('Hapus data ini?')) return;
    $.post('hapus-layanan', {id: $(this).data('id')}, function(res){
      alert(res.msg);
      if(res.result === 1){ location.reload(); }
    }, 'json');
  });
});


