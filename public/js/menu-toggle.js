    $(document).ready(function(){
      const toggle = $("#toggle-menu")
      const closeBtn = $("#close");
      toggle.on("click", function(){
        $("#navbar").css("left", "0")
      })
      closeBtn.on("click", function(){
        $("#navbar").css("left", "100%")
      })
    })