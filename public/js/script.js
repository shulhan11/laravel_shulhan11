
$(document).ready(()=>{

    $(".deleteRecord").click(function(e){
    if(!confirm("Bener mau di Hapus")){
    return false;
    }

    e.preventDefault();
    const id = $(this).data("id");
    const token = $("meta[name='csrf-token']").attr("content");

    

    $.ajax(
    {
        url: "/rumahsakit/"+id,
        type: 'DELETE',
        data: {
            "id": id,
            "_token": token,
        },
        success: function (){
            alert('Data mu berhasil di hapus, silahkan refresh jika tidak terdelete');
        }
    });
   
});



// Pasien
    $(".deleteRecordd").click(function(e){
    if(!confirm("Bener mau di Hapus")){
    return false;
    }

    e.preventDefault();
    const id = $(this).data("id");
    const token = $("meta[name='csrf-token']").attr("content");

    

    $.ajax(
    {
        url: "/pasien/"+id,
        type: 'DELETE',
        data: {
            "id": id,
            "_token": token,
        },
        success: function (){
            alert('Data mu berhasil di hapus, silahkan refresh jika tidak terdelete');
        }
    });
   
});
    });