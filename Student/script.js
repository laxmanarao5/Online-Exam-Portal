function myFunction(){
    var element = document.getElementById("taketest");
    function openFullScreen(){
        if(element.requestFullscreen){
            element.requestFullscreen();
        }else if(element.webkitRequestFullscreen){
            element.webkitRequestFullscreen();
        }else if(element.msRequestFullscreen){
            element.msRequestFullscreen();
        }else if(element.mozRequestFullscreen){
            element.mozRequestFullscreen();
        }
    }
}