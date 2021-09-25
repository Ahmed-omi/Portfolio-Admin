

function stickyMenu(){
  var sticky = document.getElementById('sticky');
  if(window.pageYOFFset > 220){
    sticky.classList.add('sticky');
  }
  else{
    sticky.classList.remove('sticky');
  }
}
window.onscroll = function(){
  stickyMenu();
}






   var Push  = document.getElementById("btnpush");
    var html = document.getElementById("html");
      var css = document.getElementById("css");
        var javascript = document.getElementById("javascript");
          var bootstrap1 = document.getElementById("bootstrap");
           var php = document.getElementById("php");
            var symfony = document.getElementById("symfony");
             var cms = document.getElementById("cms");

    document.getElementById("btnHtml").addEventListener("click", function(){


        html.style.display="block";
        css.style.display="none";
        javascript.style.display="none";
        bootstrap1.style.display="none";
        php.style.display="none";
        symfony.style.display="none";
        cms.style.display="none";

    })


 document.getElementById("btnCss").addEventListener("click", function(){


   html.style.display="none";
   css.style.display="block";
   javascript.style.display="none";
   bootstrap1.style.display="none";
   php.style.display="none";
   symfony.style.display="none";
   cms.style.display="none";
} )

 document.getElementById("btnJavascript").addEventListener("click", function(){


   html.style.display="none";
   css.style.display="none";
   javascript.style.display="block";
   bootstrap1.style.display="none";
   php.style.display="none";
   symfony.style.display="none";
   cms.style.display="none";
} )

 document.getElementById("btnBootstrap1").addEventListener("click", function(){


   html.style.display="none";
   css.style.display="none";
   javascript.style.display="none";
   bootstrap1.style.display="block";
   php.style.display="none";
   symfony.style.display="none";
   cms.style.display="none";
} )

document.getElementById("btnPhp").addEventListener("click", function(){


  html.style.display="none";
  css.style.display="none";
  javascript.style.display="none";
  bootstrap1.style.display="none";
  php.style.display="block";
  symfony.style.display="none";
  cms.style.display="none";
} )

document.getElementById("btnSymfony").addEventListener("click", function(){


  html.style.display="none";
  css.style.display="none";
  javascript.style.display="none";
  bootstrap1.style.display="none";
  php.style.display="none";
  symfony.style.display="block";
  cms.style.display="none";
} )

document.getElementById("btnCms").addEventListener("click", function(){


  html.style.display="none";
  css.style.display="none";
  javascript.style.display="none";
  bootstrap1.style.display="none";
  php.style.display="none";
  symfony.style.display="none";
  cms.style.display="block";
} )



document.getElementById("btnpush").addEventListener("click", function(){


  html.style.display="block";
  css.style.display="block";
  javascript.style.display="block";
  bootstrap1.style.display="block";
  php.style.display="block";
  symfony.style.display="block";
  cms.style.display="block";
} )
