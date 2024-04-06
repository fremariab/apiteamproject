/*form.js */
$("#submit").click(function (event) {
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
      window.location.href = "get.php";
    },
    error: (error) => {
      console.log(error);
    },
  });
});
