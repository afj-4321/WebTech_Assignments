/* add code here */
document.addEventListener("DOMContentLoaded", function(){
    var thumbs = document.querySelectorAll("#thumbnails img");
    var fig = document.querySelector("figure");
    

    fig.addEventListener("mouseover", function(){
        var figCap = document.querySelector("figcaption");

        figCap.style.transition = "opacity 1s";
        figCap.style.setProperty("opacity", 0.8)
    });

    fig.addEventListener("mouseout", function(){
        var figCap = document.querySelector("figcaption");

        figCap.style.transition = "opacity 1s";
        figCap.style.setProperty("opacity", 0);
    });


    for (var i = 0; i < thumbs.length; i++) {
        thumbs[i].addEventListener("click", function(e) {
            var bigImage = document.querySelector("#featured img");
            var figCap = document.querySelector("figcaption");
            console.log(bigImage);
            if(e.target.getAttribute("title") == "Battle"){
                bigImage.setAttribute("src", "images/medium/5855774224.jpg");
                figCap.innerHTML = "Battle";
            }
            else if(e.target.getAttribute("title") == "Luneburg"){
                bigImage.setAttribute("src", "images/medium/5856697109.jpg");
                figCap.innerHTML = "Luneburg";
            }
            else if(e.target.getAttribute("title") == "Bermuda"){
                bigImage.setAttribute("src", "images/medium/6119130918.jpg");
                figCap.innerHTML = "Bermuda";
            }
            else if(e.target.getAttribute("title") == "Athens"){
                bigImage.setAttribute("src", "images/medium/8711645510.jpg");
                figCap.innerHTML = "Athens";
            }
            else if(e.target.getAttribute("title") == "Florence"){
                bigImage.setAttribute("src", "images/medium/9504449928.jpg");
                figCap.innerHTML = "Florence";
            }
        });
    }
});