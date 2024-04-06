$("#getusers").click(function () {
  $.ajax({
    url: "./fetch.php",
    method: "get",
    dataType: "JSON",
    success: function (data) {
      console.log(data);
      response = data;

      let result = "";

      response.data.forEach((element) => {
        // console.log(element.pid);
        result += "<div>" + element.fullname + "</div>";
      });
      document.getElementById("table_data").innerHTML += result;
    },
    error: (error) => {
      console.log(error);
    },
  });
});
