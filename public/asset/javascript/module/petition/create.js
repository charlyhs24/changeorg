
$(document).ready(function(){
// styling js
// $.ajax({
//     url: `petitionController/testdata`,
//     context: document.body
//   }).done(tweet => {
//     console.log(tweet)
//   });
    $("#petisi_judul").tab('show');
    $("#step1").addClass("step-active")
    $("#btn-form-judul").click(()=>{
        $("#step1").removeClass("step-active")
        $("#step2").addClass("step-active")
        let judul = $("#judul").val()
        $("#btn-form-kepada").click(()=> {
            $("#step2").removeClass("step-active")
            $("#step3").addClass("step-active")
            let kepada = $("#kepada").val()
            $("#btn-form-isi").click(()=> {
                $("#step3").removeClass("step-active")
                $("#step4").addClass("step-active")
                let isi = $("#isi").val()
                $('#form-submit').on('submit', function(e){
                    let data = new FormData(this);
                    data.append('judul',judul)
                    data.append('kepada',kepada)
                    data.append('isi',isi)
                    e.preventDefault(); 
                         $.ajax({
                             url:'petitionController/uploadImage',
                             type:"post",
                             data: data,
                             processData:false,
                             contentType:false,
                             cache:false,
                             async:false,
                              success: function(data){
                                // window.location.href = "petitionController/show";
                           }
                         });
                })
            })
        })
    })

})