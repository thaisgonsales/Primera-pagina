var stars = document.querySelectorAll(".star-icon");


document.addEventListener("click", function(e){
    var classStar = e.target.classList;
    if (e.target.matches('.star-icon')) {
        if(!classStar.contains("ativo")){
            stars.forEach(function(star){
                star.classList.remove("ativo");
            });
        }



        classStar.add("ativo");
        console.log(e.target.getAttribute("data-evaluacion"));
        alert("Gracias por su evaluación");
    }
});
