// alert("hi")



// document.addEventListener("DOMContentLoaded", () => {
//     // let maths_stats = document.getElementById("dp_maths_stats");
//     // alert(maths_stats.innerHTML)
//     alert(3)
// })

// $(document).ready(function(){
//   alert(4)
//     $("#dp_maths_stats").click(function(){
//       $.post("http://localhost/Eceo/admin/notes_upload.php",
//       {
//         dp_name: "Department of Maths and Statistics",
//         city: "Duckburg"
//       },
//       function(data,status){
//         alert("Data: " + data + "\nStatus: " + status);
//         $("#hey").html("Hey")
//         window.location.assign("http://localhost/Eceo/admin/notes_upload.php")
//       });
    
//     })  
//   });

$(document).ready(function(){
    $("#dp_maths_stats").submit(function(){
      // alert(6)

    //   var e = document.getElementById("tech");
    // var result = e.options[e.selectedIndex].value;
    // alert(result);
      $.post("http://localhost/Eceo/admin/notes_upload.php",
      {
        dp_name: "Hiiii",
        city: "Duckburg"
      },
      function(data,status){
        // alert("Data: " + data + "\nStatus: " + status);
        // $("#hey").html("hey")
        window.location.assign("http://localhost/Eceo/admin/notes_upload.php")
      });
    
    })  
  });
