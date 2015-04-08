(function ($) {

Drupal.behaviors.hosting_platform_pathauto = function(context) {

  // Export form machine-readable JS
  // Adapted from feeds_ui.admin.inc
  $('.platform-name:not(.hosting-platform-pathauto-processed)').each(function() {
    $(this)
      .addClass('hosting-platform-pathauto-processed')
      .after(' <small class="platform-path-suffix">&nbsp;</small>');
      var path = Drupal.hosting_platform_pathauto.sanitize_path($('.platform-name').val(), Drupal.settings.hosting_platform_pathauto.base_path);
      if ($('.platform-path').val() === path || path == Drupal.settings.hosting_platform_pathauto.base_path) {
        // JS will not be attached if the path has been manually edited
        $('.platform-path').parents('.form-item').hide();
        $('.platform-name').bind('keyup change', function() {
          // On keyup, generate the new path and fill in the platform-path field
          var path = Drupal.hosting_platform_pathauto.sanitize_path($(this).val(), Drupal.settings.hosting_platform_pathauto.base_path);
          $('.platform-path').val(path);
          if (path !== '') {
            $('.platform-path-suffix').empty().append(' Path: ' + path + ' [').append($('<a href="#">'+ Drupal.t('Edit') +'</a>').click(function() {
              $('.platform-path').parents('.form-item').show();
              $('.platform-path-suffix').hide();
              $('.platform-name').unbind('keyup');
              return false;
            })).append(']');
          } else {
            $('.platform-path-suffix').text('');
          }
        });
        $('.platform-name').keyup();
      }
  });

};

Drupal.hosting_platform_pathauto = Drupal.hosting_platform_pathauto || {};

// Contains the regex that turns the human-readable name into a valid path
Drupal.hosting_platform_pathauto.sanitize_path = function(human, base_path) {
  var path = human.toLowerCase().replace(/[^\w\.]/g, '-');
  if (path !== '_' && path !== '-') {
    path = base_path + path;
  }
  return path;
}

})(jQuery);
