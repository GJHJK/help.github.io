//var myVar = setInterval(LoadData, 2000);

http_request = new XMLHttpRequest();

Object.defineProperty(String.prototype, 'capitalize', {
  value: function () {
    return this.charAt(0).toUpperCase() + this.slice(1);
  },
  enumerable: false
});

function LoadData(sortOption) {
  $.ajax({
    url: "view.php",
    type: "get",
    data: {
      sortOption: sortOption,
    },
    dataType: "json",
    success: function (data) {
      $("#MyTable tbody").empty();
      for (var i = 0; i < data.length; i++) {
        var commentId = data[i].id;
        if (data[i].parent_id == 0 || data[i].parent_id == null) {
          var row = $(
            '<tr><td><img class="rounded-circle" src="' +
            (data[i].picture ? data[i].picture : 'avatar.jpg') +
            '" width="80px" height="80px" /></td><td colspan="2" width="100%"><b>' +
            data[i].username.capitalize() +
            " [" +
            data[i].date +
            ']:</b><p class="mt-3">' +
            data[i].post +
            '</p><a data-bs-toggle="modal" data-bs-target="#ReplyModal" data-id="' +
            commentId +
            '" title="Add this item" class="open-ReplyModal" href="#ReplyModal">Reply</a>' +
            "</td></tr>"
          );
          $("#record").append(row);
          for (var r = 0; r < data.length; r++) {
            if (data[r].parent_id == commentId) {
              var comments = $(
                '<tr><td>&nbsp;</td><td><img class="rounded-circle" src="' +
	            (data[r].picture ? data[r].picture : 'avatar.jpg') +
	            '" width="80px" height="80px" /></td><td width="100%"><b>' +
                data[r].username.capitalize() +
                " [" +
                data[r].date +
                ']:</b><p class="mt-3">' +
                data[r].post +
                "</p></td></tr>"
              );
              $("#record").append(comments);
            }
          }
        }
      }
    },
    error: function (jqXHR, textStatus, errorThrown) {
      alert("Error: " + textStatus + " - " + errorThrown);
    },
  });
}

$(document).on("click", ".open-ReplyModal", function () {
  var commentid = $(this).data("id");
  $(".modal-body #commentid").val(commentid);
});

function filter() {
  const ascending = $("#filtering").val().toLowerCase() === "oldpost";
  LoadData(ascending ? "ASC" : "DESC");
}

//Post data to the server
$(document).ready(function () {
  // onload
  filter();

  // onclick
  $("#basic-addon").on("click", filter);

  $("#butsave").on("click", function () {
    $("#butsave").attr("disabled", "disabled");
    var id = document.forms["frm"]["Pcommentid"].value;
    var msg = document.forms["frm"]["msg"].value;
    if (msg != "") {
      $.ajax({
        url: "save.php",
        type: "POST",
        data: {
          id: id,
          msg: msg,
        },
        cache: false,
        success: function (dataResult) {
          var dataResult = JSON.parse(dataResult);
          if (dataResult.statusCode == 200) {
            $("#butsave").removeAttr("disabled");
            document.forms["frm"]["Pcommentid"].value = "";
            document.forms["frm"]["msg"].value = "";
            filter();
          } else if (dataResult.statusCode == 201) {
            alert("Error occured !");
          }
        },
      });
    } else {
      alert("Please fill all the field !");
    }
  });
});

//Reply comment
$(document).ready(function () {
  $("#btnreply").on("click", function () {
    $("#btnreply").attr("disabled", "disabled");
    var id = document.forms["frm1"]["Rcommentid"].value;
    var msg = document.forms["frm1"]["Rmsg"].value;
    if (msg != "") {
      $.ajax({
        url: "save.php",
        type: "POST",
        data: {
          id: id,
          msg: msg,
        },
        cache: false,
        success: function (dataResult) {
          var dataResult = JSON.parse(dataResult);
          if (dataResult.statusCode == 200) {
            $("#btnreply").removeAttr("disabled");
            document.forms["frm1"]["Rcommentid"].value = "";
            document.forms["frm1"]["Rmsg"].value = "";
            filter();
            $("#ReplyModal").modal("hide");
          } else if (dataResult.statusCode == 201) {
            alert("Error occured !");
          }
        },
      });
    } else {
      alert("Please fill all the field !");
    }
  });
});
