$(document).ready(function(){
  $('#softadmin-loader').fadeOut();
  $('.readmore').readmore({
    lessLink: '<a href="#" class="readm-link">Read Less</a>',
    moreLink: '<a href="#" class="readm-link">Read More</a>',
  });
});

$(function() {
  $(".hamburger").click(function() {
    $(".app-container").toggleClass("expanded");
    $(this).toggleClass("is-active");
    if ($(this).hasClass("is-active")) {
      $.cookie("expandedMenu", 1);
    } else {
      $.cookie("expandedMenu", 0);
    }
  });
});

$(function() {
  return $('select.select2').select2();
});

$(function() {
  return $('.toggle-checkbox').bootstrapSwitch({
    size: "small"
  });
});

$(function() {
  return $('.match-height').matchHeight();
});

$(function() {
  return $('.datatable').DataTable({
    "dom": '<"top"fl<"clear">>rt<"bottom"ip<"clear">>'
  });
});

$(function() {
  return $(".side-menu .nav .dropdown").on('show.bs.collapse', function() {
    return $(".side-menu .nav .dropdown .collapse").collapse('hide');
  });
});

$(document).ready(function () {
  // Toggle Collapse
  $(document).on('click', '.panel-heading a.panel-action[data-toggle="panel-collapse"]', function(e){
    e.preventDefault();
    var $this = $(this);
    if(!$this.hasClass('panel-collapsed')) {
      $this.parents('.panel').find('.panel-body').slideUp();
      $this.addClass('panel-collapsed');
      $this.removeClass('softadmin-angle-down').addClass('softadmin-angle-up');
    } else {
      $this.parents('.panel').find('.panel-body').slideDown();
      $this.removeClass('panel-collapsed');
      $this.removeClass('softadmin-angle-up').addClass('softadmin-angle-down');
    }
  });

  //Toggle fullscreen
  $(document).on('click', '.panel-heading a.panel-action[data-toggle="panel-fullscreen"]', function (e) {
    e.preventDefault();
    var $this = $(this);
    if (!$this.hasClass('softadmin-resize-full')) {
      $this.removeClass('softadmin-resize-small').addClass('softadmin-resize-full');
    } else {
      $this.removeClass('softadmin-resize-full').addClass('softadmin-resize-small');
    }
    $this.closest('.panel').toggleClass('is-fullscreen');
  });
});
