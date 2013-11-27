$(document).ready(function() {
  var labelSpan = $("#role-machine-name");

  $("#role-name").keyup(function() {
    var sanitizedString = sanitizeName($(this).val());
    $(labelSpan).html(sanitizedString);
  });
});

function sanitizeName(name)
{
  name = name.replace(/[^a-zA-Z0-9]/g,'_').toLowerCase();
  return name;
}