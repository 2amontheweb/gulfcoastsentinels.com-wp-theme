/* globals $: false */
/* jshint strict: false */

$(function () {


  /*
    READ MORE LINK ON SENTINEL SUMMARY
  */
  $('#page-home .sentinels .sentinel .summary p').hide();
  $('#page-home .sentinels .sentinel .summary p:nth-child(2)').show().append(' <a name="read-more" class="read-more-link">Click here to read more...</a>');

  $('#page-home .sentinels .sentinel .summary p .read-more-link').on('click', function() {
    $(this).closest('.summary').find('p').show();
    $(this).hide();
  });

});
