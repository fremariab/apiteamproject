// $(document).ready(function () {});

$("#submit").click(function (event) {
  //var formData = "name=" + $("#fullname").val() + "&email=" + $("#email").val();
  //sendRequest(formData);
  event.preventDefault();

  $.ajax({
    url: "insert.php",
    method: "post",
    data: JSON.stringify({
      name: $("#fullname").val(),
      email: $("#email").val(),
    }),
    dataType: "json",
    success: (data, status) => {
      console.log(data, status);
    },
    error: (error) => {
      console.log(error);
    },
  });
});
