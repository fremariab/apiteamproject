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
    dataType: JSON,
    success: (data, status) => {
      console.log(data, status);
    },
    error: (error) => {
      console.log(error);
    },
  });
});

// function sendRequest(data) {
//   // create xmlhttprequest object
//   const ajax = new XMLHttpRequest();

//   // create onload function (response is handled here)
//   ajax.onload = function () {
//     console.log(ajax.responseText);

//     if (ajax.status == 201) {
//       window.location.href = "get.php";
//     }
//   };

//   // open the request
//   ajax.open("POST", "insert.php");

//   // set headers
//   ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

//   // send the request
//   ajax.send(data); // depending on the method you will have to put something in the brackets
// }
