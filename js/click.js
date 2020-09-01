$(document).ready(function () {
    
  $(document).ready(function() {
    var toggle1 = $("#toggle1");
    var toggle2 = $("#toggle2");
    var toggle3 = $("#toggle3");
    var parrafo1 = $("#parrafo1");
    var parrafo2= $("#parrafo2");
    var parrafo3 = $("#parrafo3");
  
    toggle1.click(function() {
      parrafo1.toggle(1000);
    });

    toggle2.click(function() {
      parrafo2.toggle(1000);

    });
    toggle3.click(function() {
      parrafo3.toggle(1000);
    });
  
  });
  });