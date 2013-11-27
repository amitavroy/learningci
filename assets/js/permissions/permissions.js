$(document).ready(function() {
  /*role part*/
  $("#role-name-text").val(''); //reset the value on load.

  $("#role-name-text").keyup(function() {
    var roleName = $("#role-name-text").val();

    /*replace special characters with _. Taken from http://stackoverflow.com/questions/9705194/replace-special-characters-in-a-string-with*/
    roleName = sanitizeName(roleName);

    $("#role-machine-name").html(roleName);
  });

  /*permission part*/
  $("#permission-name-text").val(''); //reset the value on load.

  $("#permission-name-text").keyup(function() {
    var permissionName = $("#permission-name-text").val();

    /*replace special characters with _. Taken from http://stackoverflow.com/questions/9705194/replace-special-characters-in-a-string-with*/
    permissionName = sanitizeName(permissionName);

    $("#permission-machine-name").html(permissionName);
  });
});

function sanitizeName(name)
{
  name = name.replace(/[^a-zA-Z0-9]/g,'_').toLowerCase();
  return name;
}