 /* $(document)
    .ready(function() {
      $('.ui.menu .ui.dropdown').dropdown({
        on: 'hover'
      });
      $('.ui.menu a.item')
        .on('click', function() {
          $(this)
            .addClass('active')
            .siblings()
            .removeClass('active')
          ;
        })
      ;
    })
  ;
    $(function(){      
    $('.ui.modal').modal('attach events', '#modalbtn', 'show');
  });
  */

  $(document).ready(function(){
    $('#table_id').DataTable();
});

  function verify(){
    var x;
    if (confirm("Are you sure you want to disable this room?") == true) {
        return true;
    } else {
        return false;
    }
  }




  