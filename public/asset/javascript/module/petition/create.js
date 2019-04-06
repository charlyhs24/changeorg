$(document).ready(function(){
// styling js
    $("#petisi_judul").tab('show');
    $("#step1").addClass("step-active")

    $("#btn-form-judul").click(()=>{
        console.log($("#judul").val())
    })
})