/*To display the tooltip message on the website,following code will trigger that
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
});*/

jQuery(document).ready(function($) {
  /*Education award page - Displaying documents according to year */
  $('.collapseId').click(function(){
      //alert("INSIDE AJAXSCRIPTS");
      var docYear = $(this).attr("id");
      // This does the ajax request
      $.ajax({
          url: ajax_obj.ajaxurl, // or example_ajax_obj.ajaxurl if using on frontend
          data: {
              'action': 'my_action',
              'docYear' : docYear
          },
          success:function(data) {
              // This outputs the result of the ajax request
              $('#document-body').html(data);
              $('#yearCollapse').show();
            }
      });  
  });
  /*Education award page ends*/           
});
