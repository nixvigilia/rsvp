function save() {
  const name = document.getElementById("q1").value;
  const email = document.getElementById("q2").value;
  const phone = document.getElementById("q3").value;
  const company = document.getElementById("q4").value;
  const address = document.getElementById("q5").value;
  const isAttending = document.getElementById("q6").value;
  // Returns successful data submission message when the entered information is stored in database.
  console.log(name);
  const formData = {};
  // $.ajax({
  //   type: "POST",
  //   url: "save.php",
  //   data: formData,
  //   cache: false,
  //   success: function (res) {
  //     console.log(res);
  //   },
  // });
  // return false;
}
