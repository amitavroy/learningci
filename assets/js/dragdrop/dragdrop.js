$(document).ready(function(){
  // setting dropable
  $( "#droppable" ).droppable({
    accept: '.mydragable',
    drop: function( event, ui ) {
      $( this ).addClass( "ui-state-highlight" );
    }
  });

  // populating the blog posts.
  $.ajax({
    url: base_url + "dragdrop/get_titles",
    async: false,
    type: "GET",
    dataType: "html",
    success: function(data) {
      $('#blog-posts').html(data);
      $(".mydragable").draggable({
        helper: "clone",
        scroll: false,
      });
      $(".mydragable").sortable();
    }
  });

  /*dropable events and bindings*/
  $( "#droppable" ).on( "drop", function( event, ui ) {
    $("#droppable").append (ui.draggable);
  });

  $("#click-btn").live('click', function() {
    var hiddenField = [];
    $("#droppable .mydragable").each(function() {
      var productName = $(this).data('product-code');
      var thisPrd = {
        'id' : $(this).data('product-code'),
        'name' : $(this).data('product-name'),
      }
      hiddenField.push(thisPrd);
    });

    if (hiddenField.length == 0) {
      return false;
    }
    else {
      var jsonString = JSON.stringify(hiddenField);
      console.log(jsonString);
      $("#checkpost").val(jsonString);
      $("#target").submit();
      // return false;
    }
  });

  $("#droppable").on('click', '.mydragable span', function() {
    var blogPost = $(this).parent().remove();
    $("#blog-posts").append($(blogPost));
    $(".mydragable").draggable();
    $(".mydragable").sortable();
  });

  /*dragable events and bindings*/
  $("body").on('dragstop', '.mydragable', function(event, ui) {
    $(this).attr('style','');
  });
})