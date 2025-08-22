$(function(){
  $('#tblPengumuman').DataTable();
  $('#btnTambah').on('click', function(){
    $('#pengumumanForm')[0].reset();
    $('#id').val('');
    $('#dipublikasikan').prop('checked', true);
  });
  $(document).on('click','.edit-row', function(){
    $('#id').val($(this).data('id'));
    $('#judul').val($(this).data('judul'));
    $('#isi').val($(this).data('isi'));
    $('#tanggal').val($(this).data('tanggal'));
    $('#dipublikasikan').prop('checked', $(this).data('publik') == 1);
    $('#formModal').modal('show');
  });
  $(document).on('submit','#pengumumanForm', function(e){
    e.preventDefault();
    var form = $(this);
    var isEdit = $('#id').val() !== '';
    $.post(isEdit ? 'edit-pengumuman' : 'tambah-pengumuman', form.serialize(), function(res){
      alert(res.msg);
      if(res.result === 1){ location.reload(); }
    }, 'json');
  });
  $(document).on('click','.hapus-row', function(){
    if(!confirm('Hapus data ini?')) return;
    $.post('hapus-pengumuman', {id: $(this).data('id')}, function(res){
      alert(res.msg);
      if(res.result === 1){ location.reload(); }
    }, 'json');
  });
});


