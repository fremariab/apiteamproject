// $(document).ready(function () {});
$("#getusers").click(function () {
  console.log("hello");
  getRequest();
});

function getRequest() {
  // create xmlhttprequest object
  const ajax = new XMLHttpRequest();

  // create onload function (response is handled here)
  ajax.onload = function () {
    // convert to object
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("table_data").innerHTML = "";

      response = JSON.parse(this.responseText);

      let result = "";

      response.data.forEach((element) => {
        // console.log(element.pid);
        result += "<div>" + element.fullname + "</div>";
      });
      document.getElementById("table_data").innerHTML += result;
    }
  };

  // open the request
  ajax.open("GET", "fetch.php");

  //   // set headers
  //   ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

  // send the request
  ajax.send(); // depending on the method you will have to put something in the brackets
}
