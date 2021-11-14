
        document.getElementById("forPass").addEventListener("click", function(){
            document.querySelector(".popup").style.display = "none";
            document.querySelector(".popup-2").style.display = "flex";
        })

        document.getElementById("xB-2").addEventListener("click", function(){
            document.querySelector(".popup-2").style.display = "none";
            document.querySelector(".popup").style.display = "flex";
        })

        document.getElementById("xB-1").addEventListener("click", function(){
            document.querySelector(".popup-1").style.display = "none";
            document.querySelector(".popup").style.display = "flex";
        })

        document.getElementById("farmer").addEventListener("click", function(){
            document.querySelector(".popup").style.display = "flex";
            document.querySelector(".popup-1").style.display = "none";
            document.querySelector(".popup-2").style.display = "none";
        })

        document.getElementById("personnel").addEventListener("click", function(){
            document.querySelector(".popup").style.display = "flex";
            document.querySelector(".popup-1").style.display = "none";
            document.querySelector(".popup-2").style.display = "none";
        })

        document.getElementById("closeB").addEventListener("click", function(){
            document.querySelector(".popup").style.display = "none";
        })
